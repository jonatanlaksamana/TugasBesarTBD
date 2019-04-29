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

        //username password
        DB::table('users')->update(
            ['username' => 'vania1', 'password' => '123']
        );
        DB::table('users')->update(
            ['username' => 'pascal2', 'password' => '234']
        );
        DB::table('users')->update(
            ['username' => 'husnul3', 'password' => '345']
        );
        DB::table('users')->update(
            ['username' => 'chandra4', 'password' => '456']
        );
        DB::table('users')->update(
            ['username' => 'kris5', 'password' => '567']
        );
        DB::table('users')->update(
            ['username' => 'mariska6', 'password' => '678']
        );
        DB::table('users')->update(
            ['username' => 'rosa7', 'password' => '789']
        );
        DB::table('users')->update(
            ['username' => 'vero8', 'password' => '898']
        );
        DB::table('users')->update(
            ['username' => 'eli9', 'password' => '987']
        );
        DB::table('users')->update(
            ['username' => 'natalia10', 'password' => '876']
        );
        DB::table('users')->update(
            ['username' => 'keenan11', 'password' => '765']
        );
        DB::table('users')->update(
            ['username' => 'nurmala12', 'password' => '654']
        );
        DB::table('users')->update(
            ['username' => 'lucy13', 'password' => '543']
        );
        DB::table('users')->update(
            ['username' => 'reymon14', 'password' => '321']
        );
        DB::table('users')->update(
            ['username' => 'heni15', 'password' => '212']
        );
        DB::table('users')->update(
            ['username' => 'janto16', 'password' => '012']
        );


        DB::table('matakuliah')->insert(
            ['id' => 1, 'name' =>'Topik Khusus Sistem Informasi 1','semester'=>5,'singkatan'=>'TKSI 1']
        );
        DB::table('matakuliah')->insert(
            ['id' => 2, 'name' =>'Design dan Analisis Algoritma','semester'=>5,'singkatan'=>'DAA']
        );
        DB::table('matakuliah')->insert(
            ['id' => 3, 'name' =>'Pemrograman Berbasis Web','semester'=>3,'singkatan'=>'PBW']
        );
        DB::table('matakuliah')->insert(
            ['id' => 4, 'name' =>'Sertifikasi Administrasi Jaringan Komputer 2','semester'=>6,'singkatan'=>'SAJK']
        );
        DB::table('matakuliah')->insert(
            ['id' => 5, 'name' =>'Matriks dan Ruang Vektor','semester'=>4,'singkatan'=>'MRV']
        );
        DB::table('matakuliah')->insert(
            ['id' => 6, 'name' =>'Permodelan untuk Komputasi','semester'=>3,'singkatan'=>'CT']
        );
        DB::table('matakuliah')->insert(
            ['id' => 7, 'name' =>'Algoritma dan Struktur Data','semester'=>6,'singkatan'=>'ASD']
        );
        DB::table('matakuliah')->insert(
            ['id' => 8, 'name' =>'Arsitektur dan Organisasi Komputer','semester'=>2,'singkatan'=>'AOK']
        );
        DB::table('matakuliah')->insert(
            ['id' => 9, 'name' =>'Skripsi 2','semester'=>1,'singkatan'=>'S-2']
        );
        DB::table('matakuliah')->insert(
            ['id' => 10, 'name' =>'Skripsi 1','semester'=>8,'singkatan'=>'S-1']
        );
        DB::table('matakuliah')->insert(
            ['id' => 11, 'name' =>'Etika Profesi','semester'=>7,'singkatan'=>'Etprof']
        );
        DB::table('matakuliah')->insert(
            ['id' => 12, 'name' =>'Pemrograman Berbasis Web Lanjut','semester'=>5,'singkatan'=>'PBW Lanjut']
        );
        DB::table('matakuliah')->insert(
            ['id' => 13, 'name' =>'Mekanika 1','semester'=>3,'singkatan'=>'MK-1']
        );
        DB::table('matakuliah')->insert(
            ['id' => 14, 'name' =>'Dasar-dasar Pemrograman','semester'=>1,'singkatan'=>'Daspro']
        );
        DB::table('matakuliah')->insert(
            ['id' => 15, 'name' =>'Manajemen Informasi dan Basis Data','semester'=>4,'singkatan'=>'MIBD']
        );
        DB::table('matakuliah')->insert(
            ['id' => 16, 'name' =>'Topik Khusus Sistem Informasi 2','semester'=>2,'singkatan'=>'TKSI 2']
        );
        DB::table('matakuliah')->insert(
            ['id' => 17, 'name' =>'Pengantar Jaringan Komputer','semester'=>5,'singkatan'=>'PJK']
        );
        DB::table('matakuliah')->insert(
            ['id' => 18, 'name' =>'Permodelan untuk Komputasi 2','semester'=>5,'singkatan'=>'CT-2']
        );
        DB::table('matakuliah')->insert(
            ['id' => 19, 'name' =>'Pemrograman Kompetitif 2','semester'=>3,'singkatan'=>'Protif-2']
        );
        DB::table('matakuliah')->insert(
            ['id' => 20, 'name' =>'Proyek Informatika','semester'=>8,'singkatan'=>'Pro-IF']
        );
        DB::table('matakuliah')->insert(
            ['id' => 21, 'name' =>'Proyek Sistem Informasi','semester'=>7,'singkatan'=>'Pro-SI']
        );
        DB::table('matakuliah')->insert(
            ['id' => 22, 'name' =>'Pengantar Sistem Informasi','semester'=>6,'singkatan'=>'PSI']
        );
        DB::table('matakuliah')->insert(
            ['id' => 23, 'name' =>'Logika Informatika','semester'=>2,'singkatan'=>'Log-Infor']
        );
        DB::table('matakuliah')->insert(
            ['id' => 24, 'name' =>'Algortima Kriptografi','semester'=>7,'singkatan'=>'Al-Krip']
        );
        DB::table('matakuliah')->insert(
            ['id' => 25, 'name' =>'Teknologi Basis Data','semester'=>6,'singkatan'=>'TBD']
        );
        DB::table('matakuliah')->insert(
            ['id' => 26, 'name' =>'Setifikasi Administrasi Jaringan Komputer 3','semester'=>4,'singkatan'=>'SAJK 3']
        );
        DB::table('matakuliah')->insert(
            ['id' => 27, 'name' =>'Sistem E-Commerce','semester'=>3,'singkatan'=>'e-Comm']
        );
        DB::table('matakuliah')->insert(
            ['id' => 28, 'name' =>'Sistem Multi Agen','semester'=>3,'singkatan'=>'Multi Agen']
        );
        DB::table('matakuliah')->insert(
            ['id' => 29, 'name' =>'Metode Numerik','semester'=>6,'singkatan'=>'MetNum']
        );
        DB::table('matakuliah')->insert(
            ['id' => 30, 'name' =>'Penulisan Ilmiah','semester'=>1,'singkatan'=>'Pen-il']
        );
        DB::table('matakuliah')->insert(
            ['id' => 31, 'name' =>'Topik Khusus Informatika 2','semester'=>1,'singkatan'=>'TKI 2']
        );
        DB::table('matakuliah')->insert(
            ['id' => 32, 'name' =>'Intrumen dengan IoT','semester'=>2,'singkatan'=>'IoT']
        );
        DB::table('matakuliah')->insert(
            ['id' => 33, 'name' =>'Pemrograman Permainan Komputer','semester'=>2,'singkatan'=>'PPK']
        );
        DB::table('matakuliah')->insert(
            ['id' => 34, 'name' =>'Sertifikasi Administrasi Jaringan Komputer 4','semester'=>8,'singkatan'=>'SAJK 4']
        );
        DB::table('matakuliah')->insert(
            ['id' => 35, 'name' =>'Topik Khusus Sistem Terdistribusi 2','semester'=>5,'singkatan'=>'TKST 2']
        );
        DB::table('matakuliah')->insert(
            ['id' => 36, 'name' =>'Topik Khusus Informatika','semester'=>8,'singkatan'=>'TKI']
        );
        DB::table('matakuliah')->insert(
            ['id' => 37, 'name' =>'Pemrograman Komputer','semester'=>2,'singkatan'=>'ProKom']
        );
        DB::table('matakuliah')->insert(
            ['id' => 38, 'name' =>'Analisis Design Perangkat Lunak','semester'=>3,'singkatan'=>'ADPL']
        );
        DB::table('matakuliah')->insert(
            ['id' => 39, 'name' =>'Jaringan Komputer','semester'=>3,'singkatan'=>'JarKom']
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
        DB::table('ruangan')->insert(
            ['idRoom' =>'10314' ,'jumlahMhs'=>0]
        );

        //senin
        DB::table('jadwals')->insert(
            ['id'=>1,'idMk'=>5,'type'=>0,'hari'=>1,'idRoom'=>'9120','timeStart'=>'07:00:00','timeEnd'=>'10:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>2,'idMk'=>6,'type'=>0,'hari'=>1,'idRoom'=>'9120','timeStart'=>'10:00:00','timeEnd'=>'13:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>3,'idMk'=>8,'type'=>0,'hari'=>1,'idRoom'=>'9120','timeStart'=>'13:00:00','timeEnd'=>'15:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>4,'idMk'=>8,'type'=>0,'hari'=>1,'idRoom'=>'9120','timeStart'=>'15:00:00','timeEnd'=>'17:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>5,'idMk'=>5,'type'=>0,'hari'=>1,'idRoom'=>'9121','timeStart'=>'07:00:00','timeEnd'=>'10:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>6,'idMk'=>7,'type'=>0,'hari'=>1,'idRoom'=>'9121','timeStart'=>'10:00:00','timeEnd'=>'13:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>7,'idMk'=>25,'type'=>0,'hari'=>1,'idRoom'=>'9121','timeStart'=>'13:00:00','timeEnd'=>'15:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>8,'idMk'=>36,'type'=>0,'hari'=>1,'idRoom'=>'9122','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>9,'idMk'=>11,'type'=>0,'hari'=>1,'idRoom'=>'9122','timeStart'=>'11:00:00','timeEnd'=>'13:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>10,'idMk'=>25,'type'=>0,'hari'=>1,'idRoom'=>'9122','timeStart'=>'13:00:00','timeEnd'=>'15:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>11,'idMk'=>2,'type'=>0,'hari'=>1,'idRoom'=>'10316','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>12,'idMk'=>2,'type'=>0,'hari'=>1,'idRoom'=>'10316','timeStart'=>'10:00:00','timeEnd'=>'13:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>13,'idMk'=>9,'type'=>0,'hari'=>1,'idRoom'=>'10316','timeStart'=>'13:00:00','timeEnd'=>'14:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>14,'idMk'=>9,'type'=>0,'hari'=>1,'idRoom'=>'10317','timeStart'=>'13:00:00','timeEnd'=>'14:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>15,'idMk'=>10,'type'=>0,'hari'=>1,'idRoom'=>'10317','timeStart'=>'14:00:00','timeEnd'=>'15:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>16,'idMk'=>11,'type'=>0,'hari'=>1,'idRoom'=>'10317','timeStart'=>'15:00:00','timeEnd'=>'17:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>17,'idMk'=>35,'type'=>0,'hari'=>1,'idRoom'=>'SB-914','timeStart'=>'10:00:00','timeEnd'=>'13:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>18,'idMk'=>3,'type'=>0,'hari'=>1,'idRoom'=>'SB-916','timeStart'=>'07:00:00','timeEnd'=>'10:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>19,'idMk'=>3,'type'=>0,'hari'=>1,'idRoom'=>'SB-916','timeStart'=>'10:00:00','timeEnd'=>'13:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>20,'idMk'=>12,'type'=>0,'hari'=>1,'idRoom'=>'SB-916','timeStart'=>'14:00:00','timeEnd'=>'17:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>21,'idMk'=>4,'type'=>0,'hari'=>1,'idRoom'=>'SB-917','timeStart'=>'07:00:00','timeEnd'=>'10:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>22,'idMk'=>37,'type'=>0,'hari'=>1,'idRoom'=>'SB-918','timeStart'=>'10:00:00','timeEnd'=>'13:00:00','kelas'=>'A']
        );

        //selasa
        DB::table('jadwals')->insert(
            ['id'=>23,'idMk'=>1,'type'=>0,'hari'=>2,'idRoom'=>'9122','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>24,'idMk'=>37,'type'=>0,'hari'=>2,'idRoom'=>'10316','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>25,'idMk'=>15,'type'=>0,'hari'=>2,'idRoom'=>'10317','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>26,'idMk'=>16,'type'=>0,'hari'=>2,'idRoom'=>'SB-914','timeStart'=>'07:00:00','timeEnd'=>'10:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>27,'idMk'=>14,'type'=>0,'hari'=>2,'idRoom'=>'9122','timeStart'=>'09:00:00','timeEnd'=>'11:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>28,'idMk'=>14,'type'=>0,'hari'=>2,'idRoom'=>'10316','timeStart'=>'09:00:00','timeEnd'=>'11:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>29,'idMk'=>14,'type'=>0,'hari'=>2,'idRoom'=>'10317','timeStart'=>'09:00:00','timeEnd'=>'11:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>30,'idMk'=>17,'type'=>0,'hari'=>2,'idRoom'=>'10322','timeStart'=>'09:00:00','timeEnd'=>'11:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>31,'idMk'=>19,'type'=>0,'hari'=>2,'idRoom'=>'SB-915','timeStart'=>'11:00:00','timeEnd'=>'14:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>32,'idMk'=>17,'type'=>0,'hari'=>2,'idRoom'=>'9122','timeStart'=>'13:00:00','timeEnd'=>'15:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>33,'idMk'=>6,'type'=>1,'hari'=>2,'idRoom'=>'10316','timeStart'=>'13:00:00','timeEnd'=>'15:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>34,'idMk'=>20,'type'=>1,'hari'=>2,'idRoom'=>'SB-915','timeStart'=>'14:00:00','timeEnd'=>'17:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>35,'idMk'=>21,'type'=>1,'hari'=>2,'idRoom'=>'SB-916','timeStart'=>'13:00:00','timeEnd'=>'16:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>36,'idMk'=>37,'type'=>1,'hari'=>2,'idRoom'=>'SB-918','timeStart'=>'13:00:00','timeEnd'=>'15:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>37,'idMk'=>3,'type'=>1,'hari'=>2,'idRoom'=>'SB-917','timeStart'=>'15:00:00','timeEnd'=>'17:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>38,'idMk'=>3,'type'=>1,'hari'=>2,'idRoom'=>'SB-918','timeStart'=>'15:00:00','timeEnd'=>'17:00:00','kelas'=>'A']

        );

        //rabu
            //-- ID DIMULAI DARI 70 :))
            DB::table('jadwals')->insert(
                ['id'=>88,'idMk'=>25,'type'=>1,'hari'=>3,'idRoom'=>'SB-915','timeStart'=>'11:00:00','timeEnd'=>'13:00:00','kelas'=>'A']
            );
            DB::table('jadwals')->insert(
                ['id'=>71,'idMk'=>25,'type'=>1,'hari'=>3,'idRoom'=>'SB-916','timeStart'=>'11:00:00','timeEnd'=>'13:00:00','kelas'=>'A']
            );
            DB::table('jadwals')->insert(
                ['id'=>72,'idMk'=>38,'type'=>0,'hari'=>3,'idRoom'=>'10316','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','kelas'=>'A']
            );
            DB::table('jadwals')->insert(
                ['id'=>73,'idMk'=>15,'type'=>0,'hari'=>3,'idRoom'=>'9122','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','kelas'=>'A']
            );
            DB::table('jadwals')->insert(
                ['id'=>74,'idMk'=>24,'type'=>0,'hari'=>3,'idRoom'=>'10317','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','kelas'=>'A']
            );
            DB::table('jadwals')->insert(
                ['id'=>75,'idMk'=>7,'type'=>1,'hari'=>3,'idRoom'=>'SB-915','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','kelas'=>'A']
            );
            DB::table('jadwals')->insert(
                ['id'=>76,'idMk'=>14,'type'=>1,'hari'=>3,'idRoom'=>'SB-916','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','kelas'=>'A']
            );
            DB::table('jadwals')->insert(
                ['id'=>77,'idMk'=>14,'type'=>1,'hari'=>3,'idRoom'=>'SB-917','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','kelas'=>'A']
            );
            DB::table('jadwals')->insert(
                ['id'=>78,'idMk'=>14,'type'=>1,'hari'=>3,'idRoom'=>'SB-918','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','kelas'=>'A']
            );
            DB::table('jadwals')->insert(
                ['id'=>79,'idMk'=>2,'type'=>1,'hari'=>3,'idRoom'=>'SB-915','timeStart'=>'09:00:00','timeEnd'=>'11:00:00','kelas'=>'A']
            );
            DB::table('jadwals')->insert(
                ['id'=>80,'idMk'=>2,'type'=>1,'hari'=>3,'idRoom'=>'SB-917','timeStart'=>'09:00:00','timeEnd'=>'11:00:00','kelas'=>'A']
            );
            DB::table('jadwals')->insert(
                ['id'=>81,'idMk'=>23,'type'=>0,'hari'=>3,'idRoom'=>'10316','timeStart'=>'10:00:00','timeEnd'=>'13:00:00','kelas'=>'A']
            );
            DB::table('jadwals')->insert(
                ['id'=>82,'idMk'=>23,'type'=>0,'hari'=>3,'idRoom'=>'10317','timeStart'=>'10:00:00','timeEnd'=>'13:00:00','kelas'=>'A']
            );
            DB::table('jadwals')->insert(
                ['id'=>83,'idMk'=>22,'type'=>0,'hari'=>3,'idRoom'=>'9121','timeStart'=>'13:00:00','timeEnd'=>'16:00:00','kelas'=>'A']
            );
            DB::table('jadwals')->insert(
                ['id'=>84,'idMk'=>27,'type'=>0,'hari'=>3,'idRoom'=>'9122','timeStart'=>'13:00:00','timeEnd'=>'16:00:00','kelas'=>'A']
            );
            DB::table('jadwals')->insert(
                ['id'=>85,'idMk'=>26,'type'=>1,'hari'=>3,'idRoom'=>'SB-918','timeStart'=>'13:00:00','timeEnd'=>'16:00:00','kelas'=>'A']
            );
            DB::table('jadwals')->insert(
                ['id'=>86,'idMk'=>37,'type'=>1,'hari'=>3,'idRoom'=>'SB-917','timeStart'=>'15:00:00','timeEnd'=>'17:00:00','kelas'=>'A']
            );


        //kamis
        DB::table('jadwals')->insert(
            ['id'=>87,'idMk'=>8,'type'=>0,'hari'=>4,'idRoom'=>'9121','timeStart'=>'13:00:00','timeEnd'=>'15:00:00','kelas'=>'A','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>39,'idMk'=>8,'type'=>0,'hari'=>4,'idRoom'=>'9121','timeStart'=>'15:00:00','timeEnd'=>'17:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>40,'idMk'=>15,'type'=>0,'hari'=>4,'idRoom'=>'9122','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>41,'idMk'=>15,'type'=>0,'hari'=>4,'idRoom'=>'9122','timeStart'=>'09:00:00','timeEnd'=>'11:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>42,'idMk'=>5,'type'=>1,'hari'=>4,'idRoom'=>'9122','timeStart'=>'13:00:00','timeEnd'=>'15:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>43,'idMk'=>5,'type'=>1,'hari'=>4,'idRoom'=>'9122','timeStart'=>'15:00:00','timeEnd'=>'17:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>44,'idMk'=>38,'type'=>0,'hari'=>4,'idRoom'=>'10316','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>45,'idMk'=>38,'type'=>0,'hari'=>4,'idRoom'=>'10316','timeStart'=>'09:00:00','timeEnd'=>'11:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>46,'idMk'=>28,'type'=>0,'hari'=>4,'idRoom'=>'10317','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>47,'idMk'=>29,'type'=>0,'hari'=>4,'idRoom'=>'10317','timeStart'=>'09:00:00','timeEnd'=>'12:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>48,'idMk'=>2,'type'=>1,'hari'=>4,'idRoom'=>'SB-915','timeStart'=>'15:00:00','timeEnd'=>'17:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>49,'idMk'=>2,'type'=>1,'hari'=>4,'idRoom'=>'SB-916','timeStart'=>'15:00:00','timeEnd'=>'17:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>50,'idMk'=>34,'type'=>0,'hari'=>4,'idRoom'=>'SB-917','timeStart'=>'09:00:00','timeEnd'=>'12:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>51,'idMk'=>20,'type'=>0,'hari'=>4,'idRoom'=>'SB-917','timeStart'=>'12:00:00','timeEnd'=>'15:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>52,'idMk'=>26,'type'=>1,'hari'=>4,'idRoom'=>'SB-917','timeStart'=>'15:00:00','timeEnd'=>'17:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>53,'idMk'=>21,'type'=>1,'hari'=>4,'idRoom'=>'SB-918','timeStart'=>'13:00:00','timeEnd'=>'15:00:00','kelas'=>'A']
        );

        //jumat
        DB::table('jadwals')->insert(
            ['id'=>54,'idMk'=>22,'type'=>0,'hari'=>5,'idRoom'=>'9120','timeStart'=>'07:00:00','timeEnd'=>'10:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>55,'idMk'=>39,'type'=>0,'hari'=>5,'idRoom'=>'9121','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>56,'idMk'=>39,'type'=>0,'hari'=>5,'idRoom'=>'9121','timeStart'=>'09:00:00','timeEnd'=>'11:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>57,'idMk'=>31,'type'=>0,'hari'=>5,'idRoom'=>'9122','timeStart'=>'07:00:00','timeEnd'=>'10:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>58,'idMk'=>32,'type'=>0,'hari'=>5,'idRoom'=>'10307','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>59,'idMk'=>30,'type'=>0,'hari'=>5,'idRoom'=>'SB-915','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>60,'idMk'=>30,'type'=>0,'hari'=>5,'idRoom'=>'SB-915','timeStart'=>'09:00:00','timeEnd'=>'11:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>61,'idMk'=>4,'type'=>1,'hari'=>5,'idRoom'=>'SB-916','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>62,'idMk'=>14,'type'=>1,'hari'=>5,'idRoom'=>'SB-916','timeStart'=>'09:00:00','timeEnd'=>'11:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>63,'idMk'=>34,'type'=>1,'hari'=>5,'idRoom'=>'SB-916','timeStart'=>'13:00:00','timeEnd'=>'15:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>64,'idMk'=>14,'type'=>1,'hari'=>5,'idRoom'=>'SB-917','timeStart'=>'09:00:00','timeEnd'=>'11:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>65,'idMk'=>15,'type'=>1,'hari'=>5,'idRoom'=>'SB-917','timeStart'=>'13:00:00','timeEnd'=>'15:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>66,'idMk'=>38,'type'=>1,'hari'=>5,'idRoom'=>'SB-917','timeStart'=>'15:00:00','timeEnd'=>'17:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>67,'idMk'=>14,'type'=>1,'hari'=>5,'idRoom'=>'SB-918','timeStart'=>'09:00:00','timeEnd'=>'11:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>68,'idMk'=>15,'type'=>1,'hari'=>5,'idRoom'=>'SB-918','timeStart'=>'13:00:00','timeEnd'=>'15:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>69,'idMk'=>38,'type'=>1,'hari'=>5,'idRoom'=>'SB-918','timeStart'=>'15:00:00','timeEnd'=>'17:00:00','kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>70,'idMk'=>33,'type'=>0,'hari'=>5,'idRoom'=>'10314','timeStart'=>'13:00:00','timeEnd'=>'16:00:00','kelas'=>'A']
        );

        //mengajar
        DB::table('mengajar')->insert(
            ['idJadwal'=>10,'idUser'=>1]
        );
        DB::table('mengajar')->insert(
            ['idJadwal'=>13,'idUser'=>1]
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
