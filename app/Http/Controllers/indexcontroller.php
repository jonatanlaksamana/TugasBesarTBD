<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;
use Illuminate\Support\Facades\DB;

class indexcontroller extends Controller
{
    //
    public function index(){
//        use select to return array
        $allUsers =  UserModel::getAllUsers();
        return view('content.jadwal');
    }
}