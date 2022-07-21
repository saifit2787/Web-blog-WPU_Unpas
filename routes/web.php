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
    return view('home',[
        "judul" => "Home",
        "name" => "Saifit2787"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "judul" =>"About",
        "name" => "Saiful Fitri",
        "email" =>"saifit2787@gmail.com",
        "image" => "img/saifit2787.jpg"

    ]);
});

Route::get('/blog', function () {
    return view('posts',[
        "judul" =>"Post",
        "name" => "Saiful Fitri",
        "email" =>"saifit2787@gmail.com",
        "image" => "img/saifit2787.jpg"

    ]);
});