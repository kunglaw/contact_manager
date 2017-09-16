<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	private $objContact; 
	 
	function __construct()
	{
		$this->objContact = new Contact;		
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
		
		
		return view("contacts.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
