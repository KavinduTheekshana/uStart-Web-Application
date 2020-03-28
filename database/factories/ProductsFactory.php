<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Products;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Products::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'category_id' => $faker->numberBetween($min = 1, $max = 4),
        'number_of_pcs' => $faker->numberBetween($min = 100, $max = 1500),
        'product_price' => $faker->numberBetween($min = 700, $max = 9600),
        'product_image' => "uploads/products/default.jpg",
        'status' => $faker->boolean,       
        'description' => $faker->text($maxNbChars = 200),
    ];
});
