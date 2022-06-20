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
    return view('pages.home');
})->name('homepage');

Route::get('/profile', function () {
    return view('pages.profile');
})->name('profile');

Route::get('/visi-misi', function () {
    return view('pages.visimisi');
})->name('visimisi');

Route::get('/product', function () {
    return view('pages.product');
})->name('product');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/artikel', function () {
    return view('pages.blog');
})->name('artikel');

Route::get('/event', function () {
    return view('pages.event');
})->name('event');