<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'entity' => $this->faker->randomElement(['Mutif', 'Damoza', 'Upmore']),
            'season' => $this->faker->randomElement(['Singgah Bersahaja 4.0', 'Singgah Bersahaja 5.0', 'Singgah Bersahaja 6.0']),
            'group' => $this->faker->randomElement(['Couple', 'Sarimbit', 'Reguler']),
            'category' => $this->faker->randomElement(['Koko', 'Gamis', 'Little Boy', 'Little Girl', 'Tunik']),
            'partnumber' => $this->faker->unique()->regexify('[A-Z]{5}[0-4]{3}'),
            'name' => 'Article ' . $this->faker->unique()->numberBetween(00, 60),
            'stock_m' => 0,
            'stock_l' => 0,
            'stock_xl' => 0,
            'stock_2xl' => 0,
            'stock_3xl' => 0,
            'note' => ''
        ];
    }
}
