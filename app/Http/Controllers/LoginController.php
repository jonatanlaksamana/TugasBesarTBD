<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JadwalModel;
class LoginController extends Controller
{
    //
    public function index(){
        return view('content.login');
    }
}