<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JadwalModel;
use Illuminate\Support\Facades\DB;

use App\LoginModel;

class LoginController extends Controller
{
    
    public function index(){
        return view('content.login');
    }

    public function login(){
        $name = request('email');
        $pass = request('pass');
        
        $query ="SELECT * FROM users WHERE username LIKE $name AND password LIKE $pass ";
        $results = DB::select($query);
        return $results;
    }

}