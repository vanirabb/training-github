<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller {

    function index ()
    {
        return view('book.review');
    }

    function store(Request $request)
    {
        // get request data
        $attributes = $request->except('_token');

        // store data

        // redirect page
    }
}
