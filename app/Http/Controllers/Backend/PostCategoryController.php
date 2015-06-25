<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\StorePostCategoryRequest;
use App\Repositories\PostCategoryInterface;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class PostCategoryController extends Controller
{
    protected $postCategory;

    public function __construct(PostCategoryInterface $postCategory)
    {
        $this->postCategory = $postCategory;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories = $this->postCategory->paginate();

        return view('backend.post.category.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.post.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePostCategoryRequest $request
     * @return Response
     */
    public function store(StorePostCategoryRequest $request)
    {
        $this->postCategory->create($request->except('_token', '_wysihtml5_mode'));

        return Redirect::route('backend.post.category.list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $category = $this->postCategory->find($id);

        return view('backend.post.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StorePostCategoryRequest $request
     * @param  int $id
     * @return Response
     */
    public function update(StorePostCategoryRequest $request, $id)
    {
        $category = $this->postCategory->find($id);

        if(!$category) {
            return Redirect::back()->with('error', trans('post_category.not_found'));
        }

        $this->postCategory->update($request->except('_token', '_wysihtml5_mode'), $id);

        return Redirect::route('backend.post.category.list')->with('success', trans('post_category.update.success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $category = $this->postCategory->find($id);

        if(!$category) {
            return Redirect::back()->with('error', trans('post_category.not_found'));
        }

        $this->postCategory->delete($id);

        return Redirect::route('backend.post.category.list')->with('success', trans('post_category.delete.success'));
    }
}
