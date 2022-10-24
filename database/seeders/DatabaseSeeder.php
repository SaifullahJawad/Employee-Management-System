<?php

namespace Database\Seeders;

use App\Models\Attendance;
use App\Models\User;
use Carbon\Carbon;
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
        // User::factory(10)->create();


        User::create([
            'username' => 'hr@genieinfo',
            'email' => 'hr@genieinfo.tech',
            'password' => bcrypt('1234567'),
            'user_type' => 'owner'
        ]);

        User::create([
            'username' => 'Rifat123',
            'email' => 'rifat123@genieinfo.tech',
            'password' => bcrypt('1234567'),
            'user_type' => 'employee'
        ]);


        User::create([
            'username' => 'Shohag01',
            'email' => 'shohag01@genieinfo.tech',
            'password' => bcrypt('1234567'),
            'user_type' => 'employee'
        ]);


        User::create([
            'username' => 'Ahanf05',
            'email' => 'ahanf05@genieinfo.tech',
            'password' => bcrypt('1234567'),
            'user_type' => 'employee'
        ]);


        User::create([
            'username' => 'Emon3',
            'email' => 'emon3@genieinfo.tech',
            'password' => bcrypt('1234567'),
            'user_type' => 'employee'
        ]);


        User::create([
            'username' => 'Bushra08',
            'email' => 'bushra08@genieinfo.tech',
            'password' => bcrypt('1234567'),
            'user_type' => 'employee'
        ]);


       
        
    }
}
