<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerpustakaanController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PetugasController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

Route::get('/create', function () {
    return view('welcome');
})->name('dashboard');

// Route::get('/perpustakaan/anggota', [PerpustakaanController::class, 'anggota'])->name('get_anggota');

// Route::get('/perpustakaan/buku', [PerpustakaanController::class, 'buku'])->name('get_buku');

// Route::get('/perpustakaan/petugas', [PerpustakaanController::class, 'petugas'])->name('get_petugas');

Route::get('/table', [PerpustakaanController::class, 'table'])->name('get_table');

Route::resource('/anggota', AnggotaController::class);

Route::resource('/buku', BukuController::class);

Route::resource('/petugas', PetugasController::class);
