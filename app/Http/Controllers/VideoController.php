<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Madcoda\Youtube;

class VideoController extends Controller
{

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('home');
    }

    public function show()
    {
        $videos = Video::all();

        return view('video.import', ['videos' => $videos]);
    }

    /**
     *
     * @return type
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'youtube_id' => 'required|unique:videos|max:20',
        ]);

        $videoId = Input::get('youtube_id');

        // Process Video
        // Connect to youtube
        $youtubeKey = array("key" => "AIzaSyAmsWXPu2gP78el5mSftCeLLRCdvWfOHWU");
        $youtube = new Youtube($youtubeKey);

        // Get video Info
        $videoInfo = $youtube->getVideoInfo($videoId);

        // dd($videoInfo->snippet);

        $user = Video::create(['youtube_id' => $videoId]);

        $data = [
            'video' => $videoInfo->snippet,
        ];

        return Redirect::route('video.list', $data);
    }

    /**
     * Display detail of video
     *
     * @return type
     */
    public function detail()
    {
        return view('video.detail');
    }

}
