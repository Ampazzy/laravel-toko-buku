<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;
use function Laravel\Prompts\multisearch;
use function Laravel\Prompts\search;

class BookController extends Controller
{
    public function getBooks()
    {
        //dd(request('search'));
        $books = Book::with('category')->paginate(12);

        if (request('search')) {
            $books = Book::with('category')->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->paginate(12);
        }

        return view('books', ["books" => $books]);
    }

    public function getBook(Book $book)
    {
        return view('book', ["book" => $book]);
    }
}
