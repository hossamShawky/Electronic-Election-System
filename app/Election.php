<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Election extends Model
{
    //
    protected $guard = '';
    protected $table = 'elections';
    protected $fillable = [
        'start_date', 'code','end_date','type',
    ];

    public function regions()
    {
        return $this->hasMany('App\Region');
    }

    public function committees()
    {
        return $this->hasMany('App\Committee');
    }

     public function voters()
    {
        return $this->hasMany('App\Voter');
    }
    public function candidates()
    {
        return $this->hasMany('App\Candidate');
    }
    //  public function employees()
    // {
    //     return $this->hasMany('App\Employee');
    // }

}
