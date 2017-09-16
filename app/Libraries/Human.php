<?php
	namespace App\Libraries;
	
	use App\Http\Requests;
	use Illuminate\Http\Request;
	
	class Human
	{	
	
		//private $name;
		
		function walk($name = "dimas")
		{
			return "$name sedang berjalan";
		}
		
	}