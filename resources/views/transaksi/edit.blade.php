@extends('layouts.app')

@section('content')
<div class="container">
    <h1></h1>

    <form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="buku_id" class="form-label">Pilih Buku</label>
            <select class="form-control" id="buku_id" name="buku_id" required>
                @foreach ($buku as $item)
                <option value="{{ $item->id }}" {{ $item->id == $peminjaman->buku_id ? 'selected' : '' }}>{{ $item->judul }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="siswa_id" class="form-label">Pilih Siswa</label>
            <select class="form-control" id="siswa_id" name="siswa_id" required>
                @foreach ($siswa as $item)
                <option value="{{ $item->id }}" {{ $item->id == $peminjaman->siswa_id ? 'selected' : '' }}>{{ $item->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
            <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" value="{{ $peminjaman->tanggal_pinjam }}" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
            <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" value="{{ $peminjaman->tanggal_kembali }}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('peminjaman.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
