<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\post;
class homecontroller extends Controller
{
    public function index()
    {
    	// return $post;
    	// $post = post::find($post);
    	// below get gives you the all collection but find and first gives only the instanes
     // return	post::get()->toArray();
    	$post = post::all();
    	  return view('user.blog',compact('post'));
    }
}
