<?php
/**
 * User Spoken Languages database migration
 *
 * @category
 * @package    SIB\Database\Migrations
 * @author     thanhhb
 * @copyright  NetBeans
 * @license    Commercial
 * @version    4.0
 * @link       choicaulong.com
 * @since      Class available since Release 1.0
 */

namespace App\Http\Controllers\Backend;

use App\Http\Requests\StorePostRequest;
use App\Repositories\PostCategoryInterface;
use App\Repositories\PostInterface;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Validator\PostValidator;

class PostController extends Controller
{
    /**
     *
     */
    protected $postsRepository;

    /**
     *
     */
    protected $categoryRepository;

    public function __construct(PostInterface $postInterface, PostCategoryInterface $categoryRepository)
    {
        $this->postsRepository = $postInterface;
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Show list of posts in backend
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $posts = $this->postsRepository->paginate();

        return view('backend.post.list', compact('posts'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = $this->categoryRepository->all()->lists('name', 'id');

        return view('backend.post.create', compact('categories'));
    }

    /**
     * @param StorePostRequest $request
     * @return mixed
     */
    public function store(StorePostRequest $request)
    {
        $data = $request->except('_token', '_wysihtml5_mode');
        $this->postsRepository->create($data);
        return Redirect::route('backend.post.list')->with('success', trans('post.created_success'));
    }

    public function edit($id)
    {
        $post = $this->postsRepository->find($id);
        $categories = $this->categoryRepository->all()->lists('name', 'id');

        if (!$post) {
            $message = 'Invalid post';
            return Redirect::back()->with('success', $message);
        }

        return view('backend.post.edit', compact('post', 'categories'));
    }

    public function update(StorePostRequest $request, $id)
    {
        $post = $this->postsRepository->find($id);

        if (!$post) {
            return Redirect::back()->with('error', trans('post.not_found'));
        }

        $this->postsRepository->update($request->except('_token', '_wysihtml5_mode'), $id);

        return Redirect::route('backend.post.list')->with('success', trans('post.update.success'));
    }

    public function destroy($id)
    {
        $post = $this->postsRepository->find($id);

        if (!$post) {
            return Redirect::back()->with('error', trans('post.not_found'));
        }

        $this->postsRepository->delete($id);

        return Redirect::route('backend.post.list')->with('success', trans('post.delete.success'));
    }
}
