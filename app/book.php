<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\author;
class book extends Model
{
    public function authors()
    {
    	return $this->hasMany(author::class);
    }

    public function scopeTest($query)
    {
    	return $query->where('bkname','jai shivray');
    }

     public function scopeTest2($query)
    {
    	return $query->where('id',2);
    }

}
