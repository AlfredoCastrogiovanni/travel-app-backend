<?php

namespace Database\Seeders;

use App\Models\Trip;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userIds = User::all()->pluck('id');

        for ($i=0; $i < 10; $i++) {
            $newTrip = new Trip();
            $newTrip->user_id = fake()->randomElement($userIds);
            $newTrip->title = fake()->city();
            $newTrip->description = fake()->text();
            $newTrip->start_date = fake()->date();
            $newTrip->save();
        }
    }
}
