<?php
namespace App\Models;

use \Illuminate\Database\Eloquent\Model;

class VideoCategory extends Model
{
    protected $fillable = ['youtube_id', 'title', 'description'];

    public function videos()
    {
        return $this->belongsToMany('App\Models\Video');
    }
}
