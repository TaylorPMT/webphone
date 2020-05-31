<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * 
 */
class db_topic extends Models
{
	
	protected $table = "db_topic";

	public function post(){
		return $this->hasMany('app\db_post','topid','id');
	}
}