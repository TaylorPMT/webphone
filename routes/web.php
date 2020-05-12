<?php

use Illuminate\Support\Facades\Route;

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
//FRONT END ROUTE
Route::get('index',['as'=>'trangchu','uses'=>'FrontendController@getIndex']);






//END FRONTEND ROUTE
Route::get('/', function () {
    return view('backend.loginadmin');
});
/* backend */
// Route Login admin //
   Route::get('login','Backend\loginAdmin@getloginAdmin')->name('getloginAdmin');
   Route::post('postlogin','Backend\loginAdmin@postloginAdmin')->name('postloginAdmin');
   
   Route::group(['prefix' => 'admin','middleware'=>'loginAdminmiddleware'], function() {
       //
       Route::get('adminManageGet','Backend\adminManage@adminManageGet')->name('adminManageGet');

       //Quản Lý Sản Phẩm
       Route::get('product','Backend\Product@product')->name('product');

       Route::get('them','Backend\Product@getThem')->name('getThem');
       Route::post('postthem','Backend\Product@postThem')->name('postThem');

       Route::get('xoa/{id}','Backend\Product@getXoa')->name('getXoa');

       Route::get('sua/{id}','Backend\Product@getSua')->name('getSua');
       Route::post('postsua/{id}','Backend\Product@postSua')->name('postSua');
       
       Route::get('trangthai/{id}','Backend\Product@status')->name('status');
       //End Quản Lý Sản Phẩm
       // Quản Lý Loại 
        Route::get('catogory','Backend\catogory@catogory')->name('catogory');
        Route::get('update_category/{id_loai}','Backend\catogory@update_category')->name('update_category');
        Route::get('categoryInsert','Backend\catogory@categoryInsert')->name('categoryInsert');
        Route::post('postcategoryInsert','Backend\catogory@postcategoryInsert')->name('postcategoryInsert');

       // End quản Lý Loại

   
   });
//end login admin



//end login admin

//404
Route::get('error','Backend\Error@error')->name('error');
