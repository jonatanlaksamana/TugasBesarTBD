<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JadwalModel extends Model
{
    //
    protected $table = 'jadwals';


    public static function truncateTableBentrok(){
        return DB::statement('truncate table result_table');
    }
    public static function truncateTableBentrok2(){
        return DB::statement('truncate table tempmatkul');
    }
    public static function toggleIsSelected($id){
        return DB::statement("update jadwals set isSelected = 1  where id = $id");
    }

    public static function getAll9120($id){

        return DB::select(
            'select 
                jadwals.*,
                matakuliah.singkatan 
            from 
                jadwals inner join matakuliah on matakuliah.id = jadwals.idMk  
            where 
                hari = ? and idRoom like ?', [$id,9120]
        );

    }

    public static function getAll9121($id ){

        return DB::select(
            'select 
                jadwals.*,
                matakuliah.singkatan  
            from 
                jadwals inner join matakuliah on matakuliah.id = jadwals.idMk  
            where 
                hari = ? and idRoom like ?', [$id,9121]
        );

    }

    public static function getAll9122( $id){

        return DB::select(
            'select 
                jadwals.*,
                matakuliah.singkatan  
            from 
                jadwals inner join matakuliah on matakuliah.id = jadwals.idMk  
            where 
                hari = ? and idRoom like ?', [$id,9122]
        );

    }

    public static function getAll10316($id ){

        return DB::select(
            'select 
                jadwals.*,
                matakuliah.singkatan  
            from 
                jadwals inner join matakuliah on matakuliah.id = jadwals.idMk  
            where 
                hari = ? and idRoom like ?', [$id,10316]
        );

    }

    public static function getAll10317($id ){

        return DB::select(
            'select 
                jadwals.*,
                matakuliah.singkatan  
            from 
                jadwals inner join matakuliah on matakuliah.id = jadwals.idMk  
            where 
                hari = ? and idRoom like ?', [$id,10317]
        );

    }

    public static function getAll10322( $id){

        return DB::select(
            'select 
                jadwals.*,
                matakuliah.singkatan  
            from 
                jadwals inner join matakuliah on matakuliah.id = jadwals.idMk  
            where 
                hari = ? and idRoom like ?', [$id,10322]
        );

    }

    public static function getAll10307( $id){

        return DB::select(
            'select 
                jadwals.*,
                matakuliah.singkatan  
            from 
                jadwals inner join matakuliah on matakuliah.id = jadwals.idMk  
            where 
                hari = ? and idRoom like ?', [$id,10307]
        );

    }

    public static function getAllSB914( $id){

        return DB::select(
            "select 
                jadwals.*,
                matakuliah.singkatan  
            from 
                jadwals inner join matakuliah on matakuliah.id = jadwals.idMk  
            where 
                hari = ? and idRoom like ?", [$id,'SB-914']
        );

    }

    public static function getAllSB913($id ){

        return DB::select(
            'select 
                jadwals.*,
                matakuliah.singkatan  
            from 
                jadwals inner join matakuliah on matakuliah.id = jadwals.idMk  
            where 
                hari = ? and idRoom like ?', [$id,'SB-913']
        );

    }

    public static function getAllSB915($id ){

        return DB::select(
            'select 
                jadwals.*,
                matakuliah.singkatan  
            from 
                jadwals inner join matakuliah on matakuliah.id = jadwals.idMk  
            where 
                hari = ? and idRoom like ?', [$id,'SB-915']
        );

    }

    public static function getAllSB916($id ){

        return DB::select(
            'select 
                jadwals.*,
                matakuliah.singkatan  
            from 
                jadwals inner join matakuliah on matakuliah.id = jadwals.idMk  
            where 
                hari = ? and idRoom like ?', [$id,'SB-916']
        );

    }

    public static function getAllSB917($id ){

        return DB::select(
            'select 
                jadwals.*,
                matakuliah.singkatan  
            from 
                jadwals inner join matakuliah on matakuliah.id = jadwals.idMk  
            where 
                hari = ? and idRoom like ?', [$id,'SB-917']
        );

    }

    public static function getAllSB918($id ){

        return DB::select(
            'select 
                jadwals.*,
                matakuliah.singkatan  
            from 
                jadwals inner join matakuliah on matakuliah.id = jadwals.idMk  
            where 
                hari = ? and idRoom like ?', [$id,'SB-918']
        );

    }

}
