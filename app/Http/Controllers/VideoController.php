<?php

namespace App\Http\Controllers;

use Madcoda\Youtube;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Video;

class VideoController extends Controller {

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index() {
        $youtubeKey = array("key" => "AIzaSyAmsWXPu2gP78el5mSftCeLLRCdvWfOHWU");
        $youtube    = new Youtube($youtubeKey);

        $validId   = "RFgGh1rvwBE";
        $inValidId = "RFgGh1rvwBE123123";

        $videoInfo = $youtube->getVideoInfo($validId);

        dd($videoInfo->snippet->title);
        return view('home');
    }

    public function show() {
        return view('video.importForm');
    }

    /**
     * 
     * @return type
     */
    public function store() {
        $videoId = Input::get('youtube_id');
        
        // Create new video
//        $video = new Video;
//        $video->youtube_id = $videoId;
//        $video->title = 'tet';
//        $video->description = 'test';
//        $video->save();
       
        $user = Video::create(['youtube_id' => '12312312']);
        
        return Redirect::route('video.list');
    }

}
