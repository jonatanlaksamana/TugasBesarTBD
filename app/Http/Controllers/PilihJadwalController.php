<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\JadwalModel;
use App\Matakuliah;
class PilihJadwalController extends Controller
{
    //
    public function index(){
        $matkul = Matakuliah::whereNull('semester')->with('children')->get();

        return view('content.pilihjadwal' , compact('matkul'));
    }

    public function konfirmasi(){
     $jadwalBentrok =   DB::select("CALL Find_Bentrok()");
        return $jadwalBentrok;
        // return view('content.confirmPilih');

    }
}

