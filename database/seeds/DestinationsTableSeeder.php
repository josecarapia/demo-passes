<?php

use Illuminate\Database\Seeder;

class DestinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($extra = 10)
    {
		$destinations = array(
			array('name' => 'RR'),
            array('name' => 'Counselor'),
            array('name' => 'Front'),
			array('name' => 'Nurse'),
			array('name' => 'Discipline')
		);

		App\Destination::insert($destinations);

    }
}
