<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* if you click homeURL ,"new"function defined in bookcontroller  is called.
   This route is named "book_new".
*/
Route::get('/', [BookController::class, 'new'])->name('book_new');
Route::post('/book/store', [BookController::class, 'store'])->name('book_store');
Route::get('/book/list',[BookController::class,'list'])->name('book_list');
