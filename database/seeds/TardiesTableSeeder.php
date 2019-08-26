<?php

use Illuminate\Database\Seeder;

class TardiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($extra = 10)
    {
        factory(App\Tardy::class, $extra)->create();
    }
}
