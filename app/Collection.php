<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    //
    // public function region()
    // {
    // 	return $this->belongsTo('App\Region');
    // }


    public function regions()
    {
    	return $this->hasMany('App\Region','region_id');
    
    }


    public function election()
    {
    	return $this->belongsTo('App\Election');
    }
     
}
