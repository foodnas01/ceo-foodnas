<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DigitalCloud\Blameable\Traits\Blameable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;
use App\VerifyUser;


class User extends Authenticatable
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
        'name','phone_no','email', 'password','user_image','gender','dob'
    ];

    //,'created_by','updated_by','deleted_by'

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

  
     public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }


   

}
