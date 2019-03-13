<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Model\user\category;
use App\Model\user\post;
use App\Model\user\tag;
use Illuminate\Http\Request;
class homecontroller extends Controller
{
    public function index()
    {
    	// return $post;
    	// $post = post::find($post);
    	// below get gives you the all collection but find and first gives only the instanes
     // return	post::get()->toArray();
    	$posts = post::where('status',1)->paginate(2);
    	// return $posts;
    	  return view('user.blog',compact('posts'));
    }
    public function tag(tag $tag)
    {
        // return $tag;
            $posts = $tag->post();
        // return tag::with('post')->where('slug',$tag)->first();
         return view('user.blog',compact('posts'));
    }

    public function category(category $category)
    {
        $posts = $category->post();

        return view('user.blog',compact('posts'));
    }
}
