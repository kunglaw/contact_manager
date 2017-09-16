<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Helpers\AssetHelper::class;

class TestController extends Controller
{
    //
	
	private $ObjAs;
	
	function __construct()
	{
		
		
		//$this->objAs = new \App\Helpers\AssetHelper ;
	}
	
	function index()
	{
		//echo "aa";
		//echo asset("anjing");
		echo DEV_NAME;
		//echo $this->objAs->asset_url();
		//echo $this->objHelp->formatNumber(20000,"IDR");
  		//echo $this->objLib->walk();	
	}
}
