<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;
use App\Model\user;
class tag extends Model
{
      protected $fillable = ['name','slug'];

      protected $guarded = [];

        public function post()
    {
    	return $this->belongsToMany(post::class);
    }
}
