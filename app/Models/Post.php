<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    use HasFactory;
    protected $fillable = ['id', 'cat_id', 'title', 'description', 'status', 'image',];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id'); //here 'cat_id' is foreign key. 
    }



    public function tag()
    {
        return $this->belongsToMany('App\Models\Tag');
    } 

   
}
