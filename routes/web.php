<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

=======

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('welcome');
});

#url/pcr
>>>>>>> 08c1f443348ecb0627b517b6dd725a98129ee0dd
Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

<<<<<<< HEAD
=======
#url/mahasiswa
>>>>>>> 08c1f443348ecb0627b517b6dd725a98129ee0dd
Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

<<<<<<< HEAD
Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);


Route::get('/nama/{ghania}', function ($param1) {
=======
#url/nama
Route::get('/nama/{Ghania}', function ($param1) {
>>>>>>> 08c1f443348ecb0627b517b6dd725a98129ee0dd
    return 'Nama saya: '.$param1;
});

Route::get('/nim/{param1?}', function ($param1 = '2455301074') {
    return 'NIM saya: '.$param1;
});

<<<<<<< HEAD
=======
Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

>>>>>>> 08c1f443348ecb0627b517b6dd725a98129ee0dd
Route::get('/about', function () {
    return view('halaman-about');
});

<<<<<<< HEAD
Route::get('/home',[HomeController::class,'index'])->name('home');

Route::get('/pegawai', [PegawaiController::class, 'index']);

Route::get('/signup-form', function () {
    return view('simple-home');
})->name('show.signup.form');

Route::post('/signup', [HomeController::class, 'signup'])->name('submit.signup');

Route::get('/auth', [AuthController::class, 'index'])->name('auth.index');

Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');

Route::get('/go/{tujuan}',[HomeController::class,'redirectTo'])->name('go');

Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
=======
Route::get('/matakuliah', [MatakuliahController::class, 'index']);

Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);

Route::get('/pegawai', [PegawaiController::class, 'index']);



>>>>>>> 08c1f443348ecb0627b517b6dd725a98129ee0dd
