<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('parts')->insert([
                'name' => '胸',
        ]);
        
       DB::table('parts')->insert([
                'name' => '肩',
        ]);
     }
}
  