<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact_us';
    protected $fillable = ['first_name','last_name','email','phone','message'];
}
