<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\Target;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonasiController extends Controller
{
    /**
     * Menampilkan form pembayaran donasi.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function showPaymentForm($id)
    {
        $target = Target::findOrFail($id);
        return view('user.donateComponent.paymentForm', compact('target'));
    }

    public function submitPaymentConfirm(Request $request, $id)
    {
        // Validasi input dari form pembayaran
        $request->validate([
            'jumlah' => 'required|numeric|min:1',
            'payment_method' => 'required|string',
            'notes' => 'nullable|string|max:255',
        ]);

        // Cari target donasi berdasarkan ID
        $target = Target::findOrFail($id);

        // Kirim data ke view konfirmasi pembayaran
        return view('user.donateComponent.confirmPayment', [
            'target' => $target,
            'jumlah' => $request->input('jumlah'),
            'payment_method' => $request->input('payment_method'),
            'notes' => $request->input('notes'),
        ]);
    }

    /**
     * Menyimpan donasi ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitDonation(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'jumlah' => 'required|numeric|min:1',
            'payment_method' => 'required|string', // Tipe pembayaran (misalnya 'mandiri', 'bri', dll.)
            'notes' => 'nullable|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Bukti transfer
        ]);

        // Simpan donasi ke database
        $donasi = Donasi::create([
            'user_id' => Auth::id(), // ID pengguna yang login
            'jumlah' => $request->input('jumlah'),
            'notes' => $request->input('notes'),
            'gambar' => $request->file('gambar')->store('proofs', 'public'), // Simpan gambar ke folder 'proofs'
            'program_id' => $id,
            'tipe_pembayaran' => $request->input('payment_method'),
            'status' => 'waiting_confirmation', // Status default adalah waiting_confirmation
            'waktu_donasi' => now(),
        ]);

        return redirect()->route('donateDetails', $id)
            ->with('success', 'Donasi berhasil dikirim. Menunggu konfirmasi admin.');
    }

}
