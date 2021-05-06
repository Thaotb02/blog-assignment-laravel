<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $primaryKey= 'id';
    
    protected $fillable = [
        'content', 'post_id', 'user_id', 'is_active'
    ];
     public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function post()
    {
        return $this->belongsTo(Post::class,'post_id');
    }
}
