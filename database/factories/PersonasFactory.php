<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PersonasFactory extends Factory
{
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'apellido' => $this->faker->lastName(),
            'telefono' => $this->faker->cellularNumber(),
        ];
    }
}
