<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedule';

    public function teamHome()
    {
        return $this->belongsTo('App\Team', 'team_id_home');
    }

    public function teamAway(){

        return $this->belongsTo('App\Team', 'team_id_away');
    }

    public function stadium()
    {
        return $this->belongsTo('App\Stadium');
    }
}
