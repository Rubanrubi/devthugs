<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\SinglePost;
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
    return view('maintanance');
});

Route::get('/home',Home::class);
Route::get('/single-post',SinglePost::class);

//Route::livewire('/login','login');


Route::get('/blog-single-page', function () {
    return view('single-page-blog');
});


