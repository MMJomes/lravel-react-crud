<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|https://techvblogs.com/blog/build-crud-app-with-laravel-and-reactjs
https://blog.devgenius.io/a-blogs-posts-app-with-laravel-react-crud-c714c6c5944f
https://morioh.com/p/bd404646b056
https://www.itsolutionstuff.com/post/laravel-react-js-crud-application-tutorialexample.html
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products',CategoryController::class);
