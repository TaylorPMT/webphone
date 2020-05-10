<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\db_product;
use Illuminate\Http\Request;

class Product extends Controller
{
    //
    public function product(){
        
        $product=db_product::all();
        
        return view('backend.product',compact('product'));
    }

    
}
