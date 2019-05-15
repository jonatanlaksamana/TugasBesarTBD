<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PilihJadwalModel extends Model{

    public function getAllTempJadwal(){
        return DB::select('select * from tempmatkul');
    }
}