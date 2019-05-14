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
            ['id' => 1, 'nama' => 'Vania','username' => 'vania1', 'password' => '123']
        );
        DB::table('users')->insert(
            ['id' => 2, 'nama' => 'Pascal','username' => 'pascal2', 'password' => '234']
        );
        DB::table('users')->insert(
            ['id' => 3, 'nama' => 'Husnul','username' => 'husnul3', 'password' => '345']
        );
        DB::table('users')->insert(
            ['id' => 4, 'nama' => 'Chandra','username' => 'chandra4', 'password' => '456']
        );
        DB::table('users')->insert(
            ['id' => 5, 'nama' => 'Kris','username' => 'kris5', 'password' => '567']
        );
        DB::table('users')->insert(
            ['id' => 6, 'nama' => 'Mariska','username' => 'mariska6', 'password' => '678']
        );
        DB::table('users')->insert(
            ['id' => 7, 'nama' => 'Rosa','username' => 'rosa7', 'password' => '789']
        );
        DB::table('users')->insert(
            ['id' => 8, 'nama' => 'Vero','username' => 'vero8', 'password' => '898']
        );
        DB::table('users')->insert(
            ['id' => 9, 'nama' => 'Eli','username' => 'eli9', 'password' => '987']
        );
        DB::table('users')->insert(
            ['id' => 10, 'nama' => 'Natalia','username' => 'natalia10', 'password' => '876']
        );
        DB::table('users')->insert(
            ['id' => 11, 'nama' => 'Keenan','username' => 'keenan11', 'password' => '765']
        );
        DB::table('users')->insert(
            ['id' => 12, 'nama' => 'Nurmala','username' => 'nurmala12', 'password' => '654']
        );
        DB::table('users')->insert(
            ['id' => 13, 'nama' => 'Lucy','username' => 'lucy13', 'password' => '543']
        );
        DB::table('users')->insert(
            ['id' => 14, 'nama' => 'Reymon','username' => 'reymon14', 'password' => '321']
        );
        DB::table('users')->insert(
            ['id' => 15, 'nama' => 'Heni','username' => 'heni15', 'password' => '212']
        );
        DB::table('users')->insert(
            ['id' => 16, 'nama' => 'Janto','username' => 'janto16', 'password' => '012']
        );
        
        DB::table('matakuliah')->insert(
            [  'name' =>'Semester1','semester'=>null]
        );
        DB::table('matakuliah')->insert(
            [  'name' =>'Semester2','semester'=>null]
        );
        DB::table('matakuliah')->insert(
            [  'name' =>'Semester3','semester'=>null]
        );
        DB::table('matakuliah')->insert(
            [  'name' =>'Semester4','semester'=>null]
        );
        DB::table('matakuliah')->insert(
            [  'name' =>'Semester5','semester'=>null]
        );
        DB::table('matakuliah')->insert(
            [  'name' =>'Semester6','semester'=>null]
        );
        
        DB::table('matakuliah')->insert(
            [  'name' =>'Semester7','semester'=>null]
        );
        DB::table('matakuliah')->insert(
            [  'name' =>'Semester8','semester'=>null]
        );


         DB::table('matakuliah')->insert(
             [  'name' =>'Topik Khusus Sistem Informasi 1','semester'=>6,'sks'=>3,'singkatan'=>'TKSI1']
         );

        
         DB::table('matakuliah')->insert(
             [  'name' =>'Pemrograman Berbasis Web','semester'=>6,'sks'=>2,'singkatan'=>'PBW']
         );
         DB::table('matakuliah')->insert(
             [ 'name' =>'Sertifikasi Administrasi Jaringan Komputer 2','semester'=>6,'sks'=>2,'singkatan'=>'AJK2']
         );
      
         DB::table('matakuliah')->insert(
             [ 'name' =>'Permodelan untuk Komputasi','semester'=>6,'sks'=>2,'singkatan'=>'ModelKomp']
         );
       
       
         DB::table('matakuliah')->insert(
             [ 'name' =>'Pemrograman Berbasis Web Lanjut','semester'=>6,'sks'=>2,'singkatan'=>'PBWL']
         );
         DB::table('matakuliah')->insert(
             [ 'name' =>'Mekanika 1','semester'=>6,'sks'=>2,'singkatan'=>'Meka1']
         );
       
         DB::table('matakuliah')->insert(
             [ 'name' =>'Topik Khusus Sistem Informasi 2','semester'=>6,'sks'=>3,'singkatan'=>'TKSI2']
         );
       
         DB::table('matakuliah')->insert(
             [ 'name' =>'Permodelan untuk Komputasi 2','semester'=>6,'sks'=>2,'singkatan'=>'ModelKomp2']
         );
         DB::table('matakuliah')->insert(
             [ 'name' =>'Pemrograman Kompetitif 2','semester'=>6,'sks'=>2,'singkatan'=>'Protif2']
         );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Proyek Informatika','semester'=>6,'sks'=>6,'singkatan'=>'ProIF']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Proyek Sistem Informasi','semester'=>6,'sks'=>3,'singkatan'=>'ProSI']
        );
       
       
        DB::table('matakuliah')->insert(
            [ 'name' =>'Algortima Kriptografi','semester'=>6,'singkatan'=>'AlKrip','sks'=>2]
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Teknologi Basis Data','semester'=>6,'sks'=>3,'singkatan'=>'TBD']
        );

        DB::table('matakuliah')->insert(
            ['name' =>'Setifikasi Administrasi Jaringan Komputer 3','semester'=>6,'singkatan'=>'AJK3','sks'=>2]
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Sistem E-Commerce','semester'=>6,'singkatan'=>'E-Com','sks'=>2]
        );
        DB::table('matakuliah')->insert(
            ['name' =>'Sistem Multi Agen','semester'=>6,'singkatan'=>'MultAgen','sks'=>2]
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Metode Numerik','semester'=>6,'singkatan'=>'MetNum','sks'=>2]
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Penulisan Ilmiah','semester'=>6,'sks'=>2,'singkatan'=>'PenIl']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Topik Khusus Informatika 2','semester'=>6,'sks'=>2,'singkatan'=>'TKI2']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Intrumen dengan IoT','semester'=>6,'sks'=>2,'singkatan'=>'IoT']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Pemrograman Permainan Komputer','semester'=>6,'sks'=>2,'singkatan'=>'PPK']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Sertifikasi Administrasi Jaringan Komputer 4','semester'=>6,'sks'=>2,'singkatan'=>'AJK4']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Topik Khusus Sistem Terdistribusi 2','semester'=>6,'sks'=>2,'singkatan'=>'TKST2']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Topik Khusus Informatika','semester'=>6,'sks'=>2,'singkatan'=>'TKI']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Pemrograman Komputer','semester'=>6,'sks'=>2,'singkatan'=>'ProKomp']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Jaringan Komputer','semester'=>6,'sks'=>2,'singkatan'=>'JarKom']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Pemodelan untuk Komputasi','semester'=>1,'sks'=>3,'singkatan'=>'PeKomp']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Matematika Dasar','semester'=>1,'sks'=>4,'singkatan'=>'MatDasar']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Pengantar Informatika','semester'=>1,'sks'=>2,'singkatan'=>'PengantarIF']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Matematika Diskret','semester'=>1,'sks'=>3,'singkatan'=>'MatDis']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Dasar Pemrograman','semester'=>2,'sks'=>4,'singkatan'=>'DasPro']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Arsitektur dan Organisasi Komputer','semester'=>2,'sks'=>4,'singkatan'=>'AOK']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Logika informatika','semester'=>2,'sks'=>3,'singkatan'=>'LogikaIF']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Matriks dan Ruang Vektor','semester'=>2,'sks'=>3,'singkatan'=>'MRV']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Algoritma dan Struktur Data','semester'=>3,'sks'=>3,'singkatan'=>'ASD']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Struktur Diskret','semester'=>3,'sks'=>4,'singkatan'=>'StrukDis']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Pemrograman Berorientasi Objek','semester'=>3,'sks'=>2,'singkatan'=>'PBO']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Teknik Presentasi','semester'=>3,'sks'=>2,'singkatan'=>'TekPres']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Statistika untuk Komputasi','semester'=>3,'sks'=>3,'singkatan'=>'StatKomp']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Analisis dan Desain Perangkat Lunak','semester'=>4,'sks'=>4,'singkatan'=>'ADPL']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Manajemen Informasi dan Basis Data','semester'=>4,'sks'=>4,'singkatan'=>'MIBD']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Pemrograman Berbasis Web','semester'=>4,'sks'=>3,'singkatan'=>'PBW']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Desain dan Analisis Algoritma','semester'=>4,'sks'=>3,'singkatan'=>'DAA']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Pengantar Sistem Informasi','semester'=>4,'sks'=>3,'singkatan'=>'PSI']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Pengantar Jaringan Komputer','semester'=>4,'sks'=>2,'singkatan'=>'PJK']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Sistem Operasi','semester'=>5,'sks'=>3,'singkatan'=>'SO']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Rekayasa Perangkat Lunak','semester'=>5,'sks'=>3,'singkatan'=>'RPL']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Manajemen Proyek','semester'=>5,'sks'=>2,'singkatan'=>'ManPro']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Pengantar Sistem Cerdas','semester'=>5,'sks'=>3,'singkatan'=>'PSC']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Pemrograman pada Perangkat Bergerak','semester'=>5,'sks'=>3,'singkatan'=>'P3B']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Interaksi Manusia Komputer','semester'=>5,'sks'=>3,'singkatan'=>'IMK']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Skripsi 1','semester'=>7,'sks'=>3,'singkatan'=>'Skripsi1']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Proyek Sistem Informasi 2','semester'=>7,'sks'=>3,'singkatan'=>'ProSI2']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Komputer dan Masyarakat','semester'=>7,'sks'=>2,'singkatan'=>'KoMas']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Etika Profesi','semester'=>8,'sks'=>2,'singkatan'=>'EtProf']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Skripsi 2','semester'=>8,'sks'=>5,'singkatan'=>'Skripsi2']
        );
        DB::table('matakuliah')->insert(
            [ 'name' =>'Tugas Akhir','semester'=>8,'sks'=>8,'singkatan'=>'TA']
        );
        
        DB::table('ruangan')->insert(
            ['idRoom' =>'9120' ,'kapasitas'=>0]
        );
        DB::table('ruangan')->insert(
            ['idRoom' =>'9121' ,'kapasitas'=>0]
        );
        DB::table('ruangan')->insert(
            ['idRoom' =>'9122' ,'kapasitas'=>0]
        );
        DB::table('ruangan')->insert(
            ['idRoom' =>'10316' ,'kapasitas'=>0]
        );
        DB::table('ruangan')->insert(
            ['idRoom' =>'10317' ,'kapasitas'=>0]
        );
        DB::table('ruangan')->insert(
            ['idRoom' =>'10322' ,'kapasitas'=>0]
        );
        DB::table('ruangan')->insert(
            ['idRoom' =>'10307' ,'kapasitas'=>0]
        );
        DB::table('ruangan')->insert(
            ['idRoom' =>'SB-914' ,'kapasitas'=>0]
        );
        DB::table('ruangan')->insert(
            ['idRoom' =>'SB-913' ,'kapasitas'=>0]
        );
        DB::table('ruangan')->insert(
            ['idRoom' =>'SB-915' ,'kapasitas'=>0]
        );
        DB::table('ruangan')->insert(
            ['idRoom' =>'SB-916' ,'kapasitas'=>0]
        );
        DB::table('ruangan')->insert(
            ['idRoom' =>'SB-917' ,'kapasitas'=>0]
        );
        DB::table('ruangan')->insert(
            ['idRoom' =>'SB-918' ,'kapasitas'=>0]
        );
        DB::table('ruangan')->insert(
            ['idRoom' =>'10314' ,'kapasitas'=>0]
        );


         //senin
        DB::table('jadwals')->insert(
            ['id'=>1,'idMk'=>8+5,'type'=>0,'hari'=>1,'idRoom'=>'9120','timeStart'=>'07:00:00','timeEnd'=>'10:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>2,'idMk'=>8+6,'type'=>0,'hari'=>1,'idRoom'=>'9120','timeStart'=>'10:00:00','timeEnd'=>'13:00:00','durasi'=>3,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>3,'idMk'=>8+8,'type'=>0,'hari'=>1,'idRoom'=>'9120','timeStart'=>'13:00:00','timeEnd'=>'15:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'B']
        );
        DB::table('jadwals')->insert(
            ['id'=>4,'idMk'=>8+8,'type'=>0,'hari'=>1,'idRoom'=>'9120','timeStart'=>'15:00:00','timeEnd'=>'17:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>5,'idMk'=>8+5,'type'=>0,'hari'=>1,'idRoom'=>'9121','timeStart'=>'07:00:00','timeEnd'=>'10:00:00','durasi'=>3,'prioritas'=>2,'kelas'=>'B']
        );
        DB::table('jadwals')->insert(
            ['id'=>6,'idMk'=>8+7,'type'=>0,'hari'=>1,'idRoom'=>'9121','timeStart'=>'10:00:00','timeEnd'=>'13:00:00','durasi'=>3,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>7,'idMk'=>8+25,'type'=>0,'hari'=>1,'idRoom'=>'9121','timeStart'=>'13:00:00','timeEnd'=>'15:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>8,'idMk'=>8+36,'type'=>0,'hari'=>1,'idRoom'=>'9122','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>9,'idMk'=>8+11,'type'=>0,'hari'=>1,'idRoom'=>'9122','timeStart'=>'11:00:00','timeEnd'=>'13:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>10,'idMk'=>8+25,'type'=>0,'hari'=>1,'idRoom'=>'9122','timeStart'=>'13:00:00','timeEnd'=>'15:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>11,'idMk'=>8+2,'type'=>0,'hari'=>1,'idRoom'=>'10316','timeStart'=>'07:00:00','timeEnd'=>'10:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'B']
        );
        DB::table('jadwals')->insert(
            ['id'=>12,'idMk'=>8+2,'type'=>0,'hari'=>1,'idRoom'=>'10316','timeStart'=>'10:00:00','timeEnd'=>'13:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>13,'idMk'=>8+9,'type'=>0,'hari'=>1,'idRoom'=>'10316','timeStart'=>'13:00:00','timeEnd'=>'14:00:00','durasi'=>1,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>14,'idMk'=>8+9,'type'=>0,'hari'=>1,'idRoom'=>'10317','timeStart'=>'13:00:00','timeEnd'=>'14:00:00','durasi'=>1,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>15,'idMk'=>8+10,'type'=>0,'hari'=>1,'idRoom'=>'10317','timeStart'=>'14:00:00','timeEnd'=>'15:00:00','durasi'=>1,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>16,'idMk'=>8+11,'type'=>0,'hari'=>1,'idRoom'=>'10317','timeStart'=>'15:00:00','timeEnd'=>'17:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'B']
        );
        DB::table('jadwals')->insert(
            ['id'=>17,'idMk'=>8+35,'type'=>0,'hari'=>1,'idRoom'=>'SB-914','timeStart'=>'10:00:00','timeEnd'=>'13:00:00','durasi'=>3,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>18,'idMk'=>8+3,'type'=>0,'hari'=>1,'idRoom'=>'SB-916','timeStart'=>'07:00:00','timeEnd'=>'10:00:00','durasi'=>3,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>19,'idMk'=>8+3,'type'=>0,'hari'=>1,'idRoom'=>'SB-916','timeStart'=>'10:00:00','timeEnd'=>'13:00:00','durasi'=>3,'prioritas'=>2,'kelas'=>'B']
        );
        DB::table('jadwals')->insert(
            ['id'=>20,'idMk'=>8+12,'type'=>0,'hari'=>1,'idRoom'=>'SB-916','timeStart'=>'14:00:00','timeEnd'=>'17:00:00','durasi'=>3,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>21,'idMk'=>8+4,'type'=>0,'hari'=>1,'idRoom'=>'SB-917','timeStart'=>'07:00:00','timeEnd'=>'10:00:00','durasi'=>3,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>22,'idMk'=>8+37,'type'=>0,'hari'=>1,'idRoom'=>'SB-918','timeStart'=>'10:00:00','timeEnd'=>'13:00:00','durasi'=>3,'prioritas'=>2,'kelas'=>'A']
        );
        //selasa
        DB::table('jadwals')->insert(
            ['id'=>23,'idMk'=>8+1,'type'=>0,'hari'=>2,'idRoom'=>'9122','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>24,'idMk'=>8+37,'type'=>0,'hari'=>2,'idRoom'=>'10316','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>25,'idMk'=>8+15,'type'=>0,'hari'=>2,'idRoom'=>'10317','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'B']
        );
        DB::table('jadwals')->insert(
            ['id'=>26,'idMk'=>8+16,'type'=>0,'hari'=>2,'idRoom'=>'SB-914','timeStart'=>'07:00:00','timeEnd'=>'10:00:00','durasi'=>3,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>27,'idMk'=>8+14,'type'=>0,'hari'=>2,'idRoom'=>'9122','timeStart'=>'09:00:00','timeEnd'=>'11:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>28,'idMk'=>8+14,'type'=>0,'hari'=>2,'idRoom'=>'10316','timeStart'=>'09:00:00','timeEnd'=>'11:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'B']
        );
        DB::table('jadwals')->insert(
            ['id'=>29,'idMk'=>8+14,'type'=>0,'hari'=>2,'idRoom'=>'10317','timeStart'=>'09:00:00','timeEnd'=>'11:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'C']
        );
        DB::table('jadwals')->insert(
            ['id'=>30,'idMk'=>8+17,'type'=>0,'hari'=>2,'idRoom'=>'10322','timeStart'=>'09:00:00','timeEnd'=>'11:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>31,'idMk'=>8+19,'type'=>0,'hari'=>2,'idRoom'=>'SB-915','timeStart'=>'11:00:00','timeEnd'=>'14:00:00','durasi'=>3,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>32,'idMk'=>8+17,'type'=>0,'hari'=>2,'idRoom'=>'9122','timeStart'=>'13:00:00','timeEnd'=>'15:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'B']
        );
        DB::table('jadwals')->insert(
            ['id'=>33,'idMk'=>8+6,'type'=>1,'hari'=>2,'idRoom'=>'10316','timeStart'=>'13:00:00','timeEnd'=>'15:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>34,'idMk'=>8+20,'type'=>1,'hari'=>2,'idRoom'=>'SB-915','timeStart'=>'14:00:00','timeEnd'=>'17:00:00','durasi'=>3,'prioritas'=>1,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>35,'idMk'=>8+21,'type'=>1,'hari'=>2,'idRoom'=>'SB-916','timeStart'=>'13:00:00','timeEnd'=>'16:00:00','durasi'=>3,'prioritas'=>1,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>36,'idMk'=>8+37,'type'=>1,'hari'=>2,'idRoom'=>'SB-918','timeStart'=>'13:00:00','timeEnd'=>'15:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'B']
        );
        DB::table('jadwals')->insert(
            ['id'=>37,'idMk'=>8+3,'type'=>1,'hari'=>2,'idRoom'=>'SB-917','timeStart'=>'15:00:00','timeEnd'=>'17:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'B']
        );
        DB::table('jadwals')->insert(
            ['id'=>38,'idMk'=>8+3,'type'=>1,'hari'=>2,'idRoom'=>'SB-918','timeStart'=>'15:00:00','timeEnd'=>'17:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'A']
        );
        //rabu
            //-- ID DIMULAI DARI 70 :))
            DB::table('jadwals')->insert(
                ['id'=>88,'idMk'=>8+25,'type'=>1,'hari'=>3,'idRoom'=>'SB-915','timeStart'=>'11:00:00','timeEnd'=>'13:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'A']
            );
            DB::table('jadwals')->insert(
                ['id'=>71,'idMk'=>8+25,'type'=>1,'hari'=>3,'idRoom'=>'SB-916','timeStart'=>'11:00:00','timeEnd'=>'13:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'B']
            );
            DB::table('jadwals')->insert(
                ['id'=>72,'idMk'=>8+38,'type'=>0,'hari'=>3,'idRoom'=>'10316','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'B']
            );
            DB::table('jadwals')->insert(
                ['id'=>73,'idMk'=>8+15,'type'=>0,'hari'=>3,'idRoom'=>'9122','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'A']
            );
            DB::table('jadwals')->insert(
                ['id'=>74,'idMk'=>8+24,'type'=>0,'hari'=>3,'idRoom'=>'10317','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'A']
            );
            DB::table('jadwals')->insert(
                ['id'=>75,'idMk'=>8+7,'type'=>1,'hari'=>3,'idRoom'=>'SB-915','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'A']
            );
            DB::table('jadwals')->insert(
                ['id'=>76,'idMk'=>8+14,'type'=>1,'hari'=>3,'idRoom'=>'SB-916','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'A']
            );
            DB::table('jadwals')->insert(
                ['id'=>77,'idMk'=>8+14,'type'=>1,'hari'=>3,'idRoom'=>'SB-917','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'B']
            );
            DB::table('jadwals')->insert(
                ['id'=>78,'idMk'=>8+14,'type'=>1,'hari'=>3,'idRoom'=>'SB-918','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'C']
            );
            DB::table('jadwals')->insert(
                ['id'=>79,'idMk'=>8+2,'type'=>1,'hari'=>3,'idRoom'=>'SB-915','timeStart'=>'09:00:00','timeEnd'=>'11:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'A']
            );
            DB::table('jadwals')->insert(
                ['id'=>80,'idMk'=>8+2,'type'=>1,'hari'=>3,'idRoom'=>'SB-917','timeStart'=>'09:00:00','timeEnd'=>'11:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'B']
            );
            DB::table('jadwals')->insert(
                ['id'=>81,'idMk'=>8+23,'type'=>0,'hari'=>3,'idRoom'=>'10316','timeStart'=>'10:00:00','timeEnd'=>'13:00:00','durasi'=>3,'prioritas'=>2,'kelas'=>'B']
            );
            DB::table('jadwals')->insert(
                ['id'=>82,'idMk'=>8+23,'type'=>0,'hari'=>3,'idRoom'=>'10317','timeStart'=>'10:00:00','timeEnd'=>'13:00:00','durasi'=>3,'prioritas'=>2,'kelas'=>'A']
            );
            DB::table('jadwals')->insert(
                ['id'=>83,'idMk'=>8+22,'type'=>0,'hari'=>3,'idRoom'=>'9121','timeStart'=>'13:00:00','timeEnd'=>'16:00:00','durasi'=>3,'prioritas'=>2,'kelas'=>'A']
            );
            DB::table('jadwals')->insert(
                ['id'=>84,'idMk'=>8+27,'type'=>0,'hari'=>3,'idRoom'=>'9122','timeStart'=>'13:00:00','timeEnd'=>'16:00:00','durasi'=>3,'prioritas'=>2,'kelas'=>'A']
            );
            DB::table('jadwals')->insert(
                ['id'=>85,'idMk'=>8+26,'type'=>1,'hari'=>3,'idRoom'=>'SB-918','timeStart'=>'13:00:00','timeEnd'=>'16:00:00','durasi'=>3,'prioritas'=>1,'kelas'=>'A']
            );
            DB::table('jadwals')->insert(
                ['id'=>86,'idMk'=>8+37,'type'=>1,'hari'=>3,'idRoom'=>'SB-917','timeStart'=>'15:00:00','timeEnd'=>'17:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'B']
            );
        //kamis
        DB::table('jadwals')->insert(
            ['id'=>87,'idMk'=>8+8,'type'=>0,'hari'=>4,'idRoom'=>'9121','timeStart'=>'13:00:00','timeEnd'=>'15:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'B']
        );
        DB::table('jadwals')->insert(
            ['id'=>39,'idMk'=>8+8,'type'=>0,'hari'=>4,'idRoom'=>'9121','timeStart'=>'15:00:00','timeEnd'=>'17:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>40,'idMk'=>8+15,'type'=>0,'hari'=>4,'idRoom'=>'9122','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'B']
        );
        DB::table('jadwals')->insert(
            ['id'=>41,'idMk'=>8+15,'type'=>0,'hari'=>4,'idRoom'=>'9122','timeStart'=>'09:00:00','timeEnd'=>'11:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>42,'idMk'=>8+5,'type'=>1,'hari'=>4,'idRoom'=>'9122','timeStart'=>'13:00:00','timeEnd'=>'15:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>43,'idMk'=>8+5,'type'=>1,'hari'=>4,'idRoom'=>'9122','timeStart'=>'15:00:00','timeEnd'=>'17:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'B']
        );
        DB::table('jadwals')->insert(
            ['id'=>44,'idMk'=>8+38,'type'=>0,'hari'=>4,'idRoom'=>'10316','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>45,'idMk'=>8+38,'type'=>0,'hari'=>4,'idRoom'=>'10316','timeStart'=>'09:00:00','timeEnd'=>'11:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'B']
        );
        DB::table('jadwals')->insert(
            ['id'=>46,'idMk'=>8+28,'type'=>0,'hari'=>4,'idRoom'=>'10317','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>47,'idMk'=>8+29,'type'=>0,'hari'=>4,'idRoom'=>'10317','timeStart'=>'09:00:00','timeEnd'=>'12:00:00','durasi'=>3,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>48,'idMk'=>8+2,'type'=>1,'hari'=>4,'idRoom'=>'SB-915','timeStart'=>'15:00:00','timeEnd'=>'17:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>49,'idMk'=>8+2,'type'=>1,'hari'=>4,'idRoom'=>'SB-916','timeStart'=>'15:00:00','timeEnd'=>'17:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'B']
        );
        DB::table('jadwals')->insert(
            ['id'=>50,'idMk'=>8+34,'type'=>0,'hari'=>4,'idRoom'=>'SB-917','timeStart'=>'09:00:00','timeEnd'=>'12:00:00','durasi'=>3,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>51,'idMk'=>8+20,'type'=>0,'hari'=>4,'idRoom'=>'SB-917','timeStart'=>'12:00:00','timeEnd'=>'15:00:00','durasi'=>3,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>52,'idMk'=>8+26,'type'=>1,'hari'=>4,'idRoom'=>'SB-917','timeStart'=>'15:00:00','timeEnd'=>'17:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>53,'idMk'=>8+21,'type'=>1,'hari'=>4,'idRoom'=>'SB-918','timeStart'=>'13:00:00','timeEnd'=>'15:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'A']
        );
        
        //jumat
        DB::table('jadwals')->insert(
            ['id'=>54,'idMk'=>8+22,'type'=>0,'hari'=>5,'idRoom'=>'9120','timeStart'=>'07:00:00','timeEnd'=>'10:00:00','durasi'=>3,'prioritas'=>2,'kelas'=>'B']
        );
        DB::table('jadwals')->insert(
            ['id'=>55,'idMk'=>8+39,'type'=>0,'hari'=>5,'idRoom'=>'9121','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'B']
        );
        DB::table('jadwals')->insert(
            ['id'=>56,'idMk'=>8+39,'type'=>0,'hari'=>5,'idRoom'=>'9121','timeStart'=>'09:00:00','timeEnd'=>'11:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>57,'idMk'=>8+31,'type'=>0,'hari'=>5,'idRoom'=>'9122','timeStart'=>'07:00:00','timeEnd'=>'10:00:00','durasi'=>3,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>58,'idMk'=>8+32,'type'=>0,'hari'=>5,'idRoom'=>'10307','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>59,'idMk'=>8+30,'type'=>0,'hari'=>5,'idRoom'=>'SB-915','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'B']
        );
        DB::table('jadwals')->insert(
            ['id'=>60,'idMk'=>8+30,'type'=>0,'hari'=>5,'idRoom'=>'SB-915','timeStart'=>'09:00:00','timeEnd'=>'11:00:00','durasi'=>2,'prioritas'=>2,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>61,'idMk'=>8+4,'type'=>1,'hari'=>5,'idRoom'=>'SB-916','timeStart'=>'07:00:00','timeEnd'=>'09:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>62,'idMk'=>8+14,'type'=>1,'hari'=>5,'idRoom'=>'SB-916','timeStart'=>'09:00:00','timeEnd'=>'11:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>63,'idMk'=>8+34,'type'=>1,'hari'=>5,'idRoom'=>'SB-916','timeStart'=>'13:00:00','timeEnd'=>'15:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>64,'idMk'=>8+14,'type'=>1,'hari'=>5,'idRoom'=>'SB-917','timeStart'=>'09:00:00','timeEnd'=>'11:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'B']
        );
        DB::table('jadwals')->insert(
            ['id'=>65,'idMk'=>8+15,'type'=>1,'hari'=>5,'idRoom'=>'SB-917','timeStart'=>'13:00:00','timeEnd'=>'15:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'B']
        );
        DB::table('jadwals')->insert(
            ['id'=>66,'idMk'=>8+38,'type'=>1,'hari'=>5,'idRoom'=>'SB-917','timeStart'=>'15:00:00','timeEnd'=>'17:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>67,'idMk'=>8+14,'type'=>1,'hari'=>5,'idRoom'=>'SB-918','timeStart'=>'09:00:00','timeEnd'=>'11:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'C']
        );
        DB::table('jadwals')->insert(
            ['id'=>68,'idMk'=>8+15,'type'=>1,'hari'=>5,'idRoom'=>'SB-918','timeStart'=>'13:00:00','timeEnd'=>'15:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'A']
        );
        DB::table('jadwals')->insert(
            ['id'=>69,'idMk'=>8+38,'type'=>1,'hari'=>5,'idRoom'=>'SB-918','timeStart'=>'15:00:00','timeEnd'=>'17:00:00','durasi'=>2,'prioritas'=>1,'kelas'=>'B']
        );
        DB::table('jadwals')->insert(
            ['id'=>70,'idMk'=>8+33,'type'=>0,'hari'=>5,'idRoom'=>'10314','timeStart'=>'13:00:00','timeEnd'=>'16:00:00','durasi'=>3,'prioritas'=>2,'kelas'=>'A']
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