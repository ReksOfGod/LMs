<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bank_accounts extends Model
{
    protected $fillable = ['accountName/title', 'bankBranch', 'bankName',];
}
