<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\author;
class book extends Model
{
    public function authors()
    {
    	return $this->hasOne(author::class);
    }
}
