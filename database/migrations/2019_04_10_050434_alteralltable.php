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
        DB::statement('ALTER TABLE `mengajar` ADD FOREIGN KEY (`idJadwal`) REFERENCES `jadwals`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ');
    
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
