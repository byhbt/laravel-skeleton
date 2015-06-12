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


use App\Repositories\VideoInterface;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class VideoController extends Controller
{
    protected $video;

    public function __construct(VideoInterface $video)
    {
        $this->video = $video;
    }

    public function show()
    {
        $videos = $this->video->paginate();

        $data = ['videos' => $videos];

        return view('backend.video.list', $data);
    }

    public function create()
    {
        return view('backend.video.form');
    }

    public function edit($id)
    {
        $video = $this->video->find($id);

        $data = ['video' => $video];

        return view('backend.video.form', $data);
    }

    public function save($id = '')
    {
        // Validation

        if ( ! empty($id)) {
            $video = $this->video->find($id);

            if ( ! $video) {
                $message = _("Video could not be found.");
                return Redirect::route('backend.video.list')->with('message', $message);
            }
            // Validate

            // Update video content
            $video->title = Input::get('title');
            $video->description = Input::get('description');
            $video->slug = Input::get('slug');
            $video->save();

            $message = _("Video has been updated successful.");
        } else {
            // create new
            $this->video->create([
                'youtube_id' => '',
                'title' => '',
                'slug' => '',
                'description' => '',
            ]);

            $message = _("Video has been created successful.");
        }

        return Redirect::route('backend.video.list')->with('message', $message);
    }

    public function delete($id)
    {
        return $id;
    }

    public function showCategory()
    {
        return view('backend.video.list');
    }
}