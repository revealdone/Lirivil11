@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <!-- Card Container -->
    <div class="bg-white shadow-lg rounded-lg p-6">
        <div class="flex items-center space-x-6">
            <!-- Foto Profil -->
            <img class="w-24 h-24 rounded-full border-2 border-gray-300" src="{{ asset('js/xa1.jpeg') }}" alt="Foto Profil">
            
            <!-- Info Pengguna -->
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Nama Lengkap: Muhamad wahid romdoni</h2>
                <p class="text-lg text-gray-600">Kelas: Sistem informasi 501</p>
                <p class="text-lg text-gray-600">Mata Kuliah: Pemrograman Berbasis Web </p>
            </div>
            <h2>Portfolio</h2>
            <iframe src="https://revealdone.github.io/portfotolio-tailwind/" style="mb -3 width: 100%; height: 50vh; border: none; transform: scale(0.8); transform-origin: 0 0;"></iframe>
            
        </div>
    </div>
    @endsection

