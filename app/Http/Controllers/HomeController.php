<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
        public function index()
        {
           
            $posts = Post::paginate(3);
            $latest = Post::latest()->limit(3)->get();
            $tags =Tag::all();
            return view('welcome',compact( 'posts', 'latest', 'tags'));
        }
        public function post_view($id)
        {
            
            $posts=Post::findOrFail($id);
// use cookie for more accurate views
        // if (Cookie::get($posts->id) != '') {
        //     Cookie::set('$posts->id', '1', 60);
        //     $posts->viewscount();
        // }

            $posts->viewscount();
        
            $latest = Post::latest()->limit(3)->get();
            $tags = Tag::all();
            return view('post',compact('posts', 'latest', 'tags',));
        }

        public function category($id)
        {
            $tags = Tag::all();
            $latest = Post::latest()->limit(3)->get();
            $posts= Post::where('cat_id',$id)->where('status',1)->paginate(5);
            return view('welcome', compact('posts', 'latest', 'tags'));
        }
        public function tag($id)
        {
            $tags = Tag::all();
            $latest = Post::latest()->limit(3)->get();
            

            $tag = Tag::where('id',$id)->first();
            $posts=$tag->tag()->paginate(5);
            
            
            return view('welcome', compact('posts', 'latest', 'tags'));
        }

}
