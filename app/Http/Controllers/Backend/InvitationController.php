<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\StoreInvitationRequest;
use App\Repositories\InvitationInterface;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class InvitationController extends Controller
{
    protected $invitation;

    public function __construct(InvitationInterface $invitation)
    {
        $this->invitation = $invitation;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $invitations = $this->invitation->paginate();
        return view('backend.invitation.list', compact('invitations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.invitation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreInvitationRequest $request
     * @return Response
     */
    public function store(StoreInvitationRequest $request)
    {
        $this->invitation->create($request->except('_token', '_wysihtml5_mode'));
        return Redirect::route('backend.invitation.list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $invitation = $this->invitation->find($id);
        return view('backend.invitation.edit', compact('invitation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreInvitationRequest $request
     * @param  int $id
     * @return Response
     */
    public function update(StoreInvitationRequest $request, $id)
    {
        $this->invitation->update($request->except('_token', '_wysihtml5_mode'), $id);
        return Redirect::route('backend.invitation.list')->with('success', trans('invitation.update.success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->invitation->delete($id);
        return Redirect::route('backend.invitation.list')->with('success', trans('invitation.delete.success'));
    }
}
