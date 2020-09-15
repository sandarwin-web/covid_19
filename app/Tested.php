<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tested extends Model
{
     protected $fillable=[
    	'date','qty'
    ];
       public function city($value='')
    {
    	return $this->belongsTo('App\City');
    }
}
