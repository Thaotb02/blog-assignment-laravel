<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey= 'id';
    
    protected $fillable = [
        'name', 'user_id'
    ];
     public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function posts()
    {
        return $this->hasMany(Post::class,'category_id','id');
    }
}
