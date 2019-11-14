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

	Route::middleware('operator')->group(function() {
		Route::prefix('operator')->group(function() {
			Route::resource('/siswa','SiswaController');
			Route::resource('/rayon','RayonController');
			Route::post('/import','ExcelController@import_excel')->name('import.data');
			Route::post('/rayon/import', 'ExcelController@rayon_import')->name('import.rayon');
		});
	});

	Route::middleware('bendahara')->group(function() {
        Route::prefix('bendahara')->group(function() {
			Route::get('/input','InputController@index')->name('input.index');
			Route::get('/input/deleted', 'InputController@create')->name('input.create');
			Route::get('/input/{id}','InputController@show')->name('input.show');
			Route::post('/input/store', 'InputController@store')->name('input.store');
			Route::get('/input/{id}/restore', 'InputController@edit')->name('input.edit');
			Route::get('/input/{id}/delete','InputController@destroy')->name('input.destroy');
			Route::get('/delete/all', 'InputController@destroy_all')->name('input.destroy.all');
			Route::post('/tunggakan/import', 'ExcelController@tunggakan_import')->name('import.tunggakan');
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

