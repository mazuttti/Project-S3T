<?php

namespace Database\Seeders;

use App\Models\PrimaryCompany;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class PrimaryCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PrimaryCompany::create([
            'corporate_name' => 'Master Company',
            'fantasy_name' => 'Master Company',
            'cnpj' => '00.000.000/0000-00'
        ]);
        
        PrimaryCompany::factory(10)->state(new Sequence(
            fn ($sequence) => [
                'corporate_name' => 'Corporate Name '.$sequence->index
            ]
        ))->create();
    }
}
