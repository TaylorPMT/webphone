<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\db_category;
use Illuminate\Http\Request;

class catogory extends Controller
{
    //
    function catogory()
    {
        $list_cat=db_category::where('status','=',1)->get();
        return view('backend.category',compact('list_cat'));
    }
}
