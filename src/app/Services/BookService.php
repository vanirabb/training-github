<?php

namespace App\Services;

use DB;

class BookService {

    // Save data
    function save ($attributes)
    {
        DB::table('books')->insert([
            'book' => $attributes["book"],
            'author' => $attributes["author"],
            'review' => $attributes["review"]
        ]);
    }

}
