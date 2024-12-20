<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory;

    // Tentukan nama tabel secara eksplisit
    protected $table = 'donasi';

    protected $fillable = [
        'user_id',
        'jumlah',
        'notes',
        'gambar',
        'program_id',
        'tipe_pembayaran',
        'status',
        'waktu_donasi',
    ];

    protected $casts = [
        'waktu_donasi' => 'datetime',
    ];

    // Relasi ke user yang memberikan donasi
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function relasiTarget()
    {
        return $this->hasMany(RelasiTarget::class, 'id_donasi');
    }
}
