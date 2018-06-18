<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SeriesAdminsTableSeeder extends Seeder
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
        $admin_ids = DB::table('users')->pluck('id')->toArray();

        for ($i=1; $i < count($series_ids)+1; $i++) {
            DB::table('series_admins')->insert([
                'id_admin' => $faker->randomElement($admin_ids),
                'id_seri' => $i,
            ]);
        }
    }
}
