<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PagesController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\ShopController;

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

// Arrange pages

Route::get('/', [PagesController::class, 'index'])->name('pages.index');
Route::get('about', [PagesController::class, 'about'])->name('pages.about');
Route::get('contact', [PagesController::class, 'contact'])->name('pages.contact');

// Arrange shop

Route::resource('shop', ShopController::class);

// Arrange Account

Route::get('user/signup', [UserController::class, 'signup'])->name('user.signup');
Route::post('user/signup', [UserController::class, 'store'])->name('user.store');
Route::get('user/login', [UserController::class, 'login'])->name('user.login');
Route::post('user/login', [UserController::class, 'getin'])->name('user.getin');

Route::get('user/logout', [UserController::class, 'logout'])->name('user.logout');


