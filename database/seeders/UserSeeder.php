<?php

namespace Database\Seeders;

use App\Models\PrimaryCompany;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin Master',
            'email' => 'admin.master@email.com',
            'password' => Hash::make('123'),
            'primary_company_id' => 1
        ]);

        $faker = Factory::create();
        $max_company_id = PrimaryCompany::max('id');

        User::factory(45)->state(new Sequence(
            fn ($sequence) => [
                'name' => 'Name '.$sequence->index,
                'primary_company_id' => $faker->numberBetween(2, $max_company_id)      
            ]
        ))->create();
    }
}
