<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class db_category extends Model
{
    //
    protected $table="db_category";

    public function db_product(){
        return $this->hasMany('App\Models\db_product','id');
    }
}
