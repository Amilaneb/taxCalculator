<?php

namespace App\Http\Controllers;

use App\Services\TaxCalculator;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TaxCalculatorController extends Controller
{
    protected TaxCalculator $taxCalculator;

    public function __construct(TaxCalculator $taxCalculator)
    {
        $this->taxCalculator = $taxCalculator;
    }

    public function show(): View
    {
        return view('tax-calculator');
    }

    public function calculateTax(Request $request): View
    {
        $salary = $request->input('salary');
        $totalTax = $this->taxCalculator->calculateTotalTax($salary);

        return view('tax-calculator', ['salary' => $salary, 'totalTax' => $totalTax]);
    }}
