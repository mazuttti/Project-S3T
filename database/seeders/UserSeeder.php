<?php

namespace Database\Seeders;

use App\Models\PrimaryCompany;
use App\Models\User;
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
            'name' => 'Admaster',
            'email' => 'lucas@gmail.com',
            'password' => Hash::make('123')
        ]);

        User::factory(45)->state(new Sequence(
            fn ($sequence) => [
                'name' => 'Name '.$sequence->index,
                'primary_company_id' => PrimaryCompany::all()->random()
            ]
        ))->create();
    }
}
