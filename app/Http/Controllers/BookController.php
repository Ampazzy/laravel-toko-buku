<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function getBooks()
    {
        $books = Book::all();
        return view('books', ["books" => $books]);
    }

    public function getBook(Book $book)
    {
        //$book = Book::findOrFail($id);
        return view('book', ["book" => $book]);
    }
}
