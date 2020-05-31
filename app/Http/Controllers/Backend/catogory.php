<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\db_category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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
    function categoryInsert()
    {
        return view('backend.categoryInsert');
    }
    function postcategoryInsert(Request $request)
    {  
        $user_id=Auth::user()->id;
        $row=new db_category;
        $row->name=$request->nameCat;
        $row->slug=Str::slug($request->nameCat,'-');
    
        $row->metadesc=html_entity_decode($request->metadesc);
        $row->metakey=html_entity_decode($request->metakey);
        $row->status=$request->status !=null ? 1:0;
        $row->created_at=Carbon::now('Asia/Ho_Chi_Minh');
        $row->created_by=$user_id;
        $row->updated_at=Carbon::now('Asia/Ho_Chi_Minh');
        $row->updated_by=$user_id;
        $row->parentid=0;
        $row->orders=1;
        if($row->save())
        {
            return redirect()->route("categoryInsert")->with("message",["type"=>"success","msg"=>"Thêm Thành Công "]);
        }
        else
        {
            return redirect()->route("categoryInsert")->with("message",["type"=>"danger","msg"=>"Thêm Thất Bại "]);
        }
    }
}
