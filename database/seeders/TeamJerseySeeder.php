<?php

namespace Database\Seeders;
use Database\Factories;
use App\Models\TeamJerseys;
use Illuminate\Database\Seeder;

class TeamJerseySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TeamJerseys::factory(100)->create();
    }
}
