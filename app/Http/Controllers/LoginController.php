<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoginModel;
class LoginController extends Controller
{
    //
    public function index(){
        return view('content.login');
    }
}