<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deceased extends Model
{
    protected $fillable=[
    	'no','deceaseddate','qty','city_id'
    ];
}
