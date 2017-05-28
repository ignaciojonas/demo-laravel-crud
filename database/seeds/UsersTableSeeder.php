<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Use Faker
        // https://github.com/fzaninotto/Faker
        $faker = Faker\Factory::create('ja_JP');
        for ($i = 0; $i < 20; $i++)
        {
            DB::table('users')->insert([
                'name' => $faker->unique()->userName(),
                'email' => $faker->unique()->email(),
                'password' => bcrypt('1234'),
            ]);
        }
    }
}