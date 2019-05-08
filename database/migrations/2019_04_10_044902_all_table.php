<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
class AllTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::statement('create table Users (
            id int primary key ,
            nama varchar(50),
            username varchar(20),
            password varchar(20)
        )');
        
        DB::statement('create table Ruangan (
            idRoom varchar(50) primary key ,
            kapasitas int
        )');
        DB::statement('create table MataKuliah (
            id int primary key ,
            name varchar(50),
            semester int
        )');
        DB::statement('create table Jadwals (
            id int primary key,
            idMk int,
            type int,
            hari int,
            idRoom varchar(50),
            timeStart time,
            timeEnd time
        )');
        DB::statement('create table Mengajar(
            idJadwal int,
            idUser int
        )');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('drop table Users');
        DB::statement('drop table Ruangan');
        DB::statement('drop table MataKuliah');
        DB::statement('drop table Jadwals');
        DB::statement('drop table Mengajar');
    }
}
