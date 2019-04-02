<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class testcontroller extends Controller
{
    public function index()
    {
    	return view('validate');
    }
    public function store(request $request)
    {
    	// return $request->all();
    	// $this->validate($request,[
    	// 	'first' =>'required',
    	// 	'second' =>'required'
    	// ]);

    	$data = Validator::make($request->all(),[
    			 	'first' =>'required',
    				'second' =>'required'
    	])->validate();

    	 // if ($data->fails()) {
      //       return redirect('test')
      //                   ->withErrors($data);
      //              }
    }
}
