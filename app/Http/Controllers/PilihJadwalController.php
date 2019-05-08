<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JadwalModel;
use App\Matakuliah;
class PilihJadwalController extends Controller
{
    //
    public function index(){
        $matkul = Matakuliah::whereNull('semester')->with('children')->get();

        return view('content.pilihjadwal' , compact('matkul'));
    }
}

