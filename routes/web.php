<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductGalleryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ArticelController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController as HomeEventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeUserController;
use App\Http\Controllers\TestiController;
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
    return view('pages.cover');
})->name('cover');

Route::get('/home', function () {
    return view('pages.home');
})->name('homepage');

Route::get('/home/profile', function () {
    return view('pages.profile');
})->name('profile');

Route::get('/home/visi-misi', function () {
    return view('pages.visimisi');
})->name('visimisi');

Route::get('/home/product', [HomeController::class, 'product'])->name('product');

Route::get('/home/product/{id}', [HomeController::class, 'productDetail'])->name('product-detail');

Route::get('/home/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/home/contact/send', [ContactController::class, 'send'])->name('contact-send');

Route::get('/home/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/artikel', [ArticelController::class, 'index'])->name('artikel');

Route::get('/artikel/{slug}', [ArticelController::class, 'detail'])->name('artikel-detail');

Route::get('/event', [HomeEventController::class, 'index'])->name('event');

Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

Route::get('/testimoni', [TestiController::class, 'index'])->name('testimoni');

Route::middleware('auth')->group(function () {
    Route::get('/testimoni/create', [TestiController::class, 'create'])->name('testimoniCreate');
    Route::post('/testimoni/store', [TestiController::class, 'store'])->name('testimoniStore');

    Route::get('/userSetting', [HomeUserController::class, 'edit'])->name('account-setting');
    Route::put('/userSetting/update/{id}', [HomeUserController::class, 'update'])->name('account-store');
});

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::resource('product', ProductController::class);
    Route::resource('product-galleries', ProductGalleryController::class);
    Route::resource('artikel', PostController::class);
    Route::resource('kategori', CategoryController::class);
    Route::resource('event', EventController::class);
    Route::resource('message', MessageController::class);
    Route::resource('user', UserController::class);
});