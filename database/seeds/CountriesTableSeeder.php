<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();
		$countries = array(
			array('id' => 1,'name' => "Saudi Arabia"),
			array('id' => 2,'name' => "United Arab Emirates"),
			array('id' => 3,'name' => "Oman"),
			array('id' => 4,'name' => "Yemen"),
			array('id' => 5,'name' => "Qatar"),
			array('id' => 6,'name' => "Bahrain"),
			array('id' => 7,'name' => "Jordan"),
			array('id' => 8,'name' => "Lebanon"),
			array('id' => 9,'name' => "Palestinian"),
			array('id' => 10,'name' => "Kuwait"),
			array('id' => 11,'name' => "Tunisia"),
			array('id' => 12,'name' => "Libya"),
			array('id' => 13,'name' => "Sudan")
		);

		DB::table('countries')->insert($countries);
    }
}
