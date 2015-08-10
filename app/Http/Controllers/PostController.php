<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\PostInterface;
use McCool\LaravelAutoPresenter\Facades\AutoPresenter;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(PostInterface $postRepository)
    {
        // Get posts
        $posts = $postRepository->paginate();
        
        return view('post.index', ['posts' => $posts]);
    }
    
    /**
     * View detail of post
     * 
     * @param type $slug
     * @param \App\Repositories\PostInterface $postRepository
     * @return \Illuminate\View\View
     */
    public function viewDetail($slug, PostInterface $postRepository)
    {
        $post = $postRepository->findBy('slug', $slug)->first();
        
        $relatedPosts = $postRepository->getRelatedPost($post->category_id);
        
        $data = [
            'post' => AutoPresenter::decorate($post),
            'relatedPosts' => AutoPresenter::decorate($relatedPosts)
        ];
        
        return view('post.detail', $data);
    }
}
