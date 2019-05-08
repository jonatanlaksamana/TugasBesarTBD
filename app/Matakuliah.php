<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    //
    protected $table = 'matakuliah';
    public function parent(){
        return $this->belongsTo('App\Matakuliah','semester');
    }
    public function children()
    {
        return $this->hasMany('App\Matakuliah', 'semester');
    }
}
