<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Author;

class DataController extends Controller
{
    public function authors()
    {
        $authors = Author::orderBy('name', 'ASC');
        return datatables()->of($authors)
                        ->addColumn('action', 'admin.author.action')
                        ->addIndexColumn()
                        ->toJson();
    }
}
