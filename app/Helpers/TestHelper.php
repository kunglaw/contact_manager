<?php
/**
* change plain number to formatted currency
*
* @param $number
* @param $currency
*/

namespace App\Helpers;

//use App\Http\Requests;
//use Illuminate\Http\Request;

class TestHelper
{

	function formatNumber($number, $currency = 'IDR')
	{
	   if($currency == 'USD') {
			return number_format($number, 2, '.', ',');
	   }
	   return number_format($number, 0, '.', '.');
	}
}
