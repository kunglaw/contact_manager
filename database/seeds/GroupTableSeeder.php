<?php

use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB Truncate
		DB::statement("SET FOREIGN_KEY_CHECKS=0"); // check selalu apakah ada yg sama key nya 
		DB::table("groups")->truncate(); // reset tabel saat melakukan seed
		
		$groups = array(
			array("id"=>1,"name"=>"Family","created_at" => new DateTime, "updated_at" => new DateTime),
			array("id"=>2,"name"=>"Friends","created_at" => new DateTime, "updated_at" => new DateTime),
			array("id"=>3,"name"=>"Clients","created_at" => new DateTime, "updated_at" => new DateTime),
		);
		
		DB::table("groups")->insert($groups);
		
		
    }
}
