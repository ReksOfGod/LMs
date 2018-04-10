<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $fillable = ['fname', 'lname', 'dateOfBirth','homePhoneNumber','mobilePhoneNumber','employmentStatus','postionHeld','contractEnd'];
}
