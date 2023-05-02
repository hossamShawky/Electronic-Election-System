<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $guard = '';
    protected $table = 'candidates';
    protected $fillable = [
        'name','sur_name','serial_number','party','program','image','sympol','note',
        'program','type','national_id','region_id','election_id'];

    

     public function region()
    {
    	return $this->belongsTo('App\Region');
    }

    public function election()
    {
    	return $this->belongsTo('App\Election');
    }
     public function votes()
    {
        return $this->belongsToMany('App\Vote');
    }

   
    //  public function vote_candidate()
    // {
    //     return $this->hasMany('App\Election');
    // }
}
