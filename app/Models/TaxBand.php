<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxBand extends Model
{
    use HasFactory;

    protected $fillable = ['lower_limit', 'upper_limit', 'tax_rate'];
}
