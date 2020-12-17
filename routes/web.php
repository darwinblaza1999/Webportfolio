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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\UserController::class, 'index'])->name('profile');

// -------------------image-------------------
Route::get('/image', [App\Http\Controllers\ImageController::class, 'index'])->name('image');
// Route::get('/image-upload', [UploadImageController::class, 'index'])->name('image.upload.index');
// Route::post('/image-upload/store', [UploadImageController::class, 'store'])->name('image.upload.store')

