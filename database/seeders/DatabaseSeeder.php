<?php

namespace Database\Seeders;

use App\Models\Monitor;
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
        $this->call(MonitorTableSeeder::class);
//        $this->call(MonitorEventTableSeeder::class);
        $this->call(ChannelTableSeeder::class);
    }
}
