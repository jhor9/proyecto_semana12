<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Doctor;
use Faker\Generator as Faker;

$factory->define(Doctor::class, function (Faker $faker) {

    return [
        'ap_nom' => $faker->word,
        'dni' => $faker->randomDigitNotNull,
        'espesialidad' => $faker->word
    ];
});
