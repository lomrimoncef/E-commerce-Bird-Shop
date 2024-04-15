<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //admin
        DB::table('users')->insert([

            'name'=>'Admin',
            'username'=>'Admin',
            'email'=>'Admin@gmail.com',
            'password'=>Hash::make('111'),
            'role'=>'Admin',
            'status'=>'active',

        ],
            [

                //customer

                        'name'=>'User',
                        'username'=>'user',
                        'email'=>'user@gmail.com',
                        'password'=>Hash::make('111'),
                        'role'=>'user',
                        'status'=>'active',



            ]



        );

    }
}
