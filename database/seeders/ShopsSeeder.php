<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            ['name' => 'いはら','prefecture_id' => 37,'create_user_id' => 1,'update_user_id' => 1, 'created_at'=>now(), 'updated_at' => now()],
            ['name' => 'おか泉','prefecture_id' => 37,'create_user_id' => 1,'update_user_id' => 1, 'created_at'=>now(), 'updated_at' => now()],
            ['name' => 'よしや','prefecture_id' => 37,'create_user_id' => 1,'update_user_id' => 1, 'created_at'=>now(), 'updated_at' => now()],
        ]);
    }
}
