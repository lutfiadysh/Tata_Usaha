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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

	Route::middleware('bendahara')->group(function() {
        Route::prefix('bendahara')->group(function() {
            Route::resource('/input','InputController');
			Route::resource('/siswa','SiswaController');
			Route::resource('/rayon','RayonController');
		});
	});
	Route::middleware('siswa')->group(function() {
		Route::prefix('siswa')->group(function() {
			Route::get('','UserController@index')->name('beranda.create');
			Route::get('{id}', 'UserController@show')->name('data.show');
		});
	});
	Route::middleware('pembimbing')->group(function() {
		Route::prefix('pembimbing')->group(function() {
			Route::resource('/data','PembimbingController');
		});
	});

