<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Active extends Model
{
    //
     protected $fillable=[
    	'date','qty','city_id'
    ];

     public function city($value='')
    {
    	return $this->belongsTo('App\City');
    }
}
