<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($extra = 10)
    {
        App\Student::insert([
            'school_id' => 1234,
            'first_name' => 'Demo',
            'last_name' => 'Student',
            'grade' => 9,
        ]);

        factory(App\Student::class, $extra)->create();
    }
}
