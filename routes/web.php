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


//view login page and register
Route::view('/login','login');
Route::view('/register','register');
//User controller
Route::post('/login','UserController@login');
Route::post('register','UserController@register');

//product controller
Route::get('/','UserController@dashboard');
Route::get('delete/{id}','UserController@delete');
Route::get('edit/{id}','UserController@edit');
Route::post('update/{id}','UserController@update');
