<?php
/**
 * User Spoken Languages database migration
 *
 * @category
 * @package    SIB\Database\Migrations
 * @author     thanhhb
 * @copyright  PhpStorm
 * @license    Commercial
 * @version    4.0
 * @link       dierotenseiten.ch
 * @since      Class available since Release 4.0
 */

namespace App\Http\Controllers\Backend;


use App\Repositories\VideoCategoryInterface;
use App\Repositories\VideoInterface;
use App\Validator\VideoValidator;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class VideoController extends Controller
{
    protected $video;

    protected $videoCategory;

    public function __construct(VideoInterface $video, VideoCategoryInterface $videoCategory)
    {
        $this->video = $video;
        $this->videoCategory = $videoCategory;
    }

    /**
     * List all video
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $videos = $this->video->paginate();

        $data = ['videos' => $videos];

        return view('backend.video.list', $data);
    }

    /**
     * Load view create new video
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Get all categories
        $categories = $this->videoCategory->all();
        $data = ['categories' => $categories];

        return view('backend.video.create', $data);
    }

    /**
     * Create new video
     *
     * @param VideoValidator $validator
     * @return mixed
     */
    public function store(VideoValidator $validator)
    {
        if ($validator->with(Input::all())->passes()) {
            $this->video->create(Input::only('title', 'description', 'slug', 'youtube_id'));
            $message = _("Video has been created successfully.");
        } else {
            $message = _($validator->errors());
            return Redirect::back()->with('error', $message);
        }

        return Redirect::route('backend.video.list')->with('success', $message);
    }

    /**
     * Load view edit video information
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $video = $this->video->find($id);
        $categories = $this->videoCategory->all();

        $data = [
            'video' => $video,
            'categories' => $categories
        ];

        return view('backend.video.edit', $data);
    }

    /**
     * Update video
     *
     * @param string $id
     * @param VideoValidator $validator
     * @return mixed
     */
    public function update($id = '', VideoValidator $validator)
    {
        $video = $this->video->find($id);

        if ( !$video) {
            $message = _("Video could not be found.");
            return Redirect::route('backend.video.list')->with('error', $message);
        }

        if ($validator->with(Input::all())->passes()) {
            $this->video->update(Input::only('title', 'description', 'slug', 'youtube_id'), $id);
            $message = _("Video has been updated successfully.");
            return Redirect::route('backend.video.list')->with('success', $message);
        } else {
            $message = _($validator->errors());
            return Redirect::back()->with('error', $message);
        }
    }

    /**
     * Delete video
     *
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        $this->video->delete($id);

        $message = _("Video has been deleted successfully.");
        return Redirect::route('backend.video.list')->with('message', $message);
    }

    public function showCategory()
    {
        return view('backend.video.list');
    }
}