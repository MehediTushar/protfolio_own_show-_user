<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'name' => 'Md. Mehedi Hasan',
            'email' => 'mehedituhsar@gmail.com',
            'password' => Hash::make('Tushar655201'),
            'phone'=>'01849498958',
            'address'=>'154/2 rampura, Dhaka, Bangladesh',
        ]);
    }
}
