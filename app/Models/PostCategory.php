<?php
namespace App\Models;

use \Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $fillable = ['youtube_id', 'title', 'description'];

    public function posts()
    {
        $this->hasMany('App\Models\PostCategory');
    }
}
