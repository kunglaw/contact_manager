<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; // faker untuk membuat data dummy pada database

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //DB Truncate
		DB::table("contacts")->truncate(); // reset tabel saat melakukan seed
		
		$faker = Faker::create();
		$contacts = array();
		
		foreach(range(1,20) as $index){
			
			$contacts[] = array(
				
				"name" => $faker->name,
				"email" => $faker->email,
				"phone" => $faker->phoneNumber,
				"address" => "{$faker->streetName} {$faker->postcode} {$faker->city}",
				"company" => $faker->company,
				"group_id" => rand(1,3),
				"created_at" => new DateTime,
				"updated_at" => new DateTime 
			
			
			);
			
		}
		
		DB::table("contacts")->insert($contacts);
    }
}
