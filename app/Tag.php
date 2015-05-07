<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    /**
     * Define relationship
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function favorites()
    {
        return $this->belongsToMany('App\Favorite');
    }
    
    /**
     * Define relationship
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
