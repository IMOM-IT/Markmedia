<?php
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\JoinController;
use \App\Http\Controllers\EditController;
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
Route::middleware('auth')->group(function () {
    Route::view('/messages','admin.message')->name('messages');
    Route::view('/messages-light','admin.message-light')->name('messages-light');
    Route::view('/admin','admin.index');
    Route::get('logout',[LoginController::class,'index'])->name('logout');
    Route::get('/dashboard',[JoinController::class,'index'])->name('dashboard');
    Route::get('/layout-light',[JoinController::class,'index2'])->name('layout-light');
    Route::get('/settings',function (){
        return view('admin.settings');
    })->name('settings');
    Route::post('/update',[LoginController::class,'update'])->name('update.profile');
    Route::view('/create-blog','admin.blog.add-blog');
    Route::post('/add-blog',[JoinController::class,'store'])->name('blog.add');
    Route::get('/edit/{id}',[EditController::class,'edit'])->name('edit');
    Route::post('/edit-blog/{id}',[EditController::class,'update']);
    Route::get('/delete/{id}',[EditController::class,'destroy'])->name('delete');
});
Route::view('/contact-us','marketing-contact');
Route::get('category/{id}',function ($id){
    return view('marketing-category',['id'=>$id]);
});
Route::get('blog-details/{id}',[EditController::class,'show'])->name('show');
Route::post('/email',[EditController::class,'store'])->name('subscribing');
Route::get('/marketing',[\App\Http\Controllers\CategoryController::class,'marketing']);
Route::get('/news',[\App\Http\Controllers\CategoryController::class,'news']);
Route::get('/technology',[\App\Http\Controllers\CategoryController::class,'technology']);
Route::get('/search',[\App\Http\Controllers\SearchController::class,'search'])->name('search.post');
Route::post('/message',[\App\Http\Controllers\EditController::class,'contact'])->name('contact_message');
