<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
	protected $fillable=['title','featured_image','content'];
    protected $guarded = [];

}
