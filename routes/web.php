<?php

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

Route::get('/natours', 'PagesController@index');//->middleware('auth');

Route::get('/natours', function () {
    return view('natours');
});
Route::get('/trillo', function () {
    return view('trillo');
});
Route::get('/nexter', function () {
    return view('nexter');
});
