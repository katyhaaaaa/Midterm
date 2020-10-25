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

Route::get('/', 'SiteController@index', function () {
    return view('home');
});
Route::get('/user', 'UserController@index', function () {
    return view('user');
});
Route::get('/account', 'AccountController@index', function () {
    return view('account');
});
