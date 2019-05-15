<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\JadwalModel;
use Illuminate\Support\Facades\Cache;
use App\UserModel;
class JadwalController extends Controller
{
    //
    public function index($id){
        $janto =   Cache::get('auth');
        $allJadwal = JadwalModel::getAll9120($id);
        $allJadwal2 = JadwalModel::getAll9121($id);
        $allJadwal3 = JadwalModel::getAll9122($id);
        $allJadwal4 = JadwalModel::getAll10316($id);
        $allJadwal5 = JadwalModel::getAll10317($id);
        $allJadwal6 = JadwalModel::getAll10322($id);
        $allJadwal7 = JadwalModel::getAll10307($id);
        $allJadwal8 = JadwalModel::getAllSB914($id);
        $allJadwal9 = JadwalModel::getAllSB913($id);
        $allJadwal10 = JadwalModel::getAllSB915($id);
        $allJadwal11 = JadwalModel::getAllSB916($id);
        $allJadwal12 = JadwalModel::getAllSB917($id);
        $allJadwal13 = JadwalModel::getAllSB918($id);

        return view('content.jadwal' , compact('allJadwal','allJadwal2','allJadwal3','allJadwal4','allJadwal5'
        ,'allJadwal6','allJadwal7','allJadwal8','allJadwal9','allJadwal10','allJadwal11','allJadwal12','allJadwal13','janto'));
    }

    public function pilihJadwal(){
        $arrCheck= \request('id');
        foreach($arrCheck as  $id){
            DB::statement("CALL insertTempMatkul($id)" );
        }
        return redirect()->route('schedule.choose');
    }

    public function jadwalNotif(){
        $janto = Cache::get('auth');
        $idUser = $janto[0]->id;
        $jadwalBentrok =   DB::select("call call_bentrok_schedule($idUser)");
        if(sizeof($jadwalBentrok) == 0){
            UserModel::toggleIsFill($idUser);
        }
        return view('content.notifSchedule' , compact('jadwalBentrok','janto'));
    }

    public function jadwalSaya($id){
        $janto = Cache::get('auth');
        $mySchedule = DB::select("select users.id ,users.nama , matakuliah.name ,jadwals.kelas , jadwals.timeStart, jadwals.timeEnd,jadwals.hari,jadwals.idRoom from mengajar join jadwals on mengajar.idJadwal = jadwals.id join users on users.id = mengajar.idUser join matakuliah on matakuliah.id = jadwals.idMk where users.id = $id");
        return view('content.JadwalSaya',compact('mySchedule' , 'janto'));

    }
  
}

