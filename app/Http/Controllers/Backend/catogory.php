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
        $list_cat=db_category::where('db_category.status','=',1)
        ->join('db_user','db_category.created_by','=','db_user.id')->select('db_category.*','db_user.fullname as ten')
        ->get();
       
       
        return view('backend.category',compact('list_cat'));
    }
    function update_category($id_loai)
    {
        $itemloai=db_category::find($id_loai);
        if($itemloai != null)
        {
        $itemloai->status=0;
        if($itemloai->save())
            {
                $status=1;

                return response($status);
            }

        }
        else
        {
            $status=0;
            return response($status);
        }
    }
}