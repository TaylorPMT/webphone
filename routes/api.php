<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('product','Api\ProductController@product')->name('product');
Route::apiResource('product', 'Api\ProductController');

 //Route::delete('/delete/{id}','ProductController@destroy');

Route::group(['prefix' => 'admin'], function() {
    Route::apiResource('category', 'api\category');
    Route::get('search/{name}','api\category@searchName');
});
