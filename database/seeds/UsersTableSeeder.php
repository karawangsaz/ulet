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
            if ($i % 2 == 1) {
                $foto = $faker->imageUrl(100, 100);
            } else {
                $foto = NULL;
            }

            App\User::create([
                'foto' => $foto,
                'jenis_kelamin' => $faker->numberBetween(0, 1),
                'tempat_lahir' => $faker->city,
                'nama' => $faker->name(),
                'npm' => "1710631170" . $faker->unique()->numberBetween(100, 999),
                'email' => $faker->unique()->domainWord.$i.'@student.unsika.ac.id',
                'password' => bcrypt('secret')
            ]);
        }
    }
}
