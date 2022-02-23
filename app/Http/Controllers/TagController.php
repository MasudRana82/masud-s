<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function create()
    {
        return view('admin.tag.create');
    }

    public function index()
    {
        $tags = Tag::all();
        return view('admin.tag.index', compact('tags'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tags =  $request->name; // explode means divide. here we saparete data using comma.
        $tag = new Tag;
        $tag->name = $tags; //save the data with json encode  

        $tag->save(); //all data save
        return redirect()->back()->with('messege', 'Tag created successfully'); //back function j page e cilo oi page e abr niya ase


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function change_status(Tag $category)
    {
        if ($category->status == 1) {
            $category->update(['status' => 0]);
        } else {
            $category->update(['status' => 1]);
        }

        return redirect()->back()->with('messege', ' Status change successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $category)
    {
        return view('admin.tag.edit', compact('category'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $category)
    {
        $tags = $request->name;
        $update = $category->update([
            'name' => $tags,

        ]);
        if ($update) {

            return redirect('/color')->with('messege', 'Tag update successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $category)
    {
        $result = $category->delete();

        if ($result) {
            return redirect()->back()->with('messege', 'Tag delete successfully!!');
        }
    }
}
