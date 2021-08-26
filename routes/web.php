<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
return view('marketing-index');
});
Route::post('/attempt',[LoginController::class,'store'])->name('login');
Route::get('/login',function (){
    if (\Illuminate\Support\Facades\Auth::check()==true){
       return redirect(route('dashboard'));
    }
    return view('admin.login');
});
Route::view('/messages','admin.message')->name('messages')->middleware('auth');
Route::view('/messages-light','admin.message-light')->name('messages-light')->middleware('auth');

Route::view('/contact-us','marketing-contact');
Route::view('/admin','admin.index')->middleware('auth');
Route::get('logout',[LoginController::class,'index'])->name('logout')->middleware('auth');
Route::get('/dashboard',[\App\Http\Controllers\JoinController::class,'index'])->middleware('auth')->name('dashboard');

Route::get('/layout-light',[\App\Http\Controllers\JoinController::class,'index2'])->middleware('auth')->name('layout-light');

Route::get('/settings',function (){
       return view('admin.settings');
})->name('settings')->middleware('auth');
Route::post('/update',[LoginController::class,'update'])->middleware('auth')->name('update.profile');
Route::view('/create-blog','admin.blog.add-blog');
Route::post('/add-blog',[\App\Http\Controllers\JoinController::class,'store'])->name('blog.add')->middleware('auth');
Route::get('/edit/{id}',[\App\Http\Controllers\EditController::class,'edit'])->name('edit')->middleware('auth');
Route::post('/edit-blog/{id}',[\App\Http\Controllers\EditController::class,'update'])->middleware('auth');
Route::get('blog-details/{id}',[\App\Http\Controllers\EditController::class,'show'])->name('show');
Route::get('/delete/{id}',[\App\Http\Controllers\EditController::class,'destroy'])->name('delete')->middleware('auth');
Route::get('category/{id}',function ($id){

   return view('marketing-category',['id'=>$id]);
});
Route::post('/email',[\App\Http\Controllers\EditController::class,'store'])->name('subscribing');
Route::get('/marketing',[\App\Http\Controllers\CategoryController::class,'marketing']);
Route::get('/news',[\App\Http\Controllers\CategoryController::class,'news']);
Route::get('/technology',[\App\Http\Controllers\CategoryController::class,'technology']);
Route::get('/search',[\App\Http\Controllers\SearchController::class,'search'])->name('search.post');
 Route::post('/message',[\App\Http\Controllers\EditController::class,'contact'])->name('contact_message');
