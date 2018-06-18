<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FriendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $user_msgs = DB::table('messages')->select(['id_dari', 'id_ke'])->distinct()->get()->toArray();

        for ($i=1; $i < count($user_msgs); $i++) {
            DB::table('friends')->insert([
                'id_user' => $user_msgs[$i]->id_dari,
                'id_berteman_dengan' => $user_msgs[$i]->id_ke
            ]);
        }
    }
}
