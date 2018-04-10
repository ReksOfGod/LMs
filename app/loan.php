<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loan extends Model
{
    protected $fillable = ['amount', 'loantype', 'processCharge','interestRate','monthlyInstallments','monthlyPayments','insuranceCharge','shareContribution'];
}
