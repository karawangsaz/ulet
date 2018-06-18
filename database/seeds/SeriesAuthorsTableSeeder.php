<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SeriesAuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $series_ids = DB::table('series')->pluck('id')->toArray();
        $author_ids = DB::table('users')->pluck('id')->toArray();

        for ($i=1; $i < count($series_ids)+1; $i++) {
            for ($j=0; $j < 2; $j++) { 
                DB::table('series_authors')->insert([
                    'id_seri' => $i,
                    'id_author' => $faker->randomElement($author_ids)
                ]);
            }
        }
    }
}
