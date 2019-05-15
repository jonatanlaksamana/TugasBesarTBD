<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserModel extends Model
{
    //
    protected $table = 'users';

//    make it static  to make esier
    public  static  function getAllUsers(){
      return    DB::select('CALL getUser()');
    }

    public static  function toggleIsFill($id){
        return DB::statement("update users set isFill = 1  where id = $id");
    }

    public static function getUserLogin($id){
        return DB::select("select * from users where id = $id");
    }
}
