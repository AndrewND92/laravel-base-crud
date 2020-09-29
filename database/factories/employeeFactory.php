<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

use App\employee;

$factory->define(employee::class, function (Faker $faker) {
    return [
      'firstname' => $fakers -> firstName(),
      'lastname'  => $fakers -> lastName(),
      'username'  => $fakers -> unique() -> userName(),
      'birthDay'  => $fakers -> date(),
      'bio'       => $fakers -> text($maxNbChars = 100),
      'salary'    => $fakers -> randomFloat($nbMaxDecimals = 2, $min = 1000, $max = 10000),
      'rating'    => $fakers -> randomDigit(),
      'fired'     => $fakers -> boolean(),
    ];
});
