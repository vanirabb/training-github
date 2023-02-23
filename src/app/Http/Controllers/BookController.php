<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\BookService;

class BookController extends Controller {

    public function __construct(
        BookService $book_service
    )
    {
        $this->book_service = $book_service;
    }

    public function new()
    {
        return view('book.review');
    }

    public function store(Request $request)
    {
        // get request data
        $attributes = $request->except('_token');
        // store data
        $this->book_service->save($attributes);
        // redirect page
        return redirect()->route('book_new');
    }

    public function list()
    {
        return view('book.list');
    }
}
