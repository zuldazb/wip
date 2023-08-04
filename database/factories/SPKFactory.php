<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SPKFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'forecast_id' => mt_rand(1,50),
            'makloon_id' => mt_rand(1,10),
            'no_spk' => $this->faker->unique()->randomNumber(2, true),
            'date' => $this->faker->dateTimeThisMonth(),
            'spk_s' => $this->faker->randomElement([100, 150, 200, 250, 300, 350, 400, 450, 500]),
            'spk_m' => $this->faker->randomElement([100, 150, 200, 250, 300, 350, 400, 450, 500]),
            'spk_l' => $this->faker->randomElement([100, 150, 200, 250, 300, 350, 400, 450, 500]),
            'spk_xl' => $this->faker->randomElement([100, 150, 200, 250, 300, 350, 400, 450, 500]),
            'spk_2xl' => $this->faker->randomElement([100, 150, 200, 250, 300, 350, 400, 450, 500]),
            'spk_3xl' => $this->faker->randomElement([100, 150, 200, 250, 300, 350, 400, 450, 500]),
            'note' => ''
        ];
    }
}
