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
            id int primary key  AUTO_INCREMENT,
            nama varchar(50),
            username varchar(20),
            password varchar(20),
            isFill int default  0
        )');
        
        DB::statement('create table Ruangan (
            idRoom varchar(50) primary key ,
            kapasitas int
        )');
        DB::statement('create table MataKuliah (
            id int primary key  AUTO_INCREMENT,
            name varchar(50),
            semester int,
            sks int,
            singkatan varchar(50)

        )');
        DB::statement('create table Jadwals (
            id int primary key  AUTO_INCREMENT,
            idMk int,
            type int,
            hari int,
            idRoom varchar(50),
            timeStart time,
            timeEnd time,
            kelas varchar(1),
            durasi int,
            prioritas int,
            isSelected boolean default  false
        )');

        DB::statement('create table Mengajar(
            idJadwal int,
            idUser int
        )');

        DB::statement('create table Mahasiswa(
            npm int primary key,
            nama varchar(50),
            semesterMhs int
        )');


        DB::statement('create table tempMatKul(
            id int ,
            idMk int ,
            name varchar(50),
            timeStart time,
            timeEnd time,
            idRoom varchar (50),
            kelas varchar(50) ,
            type int,
            hari int,
            semester int,
            isSelected int
        )');
        DB::statement('create table tempMengajar(
            idJadwal int ,
            idUser int
        )');
        DB::statement('create table result_table(
            idJadwal int ,
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
        DB::statement('drop table Mahasiswa');
        DB::statement('drop table tempMatKul');
    }
}