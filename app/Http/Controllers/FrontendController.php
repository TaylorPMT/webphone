<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;


class FrontendController extends Controller
{
    public function getIndex(){
    	
    	$menu=DB::table('db_menu')->get();
    	return view('frontend.master',compact('menu'));
    }
}
