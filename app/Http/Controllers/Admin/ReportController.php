<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function topBook()
    {
        $books = Book::withCount('borrowed')
                    ->orderBy('borrowed_count', 'DESC')
                    ->paginate(env('PAGINATION_ADMIN'));
        
        return view('admin.report.top-book', [
            'books' => $books
        ]);
    }

    public function topUser()
    {
        $users = User::withCount('borrow')
                    ->orderBy('borrow_count', 'DESC')
                    ->paginate(env('PAGINATION_ADMIN'));
        
        return view('admin.report.top-user', [
            'users' => $users
        ]);
    }
}
