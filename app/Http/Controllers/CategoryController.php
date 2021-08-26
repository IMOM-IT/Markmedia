<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function marketing(){
       $db= DB::table('blogs')->select('*')->where('c_id','=',1)->paginate(5);
        return view('marketing-blog',['db'=>$db]);

    }
    public function news(){
        $db= DB::table('blogs')->select('*')->where('c_id','=','3')->Paginate(5);

        return view('marketing-blog',['db'=>$db]);
    }
    public function technology(){
        $db= DB::table('blogs')->select('*')->orderBy('created_at','desc')->where('c_id','=','2')->Paginate(5);
        return view('marketing-blog',['db'=>$db]);
    }
}
