<?php

namespace App\Http\Controllers;
use Newsletter;

use App\Models\blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $email=$request->validate([
            'email'=>'required|email'
        ]);

        if ( ! Newsletter::isSubscribed($request->email) )
        {
            Newsletter::subscribePending($request->email);
            return redirect()->back()->with('success', 'Thanks For Subscribing, please confirm email');
        }
        return redirect()->back()->with('failure', 'Sorry! You have already subscribed ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('marketing-single',['id'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $db=DB::table('blogs')->where('id',$id)->get();

        return view('admin.form.edit',['db'=>$db,'id'=>$id]);
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

        $db=$request->validate([
            'title'=>'required|min:10',
            'description'=>'required',
            'category'=>'required',


        ]);
        if ($request->hasFile('image')){
            $image = $request->file('image')->store('images');
        }
        else{
           $images= DB::table('blogs')->select('*')->where('id','=',$id)->get();
            foreach ($images as $i)
                $image=$i->images;
        }
        $b= blogs::find($id);
        $b->title=$request->input('title');
        $b->description=$request->input('description');
        $b->facebook=$request->input('facebook');
        $b->twitter=$request->input('twitter');
        $b->c_id=$request->input('category');
        $b->images=$image;

        $b->save();
        return back()->with('success','Changed successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        DB::table('blogs')->delete($id);
        return redirect()->back()->with('delete','blog deleted ');
    }
    public function contact(Request $request){
        $recomend=$request->validate([
           'email'=>'email|required',
           'name'=>'required:min3',
           'phone'=>'required|min:9',
           'message_content'=>'required:min:10'
        ]);
        DB::table('messages')->insert($recomend);
        return back()->with('success','Thank you for message');
    }
}
