<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// Halaman utama: daftar buku
Route::get('/', [BookController::class, 'index']);

// Halaman detail buku (tampilan standar)
Route::get('/book/{id}', [BookController::class, 'show']);

// Halaman tambah buku (form)
Route::get('/book/create', [BookController::class, 'create']);

// Proses simpan buku baru
Route::post('/book/store', [BookController::class, 'store']);

// Route untuk halaman baca buku
Route::get('/book/read/{id}', [BookController::class, 'read'])->name('books.read');

// Halaman contact
Route::view('/contact', 'contact');

// Proses pengiriman pesan contact
Route::post('/contact/send', function (\Illuminate\Http\Request $request) {
    // Di sini kamu bisa menambahkan validasi atau simpan pesan ke database
    return redirect('/contact')->with('success', 'Pesan Anda berhasil dikirim!');
});
