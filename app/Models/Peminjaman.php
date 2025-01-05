<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'transaksis'; // Sesuaikan nama tabel

    protected $fillable = [
        'buku_id',
        'siswa_id',
        'tanggal_pinjam',
        'tanggal_kembali',
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
        return $this->hasMany(Transaksi::class, 'buku_id');
        
    }   

    public function buku()
    {
        return $this->belongsTo(Buku::class);
        return $this->belongsTo(Buku::class, 'buku_id');
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }
}
