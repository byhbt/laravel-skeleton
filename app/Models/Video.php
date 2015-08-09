<?php
namespace App\Models;

use App\Presenters\VideoPresenter;
use McCool\LaravelAutoPresenter\HasPresenter;
use Illuminate\Database\Eloquent\Model;

class Video extends Model implements HasPresenter
{
    const PUBLISHED_STATUS = 1;
    const PENDING_STATUS = 2; // Not updated information or wait for future update
    const INVALID_STATUS = 3;

    protected $fillable = ['youtube_id', 'title', 'description', 'category_id'];

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    public function favorites()
    {
        return $this->belongsToMany('App\Models\User', 'favorites');
    }
    
    public function getPresenterClass()
    {
        return VideoPresenter::class;
    }
    
}
