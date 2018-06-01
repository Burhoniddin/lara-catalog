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

Route::get('/', 'ShopController@index')->name('home');
Route::get('/{cslug}/{aslug}', 'ShopController@show')->name('show');
Route::get('/{cslug}', 'ShopController@showcat')->name('showcat');

Auth::routes();

Route::get('/cabinet', 'Cabinet\HomeController@index')->name('cabinet');

Route::view('/home','shop-home');
Route::view('/item','shop-item');
Route::middleware(['auth'])->prefix('admin')->group(function () {
	// Matches The "/admin/users" URL
    Route::view('/index','admin.index');
});
