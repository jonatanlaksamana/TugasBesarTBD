<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;
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
        
        $query ="SELECT * FROM users WHERE username LIKE '$name' AND password LIKE '$pass' ";
        $results = DB::select($query);
        if($results != null){
            Cache::put('auth', $results);
            return redirect()->route('home.menu');
        }
        else{
            return "ga ada";

        }
    }

    public function logout(){
        Cache::flush();
        DB::statement('truncate table tempmatkul');
        return redirect()->route('login');

    }

}