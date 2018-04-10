<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class disbursement extends Model
{
    protected $fillable = ['amount','user_id'];
}
