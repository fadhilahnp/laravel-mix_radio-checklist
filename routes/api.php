<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware('auth:api')->group(function () {
    // Ship
    Route::get('/ship/list',
    ['as' => 'api.ship.list', 'uses' => 'Api\ApiShipController@index']);
    Route::get('/ship/{id}',
    ['as' => 'api.ship.detail', 'uses' => 'Api\ApiShipController@show']);
    Route::post('/ship/create',
    ['as' => 'api.ship.create', 'uses' => 'Api\ApiShipController@store']);
    Route::delete('/ship/{id}',
    ['as' => 'api.ship.destroy', 'uses' => 'Api\ApiShipController@destroy']);

    // Ship Detail
    Route::get('/ship-detail/{ref_no}',
    ['as' => 'api.ship-detail.list', 'uses' => 'Api\ApiShipDetailController@show']);

    // Radio
    Route::get('/radio/list',
    ['as' => 'api.radio.list', 'uses' => 'Api\ApiRadioController@index']);
// });

