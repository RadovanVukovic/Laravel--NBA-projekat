<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function team_home()
    {
        return $this->belongsTo('App\Team', 'team_id_home');
    }

    public function team_away()
    {
        return $this->belongsTo('App\Team', 'team_id_away');
    }

    public function stadium()
    {
        return $this->belongsTo('App\Stadium');
    }

    public function players()
    {
        return $this->belongsToMany('App\Player', 'player_statistics')->as('player_statistics')->withPivot('points', 'assists', 'rebounds');
    }

    public function statisticsHome()
    {
        return $this->hasOne('App\GameStatistic')->where('team', 'HOME');
    }

    public function statisticsAway()
    {
        return $this->hasOne('App\GameStatistic')->where('team', 'AWAY');
    }
}
