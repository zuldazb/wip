<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FabricFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'partnumber' => $this->faker->unique()->regexify('[A-Z]{5}[0-4]{3}'),
            'name' => $this->faker->numerify('fabric-####'),
            'qty' => 0,
            'uom' => $this->faker->randomElement(['Kg', 'Yard']),
            'supplier' => $this->faker->randomElement(['IMP', 'Indotex', 'MVP', 'BJA']),
        ];
    }
}
