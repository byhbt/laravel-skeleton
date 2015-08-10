<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Madcoda\Youtube;
use McCool\LaravelAutoPresenter\Facades\AutoPresenter;
use App\Repositories\VideoInterface;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(VideoInterface $videoRepository)
    {
        // Get videos
        $videos = $videoRepository->paginate();
        return view('video.index', ['videos' => $videos]);
    }
    
    /**
     * View detail of video
     * 
     * @param type $slug
     * @param \App\Repositories\PostInterface $videoRepository
     * @return \Illuminate\View\View
     */
    public function viewDetail($slug, VideoInterface $videoRepository)
    {
        $video = $videoRepository->findBy('slug', $slug)->first();
        $relatedVideos = $videoRepository->getRelatedVideo($video->category_id);
        
        $data = [
            'video' => AutoPresenter::decorate($video),
            'relatedVideos' => AutoPresenter::decorate($relatedVideos)
        ];
        
        return view('video.detail', $data);
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
        return true;
        return view('video.detail');
    }

    /**
     * @return
     */
    public function get()
    {

    }

}
