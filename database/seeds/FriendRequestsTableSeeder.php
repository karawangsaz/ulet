<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FriendRequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $user_msgs = DB::table('users')->pluck('id')->toArray();

        // user dengan id = 1-5 ingin berteman dengan user dengan id = 11
        for ($i=1; $i <= 5; $i++) {
            DB::table('friend_requests')->insert([
                'id_dari' => $i,
                'id_ke' => 11
            ]);
        }
    }
}
