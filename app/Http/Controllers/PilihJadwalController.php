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
        $matkul = Matakuliah::whereNull('semester')->with('children')->get();

        return view('content.pilihjadwal' , compact('matkul'));
    }

    public function konfirmasi(){

     $jadwalBentrok =   DB::select("CALL call_bentrok()");
     $jadwalTidakBentrok = DB::select("CALL call_schedule()");
         return view('content.confirmPilih' , compact('jadwalBentrok','jadwalTidakBentrok'));
    }

    public function isiJadwal(){
        $janto = Cache::get('auth');
        $idUser = $janto[0]->id;
        $arrJadwal=  DB::select("CALL call_schedule()");
        foreach($arrJadwal as  $jadwal){
            DB::statement("CALL isiTempMengajar($jadwal->id,$idUser)" );
        }
        return "check db bos";
    }
}

