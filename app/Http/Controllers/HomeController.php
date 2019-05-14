<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\JadwalModel;
class HomeController extends Controller
{
    //
    public function index(){
        $janto = Cache::get('auth');
       
        return view('content.home' , compact('janto'));
    }
}