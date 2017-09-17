<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // load model
use App\Models\Group;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	//private $objContact; 
	 
	function __construct()
	{
		
		// load model object
		$this->objContact = new Contact;	
		$this->objGroup   = new Group;	
	}
	 
    public function index(Request $request) // jangan lupa request
    {
        //
		
		// print_r($this->objContact->dummy2()); exit;
		
		$group_id = $request->get("group_id");
		if(!empty($group_id))
		{
			
			$contact_list = $this->objContact->where("group_id",$group_id)->paginate(10);// mau pakai object 
			$data["contact_list"] = $contact_list;
			
		}
		else
		{
			// atau mau pakai static method
			$data["contact_list"] = Contact::paginate(10);
		}
				
		//var_dump($data);
		return view("contacts.index",$data); // ada di folder contacts file index
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		$data["group"] = $this->objGroup->all_group();
		//$data["txt"] = "SHIT!! MAN";
		
		return view("contacts.form",$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	 
  function acho(Request $request)
  {
	  
	  //print_r($request);
  }
   	
   public function store(Request $request)
    {
        //
		
	 	$rules = [
			"name" => ["required","min:5"],
			"company" => ["required"],
			"email" => ["required","email"]
		];
		
		$this->validate($request,$rules); // kalau dia salah , maka OTOMATIS KE REDIRECT KE HALAMAN FORM !!!! 
		// KALAU BENAR , DIA LOLOS
		
		//$a = $request->all();
		//print_r($rules);
		//print_r($a);  exit;
		//Contact::create( $request->all());
		
		$this->objContact->fill($request->all());
		$this->objContact->save();
		exit();
		
		return redirect("contacts")->with("Message","Contact Saved");
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
