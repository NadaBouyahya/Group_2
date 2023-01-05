<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Group;
use App\Models\TrainingYear;
use App\Models\Tutor;
use Database\Factories\GroupFactory;
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
        // TrainingYear::factory(5)->create();
        // Tutor::factory()->has(Group::factory()->has(TrainingYear::factory()->count(5))->count(2))->create();
        TrainingYear::factory(5)->create();
        Tutor::factory(5)->create();
        Group::factory(4)->create();
    }
}
