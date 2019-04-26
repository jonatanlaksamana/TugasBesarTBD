<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HeaderModel;
class HeaderController extends Controller
{
    //
    public function index(){
        return view('content.header');
    }
}