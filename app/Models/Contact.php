<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// karena nama classnya sama dengan nama table di database , jadinya bisa ke ambil data table nya 
class Contact extends Model
{
	protected $primaryKey = 'id'; // Misal kita memakai nama id_kendaraan
	protected $table = "contacts";
    //
	
	function __construct() 
	{
	 		
	}
	
	function groups()
	{
		return $this->belongsTo("App\Models\Group"); // ingat PATH nya 
		
	}
	// static
	public static function dummy()
	{
		return array("Dimas","Fikar");	
	}
	
	// non static , dipanggil dolo object nya 
	public function dummy2()
	{
		return Group::dummy2();	
	}
}
