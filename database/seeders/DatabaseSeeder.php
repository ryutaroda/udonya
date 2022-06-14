<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::factory(1)->create();
        UserProfile::create([
            'user_id' => 1,
        ]);

        $this->call([
            RegionsSeeder::class,
            PrefecturesSeeder::class,
            ShopsSeeder::class,
        ]);
    }
}
