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
    $comics = config('db');
    $links = [
        "characters", "comics", "movies", "tv", "games", "collectibles", "videos", "fans", "fans", "news", "shop"
    ];
    // dd($comics);
    return view('home', compact('comics', 'links'));
})->name('home');
