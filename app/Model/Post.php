<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $primaryKey= 'id';
    
    protected $fillable = [
        'title', 'content', 'image', 'user_id','category_id'
    ];

   public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class,'post_id','id');
    }

}

