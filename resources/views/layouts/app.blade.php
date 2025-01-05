<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Siswa</title>
    <link rel="stylesheet" href="{{ asset('css.css') }}">
    <link rel="stylesheet" href="{{ asset('animate.min.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @yield('content')
    
    <header>

        <h2 class="logo">Logo</h2>
        <nav class="navigation">
          <a class="" href="/home">Home</a>
          <a id="tombol3" class="tombol3" href="#">About</a>
          <a class="" href="{{ route('siswa.index') }}">Report Data Siswa</a>
          <a class="" href="{{ route('report.pinjaman') }}">Report Pinjaman Buku</a>
          <a class="" href="{{ route('buku.index') }}">Tambah Buku</a>
          <a class="" href="{{ route('peminjaman.index') }}">Peminjaman Buku,</a>
          <a class="" href="{{ route('transaksi.pengembalian') }}">Pengembalian Buku</a>  
        </nav>      
        <nav class="navigation"> 
          <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button class="btnLogin-popup mt-3"><a class="" href="/">Logout</a></button>
            </form>
            <button class="btnLogin-popup mt-3"><a class="" href="/">Login</a></button>
        </nav>
    </header>
    

    <footer class="custom-footer">
        <p>Copyright © <span id="currentYear"></span> Muhamad Wahid Romdoni.</p>
       
    </footer>

    <script src="{{ asset('js/asd.js') }}"></script>
    <script src="{{ asset('js/asd1.js') }}"></script>
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
 
</body>
</html>
