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
    return view('pages.registration');
});

Route::get('/widhei', function () {
    return view('pages.widhei');
});

Route::get('/select2', function () {
    return view('pages.select2');
});


Route::resource('customers','CustomerController');

Auth::routes();

Route::get('/home', 'HomeController@index');
