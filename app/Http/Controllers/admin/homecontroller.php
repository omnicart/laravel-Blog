<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class homecontroller extends Controller
{
    public function index()
    {
    	return view('admin.home');
    }

      public function __construct()
    {
        $this->middleware('auth:admin');
    }
}
