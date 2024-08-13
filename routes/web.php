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
Route::view('/about', 'main.about'); // done
Route::view('/shop', 'main.shop'); // done
Route::view('/404', 'main.404'); // done
Route::view('/checkout', 'main.checkout'); // done
Route::view('/contact', 'main.contact');  // done
Route::view('/faq', 'main.faq'); // done
Route::view('/index', 'main.index'); // done
Route::view('/index-2', 'main.index-2'); // done
Route::view('/news', 'main.news'); // done
Route::view('/news-details', 'main.news-details'); //done
Route::view('/news-grid', 'main.news-grid'); //done
Route::view('/shop-cart', 'main.shop-cart'); //done
Route::view('/shop-details', 'main.shop-details'); // done
Route::view('/shop-list', 'main.shop-list'); // done
Route::view('/team', 'main.team'); // done
Route::view('/team-details', 'main.team-details'); // done
Route::view('/wishlist', 'main.wishlist');

Route::view('/documentation/index', 'documentation.index');

