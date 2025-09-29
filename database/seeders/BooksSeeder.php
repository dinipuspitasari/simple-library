<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title'=> 'Harry Potter and the sorcerers Stone',
            'author'=> 'J.K. Rowling',
            'year'=> 1997
        ]);
        Book::create([
            'title' => 'The Hobbit',
            'author' => 'J.R.R. Tolkien',
            'year' => 1937
        ]);
        Book::create([
            'title' => 'Laut Bercerita',
            'author' => 'Leila S. Chudori',
            'year' => 2017
        ]);
        Book::create([
            'title' => 'Paradigma',
            'author' => 'Syahid Muhammad',
            'year' => 2019
        ]);
        Book::create([
            'title' => 'Nebula',
            'author' => 'Tere Liye',
            'year' => 2019
        ]);

    }
}
