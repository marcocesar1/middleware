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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//admin
Route::group(['middleware' => 'userAdmin'], function(){
	Route::get('admin', 'HomeController@admin')->name('admin');
});

//guest
Route::group(['middleware' => 'userGuest'], function(){
	Route::get('guest', 'HomeController@guest')->name('guest');
});

Route::get('denegado', function(){
	return view('denegado', compact('msg'));
})->name('denegado');

Route::resource('marco', 'MarcoController');
