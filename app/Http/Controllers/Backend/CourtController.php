<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\StoreCourtRequest;
use App\Http\Requests\StorePostCategoryRequest;
use App\Repositories\CourtInterface;
use App\Repositories\PostCategoryInterface;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class CourtController extends Controller
{
    protected $court;

    public function __construct(CourtInterface $court)
    {
        $this->court = $court;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $courts = $this->court->paginate();

        return view('backend.court.list', compact('courts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.court.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCourtRequest $request
     * @return Response
     */
    public function store(StoreCourtRequest $request)
    {
        $this->court->create($request->except('_token', '_wysihtml5_mode'));
        return Redirect::route('backend.court.list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $court = $this->court->find($id);
        return view('backend.court.edit', compact('court'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreCourtRequest $request
     * @param  int $id
     * @return Response
     */
    public function update(StoreCourtRequest $request, $id)
    {
        $this->court->update($request->except('_token', '_wysihtml5_mode'), $id);
        return Redirect::route('backend.court.list')->with('success', trans('court.update.success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->court->delete($id);
        return Redirect::route('backend.court.list')->with('success', trans('court.delete.success'));
    }
}
