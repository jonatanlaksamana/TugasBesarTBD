<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\myScheduleModel;
class myScheduleController extends Controller
{
    //
    public function index($id){
        
        $allJadwal = myScheduleModel::getAll9120($id);
        $allJadwal2 = myScheduleModel::getAll9121($id);
        $allJadwal3 = myScheduleModel::getAll9122($id);
        $allJadwal4 = myScheduleModel::getAll10316($id);
        $allJadwal5 = myScheduleModel::getAll10317($id);
        $allJadwal6 = myScheduleModel::getAll10322($id);
        $allJadwal7 = myScheduleModel::getAll10307($id);
        $allJadwal8 = myScheduleModel::getAllSB914($id);
        $allJadwal9 = myScheduleModel::getAllSB913($id);
        $allJadwal10 = myScheduleModel::getAllSB915($id);
        $allJadwal11 = myScheduleModel::getAllSB916($id);
        $allJadwal12 = myScheduleModel::getAllSB917($id);
        $allJadwal13 = myScheduleModel::getAllSB918($id);

        return view('content.mySchedule' , compact('allJadwal','allJadwal2','allJadwal3','allJadwal4','allJadwal5'
        ,'allJadwal6','allJadwal7','allJadwal8','allJadwal9','allJadwal10','allJadwal11','allJadwal12','allJadwal13'));
    }
  
}

