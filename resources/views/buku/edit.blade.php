@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Buku</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('buku.update', $buku->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="judul" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', $buku->judul) }}" required>
        </div>

        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="penulis" name="penulis" value="{{ old('penulis', $buku->penulis) }}" required>
        </div>

        <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ old('penerbit', $buku->penerbit) }}" required>
        </div>

        <div class="mb-3">
            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
            <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" value="{{ old('tahun_terbit', $buku->tahun_terbit) }}" required>
        </div>

        <button id="tombol4" type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('buku.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
