<?php

//Theme template

Route::get('/theme/ship-detail', 'ThemeController@shipDetail');
Route::get('/theme/ship-list', 'ThemeController@shipList');

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

Route::get('/login', 'AuthController@index');
Route::post('/login', 'AuthController@login')->name('login');

//Route::middleware('auth')->group(function () {

//Laravel Auth web routes
//Auth::routes();

// Auth protected web routes
Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/dashboard', 'AppController@index')->name('dashboard');
    Route::get('/logout', 'AuthController@logout')->name('logout');

    Route::get('/{any}', 'AppController@index')->where('any', '.*');
});
