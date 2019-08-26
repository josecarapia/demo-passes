<?php

$factory->define(App\Tardy::class, function ($faker) {

	$student_ids = App\Student::pluck('id')->toArray();
	$user_ids = App\User::pluck('id')->toArray();

	$time = $faker->dateTimeBetween($startDate = '-30 days', $endDate = '-2 days', $timezone = date_default_timezone_get());

    return [
    	'student_id' => $faker->randomElement($student_ids),
    	'user_id' => $faker->randomElement($user_ids),
    	'time' => $time,
    ];
});
