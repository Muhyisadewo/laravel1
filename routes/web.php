<?php

use Illuminate\Support\Facades\Route;
// memanggil controller jika menggunakan controller
use App\Http\Controllers\PageController;
// memanggil controller KasirController
use App\Http\Controllers\KasirController;
// ini untuk kondisi sederhana
// Route::get('/', function () {
//     return view('awal');
// });

// dibawah ini untuk kondisi jika halaman sangat banyak dan ingin diatur pada controller
Route::get('/', [PageController::class, 'awal']);
// jika slash kosong maka itu berarti halaman utama, dan itu tidak boleh lebih dari 1
Route::get('/tentang', [PageController::class, 'tentang']);
Route::get('/kontak', [PageController::class, 'kontak']);

// ini beda controller
Route::get('/index', [KasirController::class, 'index']);
