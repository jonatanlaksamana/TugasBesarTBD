<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use App\UserModel;
use App\Matakuliah;
use App\JadwalModel;
class PilihJadwalController extends Controller
{
    //
    public function index(){
        $janto = Cache::get('auth');
        $userLogin = UserModel::getUserLogin($janto[0]->id);
        $janto = $userLogin;

        if($userLogin[0]->isFill == 0){
            $matkul = Matakuliah::whereNull('semester')->with('children')->get();
            return view('content.pilihjadwal' , compact('matkul','janto'));
        }
        else{
            return view('content.home' , compact('janto'))->with(['error' => 'anda telah mengisi']);
        }


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
        UserModel::toggleIsFill($idUser);
        DB::statement("CALL  isiMengajar($idUser)" );


        return redirect()->route('home.menu');
    }
}

