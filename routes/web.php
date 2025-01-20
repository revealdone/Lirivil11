<?php

use Illuminate\Support\Facades\Route;
use App\Models\Siswa;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PeminjamanController;
use App\Models\Peminjaman;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\HomeController;

// Route::get('/', [AuthController::class, 'showLogin'])->name('login');
// Route::post('/login', [AuthController::class, 'login'])->name('login.post');
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    // Data Master
    Route::resource('buku', BukuController::class);
    Route::resource('siswa', SiswaController::class);

    // Transaksi
    Route::get('/transaksi/peminjaman', [PeminjamanController::class, 'peminjaman'])->name('transaksi.peminjaman');
    Route::get('/transaksi/pengembalian', [PeminjamanController::class, 'pengembalian'])->name('transaksi.pengembalian');

    Route::get('/report/pinjaman', [TransaksiController::class, 'pinjaman'])->name('report.pinjaman');

    Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');

    Route::put('/peminjaman/{id}', [PeminjamanController::class, 'update'])->name('peminjaman.update');
    Route::get('/peminjaman/{id}/edit', [PeminjamanController::class, 'edit'])->name('peminjaman.edit');
    Route::get('/peminjaman/{id}/edit1', [PeminjamanController::class, 'edit1'])->name('peminjaman.edit1');
    
    Route::resource('peminjaman', PeminjamanController::class);
    Route::post('/peminjaman/store', [PeminjamanController::class, 'store'])->name('peminjaman.store');
    // Report
    Route::get('report/pinjaman', [LaporanController::class, 'index'])->name('report.pinjaman');

    // Route::get('/report/pinjaman', [ReportController::class, 'pinjaman'])->name('report.pinjaman');
    // Route::get('/report/siswa', [ReportController::class, 'siswa'])->name('report.siswa');
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/chart-data', [HomeController::class, 'getChartData']);
    
    Route::get('/index', [SiswaController::class, 'index'])->name('siswa.index');
    Route::get('/create', [SiswaController::class, 'create'])->name('siswa.create');
    Route::post('/store', [SiswaController::class, 'store'])->name('siswa.store');

    // Route::get('/home', function () {
    //     // return "hello";
        
    //     return view('home');
    //     // return view('home');
    // });
});


Route::get('/', function () {
    // return "hello";
    
    return view('login');
});



// Route::get('/home', function () {
//     return redirect('https://revealdone.github.io/portfotolio-tailwind/');
// });







// Route::get('/while', function () {
//     $i = 1;
//     $result = '';
//     while ($i <= 5) {
//         $result .= "Ini perulangan ke-$i <br>";
//         $i++;
//     }
//     return $result;
//     // return view('welcome');
// });
// Route::get('/do-while', function () {
//     $i = 1;
//     $result = '';
//     do {
//         $result .= "Ini perulangan ke-$i <br>";
//         $i++;
//     } while ($i <= 5);
//     return $result;
//     // return view('welcome');
// });
// Route::get('/foreach', function () {
//     $items = ['Satu', 'Dua', 'Tiga', 'Empat', 'Lima'];
//     $result = '';
//     foreach ($items as $key => $item) {
//         $result .= "Item ke-".($key+1).": $item <br>";
//     }
//     return $result;
//     // return view('welcome');
// });


// Route::get('/loop', function () {
//     $result = '';
//     for ($i = 1; $i <= 5; $i++) {
//         $result .= "Ini perulangan ke-$i <br>";
//     }
//     return $result;
    
//     // return view('welcome');
// });
