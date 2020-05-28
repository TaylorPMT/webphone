<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\db_order;
use App\Models\db_orderdetail;
use Illuminate\Http\Request;

class orderUser extends Controller
{
    //
    function index()
    {
       $list=db_order::where('status','=','1')->orderBy('created_at','desc')->get();
       return view('backend.orderUser',compact('list'));
    }
    public function approved()
    {
        $list=db_order::where('status','=','2')->orderBy('created_at','desc')->get();
        return view('backend.approved',compact('list'));
    }
    public function error()
    {
        $list=db_order::where('status','=','3')->orderBy('created_at','desc')->get();
        return view('backend.error',compact('list'));
    }
    public function orderdetail($code)
    {
        $list=db_orderdetail::where('db_orderdetail.orderid','=',$code)
        ->join("db_product","db_orderdetail.productid",'=',"db_product.id")
        ->select('db_orderdetail.*','db_product.name as name')
        ->get();
        return view('backend.orderUserDetail',compact('list'));
    }
    public function status($code)
    {    $listid=db_orderdetail::where('orderid','=',$code)->first();
        
        $list=$listid->id;
        
        $roworder=db_order::find($list);
        $roworder->status=2;

    $roworder->save();
        return redirect()->route('orderUser')->with("message",["type"=>"success","msg"=>"Duyệt Đơn Thành Công "]);;
    }
    public function errorsatus($code)
    {   
        
        $listid=db_orderdetail::where('orderid','=',$code)->first();
        
            $list=$listid->id;
        
        $roworder=db_order::find($list);
        $roworder->status=3;

        $roworder->save();
        return redirect()->route('orderUser')->with("message",["type"=>"danger","msg"=>"Đơn Hàng Bị Lỗi  "]);;
    }
}
