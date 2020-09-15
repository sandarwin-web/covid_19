<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quarantine extends Model
{
    //
     protected $fillable=[
    	'type','address','city_id'
    ];

     public function city($value='')
    {
    	return $this->belongsTo('App\City');
    }
}

