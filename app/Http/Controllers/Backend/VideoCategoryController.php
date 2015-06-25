<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\StoreVideoCategoryRequest;
use App\Repositories\VideoCategoryInterface;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class VideoCategoryController extends Controller
{
    protected $videoCategory;

    public function __construct(VideoCategoryInterface $videoCategory)
    {
        $this->videoCategory = $videoCategory;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories = $this->videoCategory->paginate();

        return view('backend.video.category.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.video.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreVideoCategoryRequest $request
     * @return Response
     */
    public function store(StoreVideoCategoryRequest $request)
    {
        $this->videoCategory->create($request->except('_token', '_wysihtml5_mode'));

        return Redirect::route('backend.video.category.list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $category = $this->videoCategory->find($id);
        return view('backend.video.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreVideoCategoryRequest $request
     * @param  int $id
     * @return Response
     */
    public function update(StoreVideoCategoryRequest $request, $id)
    {
        $category = $this->videoCategory->find($id);

        if(!$category) {
            return Redirect::back()->with('error', trans('video_category.not_found'));
        }

        $this->videoCategory->update($request->except('_token', '_wysihtml5_mode'), $id);

        return Redirect::route('backend.video.category.list')->with('success', trans('video_category.update.success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $category = $this->videoCategory->find($id);

        if(!$category) {
            return Redirect::back()->with('error', trans('video_category.not_found'));
        }

        $this->videoCategory->delete($id);

        return Redirect::route('backend.video.category.list')->with('success', trans('video_category.delete.success'));
    }
}
