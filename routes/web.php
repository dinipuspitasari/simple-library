<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Index - tampil semua buku
    Route::get('/books', [BookController::class, 'index'])->name('books.index');

    // Create - form tambah buku
    Route::get('/books/create', [BookController::class, 'create'])->name('books.create');

    // Store - simpan buku baru
    Route::post('/books', [BookController::class, 'store'])->name('books.store');

    // Show - detail buku
    Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');

    // Edit - form edit buku
    Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');

    // Update - update buku
    Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');

    // Destroy - hapus buku
    Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');

    


});
