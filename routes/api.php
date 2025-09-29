<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/books', [BookController::class, 'index']);        // list semua buku
Route::get('/books/{id}', [BookController::class, 'show']);    // detail buku
Route::post('/books', [BookController::class, 'store']);       // tambah buku
Route::put('/books/{id}', [BookController::class, 'update']);  // update buku
Route::delete('/books/{id}', [BookController::class, 'destroy']); // hapus buku
