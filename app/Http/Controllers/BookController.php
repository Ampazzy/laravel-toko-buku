<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;

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

    public function adminGetBooks()
    {
        $books = Book::with('category')->paginate(12);

        if (request('search')) {
            $books = Book::with('category')->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->paginate(12);
        }

        return view('Admin.readBooks', ["books" => $books]);
    }

    public function adminGetBook(Book $book)
    {
        return view('Admin.readBook', ["book" => $book]);
    }

    public function adminCreateBook()
    {
        return view('Admin.createBook');
    }

    public function adminStoreBook(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);

        $image = $request->file('image');
        $image->storeAs('public/book', $image->hashName());

        Book::create([
            'category_id' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image->hashName(),
        ]);


        return redirect('/admin/books');
    }

    public function adminEditBook(Book $book)
    {
        return view('Admin.editBook', ["book" => $book]);
    }

    public function adminUpdateBook(Request $request, Book $book)
    {
        $request->validate([
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'image',
        ]);

        if ($request->file('image') == null) {
            $book->update([
                'category_id' => $request->category,
                'title' => $request->title,
                'description' => $request->description,
            ]);
        } else {
            $image = $request->file('image');
            $image->storeAs('public/book', $image->hashName());
            Storage::delete('public/book/' . $book->image);

            $book->update([
                'category_id' => $request->category,
                'title' => $request->title,
                'description' => $request->description,
                'image' => $image->hashName(),
            ]);
        }

        return redirect('/admin/books');
    }

    public function adminDeleteBook(Book $book)
    {
        $book->delete();
        Storage::delete('public/book/' . $book->image);
        return back();
    }
}
