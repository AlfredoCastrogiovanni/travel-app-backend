<?php

namespace Database\Seeders;

use App\Models\Day;
use App\Models\Stage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dayIds = Day::all()->pluck('id');

        for ($i=0; $i < 10; $i++) {
            $newStage = new Stage();
            $newStage->day_id = fake()->randomElement($dayIds);
            $newStage->title = fake()->city();
            $newStage->description = fake()->text();
            $newStage->save();
        }
    }
}
