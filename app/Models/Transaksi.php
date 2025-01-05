<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksis';
    protected $fillable = ['buku_id', 'siswa_id', 'tanggal_pinjam', 'tanggal_kembali'];

    public function buku()
    {
        return $this->belongsTo(Buku::class);
        return $this->belongsTo(Buku::class, 'buku_id');
        
    }

    // Relasi ke model Siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }
}
