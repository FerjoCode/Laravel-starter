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

Route::get('/', function () {
    return view('blogHome');
});

Route::prefix('blog')->group(function() {
    Route::get('/', function () {
        return view('blogHome');
    });

    Route::get('/post/{slug}', 'PostController@show');

    Route::get('/category', function() {
        return view('category');
    });
});