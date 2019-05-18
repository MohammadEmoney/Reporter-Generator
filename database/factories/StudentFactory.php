<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'fullname' 		=> $faker->name(),
		'country'  		=> $faker->country(),
		'detail'		=> $faker->sentence($nbWords = 8, $variableNbWords = true)
    ];
});
