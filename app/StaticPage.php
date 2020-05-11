<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaticPage extends Model
{
	
	protected $fillable=['title','featured_image','content','type'];
    protected $guarded = [];

}
