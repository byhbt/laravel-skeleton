<?php
namespace App\Presenters;

use Carbon\Carbon;
use McCool\LaravelAutoPresenter\BasePresenter;
use App\Models\Post;

class PostPresenter extends BasePresenter
{
    public function __construct(Post $resource)
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
        return $this->wrappedObject->featured_img;
    }
    
    public function getCategory()
    {
        return $this->wrappedObject->category->name;
    }
    
    public function getAuthor()
    {
        return $this->wrappedObject->user->name;
    }
    
    public function getPermanentLink()
    {
        return route('post.detail', ['slug' => $this->wrappedObject->slug]);
    }
    
    public function getShortContent($limit = 100)
    {
        return str_limit($this->wrappedObject->description, $limit);
    }
    
    public function getFullContent()
    {
        return $this->wrappedObject->content;
    }
}