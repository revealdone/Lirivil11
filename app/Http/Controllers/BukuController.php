<?php
namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        Buku::create($request->all());
        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $id)
    {
        $buku = Buku::findOrFail($id);
        $buku->update($request->all());
        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Buku::destroy($id);
        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus.');
    }

    public function pinjaman()
{
    // Ambil data peminjaman dari database
    
    $transaksi1 = Buku::where('judul', 'pinjaman')->get();

    // Kirim data ke view
    return view('report.pinjaman', ['buku' => $transaksi1]);
}
}
