<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cita_destalle;
use Faker\Generator as Faker;

$factory->define(Cita_destalle::class, function (Faker $faker) {

    return [
        'idcita' => $faker->randomDigitNotNull
    ];
});
