<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginAdmin extends Controller
{
    // login 
    function getloginAdmin()
    {
        return view ("backend\loginadmin");

    }
    function postloginAdmin(Request $request)
    {
        $user=$request->username;
        $password=$request->password;
        if(Auth::attempt(['name' => $user, 'password' => $password,'access'=>1]))
        {
            return redirect()->route('template');
        }
        else
        {
            return redirect()->route('getloginAdmin');
        }
    }
    
    //end login
}
