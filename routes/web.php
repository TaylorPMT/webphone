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

<<<<<<< HEAD
       //Quản Lý Sản Phẩm
       Route::get('product','Backend\Product@product')->name('product');
       //End Quản Lý Sản Phẩm
=======
       // Quản Lý Loại 
        Route::get('catogory','Backend\catogory@catogory')->name('catogory');

       // End quản Lý Loại

   
>>>>>>> ef90fe5848ebc64f420ccee265212e409539c07b
   });
//end login admin



//end login admin

//404
Route::get('error','Backend\Error@error')->name('error');
