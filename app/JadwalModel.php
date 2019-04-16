<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JadwalModel extends Model
{
    //
    protected $table = 'jadwals';

    public static function getAll( ){
        // return   DB::select('

        // select 
        //     jadwals.*,
        //     matakuliah.name 
        // from 
        //     jadwals inner join matakuliah on matakuliah.id = jadwals.idMk  
        // where 
        //     hari = 1 and idRoom like 10316');

        return DB::select(
            'select 
                jadwals.*,
                matakuliah.name  
            from 
                jadwals inner join matakuliah on matakuliah.id = jadwals.idMk  
            where 
                hari = 1 and idRoom like ?', [10316]);
    
           // return view('user.index', ['users' => $users]);
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
