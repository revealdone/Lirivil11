@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Peminjaman Buku</h1>
    <a href="{{ route('peminjaman.create') }}" class="btn btn-primary mb-3">Tambah Peminjaman</a>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Buku</th>
                <th>Siswa</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peminjaman as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->buku->id ?? 'Buku tidak ditemukan' }}</td>
                <td>{{ $item->siswa->nama ?? 'Siswa tidak ditemukan' }}</td>
                <td>{{ $item->tanggal_pinjam }}</td>
                <td>{{ $item->tanggal_kembali ?? 'Belum Kembali' }}</td>
            
            
                <td>
                    <a href="{{ route('peminjaman.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('peminjaman.edit', $item->id) }}" class="btn btn-primary">Kembalikan Buku</a>
                    <form action="{{ route('peminjaman.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
