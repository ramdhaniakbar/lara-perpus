<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\Author;
use App\BorrowHistory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    public function authors()
    {
        $authors = Author::orderBy('name', 'ASC');
        return datatables()->of($authors)
                        ->addColumn('action', 'admin.author.action')
                        ->addIndexColumn()
                        ->rawColumns(['action'])
                        ->toJson();
    }
    
    public function books()
    {
        $books = Book::orderBy('title', 'ASC')->get();

        $books->load('author');

        return datatables()->of($books)
                        ->addColumn('author', function(Book $model) {
                            return $model->author->name;
                        })
                        ->editColumn('cover', function(Book $model) {
                            return '<img src="' . $model->getCover() . '" height="150px" width="120">';
                        })
                        ->addColumn('action', 'admin.book.action')
                        ->addIndexColumn()
                        ->rawColumns(['cover', 'action'])
                        ->toJson();
    }

    public function borrows()
    {
        $borrows = BorrowHistory::isBorrowed()->latest()->get();

        $borrows->load('user', 'book');

        return datatables()->of($borrows)
                        ->addColumn('user', function(BorrowHistory $model) {
                            return $model->user->name;
                        })
                        ->addColumn('book_title', function(BorrowHistory $model) {
                            return $model->book->title;
                        })
                        ->addColumn('action', 'admin.borrow.action')
                        ->addIndexColumn()
                        ->rawColumns(['action'])
                        ->toJson();
    }
}
