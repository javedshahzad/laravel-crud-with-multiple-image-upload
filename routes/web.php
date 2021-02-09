<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/logout', function () {
	Session::forget('user');
    return redirect('/login');
});



Route::view('/login','login');
Route::post('/login','UserController@login');
Route::get('/','ProductController@index');
Route::get('details/{id}','ProductController@details');
Route::get('search','ProductController@search');
Route::post('/add_to_cart','ProductController@addtocart');
Route::get('cartlist','ProductController@carItem');
Route::get('removecart/{id}','ProductController@removeCart');

