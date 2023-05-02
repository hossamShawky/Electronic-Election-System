<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Employee extends Authenticatable
{
    use Notifiable;

    protected $guard = 'web';
    protected $table = 'employees';
    protected $fillable = [
        'name','role','national_id','password','committee_id','election_id'];

     public function committee()
    {
    	return $this->belongsTo('App\Committee');
    }

     public function voters()
    {
    	return $this->hasMany('App\Voter');
    }

}
