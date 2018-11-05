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

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/total', function () {
    $groups = DB::table('groups')->get();
    return view('total', compact('groups'));
});

Route::get('/players', function () {
    return view('players');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/players', 'AllplayersController@index')->name('total');