<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\StoreVideoCategoryRequest;
use App\Repositories\UserInterface;
use App\Repositories\VideoCategoryInterface;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    protected $user;

    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = $this->user->paginate();

        return view('backend.user.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreUserRequest $request
     * @return Response
     */
    public function store(StoreUserRequest $request)
    {
        $this->user->create($request->except('_token'));
        return Redirect::route('backend.user.list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->user->find($id);
        return view('backend.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreUserRequest $request
     * @param  int $id
     * @return Response
     */
    public function update(StoreUserRequest $request, $id)
    {
        $user = $this->user->find($id);

        if(!$user) {
            return Redirect::back()->with('error', trans('user.not_found'));
        }

        $this->user->update($request->except('_token'), $id);

        return Redirect::route('backend.user.list')->with('success', trans('user.update.success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $category = $this->user->find($id);

        if(!$category) {
            return Redirect::back()->with('error', trans('user.not_found'));
        }

        $this->user->delete($id);

        return Redirect::route('backend.user.list')->with('success', trans('user.delete.success'));
    }
}
