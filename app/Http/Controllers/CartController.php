<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;

class CartController extends Controller
{
	public $giohang=array('0'=>array());
    public function addCart(Request $req){
    	$productId = $req->productid_hidden;
        $quantity = $req->qty;
    	$product=DB::table('db_product')->where('id',$productId)->first();
    	$cart=['id'=>$productId,'name'=>$product->name,'qty'=>$quantity,'price'=>$product->price,'img'=>$product->img];
    	$cart=['id'=>$productId,'name'=>$product->name,'qty'=>$quantity,'price'=>$product->price,'img'=>$product->img];
    	$giohang[]=$cart;
    	$giohang[]=$cart;
    	foreach ($giohang as $g) {
    		dd($g);
    	}
    	
    	
    }
}
