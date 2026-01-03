<?php

use Illuminate\Support\Facades\Route;
// memanggil controller jika menggunakan controller
use App\Http\Controllers\CobaController;
// memanggil controller KasirController
use App\Http\Controllers\KasirController;
// ini untuk kondisi sederhana
// Route::get('/', function () {
//     return view('awal');
// });

// dibawah ini untuk kondisi jika halaman sangat banyak dan ingin diatur pada controller
// Route::get('/', [KasirController::class, 'index']);
// jika slash kosong maka itu berarti halaman utama, dan itu tidak boleh lebih dari 1
// Route::get('/tentang', [CobaController::class, 'tentang']);
// Route::get('/kontak', [CobaController::class, 'kontak']);

// ini beda controller
// Route::get('/index', [KasirController::class, 'index']);

Route::get('/kasir', [KasirController::class, 'index']);
Route::post('/kasir/tambah', [KasirController::class, 'tambah']);
Route::post('/kasir/hapus/{id}', [KasirController::class, 'hapus']);
Route::post('/kasir/qty/{id}', [KasirController::class, 'updateQty']);
Route::post('/kasir/reset', [KasirController::class, 'reset']);
Route::post('/kasir/checkout', [KasirController::class, 'checkout']);
