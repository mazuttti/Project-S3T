<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class AccessTypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('access_type_user')->insert([
            'user_id' => 1,
            'access_type_id' => 1
        ]);

        $faker = Factory::create();
        $max_user_id = User::max('id');

        for ($i = 0; $i < $max_user_id - 1; $i++) {
            DB::table('access_type_user')->insert([
                'user_id' => $faker->numberBetween(2, $max_user_id),
                'access_type_id' => $faker->numberBetween(2, 10)
            ]);
        }
    }
}
