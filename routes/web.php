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


Route::group(['namespace' => '\App\Http\Controllers'], function () {
    Route::get('/', 'StartController@index');
    Route::get('/product', 'ProductsController@index');
    Route::get('/board/{id}', 'ProductController@index');
    Route::get('/cable/{id}', 'СableController@index');
    Route::get('/keycap/{id}', 'KeycapController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/cart', 'CartController@index');
    Route::post('/addToCart/{id}', 'CartController@addToCart')->name('addToCart');
});


Route::group(['middlewere' => 'aurh', 'namespace' => '\App\Http\Controllers'], function () {
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
