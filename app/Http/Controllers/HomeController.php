<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
	function __construct()
	{
		
	}
	
	function index()
	{
		echo "<h1> Welcome Contact Manager </h1>";
		//view();
	}
	
}
