<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Election_voter extends Model
{
    
    protected $table = 'election_voters';
    protected $fillable = ['election_id','voter_id','created_at','updated_at'];
}
