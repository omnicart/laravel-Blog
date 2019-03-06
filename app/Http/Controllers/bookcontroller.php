<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;
use App\author;
class bookcontroller extends Controller
{
    public function index(){
    	// $book = book::all();

    	// dd(author::get());
    // dd(book::find(1)->authors);
   // $book = book::with('authors:id,book_id,atname')->first();
    	 $book = book::with('authors')->where('id',2)->first();
    	// return $book;
    	return view('testview',compact('book'));
    }
}
