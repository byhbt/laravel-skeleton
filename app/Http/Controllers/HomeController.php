<?php

namespace App\Http\Controllers;

use App\Repositories\VideoInterface;
use App\Video;

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
    public function index(VideoInterface $video)
    {
        $videos = $video->all()->take(8);

        $data = [
            'videos' => $videos

        ];

        return view('home.home', $data);
    }

}
