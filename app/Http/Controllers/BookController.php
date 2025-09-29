<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    // Menampilkan semua data buku
    public function index()
    {
        $books = Book::all();
        return view('book.index', compact('books'));
    }

    // Menampilkan form tambah buku
    public function create()
    {
        return view('book.create');
    }

    // Menyimpan data buku baru
    public function store(Request $request)
    {
        $currentYear = date('Y');

        $request->validate([
            'title'  => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year'   => "required|integer|max:$currentYear",
        ], [
            'year.max' => "Tahun tidak boleh lebih besar dari $currentYear.",
        ]);

        Book::create($request->only('title', 'author', 'year'));

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil ditambahkan!');
    }


    // Menampilkan detail 1 buku
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('book.show', compact('book'));
    }

    // Menampilkan form edit buku
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('book.edit', compact('book'));
    }

    // Mengupdate data buku
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        $request->validate([
            'title'  => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year'   => 'required|integer|max:' . date('Y'),
        ]);

        $book->update($request->only('title', 'author', 'year'));

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil diperbarui!');
    }


    // Menghapus buku
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil dihapus!');
    }
}
