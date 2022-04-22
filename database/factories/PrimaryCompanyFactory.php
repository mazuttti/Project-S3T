<?php

namespace Database\Factories;

use App\Models\PrimaryCompany;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PrimaryCompany>
 */
class PrimaryCompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PrimaryCompany::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'corporate_name' => $this->faker->name(),
            'fantasy_name' => $this->faker->company(),
            'cnpj' => $this->faker->numerify('##.###.###/000#-##'),
        ];
    }
}
