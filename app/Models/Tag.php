<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name',];

    public function tag() //for store in db
    {
        return $this->belongsToMany(Post::class);
    }
    
}
