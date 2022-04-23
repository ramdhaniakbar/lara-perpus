<?php

namespace App\Http\Controllers\Frontend;

use App\Book;
use App\BorrowHistory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(10);
        return view('frontend.book.index', [
            'title' => 'Beranda Perpusku',
            'books' => $books,
        ]);
    }

    public function show(Book $book) 
    {
        return view('frontend.book.show', [
            'title' => $book->title,
            'book' => $book,
        ]);
    }

    public function borrow(Book $book) 
    {
        $user = auth()->user();
        
        if ($user->borrow()->IsStillBorrow($book->id)) {
            return back()->with('toast', 'Kamu sudah meminjam buku dengan judul : ' . $book->title);
        }

        $user->borrow()->attach($book);
        $book->decrement('qty');

        return back()->with('toast', 'Berhasil meminjam buku');
    }
}
