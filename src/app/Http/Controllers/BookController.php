<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\BookService;

class BookController extends Controller {

    function __constructor (
        BookService $book_service
    )
    {
        $this->book_serivice = $book_service;
    }

    function index ()
    {
        return view('book.review');
    }

    function store(Request $request)
    {
        // get request data
        $attributes = $request->except('_token');
        // store data
        $this->book_service->save($attributes);
        // redirect page
    }
}
