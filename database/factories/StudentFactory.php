<?php

namespace Database\Factories;

use App\Models\School;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween(4,18),
            'address' => $this->faker->paragraph,
            'phone' => $this->faker->phoneNumber(),
            'school_id' => $this->faker->randomElement(School::pluck('id')),
        ];
    }
}
