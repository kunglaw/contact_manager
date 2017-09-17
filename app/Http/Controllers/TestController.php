<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Helpers\AssetHelper::class;
use App\Models\Contact;

class TestController extends Controller
{
    //
	
	private $ObjAs;
	
	function __construct()
	{
		//$this->objAs = new \App\Helpers\AssetHelper ;
		$this->objModel = new Contact;
	}
	
	function index()
	{
		
		$d = $this->objModel->dummy();
		print_r($d); exit;
		//echo "aa";
		//echo asset("anjing");
		echo DEV_NAME;
		//echo $this->objAs->asset_url();
		//echo $this->objHelp->formatNumber(20000,"IDR");
  		//echo $this->objLib->walk();	
	}
	
	function create() 
	{
		echo "create exists ... ";	
	}
	
	function list_contact()
	{
		
		//exit("hello darkness");
		$all_contact = $this->objModel->all_contact();	
		echo "<ul>";
		foreach($all_contact as $row) 
		{
			echo "<li> $row[name] - $row[company] - $row[email] </li>";
		}
		echo "</ul>";
		
	}
	
	function form()
	{
		return view("contoh_form");
	}
}
