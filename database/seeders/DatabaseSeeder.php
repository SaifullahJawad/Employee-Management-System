<?php

namespace Database\Seeders;

use App\Models\Attendance;
use App\Models\Day;
use App\Models\Report;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

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

        Schema::disableForeignKeyConstraints();

        User::truncate();
        Day::truncate();
        Report::truncate();

        Schema::enableForeignKeyConstraints();


        User::create([
            'username' => 'hr@genieinfo',
            'email' => 'hr@genieinfo.tech',
            'password' => bcrypt('1234567'),
            'user_type' => 'owner'
        ]);
        


        $user1 = User::create([
            'username' => 'Rifat123',
            'email' => 'rifat123@genieinfo.tech',
            'password' => bcrypt('1234567'),
            'user_type' => 'employee'
        ]);

        $day = Day::create([
            'date' => '2022-10-01'
        ]);

        Report::create([
            'user_id' => $user1->id,

            'day_id' => $day->id,

            'check_in' => '09:00:00',

            'check_out' => '05:00:00'
            
        ]);



        $user2 = User::create([
            'username' => 'Shohag01',
            'email' => 'shohag01@genieinfo.tech',
            'password' => bcrypt('1234567'),
            'user_type' => 'employee'
        ]);

        Report::create([
            'user_id' => $user2->id,

            'day_id' => $day->id,

            'check_in' => '08:00:00',

            'check_out' => '04:00:00'
            
        ]);



        $user3 = User::create([
            'username' => 'Ahanf05',
            'email' => 'ahanf05@genieinfo.tech',
            'password' => bcrypt('1234567'),
            'user_type' => 'employee'
        ]);

        Report::create([
            'user_id' => $user3->id,

            'day_id' => $day->id,

            'check_in' => '10:00:00',

            'check_out' => '06:00:00'
            
        ]);



        $user4 = User::create([
            'username' => 'Emon3',
            'email' => 'emon3@genieinfo.tech',
            'password' => bcrypt('1234567'),
            'user_type' => 'employee'
        ]);

        Report::create([
            'user_id' => $user4->id,

            'day_id' =>$day->id,

            'check_in' => '09:45:00',

            'check_out' => '05:44:15'
            
        ]);



        $user5 = User::create([
            'username' => 'Bushra08',
            'email' => 'bushra08@genieinfo.tech',
            'password' => bcrypt('1234567'),
            'user_type' => 'employee'
        ]);

        Report::create([
            'user_id' => $user5->id,

            'day_id' => $day->id,

            'check_in' => '08:30:00',

            'check_out' => '04:00:00'
            
        ]);






        $day = Day::create([
            'date' => '2022-10-02'
        ]);

        Report::create([
            'user_id' => $user1->id,

            'day_id' => $day->id,

            'check_in' => '09:00:00',

            'check_out' => '05:00:00'
            
        ]);


        Report::create([
            'user_id' => $user2->id,

            'day_id' => $day->id,

            'check_in' => '08:00:00',

            'check_out' => '04:00:00'
            
        ]);


        Report::create([
            'user_id' => $user3->id,

            'day_id' => $day->id,

            'check_in' => '10:00:00',

            'check_out' => '06:00:00'
            
        ]);


        Report::create([
            'user_id' => $user4->id,

            'day_id' =>$day->id,

            'check_in' => '09:45:00',

            'check_out' => '05:44:15'
            
        ]);


        Report::create([
            'user_id' => $user5->id,

            'day_id' => $day->id,

            'check_in' => '08:30:00',

            'check_out' => '04:00:00'
            
        ]);

       
        
    }
}
