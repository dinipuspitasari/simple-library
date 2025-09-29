<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Validation\ValidationException;

class BookController extends Controller
{
    // List semua buku
    public function index()
    {
        return response()->json(Book::all(), 200);
    }

    // Detail buku berdasarkan ID
    public function show($id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Buku tidak ditemukan'], 404);
        }
        return response()->json($book, 200);
    }

    // Tambah buku
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'year' => 'required|integer|max:' . date('Y'),
        ]);

        $book = Book::create($validated);

        return response()->json($book, 201);
    }

    // Update buku
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Buku tidak ditemukan'], 404);
        }

        $validated = $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'year' => 'required|integer|max:' . date('Y'),
        ]);

        $book->update($validated);

        return response()->json($book, 200);
    }

    // Hapus buku
    public function destroy($id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Buku tidak ditemukan'], 404);
        }

        $book->delete();

        return response()->json(['message' => 'Buku berhasil dihapus'], 200);
    }
}
