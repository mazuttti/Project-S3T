<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccessTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('access_types')->insert([
            ['name' => 'master'],
            ['name' => 'admin'],
            ['name' => 'reception'],
            ['name' => 'nursing'],
            ['name' => 'radiology'],
            ['name' => 'audiometry'],
            ['name' => 'doctor'],
            ['name' => 'accounting'],
            ['name' => 'call_screen']
        ]);
    }
}
