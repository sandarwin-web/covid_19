<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    //
    protected $fillable=[
    	'name',
    ];

     public function quarantines($value='')
    {
    	return $this->hasMany('App\Quarantine');
    }

    public function positives($value='')
    {
    	return $this->hasMany('App\Positive');
    }

     public function actives($value='')
    {
        return $this->hasMany('App\Active');
    }
}
