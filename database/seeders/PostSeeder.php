<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('posts')->insert([
                'record_id' => '１',
                'user_id' => '2',
         ]);
         
         DB::table('posts')->insert([
                'record_id' => '1',
                'user_id' => '2',
         ]);
    
    }
}
