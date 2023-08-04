<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ConsumptionFactory extends Factory
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
            'fabric_id' => mt_rand(1,100),
            'spk_id' => mt_rand(1,60),
            'cons_s' => mt_rand(10,40) / 100,
            'cons_m' => mt_rand(10,40) / 100,
            'cons_l' => mt_rand(10,40) / 100,
            'cons_xl' => mt_rand(10,40) / 100,
            'cons_2xl' => mt_rand(10,40) / 100,
            'cons_3xl' => mt_rand(10,40) / 100,
            'note' => ''
        ];
    }
}
