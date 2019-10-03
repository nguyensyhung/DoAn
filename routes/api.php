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
Route::group([
    'namespace' => 'Api',
    'prefix'    => 'v1',
    'as'        => 'api.',
], function () {

	//Category
    Route::get('categories/{category}/child', 'CategoryController@child')->name('categories.child');
    Route::put('categories/{category}', 'CategoryController@update')->name('categories.update');
    //District
    Route::get('cities/{city}/districts','CityController@listDistrictsById')->name('cities.list_districts_by_id');
});