@extends('backend.layouts.master')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Edit Event</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @include('backend.partials.message')
                        <form role="form" action="{{ route('backend.event.update', $event->id) }}" method="post" class="form-horizontal">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ old('title', $event->title) }}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="slug" class="col-sm-2 control-label">Slug</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug" value="{{ old('slug', $event->slug) }}" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-info btn-get-slug" type="button">Get Slug</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="time" class="col-sm-2 control-label">Time</label>
                                <div class="col-sm-10">
                                    <input type="text" name="time" class="form-control" id="time" placeholder="Time" value="{{ old('time', $event->time) }}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-10">
                                    <textarea name="address" id="address" class="form-control textarea" cols="30" rows="10">{{ old('address', $event->address) }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" id="description" class="form-control textarea" cols="30" rows="10">{{ old('description', $event->description) }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="website" class="col-sm-2 control-label">Website</label>
                                <div class="col-sm-10">
                                    <input type="text" name="website" class="form-control" id="website" placeholder="Website" value="{{ old('website', $event->website) }}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="facebook" class="col-sm-2 control-label">Facebook</label>
                                <div class="col-sm-10">
                                    <input type="text" name="facebook" class="form-control" id="facebook" placeholder="Facebook" value="{{ old('facebook', $event->facebook) }}" />
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
