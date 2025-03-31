<?php

namespace Tests\Unit;

use App\Models\TaxBand;
use App\Services\TaxCalculator;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaxCalculatorTest extends TestCase
{
    use RefreshDatabase;

    public function test_tax_calculation()
    {
        // Crée des bandes d'impôt de test
        TaxBand::create(['lower_limit' => 0, 'upper_limit' => 5000, 'tax_rate' => 0]);
        TaxBand::create(['lower_limit' => 5000, 'upper_limit' => 20000, 'tax_rate' => 20]);
        TaxBand::create(['lower_limit' => 20000, 'upper_limit' => null, 'tax_rate' => 40]);

        $taxCalculator = new TaxCalculator();

        $this->assertEquals(1000, $taxCalculator->calculateTotalTax(10000));

        $this->assertEquals(11000, $taxCalculator->calculateTotalTax(40000));
    }
}
