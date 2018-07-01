<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Sector;

class SectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i < 4; $i++) {
            DB::table('sectors')->insert([
                'thumbnail' => $faker->imageUrl(),
                'nama' => ucfirst($faker->word),
                'deskripsi_singkat' => ucfirst($faker->paragraph)
            ]);
        }
    }
}
