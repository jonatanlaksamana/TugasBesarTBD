<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use App\JadwalModel;
use App\Matakuliah;
class PilihJadwalController extends Controller
{
    //
    public function index(){
        $janto = Cache::get('auth');

        $matkul = Matakuliah::whereNull('semester')->with('children')->get();

        return view('content.pilihjadwal' , compact('matkul','janto'));
    }

    public function konfirmasi(){

        $janto = Cache::get('auth');
     $jadwalBentrok =   DB::select("CALL call_bentrok()");
     $jadwalTidakBentrok = DB::select("CALL call_schedule()");
     return view('content.confirmPilih' , compact('jadwalBentrok','jadwalTidakBentrok','janto'));
    }

    public function isiJadwal(){
        $janto = Cache::get('auth');
        $idUser = $janto[0]->id;
        $arrJadwal=  DB::select("CALL call_schedule()");
        foreach($arrJadwal as  $jadwal){
            DB::statement("CALL isiTempMengajar($jadwal->id,$idUser)" );
        }
        return redirect()->route('home.menu');
    }
}

