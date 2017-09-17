<?php 
	
	namespace App\Libraries;
	
	use App\Http\Requests;
	use Illuminate\Http\Request;
	
	class Converter
	{
		function result_array($new_arr)
		{
			//var_dump($object); exit;
			$res = array_map(function($object){
				return (array) $object;
			}, $new_arr);
			
			return $res;
		}
		
		function brengsek()
		{
			echo "aaaaa";	
		}
		
	}


