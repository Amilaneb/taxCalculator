<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaxCalculatorRequest;
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

    public function calculateTax(TaxCalculatorRequest $request): View
    {
        $salary = $request->validated()['salary'];
        $totalTax = $this->taxCalculator->calculateTotalTax($salary);

        return view('tax-calculator', ['salary' => $salary, 'totalTax' => $totalTax]);
    }}
