<?php

namespace Database\Seeders;

use App\Models\User;
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
            'email' => 'rifat@genieinfo.tech',
            'password' => bcrypt('1234567'),
            'user_type' => 'employee'
        ]);
        
    }
}
