<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('records')->insert([
                'time' => '60',
                'weight' => '60',
                'count' => '3',
                'training_id' => '1',
          ]);
         
          DB::table('records')->insert([
                'time' => '60',
                'weight' => '20',
                'count' => '3',
                'training_id' => '2',
          ]);
           
    }
}
