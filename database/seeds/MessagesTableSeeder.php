<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Message as Message;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $user_ids = DB::table('users')->pluck('id')->toArray();

        for ($i=0; $i < 500; $i++) {
            $dari = $faker->randomElement($user_ids);
            $ke = $faker->randomElement($user_ids);

            /* jika id = 11, maka pesan belum ada, karena 11 belum berteman 
             * dengan siapapun
             */
            if ($dari != $ke && $dari != 11 && $ke != 11) {
                Message::create([
                    'id_dari' => $faker->randomElement($user_ids),
                    'id_ke' => $faker->randomElement($user_ids),
                    'pesan' => $faker->paragraph(5)
                ]);        
            }                
        }
    }
}
