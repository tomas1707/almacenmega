<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->regexify('[A-Za-z0-9]{150}'),
            'rfc' => fake()->regexify('[A-Za-z0-9]{13}'),
            'telefono' => fake()->regexify('[A-Za-z0-9]{20}'),
            'correo' => fake()->regexify('[A-Za-z0-9]{150}'),
            'direccion' => fake()->text(),
            'activo' => fake()->boolean(),
        ];
    }
}
