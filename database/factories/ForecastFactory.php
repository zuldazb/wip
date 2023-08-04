<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ForecastFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'article_id' => mt_rand(1,50),
            'date' => $this->faker->dateTimeThisMonth(),
            'fc_s' => $this->faker->randomElement([100, 150, 200, 250, 300, 350, 400, 450, 500]),
            'fc_m' => $this->faker->randomElement([100, 150, 200, 250, 300, 350, 400, 450, 500]),
            'fc_l' => $this->faker->randomElement([100, 150, 200, 250, 300, 350, 400, 450, 500]),
            'fc_xl' => $this->faker->randomElement([100, 150, 200, 250, 300, 350, 400, 450, 500]),
            'fc_2xl' => $this->faker->randomElement([100, 150, 200, 250, 300, 350, 400, 450, 500]),
            'fc_3xl' => $this->faker->randomElement([100, 150, 200, 250, 300, 350, 400, 450, 500]),
            'note' => ''
        ];
    }
}
