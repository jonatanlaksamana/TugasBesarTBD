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
        DB::unprepared("DROP procedure IF EXISTS insertTempMatkul");
        DB::unprepared('
        CREATE  PROCEDURE insertTempMatkul( id INT)
        BEGIN
                insert into tempmatkul
	               select idMk,name,timeStart,timeEnd,idRoom,kelas,type,hari,semester from jadwals join matakuliah on matakuliah.id = jadwals.idMk WHERE idMk = id;
        END
        ');

        DB::unprepared("DROP procedure IF EXISTS call_bentrok");
        DB::unprepared('
        CREATE  PROCEDURE call_bentrok( id INT)
        BEGIN
        call find_bentrok();
        select * from bentrok_table ;  
        END
        ');

        // 
        DB::unprepared("DROP procedure IF EXISTS makeschedule");
        DB::unprepared('
    CREATE  PROCEDURE makeschedule()
        BEGIN
            DECLARE matakuliah_name varchar(255);
            DECLARE startTime , endTime ,waktuSelesaiResult time;
            DECLARE tipe_,hari_,semester_, hariResult int;
            DECLARE isLoop boolean DEFAULT false;
            DECLARE kelas_ varchar(50);
         
            DECLARE activity_cursor CURSOR FOR
                select name,timeStart,timeEnd,kelas,type,hari,semester from tempmatkul order by type,timeEnd;
            DECLARE CONTINUE HANDLER FOR NOT FOUND set isLoop = true; 
            OPEN activity_cursor;
                  CREATE TEMPORARY TABLE result_table(
                 id int PRIMARY KEY AUTO_INCREMENT,
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
           FETCH FROM activity_cursor INTO matakuliah_name,startTime,endTime,kelas_,tipe_,hari_,semester_;
           
                if isLoop THEN
                    LEAVE activity_loop;
                END IF;
                select waktuSelesai into waktuSelesaiResult from result_table ORDER BY id DESC LIMIT 1;
                select hari into hariResult from result_table ORDER BY id DESC LIMIT 1;
        
               if startTime >= waktuSelesaiResult or hari_ != hariResult  then 
                INSERT INTO result_table (name,waktuMulai,waktuSelesai,kelas,tipe,hari,semester)  VALUES (matakuliah_name,startTime,endTime,kelas_,tipe_,hari_,semester_); 
               END IF;
                
           
            END LOOP activity_loop;
            CLOSE activity_cursor;
            
            
                select * from result_table where id>1 ;   	
    END

        ');

        DB::unprepared("DROP procedure IF EXISTS Find_Bentrok");
        DB::unprepared('
    CREATE  PROCEDURE Find_Bentrok()
        BEGIN
           
        DECLARE matakuliah_name varchar(255);
        DECLARE startTime , endTime ,waktuSelesaiResult time;
        DECLARE tipe_,hari_,semester_, hariResult int;
        DECLARE isLoop boolean DEFAULT false;
        DECLARE kelas_ varchar(50);
     
        DECLARE activity_cursor CURSOR FOR
            select name,timeStart,timeEnd,kelas,type,hari,semester from tempmatkul order by type,timeEnd;
        DECLARE CONTINUE HANDLER FOR NOT FOUND set isLoop = true; 
        OPEN activity_cursor;
              CREATE TEMPORARY TABLE result_table(
             id int PRIMARY KEY AUTO_INCREMENT,
            name varchar(255),
            waktuMulai time DEFAULT \'00:00:00\',
            waktuSelesai time DEFAULT \'00:00:00\',
            kelas varchar(50) DEFAULT 0,
            tipe int DEFAULT 0,
            hari int DEFAULT 1,
            semester int DEFAULT 0
          
          ); 
            CREATE TEMPORARY TABLE bentrok_table(
             id int PRIMARY KEY AUTO_INCREMENT,
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
       FETCH FROM activity_cursor INTO matakuliah_name,startTime,endTime,kelas_,tipe_,hari_,semester_;
       
            if isLoop THEN
                LEAVE activity_loop;
            END IF;
            select waktuSelesai into waktuSelesaiResult from result_table ORDER BY id DESC LIMIT 1;
            select hari into hariResult from result_table ORDER BY id DESC LIMIT 1;
    
           if startTime >= waktuSelesaiResult or hari_ != hariResult  then 
            INSERT INTO result_table (name,waktuMulai,waktuSelesai,kelas,tipe,hari,semester)  VALUES (matakuliah_name,startTime,endTime,kelas_,tipe_,hari_,semester_); 
           ELSE
            INSERT INTO bentrok_table (name,waktuMulai,waktuSelesai,kelas,tipe,hari,semester)  VALUES (matakuliah_name,startTime,endTime,kelas_,tipe_,hari_,semester_); 
           
           END IF;
            
       
        END LOOP activity_loop;
        CLOSE activity_cursor;
        
        
            select * from bentrok_table ;     	
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
