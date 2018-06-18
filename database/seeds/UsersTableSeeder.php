<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i < 11; $i++) {
            App\User::create([
                'jenis_kelamin' => $faker->numberBetween(0, 1),
                'nama' => $faker->name(),
                'npm' => "1710631170" . $faker->unique()->numberBetween(100, 999),
                'email' => $faker->unique()->domainWord.$i.'@student.unsika.ac.id',
                'password' => bcrypt('secret')
            ]);
        }
    }
}
