<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class db_product extends Model
{
    //
    protected $table="db_product";


    public function db_category(){
        return $this->belongsTo('App\Models\db_category','id');
    }

}
