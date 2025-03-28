<?php

namespace App\Services;

use App\Models\TaxBand;
use Illuminate\Database\Eloquent\Collection;

class TaxCalculator
{
    protected Collection $taxBands;

    public function __construct()
    {
        $this->taxBands = TaxBand::all();
    }

    public function calculateTotalTax($salary): float|int
    {
        $totalTax = 0;

        foreach ($this->taxBands as $band) {
            $totalTax += $this->calculateBandTax($band, $salary);
        }

        return $totalTax;
    }

    private function calculateBandTax($band, $salary): float|int
    {
        if ($salary <= $band->lower_limit) return 0;
        if ($band->upper_limit && $salary >= $band->upper_limit) {
            return ($band->upper_limit - $band->lower_limit) * $band->tax_rate / 100;
        }
        return ($salary - $band->lower_limit) * $band->tax_rate / 100;
    }
}
