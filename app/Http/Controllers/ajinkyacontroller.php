<?php

namespace App\Http\Controllers;

use App\crud;
use Illuminate\Http\Request;

class ajinkyacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = crud::get();
        // dd($data);
       return view('crudhome')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('crudcreate');
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
            'name' =>'required',
            'email'=>'required|email',
            'number'=>'required|numeric',
        ]);
        $crud = new crud;
        $crud->name  = $request->name;
        $crud->email = $request->email;
        $crud->number = $request->number;
        $crud->save();

        return redirect()->to('ajinkya/crud')->with('msg','data save succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $data =    crud::find($id);
     return view('crudshow')->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return $id;
        $data = crud::find($id);
        return view('crudedit',['data'=>$data]);
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
             $this->validate($request,[
            'name' =>'required',
            'email'=>'required|email',
            'number'=>'required',
        ]);
               $data = crud::find($id);
                $data->name  = $request->name;
        $data->email = $request->email;
        $data->number = $request->number;
        $data->save();

        return redirect()->to('ajinkya/crud')->with('msg','data save succesfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crud = crud::find($id);
        $crud->delete();
        return redirect()->back();
    }
}
