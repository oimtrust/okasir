<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker      = Faker::create();

        foreach (range(1, 5) as $index) {
            DB::table('users')->insert([
                'name'          => $faker->name,
                'email'         => strtolower($faker->firstName) . '@gmail.com',
                'password'      => bcrypt('rahasia'),
                'created_at'    => $faker->dateTime($max = 'now'),
                'updated_at'    => $faker->dateTime($max = 'now'),
            ]);
        }
    }
}
