<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'bukus';
    protected $fillable = ['judul', 'penulis', 'penerbit', 'tahun_terbit'];
    
    
    
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
        return $this->hasMany(Transaksi::class, 'buku_id');
        
    }   

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }

}
