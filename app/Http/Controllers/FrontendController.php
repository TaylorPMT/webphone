<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;

session_start();


class FrontendController extends Controller
{
    
    public function getIndex(){
    	$hang=DB::table('db_category')->get();
    	$menu=DB::table('db_menu')->get();
    	$pro=DB::table('db_product')->limit(8)->get();
    	return view('frontend.page.trangchu',compact('menu','hang','pro'));
    }
    public function hang($id){
    	$hang=DB::table('db_category')->get();
    	$menu=DB::table('db_menu')->get();
    	$pro=DB::table('db_product')->where('catid',$id)->get();
    	return view('frontend.page.hang',compact('hang','menu','pro'));
    }
    public function getSanpham($id)
    {
    	$hang=DB::table('db_category')->get();
    	$menu=DB::table('db_menu')->get();
    	$pro=DB::table('db_product')->where('id',$id)->first();

    	return view('frontend.page.sanpham',compact('hang','menu','pro'));
    }
    public function lienhe(){
        $hang=DB::table('db_category')->get();
        $menu=DB::table('db_menu')->get();
        
        return view('frontend.page.lienhe',compact('hang','menu'));
    }
    public function gioithieu()
    {
         $hang=DB::table('db_category')->get();
        $menu=DB::table('db_menu')->get();
        
        return view('frontend.page.gioithieu',compact('hang','menu'));
    }

    //Giỏ hàng
    
    public function giohang(){
        $hang=DB::table('db_category')->get();
        $menu=DB::table('db_menu')->get();

        
        return view('frontend.page.giohang',compact('hang','menu'));
   }


    //End giỏ hàng
}
