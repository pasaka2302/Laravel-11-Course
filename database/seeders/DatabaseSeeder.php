<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Pasaka',
            'last_name' => 'Maile',
            'email' => 'pasaka@pmartsandcrafts.tz',
            'password' => 'M@ile2302'
        ]);

        $this->call(JobSeeder::class);
    }
}
