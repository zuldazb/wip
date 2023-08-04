<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Consumption;
use App\Models\Fabric;
use App\Models\Forecast;
use App\Models\Makloon;
use App\Models\SPK;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Fabric::factory(100)->create();
        Article::factory(50)->create();
        Forecast::factory(100)->create();
        Consumption::factory(100)->create();
        Makloon::factory(10)->create();
        SPK::factory(60)->create();
    }
}
