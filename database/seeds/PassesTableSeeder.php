<?php

use Illuminate\Database\Seeder;

class PassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($extra = 10)
    {
        factory(App\Pass::class, $extra)->create();
    }
}
