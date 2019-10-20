<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $themes1 = DB::table('themes')->insert([
        	'name' => "Revenge At The Reunion"
        ]);

        $themes2 = DB::table('themes')->insert([
        	'name' => "Murder At The Mansion"
        ]);

        $position = DB::table('access_levels')->insert([
    		"access_name" => "admin"
    	]);

    	$user = DB::table('users')->insert([
    		"fname" => "admin",
    		"lname" => "admin",
            "username" => "admin",
    		"password" => bcrypt('password'),
    		"email" => "admin@test.com",
    		"position_id" => 1
    	]);

    }
}
