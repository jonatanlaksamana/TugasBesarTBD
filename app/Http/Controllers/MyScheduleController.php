<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\myScheduleModel;
class myScheduleController extends Controller
{
    //
    public function index($id){
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

        return view('content.mySchedule' , compact('allJadwal','allJadwal2','allJadwal3','allJadwal4','allJadwal5'
        ,'allJadwal6','allJadwal7','allJadwal8','allJadwal9','allJadwal10','allJadwal11','allJadwal12','allJadwal13'));
    }
  
}

