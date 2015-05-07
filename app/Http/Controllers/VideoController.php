<?php

namespace App\Http\Controllers;
use Madcoda\Youtube;
use Illuminate\Support\Facades\Input;
use App\Video;

class VideoController extends Controller
{

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        $youtubeKey = array("key" => "AIzaSyAmsWXPu2gP78el5mSftCeLLRCdvWfOHWU");
        $youtube = new Youtube($youtubeKey);
        
        $validId = "RFgGh1rvwBE";
        $inValidId = "RFgGh1rvwBE123123";
        
        $videoInfo = $youtube->getVideoInfo($validId);
        
        dd($videoInfo->snippet->title);
        return view('home');
    }
    
    public function show()
    {
        return view('video.importForm');
    }
    
    public function store()
    {
        $videoId = Input::get('videoId');
        
        $youtubeKey = array("key" => "AIzaSyAmsWXPu2gP78el5mSftCeLLRCdvWfOHWU");
        $youtube = new Youtube($youtubeKey);
        
        $validId = "RFgGh1rvwBE";
        
        $videoInfo = $youtube->getVideoInfo($validId);
        
        if (!$videoInfo) {
            // log video id
            // throw exeception
        }
        
        $videoItem = [
            'youtube_id' => $videoInfo->id,
            'title' => $videoInfo->snippet->title,
            'description' => $videoInfo->snippet->description
        ];
        
        // insert into database
        Video::create($videoItem);
    }

}
