<?php

use Illuminate\Support\Facades\Route;

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

    return view('posts',['posts'=> Post::all()]);
});

Route::get('/post/{post}', function ($slug) {
  //  $path=__DIR__ ."/../resources/posts/$slug";
$post = Post::find($slug);

    //put the html file in the cache 
    
    return view('post',['post'=> $post]);
})->where('post','[A-Z]+');
//whereAlph = only alphabati
//where number = only number
//wherealphnemeric = num + alpha

