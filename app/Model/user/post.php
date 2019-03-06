<?php

namespace App\Model\user;

use App\Model\user;
use App\Model\user\category;
use Illuminate\Database\Eloquent\Model;
class post extends Model
{
    public function tag()
    {
    	return $this->belongsToMany(tag::class)->withTimestamps();
    }

    public function category()
    {
    	return $this->belongsToMany(category::class,'category_posts')->withTimestamps();
    }
    
}
