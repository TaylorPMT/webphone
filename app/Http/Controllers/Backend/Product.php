<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Product extends Controller
{
    //
    public function product(){
        return view('backend.product');
    }
}
