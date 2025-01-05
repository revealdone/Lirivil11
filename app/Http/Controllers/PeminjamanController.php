<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\Siswa;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {   
        // $transaksi = Transaksi::with('buku', 'siswa')->get();
        $peminjaman = Peminjaman::with(['buku', 'siswa'])->get();
        return view('transaksi.peminjaman', compact('peminjaman'));
    }

    public function peminjaman()
{
    $peminjaman = Peminjaman::with(['buku', 'siswa'])->get();
    return view('transaksi.peminjaman', compact('peminjaman'));
}

    public function pengembalian()
{
    $peminjaman = Peminjaman::with(['buku', 'siswa'])->get();
    return view('transaksi.pengembalian', compact('peminjaman'));
}


    public function create()
    {
        $buku = Buku::all();
        $siswa = Siswa::all();
        return view('transaksi.create', compact('buku', 'siswa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'buku_id' => 'required|exists:bukus,id',
            'siswa_id' => 'required|exists:siswas,id',
            'tanggal_pinjam' => 'required|date',
        ]);

        Peminjaman::create($request->all());

        $peminjaman = Peminjaman::with(['buku', 'siswa'])->get();

        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil ditambahkan.')->with('peminjaman', $peminjaman);
    }

    public function edit($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $buku = Buku::all();
        $siswa = Siswa::all();
        return view('transaksi.edit', compact('peminjaman', 'buku', 'siswa'));
    }

    public function edit1($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $buku = Buku::all();
        $siswa = Siswa::all();
        return view('transaksi.edit1', compact('peminjaman', 'buku', 'siswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'buku_id' => 'required|exists:bukus,id',
            'siswa_id' => 'required|exists:siswas,id',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'nullable|date',
        ]);

        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update($request->all());

        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Peminjaman::destroy($id);
        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil dihapus.');
    }
}
