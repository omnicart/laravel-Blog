<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
      protected $fillable = ['name','slug'];

      protected $guarded = [];
}
