<?php

namespace App\Http\Controllers;

use App\upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class uploadcontroller extends Controller
{
    public function index(){
    	return view('update');
    }
    public function store(Request $Request)
    {
    	if($Request->hasFile('file'))
        {
         $filename =  $Request->file->getClientOriginalName();
          $Request->file->storeAs('upload',$filename);
             $upload = new upload;
        $upload->iamge = $filename;
        $upload->save();
        return 'yes';
        }


    }
}
