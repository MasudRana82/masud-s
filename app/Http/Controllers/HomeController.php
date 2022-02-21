<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
        public function index()
        {
            $categories = Category::all();
            $posts = Post::limit(10)->get();
            $latest = Post::latest()->limit(4)->get();
            return view('welcome',compact('categories', 'posts', 'latest'));
        }
        public function post_view($id)
        {
             $categories = Category::all();
            $posts=Post::findOrFail($id);
        $latest = Post::latest()->limit(4)->get();
            return view('post',compact('categories', 'posts', 'latest'));
        }

}
