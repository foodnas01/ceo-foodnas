<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function event()
    {
        return $this->hasOne('App\Event','city_id','id');
    }
}
