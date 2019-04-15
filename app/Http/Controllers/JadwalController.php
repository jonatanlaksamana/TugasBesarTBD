<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JadwalModel;
class JadwalController extends Controller
{
    //
    public function index(){
        $allJadwal = JadwalModel::getAll();
        return view('content.jadwal' , compact('allJadwal'));
    }
}
