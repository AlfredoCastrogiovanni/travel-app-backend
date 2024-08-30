<?php

namespace Database\Seeders;

use App\Models\Day;
use App\Models\Trip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tripIds = Trip::all()->pluck('id');

        for ($i=0; $i < 10; $i++) {
            $newDay = new Day();
            $newDay->trip_id = fake()->randomElement($tripIds);
            $newDay->title = fake()->word();
            $newDay->description = fake()->text();
            $newDay->save();
        }
    }
}
