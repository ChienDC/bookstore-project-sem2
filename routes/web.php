<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::view('/', 'main.index');
Route::view('/about', 'main.about');
Route::view('/shop', 'main.shop');
Route::view('/404', 'main.404');
Route::view('/checkout', 'main.checkout');
Route::view('/contact', 'main.contact');
Route::view('/faq', 'main.faq');
Route::view('/index', 'main.index');
Route::view('/index-2', 'main.index-2');
Route::view('/news', 'main.news');
Route::view('/news-details', 'main.news-details');
Route::view('/news-grid', 'main.news-grid');
Route::view('/shop-cart', 'main.shop-cart');
Route::view('/shop-details', 'main.shop-details');
Route::view('/shop-list', 'main.shop-list');
Route::view('/team', 'main.team');
Route::view('/team-details', 'main.team-details');
Route::view('/wishlist', 'main.wishlist');

Route::view('/documentation/index', 'documentation.index');

