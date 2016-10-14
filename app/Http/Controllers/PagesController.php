<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;

class PagesController extends Controller
{
    public function he(){
    	return view('hello');
    }
    // funtion showposts
   public function index()
    {
        $posts = Post::paginate(25);

        return view('home', compact('posts'));
    }
    public function showposts($slug)
    {
    	$show = Post::whereSlug( $slug )->first();
    	return view('admin.posts.showpost',compact('show'));
    }
}
