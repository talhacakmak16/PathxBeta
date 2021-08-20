<?php

namespace Database\Seeders;

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
        $this->call(InfoSeeder::class);
        $this->call(player::class);
        $this->call(TeamsSeeder::class);
        $this->call(TeamJerseySeeder::class);
    }
}
