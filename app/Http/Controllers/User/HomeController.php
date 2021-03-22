<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\post;
use App\Model\user\tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = post::orderBy('created_at','DESC')->paginate(3);
        //dd($posts);
        return view('user/blog', compact('posts'));
    }

    public function tag(tag $tag)
    {
        $posts= $tag->posts();
        return view('user/blog', compact('posts'));
    }

    public function category(category $category)
    {
        $posts= $category->posts();
        return view('user/blog', compact('posts'));
    }
}
