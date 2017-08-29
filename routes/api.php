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
Route::get('/', function () {
	return "Welcome to the coolest API by Karimunia";
});
Route::get('tilang', function () {
    return "API Tilang by Karimunia";
});
Route::get('tilang/{no}', 'TilangController@show')->name('show.tilang');