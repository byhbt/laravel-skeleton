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

use Illuminate\Routing\Controller;
use App\Repositories\PostInterface;


class PostController extends Controller
{
    protected $postsRepository;

    public function __construct(PostInterface $postInterface)
    {
        $this->postsRepository = $postInterface;
    }

    /**
     * Show list of posts in backend
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $posts = $this->postsRepository->paginate();

        return view('backend.post.list', compact('posts'));
    }

    public function create()
    {

    }

    public function store()
    {

    }


    public function edit()
    {

    }

    public function update()
    {

    }
}