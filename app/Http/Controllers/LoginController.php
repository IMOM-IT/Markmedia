<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        Auth::logout();

      return  redirect('/');
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
        if (Auth::check()==true){
            return redirect('/admin');
        }
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
       foreach (User::all() as $user){
           $email=$user->email;
           $password=$user->password;
           $pas=$request->input('password');
       }
        if ($email==$request->input('email') && Hash::check($pas,$password)) {
            Auth::login($user);

            return redirect('/dashboard')
                ->withSuccess('Signed in');

        }

        return redirect("login")->withSuccess('Login details are not valid');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        foreach (User::all() as $user){


if (Hash::check($request->input('old_password'),$user->password)){
        $validate=$request->validate([
            'name'=>'required',
            'email'=>'required|email',

            'password'=>'required|same:password_confirm'
        ]);
           $validate['password']=Hash::make($validate['password']);

        $db=DB::table('users')->update($validate);
        return back()->with('success','Profile successfully updated ');
            }

        else return  back()->with('error','Old Password is incorrect');
        }

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
