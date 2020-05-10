<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\db_category;
use App\Models\db_product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class Product extends Controller
{
    //
    public function product(){
        
        $product=db_product::all();
        
        return view('backend.product',compact('product'));
    }

    public function getThem(){
        $id=db_category::where('status','=',1)->select('id','name')->get();    
        return view('backend.product-them',compact('id'));
    }

    public function postThem(Request $request){
        $product=new db_product;
        $product->name=$request->nameProduct;
        $product->slug=Str::slug($request->nameProduct,'-');
        $product->price=$request->priceProduct;
        $product->pricesale=$request->pricesaleProduct;
        $product->detail=$request->detail;
        $product->catid=$request->category;
        $product->number=0;
        $product->metakey="abc";
        $product->metadesc="abc";   
        if($request->hasFile('file'))
    	{
    			$file=$request->file('file');
    			$name=$file->getClientOriginalName();
    			$hinh=str::random(4)."_".$name;
    			while ( file_exists("upload/tintuc/".$hinh)) {
    				$hinh=Str::random(4)."_".$name;
    			}
    			$file->move("upload/tintuc/",$hinh);
    			$product->img=$hinh;    			
    	}
    	else
    	{
    		$product->img="";
    	}
    	$product->save();
    	return redirect()->Route('them')->with("message",["type"=>"success","msg"=>"Thêm Thành Công!!"]);    
    }

    public function getXoa($id){
        $product=db_product::find($id);
        if($product==null)
          return redirect()->Route('product')->with("message",["type"=>"danger","msg"=>"Không tồn tại sản phẩm!!"]);
        
    }
}
