<?php

namespace App\Model\user;

use App\Model\user;
use App\Model\user\post;
use Illuminate\Database\Eloquent\Model;
class tag extends Model
{
      protected $fillable = ['name','slug'];

      protected $guarded = [];

        public function post()
    {
    	return $this->belongsToMany(post::class);
    }
    // public function getRouteKeyName()
    // {
    // 	return 'slug';
    // }
}
