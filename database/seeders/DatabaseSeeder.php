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
            'password' => '1234567',
            'user_type' => 'owner'
        ]);
        


        $user1 = User::create([
            'username' => 'Rifat123',
            'email' => 'rifat123@genieinfo.tech',
            'password' => '1234567',
            'user_type' => 'employee'
        ]);

        $day = Day::create([
            'date' => Carbon::parse('2022-10-23 00:00:00')->toDateTime()
        ]);

        Report::create([
            'user_id' => $user1->id,

            'day_id' => $day->id,

            'check_in' => Carbon::parse('2022-10-23 08:48:41')->toDateTime(),

            'check_out' => Carbon::parse('2022-10-23 16:48:41')->toDateTime()
            
        ]);



        $user2 = User::create([
            'username' => 'Shohag01',
            'email' => 'shohag01@genieinfo.tech',
            'password' => '1234567',
            'user_type' => 'employee'
        ]);

        Report::create([
            'user_id' => $user2->id,

            'day_id' => $day->id,

            'check_in' => Carbon::parse('2022-10-23 09:48:41')->toDateTime(),

            'check_out' => Carbon::parse('2022-10-23 17:48:41')->toDateTime()
            
        ]);



        $user3 = User::create([
            'username' => 'Ahanf05',
            'email' => 'ahanf05@genieinfo.tech',
            'password' => '1234567',
            'user_type' => 'employee'
        ]);

        Report::create([
            'user_id' => $user3->id,

            'day_id' => $day->id,

            'check_in' => Carbon::parse('2022-10-23 10:48:41')->toDateTime(),

            'check_out' => Carbon::parse('2022-10-23 18:48:41')->toDateTime()
            
        ]);



        $user4 = User::create([
            'username' => 'Emon3',
            'email' => 'emon3@genieinfo.tech',
            'password' => '1234567',
            'user_type' => 'employee'
        ]);

        Report::create([
            'user_id' => $user4->id,

            'day_id' =>$day->id,

            'check_in' => Carbon::parse('2022-10-23 09:48:41')->toDateTime(),

            'check_out' => Carbon::parse('2022-10-23 15:48:41')->toDateTime()
            
        ]);



        $user5 = User::create([
            'username' => 'Bushra08',
            'email' => 'bushra08@genieinfo.tech',
            'password' => '1234567',
            'user_type' => 'employee'
        ]);

        Report::create([
            'user_id' => $user5->id,

            'day_id' => $day->id,

            'check_in' => Carbon::parse('2022-10-23 07:48:41')->toDateTime(),

            'check_out' => Carbon::parse('2022-10-23 13:48:41')->toDateTime()
            
        ]);






        $day = Day::create([
            'date' => Carbon::parse('2022-10-24 00:00:00')->toDateTime()
        ]);

        Report::create([
            'user_id' => $user1->id,

            'day_id' => $day->id,

            'check_in' => Carbon::parse('2022-10-24 22:48:41')->toDateTime(),

            'check_out' => Carbon::parse('2022-10-25 06:48:41')->toDateTime()
            
        ]);


        Report::create([
            'user_id' => $user2->id,

            'day_id' => $day->id,

            'check_in' => Carbon::parse('2022-10-24 21:48:41')->toDateTime(),

            'check_out' => Carbon::parse('2022-10-25 05:48:41')->toDateTime()
            
        ]);


        Report::create([
            'user_id' => $user3->id,

            'day_id' => $day->id,

            'check_in' => Carbon::parse('2022-10-24 23:48:41')->toDateTime(),

            'check_out' => Carbon::parse('2022-10-25 07:48:41')->toDateTime()
            
        ]);


        Report::create([
            'user_id' => $user4->id,

            'day_id' =>$day->id,

            'check_in' => Carbon::parse('2022-10-24 22:48:41')->toDateTime(),

            'check_out' => Carbon::parse('2022-10-25 04:48:41')->toDateTime()
            
        ]);


        Report::create([
            'user_id' => $user5->id,

            'day_id' => $day->id,

            'check_in' => Carbon::parse('2022-10-24 22:48:41')->toDateTime(),

            'check_out' => Carbon::parse('2022-10-25 02:48:41')->toDateTime()
            
        ]);

       
        
    }
}
