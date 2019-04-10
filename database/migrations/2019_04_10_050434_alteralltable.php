<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alteralltable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('ALTER TABLE `mengajar` ADD FOREIGN KEY (`idJadwal`) REFERENCES `jadwals`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ');
        DB::statement('ALTER TABLE `mengajar` ADD FOREIGN KEY (`idUser`) REFERENCES `Users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ');
        DB::statement('ALTER TABLE `jadwals` ADD FOREIGN KEY (`idMk`) REFERENCES `MataKuliah`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ');
        DB::statement('ALTER TABLE `jadwals` ADD FOREIGN KEY (`idRoom`) REFERENCES `Ruangan`(`idRoom`) ON DELETE RESTRICT ON UPDATE RESTRICT; ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
