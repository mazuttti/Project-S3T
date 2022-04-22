<?php

namespace Database\Seeders;

use App\Models\AccessType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccessTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AccessType::insert([
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
