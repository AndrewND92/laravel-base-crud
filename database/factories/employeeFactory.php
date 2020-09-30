<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

use App\employee;

$factory->define(employee::class, function (Faker $faker) {
    return [
      'firstname' => $faker -> firstName(),
      'lastname'  => $faker -> lastName(),
      'username'  => $faker -> unique() -> userName(),
      'birthDay'  => $faker -> date(),
      'bio'       => $faker -> text($maxNbChars = 100),
      'salary'    => $faker -> randomFloat($nbMaxDecimals = 2, $min = 1000, $max = 10000),
      'rating'    => $faker -> randomDigit(),
      'fired'     => $faker -> boolean(),
    ];
});
