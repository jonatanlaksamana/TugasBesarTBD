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
}
