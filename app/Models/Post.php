<?php
namespace App\Models;

use App\Presenters\PostPresenter;
use McCool\LaravelAutoPresenter\HasPresenter;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements HasPresenter
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
    
    public function getPresenterClass()
    {
        return PostPresenter::class;
    }
}
