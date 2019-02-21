<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class postcontroller extends Controller
{
    public function index(){
    	return view('user.post');
    }
}
