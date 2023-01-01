<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\formateur>
 */
class formateurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => $this -> faker -> unique() -> name,
            'prenom' => $this -> faker -> unique() -> name,
            'email'  => $this -> faker -> unique() -> email,
            'imageURL'  => $this -> faker -> imageUrl(),
        ];
    }
}
