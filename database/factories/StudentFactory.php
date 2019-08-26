<?php

$factory->define(App\Student::class, function (Faker\Generator $faker) {

    return [
    	'school_id' => $faker->numberBetween($min = 10000, $max = 99999),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'grade' => $faker->randomElement(array(9, 10, 11, 12))
    ];
});
