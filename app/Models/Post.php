<?php
namespace App\Models;

use \Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'featured_img', 'slug', 'content', 'status', 'user_id', 'category_id', 'published_at'];

    const PUBLISHED_STATUS = 1;
    const PENDING_STATUS = 2;
    const INVALID_STATUS = 3;

    public function category()
    {
        return $this->belongsTo('App\Models\PostCategory');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }
}
