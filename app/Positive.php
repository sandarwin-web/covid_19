<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Positive extends Model
{
     protected $fillable=[
    	'age','gender','address','date','city_id'
    ];

     public function city($value='')
    {
    	return $this->belongsTo('App\City');
    }
}
