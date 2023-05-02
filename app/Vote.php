<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $guard = '';
    protected $table = 'votes';
    protected $fillable = ['time','location','voter_id','committee_id'];

    public function candidates()
    {
        return $this->belongsToMany('App\Candidate');
    }
    
}
