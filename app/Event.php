<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DigitalCloud\Blameable\Traits\Blameable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;
use App\VerifyUser;
use App\Country;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use Notifiable;
    use SoftDeletes;
    use HasRoles;
    use Blameable;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','start_date','end_date', 'total_seates','price','rating','gender','country_id','state_id','city_id','host_name','image'
    ];

     public function countries()
    {
        return $this->belongsTo('App\Country','country_id','id');
    }

    public function states()
    {
        return $this->belongsTo('App\State','state_id','id');
    }

    public function cities()
    {
        return $this->belongsTo('App\City','city_id','id');
    }


}
