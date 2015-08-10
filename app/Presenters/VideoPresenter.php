<?php
namespace App\Presenters;

use Carbon\Carbon;
use McCool\LaravelAutoPresenter\BasePresenter;
use App\Models\Video;

class VideoPresenter extends BasePresenter
{
    public function __construct(Video $resource)
    {
        $this->wrappedObject = $resource;
    }

    public function getPublishedAt()
    {
        $published = $this->wrappedObject->published_at;

        return Carbon::createFromFormat('Y-m-d H:i:s', $published)->format('m-d-Y');
    }
    
    public function getFeaturedImage()
    {
        $youtubeThumbnailUrl = "http://img.youtube.com/vi/%s/default.jpg";
        
        return sprintf($youtubeThumbnailUrl, $this->wrappedObject->youtube_id);
    }
    
    public function getCategory()
    {
        return $this->wrappedObject->category->name;
    }
    
    public function getPermanentLink()
    {
        return route('video.detail', ['slug' => $this->wrappedObject->slug]);
    }
   
}