<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

use App\Models\Post;

use App\Models\Tag;

class PostController extends Controller
{
    public function create()
    {
        $posts = Post::all();
        $categories = Category::all();
        $tags = Tag::all();


        return view('admin.posts.create', compact('posts', 'tags', 'categories'));
    }

    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $posts = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'cat_id' => $request->category,
            'image' =>'image.jpg',
        ]);


        $posts->tag()->attach($request->tag); // mant to many relationship input

        $images = array();
        if ($files = $request->file('file')) {
            $i = 0;
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $fileNameExtract = explode('.', $name);
                $fileName = $fileNameExtract[0];
                $fileName .= time();
                $fileName .= $i;
                $fileName .= '.';
                $fileName .= $fileNameExtract[1];

                $file->move('image', $fileName);
                $images[] = $fileName;
                $i++;
            }
            $posts['image'] = implode("|", $images);
            
            $posts->save();
           

            
            return redirect()->back()->with('messege', 'New post added Succesfully!');
        } else {
            echo "error";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function change_status(Post $category)
    {
        if ($category->status == 1) {
            $category->update(['status' => 0]);
        } else {
            $category->update(['status' => 1]);
        }

        return redirect()->back()->with('messege', '  Status change successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $posts)
    {
        $categories = Category::all();
       
        
        $tags = Tag::all();
       
        
        return view('admin.posts.edit', compact('categories', 'tags', 'posts'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $product)
    {
      
        $color = explode(',', $request->color);
        $update = $product->update([
            
            'title' => $request->title,
            'cat_id' => $request->category,
            
            
            
            'description' => $request->description,
           
            // 'image'=>$request->image,
        ]);
        if ($update) {

            return redirect('/size')->with('messege', 'Product update successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $category)
    {
        $result = $category->delete();

        if ($result) {
            return redirect()->back()->with('messege', 'Product delete successfully!!');
        }
    }
}
