<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $sector_ids = DB::table('sectors')->pluck('id')->toArray();

        for ($i=0; $i < 20; $i++) { 
            $nama = ucfirst($faker->unique()->word);
            $slug = str_slug($nama, '-');

            DB::table('materials')->insert([
                'id_sector' => $faker->randomElement($sector_ids),
                'thumbnail' => $faker->imageUrl(),
                'slug' => $slug,
                'nama' => $nama,
            ]);
        }
    }
}
