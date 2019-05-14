<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
class AllProcedure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::unprepared("DROP procedure make_all_schedule");
        DB::unprepared('
        CREATE  PROCEDURE make_all_schedule()
        BEGIN
        DECLARE user_name,matakuliah_name,idRoom_,kelas_,idRoomResult_ varchar(255);
        DECLARE idUser_,idJadwal_  , hari_ , waktuSelesaiResult_   int  ;
        DECLARE startTime , endTime time;
        DECLARE isLoop boolean default false;
        
         DECLARE activity_all_cursor CURSOR FOR
            select idUser,users.nama,matakuliah.name,jadwals.timeStart,jadwals.timeEnd,jadwals.kelas,jadwals.hari,jadwals.idRoom,jadwals.id from 
                tempmengajar join users on tempmengajar.idUser = users.id
                             join jadwals on tempmengajar.idjadwal = jadwals.id
                             join matakuliah on jadwals.idMk = matakuliah.id
                             
                 order by timeEnd,hari;
                             
            DECLARE CONTINUE HANDLER FOR NOT FOUND set isLoop = true; 
            OPEN activity_all_cursor;
            CREATE TEMPORARY TABLE result_all_table(
                        id int PRIMARY KEY AUTO_INCREMENT,
                        idUser int,
                        namaDosen varchar(255) DEFAULT \'dummy\'  ,
                        namaMK varchar(255) DEFAULT \'dummy\' ,
                        waktuMulai time DEFAULT \'00:00:00\',
                        waktuSelesai time DEFAULT \'00:00:00\',
                        kelas varchar(50) DEFAULT 0,
                        hari int DEFAULT 1,
                        idRoom varchar(255) default \'1\' ,
                        idJadwal int default 0
                      );
             insert into result_all_table (idUser) values (0);     
             
              activity_loop : LOOP
              FETCH FROM activity_all_cursor INTO idUser_,user_name,matakuliah_name,startTime,endTime,kelas_,hari_,idRoom_,idJadwal_;
                if isLoop THEN
                   LEAVE activity_loop;
                END IF;
                
             select waktuSelesai into waktuSelesaiResult_ from result_all_table ORDER BY id DESC LIMIT 1;
             select idRoom  into  idRoomResult_ from result_all_table ORDER BY id DESC LIMIT 1;
             
             if startTime >= waktuSelesaiResult_ or idRoom_ != idRoomResult_ then
                    insert into result_all_table (idUser,namaDosen,namaMK,waktuMulai,waktuSelesai,kelas,hari,idRoom,idJadwal)   values (idUser_,user_name,matakuliah_name,startTime,endTime,kelas_,hari_,idRoom_,idJadwal);  
             end if;
             
             END LOOP activity_loop;
            
            CLOSE activity_all_cursor;
          
          select * from result_all_table;
        END
        ');

        DB::unprepared("DROP procedure IF EXISTS insertTempMatkul");
        DB::unprepared('
        CREATE  PROCEDURE insertTempMatkul( id INT)
        BEGIN
        insert into tempmatkul
        select jadwals.id,idMk,name,timeStart,timeEnd,idRoom,kelas,type,hari,semester from jadwals join matakuliah on matakuliah.id = jadwals.idMk WHERE idMk = id;
        END
        ');

        DB::unprepared("DROP procedure IF EXISTS call_bentrok");
        DB::unprepared('
        CREATE  PROCEDURE call_bentrok( )
        BEGIN
        call find_bentrok();
        select * from bentrok_table ;  
        END
        ');

        DB::unprepared("DROP procedure IF EXISTS call_schedule");
        DB::unprepared('
        CREATE  PROCEDURE call_schedule( )
        BEGIN call makeschedule();
            select * from result_table where id>1;  
        END
        ');

        // 
        DB::unprepared("DROP procedure IF EXISTS makeschedule");
        DB::unprepared('
    CREATE  PROCEDURE makeschedule()
        BEGIN
            DECLARE matakuliah_name varchar(255);
            DECLARE startTime , endTime ,waktuSelesaiResult time;
            DECLARE idJadwal_,tipe_,hari_,semester_, hariResult int;
            DECLARE isLoop boolean DEFAULT false;
            DECLARE kelas_ varchar(50);
         
            DECLARE activity_cursor CURSOR FOR
                select id,name,timeStart,timeEnd,kelas,type,hari,semester from tempmatkul order by type,timeEnd;
            DECLARE CONTINUE HANDLER FOR NOT FOUND set isLoop = true; 
            OPEN activity_cursor;
                  CREATE TEMPORARY TABLE result_table(
                 id int PRIMARY KEY AUTO_INCREMENT,
                      idJadwal int,
                name varchar(255),
                waktuMulai time DEFAULT \'00:00:00\',
                waktuSelesai time DEFAULT \'00:00:00\',
                kelas varchar(50) DEFAULT 0,
                tipe int DEFAULT 0,
                hari int DEFAULT 1,
                semester int DEFAULT 0
              
              ); 
              INSERT INTO result_table (name) VALUES (\'dummy\'); 
         
            activity_loop : LOOP
           FETCH FROM activity_cursor INTO idJadwal_,matakuliah_name,startTime,endTime,kelas_,tipe_,hari_,semester_;
           
                if isLoop THEN
                    LEAVE activity_loop;
                END IF;
                select waktuSelesai into waktuSelesaiResult from result_table ORDER BY id DESC LIMIT 1;
                select hari into hariResult from result_table ORDER BY id DESC LIMIT 1;
        
               if startTime >= waktuSelesaiResult or hari_ != hariResult  then 
                INSERT INTO result_table (name,waktuMulai,waktuSelesai,kelas,tipe,hari,semester,idJadwal)  VALUES (matakuliah_name,startTime,endTime,kelas_,tipe_,hari_,semester_,idJadwal_); 
               END IF;
                
           
            END LOOP activity_loop;
            CLOSE activity_cursor;       	
        END
        ');

        DB::unprepared("DROP procedure IF EXISTS Find_Bentrok");
        DB::unprepared('
    CREATE  PROCEDURE Find_Bentrok()
    BEGIN
           
    DECLARE matakuliah_name varchar(255);
    DECLARE startTime , endTime ,waktuSelesaiResult time;
    DECLARE tipe_,hari_,semester_, hariResult , idJadwal_ int;
    DECLARE isLoop boolean DEFAULT false;
    DECLARE kelas_ varchar(50);
    DECLARE activity_cursor CURSOR FOR
        select id,name,timeStart,timeEnd,kelas,type,hari,semester from tempmatkul order by type,timeEnd;
    DECLARE CONTINUE HANDLER FOR NOT FOUND set isLoop = true; 
    OPEN activity_cursor;
          CREATE TEMPORARY TABLE result_table_bentrok(
         id int PRIMARY KEY AUTO_INCREMENT,
      
        name varchar(255),
        waktuMulai time DEFAULT \'00:00:00\',
        waktuSelesai time DEFAULT \'00:00:00\',
        kelas varchar(50) DEFAULT 0,
        tipe int DEFAULT 0,
        hari int DEFAULT 1,
        semester int DEFAULT 0,
         idJadwal int
      
      ); 
        CREATE TEMPORARY TABLE bentrok_table(
         id int PRIMARY KEY AUTO_INCREMENT,
        name varchar(255),
        waktuMulai time DEFAULT \'00:00:00\',
        waktuSelesai time DEFAULT \'00:00:00\',
        kelas varchar(50) DEFAULT 0,
        tipe int DEFAULT 0,
        hari int DEFAULT 1,
        semester int DEFAULT 0,
        idJadwal int
      
      ); 
      INSERT INTO result_table_bentrok (name) VALUES (\'dummy\'); 
 
    activity_loop : LOOP
   FETCH FROM activity_cursor INTO idJadwal_,matakuliah_name,startTime,endTime,kelas_,tipe_,hari_,semester_;
   
        if isLoop THEN
            LEAVE activity_loop;
        END IF;
        select waktuSelesai into waktuSelesaiResult from result_table_bentrok ORDER BY id DESC LIMIT 1;
        select hari into hariResult from result_table_bentrok ORDER BY id DESC LIMIT 1;

       if startTime >= waktuSelesaiResult or hari_ != hariResult  then 
        INSERT INTO result_table_bentrok (name,waktuMulai,waktuSelesai,kelas,tipe,hari,semester,idJadwal)  VALUES (matakuliah_name,startTime,endTime,kelas_,tipe_,hari_,semester_,idJadwal_); 
       ELSE
        INSERT INTO bentrok_table (name,waktuMulai,waktuSelesai,kelas,tipe,hari,semester,idJadwal)  VALUES (matakuliah_name,startTime,endTime,kelas_,tipe_,hari_,semester_,idJadwal_); 
       
       END IF;
        
   
    END LOOP activity_loop;
    CLOSE activity_cursor;    	
END
        ');
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        DB::unprepared("DROP procedure IF EXISTS insertTempMatkul");
        DB::unprepared("DROP procedure IF EXISTS makeschedule");
        DB::unprepared("DROP procedure IF EXISTS Find_Bentrok");
        DB::unprepared("DROP procedure IF EXISTS call_bentrok");

    }
}
