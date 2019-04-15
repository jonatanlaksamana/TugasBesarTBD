<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JadwalModel extends Model
{
    //
    protected $table = 'jadwals';

    public static function getAll(){
        return   DB::select('select * from jadwals  where hari = 1 and idRoom  like 10316');
    }

    // public static function parent()
    // {
    //     return $this->belongsTo('jadwals','idRoom');
    // }
    // public static function child()
    // {
    //     return $this->hasMany('jadwals','idRoom','idMK',);
    // }
}
