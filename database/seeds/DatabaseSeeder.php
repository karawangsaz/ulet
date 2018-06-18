<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(FriendRequestsTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
        $this->call(SectorsTableSeeder::class);
        $this->call(MaterialsTableSeeder::class);
        $this->call(SeriesTableSeeder::class);
        $this->call(SeriesAdminsTableSeeder::class);
        $this->call(SeriesAuthorsTableSeeder::class);
        $this->call(TopicsTableSeeder::class);
    }
}
