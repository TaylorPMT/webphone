<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * 
 */
class db_post extends Models
{
	
	protected $table= "db_post";

	public function topic(){
		return $this->belongTo('app\db_topic','topid','id');
	}
}