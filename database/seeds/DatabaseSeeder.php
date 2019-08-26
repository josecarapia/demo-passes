<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $num_users = 5;
        $num_students = 10;
        $num_passes = 20;
        $num_tardies = 20;
    
        $this->call(UsersTableSeeder::class, $num_users);
        $this->call(StudentsTableSeeder::class, $num_students);
        $this->call(DestinationsTableSeeder::class);
        $this->call(PassesTableSeeder::class, $num_passes);
        $this->call(TardiesTableSeeder::class, $num_tardies);
    }

    /**
     * Override call() to be able to pass extra arguments.
     */
    public function call($class, $extra = null) {
        $this->resolve($class)->run($extra);

        if (isset($this->command)) {
            $this->command->getOutput()->writeln("<info>Seeded:</info> $class");
        }
    }
}
