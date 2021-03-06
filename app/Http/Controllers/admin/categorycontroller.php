<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\category;
class categorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $categories =  category::get();
       // dd($categories);
        return view('admin.category.show',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $this->validate($request,[
            'name'=>'required',
            'slug' =>'required'
        ]);
        category::create($request->all());
        // $category = new category;
        // $category->name = $request->name;
        // $category->slug = $request->slug;
        // $category->save();
        return redirect('admin/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        return $category->post();
        // return category::where('id',$id)->first();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
         // return $id;
        return view('admin.category.edit')->with(['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
           $this->validate($request,[
            'name'=>'required',
            'slug' =>'required'
        ]);
           // $category->name = $request->name;
           // $category->slug = $request->slug;
           // $category->Save();
           $category->update($request->all());
       // $category->update(['name'=>$request->name,'slug'=>$request->slug]);
       return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        // $category = category::find($category);
        // return $category;
      $category->delete();
      return redirect('admin/category');
    }

     public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
}
