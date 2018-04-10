<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = ['comment','votes','spam','reply_id','page_id','users_id'];
 
   	protected $dates = ['created_at', 'updated_at'];
 
  	public function replies()
   	{
       return $this->hasMany('App\Comment','id','reply_id');
   	}
}
