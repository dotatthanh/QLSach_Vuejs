<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/categories', 'App\Http\Controllers\BookController@getCategories');
Route::get('/books', 'App\Http\Controllers\BookController@getBooks');
Route::post('/detail-book/{id}', 'App\Http\Controllers\BookController@detailBook');
Route::post('/add-book', 'App\Http\Controllers\BookController@addBook');
Route::put('/update-book/{id}', 'App\Http\Controllers\BookController@updateBook');
Route::delete('/delete-book/{id}', 'App\Http\Controllers\BookController@deleleBook');

Route::get('/authors', 'App\Http\Controllers\AuthorController@getAuthors');

Route::get('/{any}', 'App\Http\Controllers\BookController@index')->where('any', '.*');