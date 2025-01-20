<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;


class TransaksiController extends Controller
{

// public function peminjaman()
// {
//     // Ambil data peminjaman dari database
//     $transaksi = Transaksi::with('buku', 'siswa')->get();

//     return view('transaksi.peminjaman', compact('transaksi'));
// }

public function pinjaman()
{
    // Ambil data peminjaman dari database
    // $transaksi = Transaksi::with('buku', 'siswa')->get();

    $transaksi = Transaksi::with('buku', 'siswa')->get();


    // Kirim data ke view
    return view('report.pinjaman', compact('transaksi'));
}

// public function pengembalian()
// {
//     // Ambil data pengembalian dari database
//     $transaksi = Transaksi::where('jenis', 'pengembalian')->get();

//     // Kirim data ke view
//     return view('transaksi.pengembalian', ['transaksi' => $transaksi]);
// }

}
