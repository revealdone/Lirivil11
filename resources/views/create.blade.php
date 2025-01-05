@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Form Tambah Siswa</h1>
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div class="row mb-3"><a href="">
            <div class="col-sm-10">
            <label for="nis" class="form-label">NIS</a></label>
            <input type="text" class="form-control" id="nis" name="nis" required>
        </div>
        </div>
        <div class="row mb-3"><a href="">
            <div class="col-sm-10">
            <label for="nama" class="form-label">Nama</a></label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        </div>
        <div class="row mb-3"><a href="">
            <div class="col-sm-10">
            <label for="alamat" class="form-label">Alamat</a></label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
        </div>
        </div>
        <div class="row mb-3"><a href="">
            <div class="col-sm-10">
            <label for="no_hp" class="form-label">No HP</a></label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" required>
        </div>
        </div>
        
        <div class="row mb-3"><a href="">
            <div class="col-sm-10">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</a></label>
            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
        </div>
        </div>
        <div class="row mb-3"><a href="">
            <div class="col-sm-10">
            <label for="hobi" class="form-label">Hobi</a></label>
            <input type="text" class="form-control" id="hobi" name="hobi" required>
        </div>
        </div>
        <button id="tombol4" type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
