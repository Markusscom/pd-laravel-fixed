<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Controllers\Controller;
// use Illuminate\Database\Eloquent\ModelNotFoundException;

class BookController extends Controller
{
    public function index() {
        try {
            $books = Book::all();
            return view('books.index', ['books' => $books]);
        } catch (Exception $e) {
            \Log::error('Error fetching books: ' . $e->getMessage());
            return redirect('/books')->with('error', 'Failed to fetch books.');
        }
    }

    public function create() {
        return view('books.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'released_at' => 'required|date',
        ]);

        $book = Book::create($validated);
        return redirect()->route('books.show', $book);
    }

    public function show(Book $book) {
        return view('books.show', ['singleBook' => $book]);
    }

    public function edit(Book $book) {
        return view('books.edit', ['editBook' => $book]);
    }

    public function update(Request $request, Book $book) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'released_at' => 'required|date',
        ]);

        $book->update($validated);
        return redirect()->route('books.show', $book);
    }

    public function destroy(Book $book) {
        $book->delete();
        return redirect()->route('books.index');
    }
}
