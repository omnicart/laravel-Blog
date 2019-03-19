<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\post;
use DB;
use App\Model\user\tag;
use App\Model\user\category;
use Spatie\Flash\Message;
class postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $posts = post::get();
         return view('admin.post.show',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag = tag::get();
        $categories  = category::get();
        return view('admin.post.post',compact('tag','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'title' => 'required',
            'subtitle' => 'required',
            'slug' =>'required',
            'body'=>'required',
            'tags'=>'required',
            'category' =>'required',
            
        ]);
        $post = new post;
        // dd($post);
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->save();
        flashy()->success('Post has been succesfully Stored');
        // dd($post->tag());
        $post->tag()->sync($request->tags);
        $post->category()->sync($request->category);
        // // DB::TABLE('posts')->insert($request->except('_token','_wysihtml5_mode'));
        return redirect()->route('post.index');
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
    public function edit($id)
    {
        //     $edit = post::find($id);
        // // dd($edit);
            $tag = tag::get();

            $categories  = category::get();
        $edit = post::with('tag','category')->where('id',$id)->first();
       // return $edit;
        // $data = post::find($id)->with('tag','category')->get();
        // dd($data);
        // dd($categories);
        return view('admin.post.edit',compact('edit','tag','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // return $request->all();
         $this->validate($request,[
            'title' => 'required',
            'subtitle' => 'required',
            'slug' =>'required',
            'body'=>'required',
            'tags'=>'required',
            'category' =>'required',
        ]);

       $post = post::find($id);
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->tag()->sync($request->tags);
        $post->category()->sync($request->category);
        $post->save();
        flashy()->info('Post Uploaded succesfully');
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::find($id);
        $post->delete();
        flashy()->primary('Post Delete Successfully');
        return redirect()->route('post.index');
    }
}
