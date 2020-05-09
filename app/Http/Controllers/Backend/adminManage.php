<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminManage extends Controller
{
    //
    function adminManageGet()
    {
        return view('backend.template');
    }
    function template()
    {
        return view('backend.template');
    }
}
