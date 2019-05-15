<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\UserModel;
use Illuminate\Support\Facades\DB;

class indexcontroller extends Controller
{
    //
    public function index(){
//        use select to return array
       return $janto = Cache::get('auth');
        // return view('content.jadwal');
    }
}
