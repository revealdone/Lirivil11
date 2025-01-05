@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Laporan Peminjaman Buku</h1>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Buku</th>
                <th>Siswa</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksi as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->buku->id ?? 'Buku tidak ditemukan' }}</td>
                <td>{{ $item->siswa->nama ?? 'Siswa tidak ditemukan' }}</td>
                <td>{{ $item->tanggal_pinjam }}</td>
                <td>{{ $item->tanggal_kembali ?? 'Belum Kembali' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
