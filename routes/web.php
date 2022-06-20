<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductGalleryController;
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



Route::get('/home', function () {
    return view('pages.home');
})->name('homepage');

Route::get('/home/profile', function () {
    return view('pages.profile');
})->name('profile');

Route::get('/home/visi-misi', function () {
    return view('pages.visimisi');
})->name('visimisi');

Route::get('/home/product', function () {
    return view('pages.product');
})->name('product');

Route::get('/home/product/detail', function () {
    return view('pages.product-detail');
})->name('product-detail');

Route::get('/home/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/home/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/artikel', function () {
    return view('pages.blog');
})->name('artikel');

Route::get('/artikel/detail', function () {
    return view('pages.blog-detail');
})->name('artikel-detail');

Route::get('/event', function () {
    return view('pages.event');
})->name('event');

Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

Route::get('/testimoni', function () {
    return view('pages.testimoni');
})->name('testimoni');

Route::prefix('admin')->group(function () {
    Route::resource('product', ProductController::class);
    Route::resource('product-galleries', ProductGalleryController::class);
});