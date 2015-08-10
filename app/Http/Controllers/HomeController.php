<?php

namespace App\Http\Controllers;

use App\Repositories\VideoInterface;
use App\Repositories\PostInterface;
use McCool\LaravelAutoPresenter\Facades\AutoPresenter;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
//        $this->middleware('guest');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @param VideoInterface $video
     * @return Response
     */
    public function index(VideoInterface $videoRepository, PostInterface $postRepository)
    {
        // Get posts
        $posts = $postRepository->all()->take(6);
        
        // Get videos
        $videos = $videoRepository->all()->take(6);
        
        // Bind data to view
        $data = [
            'posts'  => AutoPresenter::decorate($posts),
            'videos' => AutoPresenter::decorate($videos),
        ];

        return view('home.home', $data);
    }

}
