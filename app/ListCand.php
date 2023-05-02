<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListCand extends Model
{
      public $table='lists';
      
      public function sector(){
      	return $this->belongsTo('App\Region','sector_id');
      }
}
