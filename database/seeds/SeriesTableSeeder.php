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
            $title = ucfirst($faker->unique()->sentence);
            $slug = str_slug($title, '-');

            DB::table('series')->insert([
                'id_material' => $faker->randomElement($material_ids),
                'id_admin' => $faker->randomElement($admin_ids),
                'slug' => $slug,
                'nama' => $title,
                'thumbnail' => $faker->imageUrl(),
                'deskripsi' => $faker->paragraph,
                'approved' => numberBetween(0, 1),
                'published' => 0,
            ]);
        }
    }
}
