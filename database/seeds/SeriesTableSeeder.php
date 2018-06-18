<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $material_ids = DB::table('materials')->pluck('id')->toArray();
        $admin_ids = DB::table('users')->pluck('id')->toArray();

        for ($i=0; $i < 200; $i++) { 
            DB::table('series')->insert([
                'id_material' => $faker->randomElement($material_ids),
                'id_admin' => $faker->randomElement($admin_ids),
                'nama' => ucfirst($faker->unique()->sentence),
                'thumbnail' => $faker->imageUrl(),
                'deskripsi' => $faker->paragraph,
            ]);
        }
    }
}
