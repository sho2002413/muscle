<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                PostSeeder::class,
                UserSeeder::class,
                RecordSeeder::class,
                PartSeeder::class,
                TrainingSeeder::class,
     
        ]);
    }
}
