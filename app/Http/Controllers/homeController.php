<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        
        return view('home');
    }

    public function getChartData()
    {
        // Ambil jumlah peminjaman berdasarkan kategori
        $jumlahSiswa = DB::table('siswas')->count();

        // Ambil jumlah peminjam (distinct siswa_id yang ada dalam tabel transaksi)
        $jumlahPeminjam = DB::table('transaksis')
            ->distinct('siswa_id')
            ->count('siswa_id');

        // Ambil jumlah buku
        $jumlahBuku = DB::table('bukus')->count();

        // Gabungkan data
        $data = [
            'siswa' => $jumlahSiswa,
            'peminjam' => $jumlahPeminjam,
            'buku' => $jumlahBuku,
        ];

        return response()->json($data);
    }
    
}
