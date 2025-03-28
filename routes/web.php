<?php

use App\Http\Controllers\TaxCalculatorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaxCalculatorController::class, 'show']);
Route::post('/calculate', [TaxCalculatorController::class, 'calculateTax']);
