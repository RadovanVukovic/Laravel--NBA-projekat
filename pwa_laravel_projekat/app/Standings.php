<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Standings extends Model
{
    protected $table = 'standings';
    public $timestamps = false;
    //protected $primaryKey = null;
    //public $incrementing = false;
    protected $fillable = ['*'];


    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}

