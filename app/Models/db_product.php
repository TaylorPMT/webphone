<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class db_product extends Model
{
    //
    protected $table="db_product";
<<<<<<< HEAD

=======
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
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a

    public function db_category(){
        return $this->belongsTo('App\Models\db_category','id');
    }

}
