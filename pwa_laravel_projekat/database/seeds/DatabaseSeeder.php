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
        $this->call([
            TeamSeeder::class,
            PositionSeeder::class,
            PlayerSeeder::class,
            ManagerSeeder::class,
            StandingsSeeder::class,
            StadiumSeeder::class,
            TransferSeeder::class,
            GameSeeder::class,
            PlayerStatisticSeeder::class,
            GameStatisticsSeeder::class,
            ScheduleSeeder::class,


        ]);
    }
}
