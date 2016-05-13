<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(SpeakersTableSeeder::class);
         $this->call(EventLevelsTableSeeder::class);
         $this->call(EventTypesTableSeeder::class);
         $this->call(EventTracksTableSeeder::class);
         $this->call(EventsTableSeeder::class);
         $this->call(SettingsTableSeeder::class);
         $this->call(FloorTableSeeder::class);
    }
}
