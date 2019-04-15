<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class Seeder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('users')->insert(
            ['id' => 1, 'nama' => 'Vania']
        );
        DB::table('users')->insert(
            ['id' => 2, 'nama' => 'Pascal']
        );
        DB::table('users')->insert(
            ['id' => 3, 'nama' => 'Husnul']
        );
        DB::table('users')->insert(
            ['id' => 4, 'nama' => 'Chandra']
        );
        DB::table('users')->insert(
            ['id' => 5, 'nama' => 'Kris']
        );
        DB::table('users')->insert(
            ['id' => 6, 'nama' => 'Mariska']
        );
        DB::table('users')->insert(
            ['id' => 7, 'nama' => 'Rosa']
        );
        DB::table('users')->insert(
            ['id' => 8, 'nama' => 'Vero']
        );
        DB::table('users')->insert(
            ['id' => 9, 'nama' => 'Eli']
        );
        DB::table('users')->insert(
            ['id' => 10, 'nama' => 'Natalia']
        );
        DB::table('users')->insert(
            ['id' => 11, 'nama' => 'Keenan']
        );
        DB::table('users')->insert(
            ['id' => 12, 'nama' => 'Nurmala']
        );
        DB::table('users')->insert(
            ['id' => 13, 'nama' => 'Lucy']
        );
        DB::table('users')->insert(
            ['id' => 14, 'nama' => 'Reymon']
        );
        DB::table('users')->insert(
            ['id' => 15, 'nama' => 'Heni']
        );
        DB::table('users')->insert(
            ['id' => 16, 'nama' => 'Janto']
        );


        DB::table('matakuliah')->insert(
            ['id' => 1, 'name' =>'Topik Khusus Sistem Informasi 1','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 2, 'name' =>'Design dan Analisis Algoritma','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 3, 'name' =>'Pemrograman Berbasis Web','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 4, 'name' =>'Sertifikasi Administrasi Jaringan Komputer 2','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 5, 'name' =>'Matriks dan Ruang Vektor','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 6, 'name' =>'Permodelan untuk Komputasi','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 7, 'name' =>'Algoritma dan Struktur Data','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 8, 'name' =>'Arsitektur dan Organisasi Komputer','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 9, 'name' =>'Skripsi 2','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 10, 'name' =>'Skripsi 1','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 11, 'name' =>'Etika Profesi','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 12, 'name' =>'Pemrograman Berbasis Web Lanjut','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 13, 'name' =>'Mekanika 1','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 14, 'name' =>'Dasar-dasar Pemrograman','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 15, 'name' =>'Manajemen Informasi dan Basis Data','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 16, 'name' =>'Topik Khusus Sistem Informasi 2','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 17, 'name' =>'Pengantar Jaringan Komputer','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 18, 'name' =>'Permodelan untuk Komputasi 2','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 19, 'name' =>'Pemrograman Kompetitif 2','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 20, 'name' =>'Proyek Informatika','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 21, 'name' =>'Proyek Sistem Informasi','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 22, 'name' =>'Pengantar Sistem Informasi','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 23, 'name' =>'Logika Informatika','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 24, 'name' =>'Algortima Kriptografi','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 25, 'name' =>'Teknologi Basis Data','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 26, 'name' =>'Setifikasi Administrasi Jaringan Komputer 3','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 27, 'name' =>'Sistem E-Commerce','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 28, 'name' =>'Sistem Multi Agen','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 29, 'name' =>'Metode Numerik','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 30, 'name' =>'Penulisan Ilmiah','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 31, 'name' =>'Topik Khusus Informatika 2','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 32, 'name' =>'Intrumen dengan IoT','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 33, 'name' =>'Pemrograman Permainan Komputer','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 34, 'name' =>'Sertifikasi Administrasi Jaringan Komputer 4','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 35, 'name' =>'Topik Khusus Sistem Terdistribusi 2','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 36, 'name' =>'Topik Khusus Informatika','semester'=>6]
        );
        DB::table('matakuliah')->insert(
            ['id' => 37, 'name' =>'Pemrograman Komputer','semester'=>6]
        );
        


        DB::table('ruangan')->insert(
            ['idRoom' =>'9120' ,'jumlahMhs'=>0]
        );
        DB::table('ruangan')->insert(
            ['idRoom' =>'9121' ,'jumlahMhs'=>0]
        );
        DB::table('ruangan')->insert(
            ['idRoom' =>'9122' ,'jumlahMhs'=>0]
        );
        DB::table('ruangan')->insert(
            ['idRoom' =>'10316' ,'jumlahMhs'=>0]
        );
        DB::table('ruangan')->insert(
            ['idRoom' =>'10317' ,'jumlahMhs'=>0]
        );
        DB::table('ruangan')->insert(
            ['idRoom' =>'10322' ,'jumlahMhs'=>0]
        );
        DB::table('ruangan')->insert(
            ['idRoom' =>'10307' ,'jumlahMhs'=>0]
        );
        DB::table('ruangan')->insert(
            ['idRoom' =>'SB-914' ,'jumlahMhs'=>0]
        );
        DB::table('ruangan')->insert(
            ['idRoom' =>'SB-913' ,'jumlahMhs'=>0]
        );
        DB::table('ruangan')->insert(
            ['idRoom' =>'SB-915' ,'jumlahMhs'=>0]
        );
        DB::table('ruangan')->insert(
            ['idRoom' =>'SB-916' ,'jumlahMhs'=>0]
        );
        DB::table('ruangan')->insert(
            ['idRoom' =>'SB-917' ,'jumlahMhs'=>0]
        );
        DB::table('ruangan')->insert(
            ['idRoom' =>'SB-918' ,'jumlahMhs'=>0]
        );


        DB::table('jadwals')->insert(
            ['id'=>1,'idMk'=>5,'type'=>0,'hari'=>1,'idRoom'=>'9120','timeStart'=>'07:00:00','timeEnd'=>'10:00:00']
        );
        DB::table('jadwals')->insert(
            ['id'=>2,'idMk'=>6,'type'=>0,'hari'=>1,'idRoom'=>'9120','timeStart'=>'10:00:00','timeEnd'=>'13:00:00']
        );
        DB::table('jadwals')->insert(
            ['id'=>3,'idMk'=>8,'type'=>0,'hari'=>1,'idRoom'=>'9120','timeStart'=>'13:00:00','timeEnd'=>'15:00:00']
        );
        DB::table('jadwals')->insert(
            ['id'=>4,'idMk'=>8,'type'=>0,'hari'=>1,'idRoom'=>'9120','timeStart'=>'15:00:00','timeEnd'=>'17:00:00']
        );
        DB::table('jadwals')->insert(
            ['id'=>5,'idMk'=>5,'type'=>0,'hari'=>1,'idRoom'=>'9121','timeStart'=>'07:00:00','timeEnd'=>'10:00:00']
        );
        DB::table('jadwals')->insert(
            ['id'=>6,'idMk'=>7,'type'=>0,'hari'=>1,'idRoom'=>'9121','timeStart'=>'10:00:00','timeEnd'=>'13:00:00']
        );
        DB::table('jadwals')->insert(
            ['id'=>7,'idMk'=>25,'type'=>0,'hari'=>1,'idRoom'=>'9121','timeStart'=>'13:00:00','timeEnd'=>'15:00:00']
        );
        DB::table('jadwals')->insert(
            ['id'=>8,'idMk'=>36,'type'=>0,'hari'=>1,'idRoom'=>'9122','timeStart'=>'07:00:00','timeEnd'=>'09:00:00']
        );
        DB::table('jadwals')->insert(
            ['id'=>9,'idMk'=>11,'type'=>0,'hari'=>1,'idRoom'=>'9122','timeStart'=>'11:00:00','timeEnd'=>'13:00:00']
        );
        DB::table('jadwals')->insert(
            ['id'=>10,'idMk'=>25,'type'=>0,'hari'=>1,'idRoom'=>'9122','timeStart'=>'13:00:00','timeEnd'=>'15:00:00']
        );
        DB::table('jadwals')->insert(
            ['id'=>11,'idMk'=>2,'type'=>0,'hari'=>1,'idRoom'=>'10316','timeStart'=>'07:00:00','timeEnd'=>'09:00:00']
        );
        DB::table('jadwals')->insert(
            ['id'=>12,'idMk'=>2,'type'=>0,'hari'=>1,'idRoom'=>'10316','timeStart'=>'10:00:00','timeEnd'=>'13:00:00']
        );
        DB::table('jadwals')->insert(
            ['id'=>13,'idMk'=>9,'type'=>0,'hari'=>1,'idRoom'=>'10316','timeStart'=>'13:00:00','timeEnd'=>'14:00:00']
        );
        DB::table('jadwals')->insert(
            ['id'=>14,'idMk'=>9,'type'=>0,'hari'=>1,'idRoom'=>'10317','timeStart'=>'13:00:00','timeEnd'=>'14:00:00']
        );
        DB::table('jadwals')->insert(
            ['id'=>15,'idMk'=>10,'type'=>0,'hari'=>1,'idRoom'=>'10317','timeStart'=>'14:00:00','timeEnd'=>'15:00:00']
        );
        DB::table('jadwals')->insert(
            ['id'=>16,'idMk'=>11,'type'=>0,'hari'=>1,'idRoom'=>'10317','timeStart'=>'15:00:00','timeEnd'=>'17:00:00']
        );
        DB::table('jadwals')->insert(
            ['id'=>17,'idMk'=>35,'type'=>0,'hari'=>1,'idRoom'=>'SB-914','timeStart'=>'10:00:00','timeEnd'=>'13:00:00']
        );
        DB::table('jadwals')->insert(
            ['id'=>18,'idMk'=>3,'type'=>0,'hari'=>1,'idRoom'=>'SB-916','timeStart'=>'07:00:00','timeEnd'=>'10:00:00']
        );
        DB::table('jadwals')->insert(
            ['id'=>19,'idMk'=>3,'type'=>0,'hari'=>1,'idRoom'=>'SB-916','timeStart'=>'10:00:00','timeEnd'=>'13:00:00']
        );
        DB::table('jadwals')->insert(
            ['id'=>20,'idMk'=>12,'type'=>0,'hari'=>1,'idRoom'=>'SB-916','timeStart'=>'14:00:00','timeEnd'=>'17:00:00']
        );
        DB::table('jadwals')->insert(
            ['id'=>21,'idMk'=>4,'type'=>0,'hari'=>1,'idRoom'=>'SB-917','timeStart'=>'07:00:00','timeEnd'=>'10:00:00']
        );
        DB::table('jadwals')->insert(
            ['id'=>22,'idMk'=>37,'type'=>0,'hari'=>1,'idRoom'=>'SB-918','timeStart'=>'10:00:00','timeEnd'=>'13:00:00']
        );
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::statement('TRUNCATE TABLE  users');
    }
}
