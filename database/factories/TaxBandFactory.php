<?php

namespace Database\Factories;

use App\Models\TaxBand;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaxBandFactory extends Factory
{
    protected $model = TaxBand::class;

    public function definition(): array
    {
        return [
            'lower_limit' => $this->faker->numberBetween(0, 10000),
            'upper_limit' => $this->faker->numberBetween(10000, 100000),
            'tax_rate' => $this->faker->numberBetween(0, 50),
        ];
    }
}
