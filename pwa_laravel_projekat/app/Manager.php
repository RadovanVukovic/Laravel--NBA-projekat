<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class   Manager extends Authenticatable
{
    public function team()
    {
        return $this->belongsTo('App\Team');
    }
}
