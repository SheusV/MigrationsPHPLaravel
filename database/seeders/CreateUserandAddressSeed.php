<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUserandAddressSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            "name"=>"willtest",
	        "email"=>"dhasiduad@gmail.com",
	        "password"=>Hash::make("test"),
        ]);

        DB::table('addresses')->insert([
            "address"=>"Rua nova, numero 3",

        ]);
    }
}
