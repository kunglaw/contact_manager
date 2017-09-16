<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
	protected $primaryKey = 'id'; // Misal kita memakai nama id_kendaraan
	protected $table = "groups";
	
	function __construct()
	{
		
	}
	
	function contacts()
	{
		return $this->hasMany("App\Models\Contact");
	}
	
	static function dummy2()
	{
		return array("Yulia","Sari","marlina");
	}	
}
