<?php
namespace App\Http\Controllers;

use App\Models\Transaksi; // Pastikan model sudah diimpor
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    
    public function index()
    {
        
        // $transaksi1 = Transaksi::where('buku_id', 'pinjaman')->get();

        // // Kirim data ke view
        // return view('report.pinjaman', ['transaksi1' => $transaksi1]);
        // Ambil semua data transaksi beserta relasinya
        $transaksi = Transaksi::with('buku', 'siswa')->get();

        // Kirim data ke view
        

        return view('report.pinjaman', compact('transaksi'));
    }
}
