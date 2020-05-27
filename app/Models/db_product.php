<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class db_product extends Model
{
    //
    protected $table="db_product";
    protected $fillable=['name',
                        'catid',
                        'slug',
                        'updated_at',
                        'created_at',
                        'img',
                        'detail',
                        'number',
                        'price',
                        'pricesale',
                        'metakey',
                        'metadesc',
                                ];

    public function db_category(){
        return $this->belongsTo('App\Models\db_category','id');
    }

}
