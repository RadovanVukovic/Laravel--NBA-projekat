<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    protected $table = 'stadiums';

    public function games()
    {
        return $this->hasMany('App\Game');
    }

    public function schedule()
    {
        return $this->hasMany('App\Schedule');
    }
}
