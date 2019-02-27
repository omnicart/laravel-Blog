<?php

namespace App\Http\Controllers\admin;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\tag;
class tagcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $tags = tag::get();
          return view('admin.tag.show',compact('tags'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.tag.tag');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    // print_r($request->all());
       $validator = Validator::make($request->all(), [
            'name' => 'required',
            'slug' => 'required',
        ]);

       if ($validator->fails()) {
            return redirect('admin/tag/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        tag::create($request->except('_token'));

        return redirect()->route('tag.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(tag $tag)
    {
        // return $tag;
        return view('admin.tag.edit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,tag $tag)
    {
        // return $id;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'slug' => 'required',
        ]);

       if ($validator->fails()) {
            return redirect()->route('tag.edit',$id)
                        ->withErrors($validator)
                        ->withInput();
        }

        $tag->update($request->only('name','slug'));
        return redirect()->route('tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tag $tag)
    {
        // return $tag;
            $tag->delete();
            return redirect()->back();
    }
}
