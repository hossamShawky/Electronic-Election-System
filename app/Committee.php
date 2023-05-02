<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    protected $table = 'committees';
    protected $fillable = ['name','notes','start_time','end_time','election_id',
    	'region_id'];
    protected $guard = '';
     public function election()
    {
    	return $this->belongsTo('App\Election');
    }
    public function region()
    {
    	return $this->belongsTo('App\Region');
    }
    public function voters()
    {
        return $this->hasMany('App\Voter');
    }
    public function employees()
    {
        return $this->hasMany('App\Employee');
    }
}
