<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use app\db_topic;
use app\db_post;
use App\Models\db_user;
use Illuminate\Support\Carbon;
use Auth;
use Session;
use Illuminate\Support\Facades\Hash;
class FrontendController extends Controller
{
    public function getIndex(){
    	
    	$menu=DB::table('db_menu')->get();
    	return view('frontend.master',compact('menu'));
    }
    public function getNews(){

    	$menu_ngang = DB:: table('db_topic')->get();
    	$tintuc= DB:: table('db_post')->paginate(4);

    	return view('frontend.news',compact('menu_ngang','tintuc'));
    	

    }
    public function newsDetail($slug)
    {
        $menu_ngang = DB:: table('db_topic')->get();
        $timkiem=DB::table('db_topic')->where('slug','=',$slug)->first();
        $baipostlienquan=DB::table('db_post')->where('topid','=',$timkiem->id)->paginate(4);
       
        return view('frontend.newspost',compact('menu_ngang','baipostlienquan'));
    }
    public function getChitiet($id){
        $menu_ngang = DB:: table('db_topic')->get();
        $noidung=DB::table('db_post')->find($id);

        return view('frontend.chitiet',compact('menu_ngang','noidung'));
    }
    public function getLogin(){
        return view('frontend.dangnhap');
    }
    public function getDangki(){
        return view('frontend.dangki');
    }
    public function postDangki(Request $req)
    {   
        $this->validate($req,
            [
                'email'=>'required|email|unique:db_user,email',
                'pass1'=>'required|','pass1'=>'min:6|max:20',
                'username'=>'required|unique:db_user,name',
                'fullname'=>'required|',
                'sdt'=>'required|min:10|max:10',
                'sdt'=>'integer',
            ],
            [
                'email.required'=>'Email không để trống',
                'email.email'=>'Email không đúng định dạng',
                'email.unique'=>'Email đã tồn tại',
                'username.unique'=>'username đã tồn tại',
                'pass1.required'=>'mật khẩu không để trống',
                'fullname.required'=>'Tên người dùng không để trống',
                'sdt.required'=>'sdt không để trống',
                'pass1.min'=>'mật khẩu ít nhát 6 kí tự',
                'pass1.max'=>'mật khẩu không quá 20 kí tự',
                'sdt.min'=>'mật khẩu ít nhát 10 kí tự',
                'sdt.max'=>'mật khẩu không quá 10 kí tự',
                'sdt.integer'=>'sdt phải là số nguyên',


            ]);
        $newUser= new db_user;
        if(preg_match('/^[0-9]+$/',$req->get('fullname')==false))
             return redirect()->route("getDangki")->with("message",["type"=>"success","msg"=>"Tên người dùng không chứa số"]);
        $newUser->fullname=$req->get('fullname');
        if($req->get('pass1')!=$req->get('pass2'))
        {
               return redirect()->route("getDangki")->with("message",["type"=>"success","msg"=>"Pass Nhập Lại Không Đúng Kiểm Tra Lại"]);

        }
        $newUser->password=bcrypt($req->get('pass1'));
        $newUser->gender=1;
        if($req->get('sdt')<0)
            return redirect()->route("getDangki")->with("message",["type"=>"success","msg"=>"sdt phải lớn hơn 0"]);
        $newUser->phone=$req->get('sdt');
        $newUser->email=$req->get('email');
        if(preg_match('r'^[a-zA-Z0-9]*$'', $req->get('username')==false))
            return redirect()->route("getDangki")->with("message",["type"=>"success","msg"=>"username không chứa kí tự đặt biệt"]);
        $newUser->name=$req->get('username');
        $newUser->access=2;
        $newUser->created_at=Carbon::now('Asia/Ho_Chi_Minh');
        $newUser->created_by=1;
        $newUser->updated_at=Carbon::now('Asia/Ho_Chi_Minh');
        $newUser->updated_by=1;
        $newUser->status=1;
       if($newUser->save()) 
        return redirect()->route("getDangki")->with("message",["type"=>"success","msg"=>"Đăng Ký Thành Công"]);


    }
    public function postdangnhap(Request $request)
    {
         $user=$request->name;
        $password=$request->pass;
        if(Auth::attempt(['name' => $user, 'password' => $password,'access'=>2]))
        {   
            $menu=DB::table('db_menu')->get();
               session()->put('name',$user);
            return redirect()->route('trangchu',compact('menu','user'));
        }
        else
        { 
           
            return redirect()->back()->with("message",["type"=>"danger","msg"=>"Sai mật khẩu or tài khoản"])->withInput();
        }
    }
    public function dangxuat(){
        if(Auth::check())
        {
            Auth::logout();
        }
        Request::session()->flush();
        return redirect()->route('trangchu');
    }
}
