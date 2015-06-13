<?php
namespace App\Models;

use \Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    const PUBLISHED_STATUS = 1;
    const PENDING_STATUS = 2; // Not updated information or wait for future update
    const INVALID_STATUS = 3;

    protected $fillable = ['youtube_id', 'title', 'description'];

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    public function favorites()
    {
        return $this->belongsToMany('App\Models\User', 'favorites');
    }
}
