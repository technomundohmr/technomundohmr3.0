<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexCMSController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:loginCMS');
    }
    public function index(){
        return view('cms.index');
    }
}
