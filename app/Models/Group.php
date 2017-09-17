<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; // jangan lupa load database library

use App\Libraries\Converter;

class Group extends Model
{
    //
	protected $primaryKey = 'id'; // Misal kita memakai nama id_kendaraan
	protected $table = "groups";
	
	function __construct()
	{
		$this->c = new Converter;
	}
	
	function all_group()
	{
		$arr = DB::select("SELECT * FROM groups");
		$result = $this->c->result_array($arr);
		return $result;	
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
