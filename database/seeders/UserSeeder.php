<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => "admin@gmail.com",
            'mobile' => "1111111111",
            'password' => bcrypt('123456'),
            'mainwallet' => 0,
            'nsdlwallet' => 0,
            'lockedamount' => 0,
            'role_id' => 1,
            'parent_id' => 0,
            'company_id' => 1,
            'currancy_id' => 1,
            'status' => "active",
            'address' => "Bankhedi",
            'city' => "Bankhedi",
            'state' => "MP",
            'pincode' => "461990",
            'pancard' => "ATNPC0012G",
            'aadharcard' => "515718382282",
            'pancardpic' => "none",
            'aadharcardpic' => "none",
            'profile' => "none",
            'kyc' => "verified",
            'callbackurl' => "none"
        ]);
    }
}
