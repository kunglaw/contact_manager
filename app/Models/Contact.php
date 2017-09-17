<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; // jangan lupa load database library

use App\Libraries\Converter;
use App\Libraries\Human;


// karena nama classnya sama dengan nama table di database , jadinya bisa ke ambil data table nya 
class Contact extends Model
{
	protected $primaryKey = 'id'; // Misal kita memakai nama id_kendaraan
	protected $table = "contacts";
	
	protected $fillable = ["group_id","name","email","address","company","phone"];
	protected $converter;
    //
	
	function __construct() 
	{
	 	// $this->orang = new Human;
		$this->converter = new Converter;	
	}
	
	function all_contact()
	{
		//$dt_contact = DB::table("contacts")->get();
		//DB::setFetchMode(PDO::FETCH_ASSOC); // repot klo mau dalam bentuk array 
		$dc = DB::select("SELECT * FROM contacts");
		$dt_contact = $this->converter->result_array($dc);
		//$dt_contact = $this->converter->brengsek();
		//echo $a = $this->orang->walk(); 
		
		return $dt_contact;	
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
