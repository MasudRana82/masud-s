<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    use HasFactory;
    protected $fillable = ['id', 'cat_id', 'title', 'description', 'status', 'tag_id', 'image',];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id'); //here 'cat_id' is foreign key. 
    }



    public function tag()
    {
        return $this->belongsTo(Tag::class,'tag_id');
    } 

    public static function catProductCount($cat_id)
    {
        $CatCount = Post::where('cat_id', $cat_id)->where('status', 1)->count();
        return $CatCount;
    } 
}
