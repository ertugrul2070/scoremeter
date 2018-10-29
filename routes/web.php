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

Route::get('/total', function () {
    return view('total');
});

Route::get('/players', function () {
    return view('players');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/total', 'TotalescoreController@index')->name('total');

Route::get('/players', 'AllplayersController@index')->name('total');