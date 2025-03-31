<?php

namespace Tests\Unit;

use App\Models\TaxBand;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaxBandTest extends TestCase
{
    use RefreshDatabase;

    public function test_tax_band_creation()
    {
        $taxBand = TaxBand::create([
            'lower_limit' => 0,
            'upper_limit' => 5000,
            'tax_rate' => 0,
        ]);

        $this->assertDatabaseHas('tax_bands', [
            'lower_limit' => 0,
            'upper_limit' => 5000,
            'tax_rate' => 0,
        ]);

        $this->assertEquals(0, $taxBand->lower_limit);
        $this->assertEquals(5000, $taxBand->upper_limit);
        $this->assertEquals(0, $taxBand->tax_rate);
    }
}
