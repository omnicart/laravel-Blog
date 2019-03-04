<?php


namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;
use App\Model\user\post;
use App\Model\user\category;
class category extends Model
{
     protected $fillable = ['name','slug'];

      protected $guarded = [];

         public function post()
    {
    	return $this->belongsToMany(post::class,'category_posts')->pivot('category');
    }
}
