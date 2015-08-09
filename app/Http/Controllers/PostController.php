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
    public function index()
    {
        //
    }
    
    /**
     * View detail
     * 
     * @param type $slug
     * @param \App\Repositories\PostInterface $posts
     * @return type
     */
    public function viewDetail($slug, PostInterface $posts)
    {
        $post = $posts->findBy('slug', $slug)->first();
        
        $data = AutoPresenter::decorate($post);
        
        return view('post.detail', ['post' => $data]);
    }
}
