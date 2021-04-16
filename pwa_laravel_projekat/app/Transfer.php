<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    public $timestamps = false;

    public function teamFrom()
    {
        return $this->belongsTo(Team::class, "team_id_from");
    }

    public function teamTo()
    {
        return $this->belongsTo(Team::class, "team_id_to");
    }

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
