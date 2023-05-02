<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    protected $guard = '';
    protected $table = 'voters';
    protected $fillable = ['name','fingerprint','national_id','status','notes','election_id','region_id','employee_id'];


    public function election()
    {
    	return $this->belongsTo('App\Election');
    }
    public function region()
    {
    	return $this->belongsTo('App\Region');
    }
    public function employee()
    {
    	return $this->belongsTo('App\Employee');
    }
    public function vote()
    {
        return $this->hasOne('App\Vote');
    }

     public function committee()
    {
        return $this->belongsTo('App\Committee');
    }
}
