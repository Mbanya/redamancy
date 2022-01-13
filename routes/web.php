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
    return view('pages.index');
})->name('index');

Route::get('our-story', function () {
    return view('pages.our-story');
})->name('our-story');

Route::get('wine-club', function () {
    return view('pages.wine-club');
})->name('wine-club');

Route::get('whites', function () {
    return view('pages.white-wines');
})->name('white-wine');

Route::get('reds', function () {
    return view('pages.red-wines');
})->name('red-wine');

//Route::get('contact', function () {
//    return view('pages.contact');
//})->name('contact');

