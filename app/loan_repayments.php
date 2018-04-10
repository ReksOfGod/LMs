<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loan_repayments extends Model
{
    protected $fillable = ['outstandingAmount', 'portfolioAtRisk', 'amountInDefault','paymentDueDate'];
}
