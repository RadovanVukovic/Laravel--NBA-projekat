<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function players()
    {
        return $this->hasMany('App\Player')->where('free', '0');
    }

    public function manager()
    {
        return $this->hasOne('App\Manager');
    }

    public function standings()
    {
        return $this->hasOne('App\Standings');
    }


    public function transfersFrom()
    {
        return $this->hasMany('App\Transfer', "team_id_from");
    }

    public function transfersTo()
    {
        return $this->hasMany('App\Transfer', "team_id_to");
    }


    public function gamesHome()
    {
        return $this->hasMany('App\Game', 'team_id_home');
    }

    public function gamesAway()
    {
        return $this->hasMany('App\Game', 'team_id_away');
    }


    public function gamesHomeStatistics()
    {
        return $this->hasManyThrough('App\GameStatistic', 'App\Game', 'team_id_home')->where('team', 'HOME');
    }

    public function gamesAwayStatistics()
    {
        return $this->hasManyThrough('App\GameStatistic', 'App\Game', 'team_id_away')->where('team', 'AWAY');
    }

    public function scheduleHome()
    {
        return $this->hasMany('App\Schedule', 'team_id_home');
    }

    public function scheduleAway()
    {
        return $this->hasMany('App\Schedule', 'team_id_away');
    }

}
