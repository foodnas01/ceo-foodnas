<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Event;

class Country extends Model
{
    public function events()
    {
        return $this->hasOne('App\Event','country_id','id');
    }
}
