<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deceased extends Model
{
    protected $fillable=[
    	'date','qty'
    ];
       public function city($value='')
    {
    	return $this->belongsTo('App\City');
    }
}
