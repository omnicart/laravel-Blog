<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;
use App\author;
class bookcontroller extends Controller
{
    public function index(){
     // $book = book::get();


   //  	// dd(author::get());
    	return book::find(2)->authors;
    // $book = book::find(2)->authors;
    // $book = book::with('authors')->where('id',2)->first();
    	 // $book = book::with('authors')->where('id',2)->first();
    	// return $book;
    	return view('testview',compact('book'));
    }
}
