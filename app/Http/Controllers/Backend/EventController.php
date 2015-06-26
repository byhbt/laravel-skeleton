<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\StoreEventRequest;
use App\Repositories\EventInterface;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class EventController extends Controller
{
    protected $event;

    public function __construct(EventInterface $event)
    {
        $this->event = $event;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $events = $this->event->paginate();
        return view('backend.event.list', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreEventRequest $request
     * @return Response
     */
    public function store(StoreEventRequest $request)
    {
        $this->event->create($request->except('_token', '_wysihtml5_mode'));
        return Redirect::route('backend.event.list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $event = $this->event->find($id);
        return view('backend.event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreEventRequest $request
     * @param  int $id
     * @return Response
     */
    public function update(StoreEventRequest $request, $id)
    {
        $this->event->update($request->except('_token', '_wysihtml5_mode'), $id);
        return Redirect::route('backend.event.list')->with('success', trans('event.update.success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->event->delete($id);
        return Redirect::route('backend.event.list')->with('success', trans('event.delete.success'));
    }
}
