<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
        public function index()
        {
            $categories = Category::all();
            $posts = Post::paginate(3);
            $latest = Post::latest()->limit(3)->get();
            $tags =Tag::all();
            return view('welcome',compact('categories', 'posts', 'latest', 'tags'));
        }
        public function post_view($id)
        {
            // $categories = Category::all();
            $posts=Post::findOrFail($id);
            $latest = Post::latest()->limit(3)->get();
            $tags = Tag::all();
            return view('post',compact('posts', 'latest', 'tags'));
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
