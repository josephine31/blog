<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
     public function post(post $post)
    {
        //$post = post::where('slug',$slug)->first();
       // dd($post->toArray());
        return view('user/post',compact('post'));
    }
   
}
