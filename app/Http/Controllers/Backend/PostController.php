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

use App\Repositories\PostCategoryInterface;
use Illuminate\Routing\Controller;
use App\Repositories\PostInterface;
use Exception;

class PostController extends Controller
{
    protected $postsRepository;

    protected $postCategoryRepository;

    public function __construct(PostInterface $postInterface, PostCategoryInterface $postCategoryInterface)
    {
        $this->postsRepository = $postInterface;
        $this->postCategoryRepository = $postCategoryInterface;
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
        $categories = $this->postCategoryRepository->all(['id', 'name'])->lists('name', 'id');

        return view('backend.post.create', compact('categories'));
    }

    public function store()
    {

    }


    public function edit($id)
    {
        $post = $this->postsRepository->find($id);
        $categories = $this->postCategoryRepository->all()->lists('name', 'id');

        return view('backend.post.edit', compact('post', 'categories'));
    }

    public function update($id)
    {
        try {
            $post = $this->postsRepository->find($id);
            if(!$post) {
                throw new Exception("Not found");
            }

            $this->postsRepository->update($id, Input::all());
        } catch (Exception $e){

        }

    }
}