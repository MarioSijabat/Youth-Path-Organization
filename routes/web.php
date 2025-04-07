<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\LandingPage\LandingPageController::class, 'index'])->name('/');
Route::get('/sejarah', [App\Http\Controllers\Sejarah\SejarahController::class, 'index'])->name('sejarah');
Route::get('/visimisi', [App\Http\Controllers\Visimisi\VisimisiController::class, 'index'])->name('visimisi');
Route::get('/fasilitas', [App\Http\Controllers\Fasilitas\FasilitasController::class, 'index'])->name('fasilitas');
Route::get('/sambutan', [App\Http\Controllers\Sambutan\SambutanController::class, 'index'])->name('sambutan');
Route::get('/gallery', [App\Http\Controllers\Gallery\GalleryController::class, 'index'])->name('gallery');
Route::get('/sdm', [App\Http\Controllers\Sdm\SdmController::class, 'index'])->name('sdm');
Route::get('/pengumuman', [App\Http\Controllers\Pengumuman\PengumumanController::class, 'index'])->name('pengumuman');
Route::get('/pendaftaran', [App\Http\Controllers\Pendaftaran\PendaftaranController::class, 'index'])->name('pendaftaran');
Route::post('/pendaftaran/store', [App\Http\Controllers\Pendaftaran\PendaftaranController::class, 'store'])->name('pendaftaran.store');

// Route untuk menampilkan detail pengumuman berdasarkan slug
Route::get('/pengumuman/{slug}', [App\Http\Controllers\Pengumuman\PengumumanController::class, 'show'])->name('pengumuman.show');
Route::get('/berita/{slug}', [App\Http\Controllers\News\NewsController::class, 'show'])->name('berita.show');

