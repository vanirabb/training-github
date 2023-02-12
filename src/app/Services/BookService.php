<?php

namespace App\Http\Serices;

use DB;

class BookService {

    // Save data
    function save ($attributes)
    {
        DB::table('books')->insert([
            'books' =>
            'author' =>
            'review' =>
            'created_at' =>
        ])
    }

}
