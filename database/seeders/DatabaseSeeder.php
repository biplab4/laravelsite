<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        DB::table('rooms')->insert([
            'type' => 'Standard Room',
            'description' => 'Standard Room',
            'slug' => 'Standard Room',
            'facility' => '["Wifi","AC"]',
            'charge' => '550'
        ]);
    }
}
