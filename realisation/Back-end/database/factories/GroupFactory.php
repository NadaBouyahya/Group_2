<?php

namespace Database\Factories;

use App\Models\TrainingYear;
use App\Models\Tutor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */
class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $trainingyearID = TrainingYear::all()->pluck('id')->toArray();
        $tutorsID = Tutor::all()->pluck('id')->toArray();
        return [
            //
            'name' => $this->faker->name,
            'logoURL' => $this->faker->imageUrl(),
            'trainingyear_id' => $this->faker->randomElement($trainingyearID),
            'tutor_id' => $this->faker->randomElement($tutorsID),
        ];
    }
}
