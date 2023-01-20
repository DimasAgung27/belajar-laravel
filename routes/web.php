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

/* Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('home', [
        "tittle" => "Halaman Home",
        "name" => "Dimas Agung",
        "job" => "Frontend Developer",
        "description" => "I Want to be a Fullstack Developer"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "Halaman About",
        "name" => "Dimas Agung",
        "ttl" => "Jakarta, 27 Juli 2006",
        "no_wa" => "081291106913",
        "hobi" => "Music, Game",
        "jargon" => "Got Carry",
        "foto" => "images/me.png"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "tittle" => "Halaman Contact"
    ]);
});
