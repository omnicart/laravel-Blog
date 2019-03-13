<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\post;
class postcontroller extends Controller
{
    public function post(post $post){
   		
    	// return $post;
   		// dd(post::all());
   		// return post::where('slug',$post)->first();
    // return	post::where('slug',$test)->first();
    	return view('user.post',compact('post'));
    }
  
}
