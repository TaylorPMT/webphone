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
<<<<<<< HEAD
Route::group(['prefix' => 'admin'], function () {
    Route::apiResource('category', 'api\category');
    Route::get('search/{name}','api\category@searchName');
=======





Route::group(['prefix' => 'admin'], function() {
    Route::apiResource('category', 'api\category');
    Route::get('search/{name}','api\category@searchName');
    
    Route::get('product','Api\ProductController@product')->name('product');
    Route::apiResource('product', 'Api\ProductController');
    Route::post('postthem','Backend\Product@store')->name('postThem');
    //Route::delete('product/delete/{id}','ProductController@destroy');
    
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
});
