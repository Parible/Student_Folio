<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Transcripts;
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
        // \App\Models\User::factory(10)->create();

        \App\Models\Transcripts::factory(10)->create();


        Transcripts::create([
                'firstname' => 'Patrick', 
                'lastname' => 'Nyame',
                'programme' => 'BIT',
                'level' => '400',
                'sid' => '221122890',
                'campus' => 'Tesano',
                'contact' => '0241612378',
                'dob' => '0123012'
                      ]);

            


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
