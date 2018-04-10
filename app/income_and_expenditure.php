<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class income_and_expenditure extends Model
{
    protected $fillable = ['monthlyConsolidatedPay', 'otherIncome', 'monthlyExpenditure','otherMonthlyloanRepayments'];
}
