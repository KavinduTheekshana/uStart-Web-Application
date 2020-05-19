<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Attendence;
use Faker\Generator as Faker;

$factory->define(Attendence::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomDigit,
        'date' => $faker->date($format = 'Y-m-d',$min = '2020-01-01' ,$max = 'now'),
        'intime' => $faker->time($format = 'H:i:s',$min = '08:30:20', $max = '13:30:20'),
        'status' => "0",
        'outtime' => $faker->time($format = 'H:i:s', $max = 'now'),
        'duration' => $faker->time($format = 'H:i:s', $max = 'now'),
    ];
});
