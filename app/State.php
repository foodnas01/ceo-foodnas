<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function event()
    {
        return $this->hasOne('App\Event','state_id','id');
    }
}
