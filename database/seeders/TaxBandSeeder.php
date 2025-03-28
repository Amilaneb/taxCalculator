<?php

namespace Database\Seeders;

use App\Models\TaxBand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaxBandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TaxBand::create(['lower_limit' => 0, 'upper_limit' => 5000, 'tax_rate' => 0]);
        TaxBand::create(['lower_limit' => 5000, 'upper_limit' => 20000, 'tax_rate' => 20]);
        TaxBand::create(['lower_limit' => 20000, 'upper_limit' => null, 'tax_rate' => 40]);
    }
}
