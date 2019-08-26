<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($extra = 10)
    {
    	App\User::insert([
    		'first_name' => 'Demo',
    		'last_name' => 'User',
    		'email' => 'demo@gmail.com',
    		'password' => bcrypt('secret'),
    	]);
    	
        factory(App\User::class, $extra)->create();
    }
}
