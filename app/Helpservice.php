<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Helpservice extends Model
{
     protected $fillable=[
    	'name','address','time','opening_day','contact','city_id'
    ];

    public function city($value='')
{
    return $this->belongsTo('App\City');
}


}
