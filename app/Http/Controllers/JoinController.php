<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $blogs = DB::table('category')
            ->join('blogs', 'category.id', '=', 'c_id')
            ->get();
return view('admin.index',['blogs'=>$blogs]);

    }
    public function index2()
    {
        $blogs = DB::table('category')
            ->join('blogs', 'category.id', '=', 'c_id')
            ->get();
        return view('admin.layout-sidenav-light',['blogs'=>$blogs]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog=$request->validate([
           'title'=>'required|min:10',
           'description'=>'required',
           'category'=>'required',
            'image'=>'image|required',

        ]);
        if ($request->hasFile('image')){
            $image = $request->file('image')->store('images');
        }
        else{
            $image=null;
        }
      $blog=new blogs;
        $blog->title=$request->input('title');
        $blog->description=$request->input('description');
        $blog->c_id=$request->input('category');
        $blog->facebook=$request->input('facebook');
        $blog->twitter=$request->input('twitter');
        $blog->images=$image;
        $blog->save();
        return back()->with('success','Blog added successfully');

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
