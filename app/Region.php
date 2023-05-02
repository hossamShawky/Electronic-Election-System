<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Region extends Model
{
    protected $guard = '';
    protected $table = 'regions';
    protected $fillable = ['serial_number','number_of_seats','election_id'];
    

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
     	$this->hasMany('App/Candidate');
     }
}
