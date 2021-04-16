<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['years', 'weight', 'height'];
    public $timestamps = false;

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function transfers()
    {
        return $this->hasMany(Transfer::class);
    }

    public function games()
    {
        return $this->belongsToMany('App\Game', 'player_statistics')->as('player_statistics')->withPivot('points', 'assists', 'rebounds');
    }


}
