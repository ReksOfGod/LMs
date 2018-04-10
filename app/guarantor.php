<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guarantor extends Model
{
    protected $fillable = ['fname', 'lname', 'homePhoneNumber','mobilePhoneNumber'];
}
