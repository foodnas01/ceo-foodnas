<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DigitalCloud\Blameable\Traits\Blameable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;
use App\VerifyUser;

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
        'title','start_date','end_date', 'total_seates','rating','gender','host_name','country','state','city','host_name','image'
    ];


}
