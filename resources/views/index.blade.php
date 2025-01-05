@extends('layouts.app')

@section('content')


<div class="container mb-5">
    
    <h1 >Daftar Siswa</h1>
    
    <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">Tambah Siswa</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Jenis Kelamin</th>
                <th>Hobi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswas as $index => $siswa)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $siswa->nis }}</td>
                <td>{{ $siswa->nama }}</td>
                <td>{{ $siswa->alamat }}</td>
                <td>{{ $siswa->no_hp }}</td>
                <td>{{ $siswa->jenis_kelamin }}</td>
                <td>{{ $siswa->hobi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>

@endsection
