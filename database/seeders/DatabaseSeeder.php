<?php

namespace Database\Seeders;

use App\Models\Continent;
use App\Models\Country;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $continents = [
        //     ["id" => "1", "name" => "Europe"],
        //     ["id" => "2", "name" => "Asia"],
        //     ["id" => "3", "name" => "Africa"],
        //     ["id" => "4", "name" => "South America"],
        //     ["id" => "5", "name" => "North America"],
        // ];

        // foreach ($continents as $continent) {
        //     Continent::factory()->create($continent)
        //     ->each(function ($c) {
        //         $c->countries()->saveMany(Country::factory(10)->make());
        //     });
        // }

        Product::factory(100)->create();
    }
}
