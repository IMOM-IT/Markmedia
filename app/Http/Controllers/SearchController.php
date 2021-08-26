<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request){


if ($request->has('query')){
        $search_text=$request->input('query');

       $searches= DB::table('blogs')->where('title','LIKE','%'.$search_text.'%')->paginate(4);
        $searches->appends($request->all());

       return view('search',['searches'=>$searches]);
    }
else{
return back()->with('error','search field is required');
}
    }}
