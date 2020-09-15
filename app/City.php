<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    protected $fillable=[
    	'name'
    ];

     public function helpservices($value='')
    {
    	return $this->hasMany('App\Helpservice');
    }

}
