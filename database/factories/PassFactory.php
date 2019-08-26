<?php

$factory->define(App\Pass::class, function ($faker) {

	$student_ids = App\Student::pluck('id')->toArray();
	$user_ids = App\User::pluck('id')->toArray();
	$destination_ids = App\Destination::pluck('id')->toArray();

	$out_time = $faker->dateTimeBetween($startDate = '-30 days', $endDate = '-2 days', $timezone = date_default_timezone_get());
	$in_time = $faker->dateTimeInInterval($startDate = $out_time, $interval = '+ 10 minutes', $timezone = date_default_timezone_get());

    return [
    	'student_id' => $faker->randomElement($student_ids),
    	'user_id' => $faker->randomElement($user_ids),
    	'destination_id' => $faker->randomElement($destination_ids),
    	'out_time' => $out_time,
    	'in_time' => $in_time,
        'rr_count' => 0
    ];
});
