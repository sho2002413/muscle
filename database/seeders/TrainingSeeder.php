<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('trainings')->insert([
                'part_id' => '2',
                'name' => 'ベンチプレス',
         ]);
         
          DB::table('trainings')->insert([
                'part_id' => '2',
                'name' => 'ダンベルプレス',
         ]);
    }
}
