<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Target; // Model untuk tabel target
use App\Models\Donasi; // Model untuk tabel donasi
use App\Models\Volunteer;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class AdminProgramController extends Controller
{
    /**
     * Display a listing of the programs.
     */

        public function dashboard(){
        // Ambil data yang diperlukan untuk dashboard
        $users = User::all();
        $volunteers = Volunteer::all();
        $payments = Donasi::where('status', 'waiting_confirmation')->get();
    
        // Data Donasi Per Bulan - hanya yang sudah terkonfirmasi
        $donasiPerBulan = Donasi::selectRaw('YEAR(waktu_donasi) as tahun, MONTH(waktu_donasi) as bulan, AVG(jumlah) as rata_rata')
            ->where('status', 'confirmed') // Filter donasi yang sudah terkonfirmasi
            ->groupBy('tahun', 'bulan')
            ->orderBy('tahun', 'desc')
            ->orderBy('bulan', 'asc')
            ->get()
            ->map(function ($item) {
                $item->bulan = Carbon::createFromDate(null, $item->bulan, 1)->translatedFormat('F'); // Nama bulan
                return $item;
            });
    
        // Ambil program dengan donasi total yang sudah terkonfirmasi
        $programs = Target::withSum(['donasi' => function ($query) {
            $query->where('status', 'confirmed'); // Filter hanya donasi yang terkonfirmasi
        }], 'jumlah')->get(); // Ambil data program dan jumlah donasi
    
        $today = now();
    
        // Map program dan set status
        $programs = $programs->map(function ($program) use ($today) {
            if ($program->donasi_sum_jumlah >= $program->jumlah_target) {
                // Jika total donasi sudah mencapai atau melebihi target, status adalah "complete"
                $program->status = 'complete';
            } elseif ($today->lt($program->tgl_mulai)) {
                // Jika tanggal sekarang kurang dari tanggal mulai, status adalah "upcoming"
                $program->status = 'upcoming';
            } elseif ($program->tgl_selesai && $today->gt($program->tgl_selesai)) {
                // Jika sudah melewati tanggal selesai, status adalah "closed"
                $program->status = 'closed';
            } else {
                // Jika program sedang berjalan
                $program->status = 'ongoing';
            }
            return $program;
        });
    
        // Ambil data untuk statistik, hanya donasi yang sudah terkonfirmasi
        $historyDonasi = Donasi::where('status', 'confirmed') // Filter donasi yang terkonfirmasi
            ->orderBy('waktu_donasi', 'desc')
            ->take(5)
            ->get();
    
        // Total user yang terdaftar
        $totalUser = User::where('role', 'user')->count();
    
        // Total donasi yang sudah terkonfirmasi
        $totalDonasi = Donasi::where('status', 'confirmed')->sum('jumlah');
    
        // Total donasi bulanan yang sudah terkonfirmasi
        $totalDonasiBulanan = Donasi::where('status', 'confirmed') // Filter donasi yang terkonfirmasi
            ->whereMonth('waktu_donasi', now()->month)
            ->whereYear('waktu_donasi', now()->year)
            ->sum('jumlah');
    
        // Jumlah program yang ada
        $programCount = Target::count();
    
        // Kirimkan data ke view
        return view('admin.programs.dashboard', compact('payments', 'volunteers', 'users', 'programs', 'programCount', 'totalDonasi', 'totalUser', 'historyDonasi', 'donasiPerBulan', 'totalDonasiBulanan'));
    }  

    public function index(Request $request)
    {
        // Ambil input pencarian dan filter
        $search = $request->query('search');
        $statusFilter = $request->query('status');

        // Hitung total program
        $programCount = Target::count();

        // Query program dengan pencarian dan filter status
        $programsQuery = Target::withSum(['donasi' => function ($query) {
            $query->where('status', 'confirmed'); // Filter hanya yang sudah terkonfirmasi
        }], 'jumlah');

        if ($search) {
            $programsQuery->where('namaprogram', 'LIKE', "%{$search}%");
        }

        $programs = $programsQuery->get();

        // Hitung status untuk setiap program
        $today = now();
        $programs = $programs->map(function ($program) use ($today) {
            if ($program->donasi_sum_jumlah >= $program->jumlah_target) {
                $program->status = 'complete';
            } elseif ($today->lt($program->tgl_mulai) || ($program->tgl_selesai && $today->gt($program->tgl_selesai))) {
                $program->status = 'closed';
            } else {
                $program->status = 'ongoing';
            }
            return $program;
        });

        // Terapkan filter status jika ada
        if ($statusFilter) {
            $programs = $programs->where('status', $statusFilter);
        }

        // Hitung jumlah program berdasarkan status
        $completedCount = $programs->where('status', 'complete')->count();
        $ongoingCount = $programs->where('status', 'ongoing')->count();
        $closedCount = $programs->where('status', 'closed')->count();

        return view('admin.programs.index', compact('programs', 'programCount', 'completedCount', 'ongoingCount', 'closedCount'));
    }


    /**
     * Show the form for creating a new program.
     */
    public function create()    
    {
        return view('admin.programs.create');
    }

    /**
     * Store a newly created program in the database.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'namaprogram' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'jumlah_target' => 'nullable|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'nullable|date|after_or_equal:tgl_mulai',
        ]);

        // Ambil semua data input
        $data = $request->all();

        // Cek jika ada file gambar yang diupload
        if ($request->hasFile('gambar')) {
            // Simpan gambar ke folder storage/app/public/program-images dan dapatkan path-nya
            $data['gambar'] = $request->file('gambar')->store('program-images', 'public');
        }

        // Simpan program baru ke database
        Target::create($data);

        return redirect()->route('admin.programs.index')->with('success', 'Program berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified program.
     */
    public function edit($id)
    {
        $program = Target::findOrFail($id);
        return view('admin.programs.edit', compact('program'));
    }

    /**
     * Update the specified program in the database.
     */
    public function update(Request $request, $id)
    {
        // Cari program yang akan diupdate
        $program = Target::findOrFail($id);

        // Validasi input
        $request->validate([
            'namaprogram' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'jumlah_target' => 'nullable|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'nullable|date|after_or_equal:tgl_mulai',
        ]);

        // Ambil semua data input
        $data = $request->all();

        // Cek jika ada file gambar yang diupload
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($program->gambar) {
                Storage::disk('public')->delete($program->gambar);
            }

            // Simpan gambar baru ke folder storage/app/public/program-images
            $data['gambar'] = $request->file('gambar')->store('program-images', 'public');
        }

        // Update data program
        $program->update($data);

        return redirect()->route('admin.programs.index')->with('success', 'Program berhasil diperbarui.');
    }

    /**
     * Remove the specified program from the database.
     */
    public function destroy($id)
    {
        // Cari program yang akan dihapus
        $program = Target::findOrFail($id);

        // Hapus gambar jika ada
        if ($program->gambar) {
            Storage::disk('public')->delete($program->gambar);
        }

        // Hapus program dari database
        $program->delete();

        return redirect()->route('admin.programs.index')->with('success', 'Program berhasil dihapus.');
    }
}
