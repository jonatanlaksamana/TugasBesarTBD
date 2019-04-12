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
            ['id' => 1, 'nama' => 'Jojo']
        );
        DB::table('users')->insert(
            ['id' => 2, 'nama' => 'Rey']
        );
        DB::table('users')->insert(
            ['id' => 3, 'nama' => 'Dian']
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
