<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Apprentice>
 */
class ApprenticeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'fname' => $this -> faker -> unique() -> name,
           'lname' => $this -> faker -> unique() -> name,
           'email'  => $this -> faker -> unique() -> email,
           'phone'  => $this -> faker -> unique() -> phoneNumber,
           'address'  => $this -> faker -> unique() -> address,
           'image'  => $this -> faker -> imageUrl(),

        ];
    }
}
