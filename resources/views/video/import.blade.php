@extends('layouts.master')

@section('content')
<div class="container">
    @if(count($errors) > 0)
    <div class="row alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="row">
        <div class="col-sm-4">
            <form action="{!! route('video.submit') !!}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="videoId">Video ID</label>
                    <input type="text" class="form-control" name="youtube_id" id="youtube_id" placeholder="Enter Youtube Video">
                </div>
                <button type="submit" class="btn btn-primary">Get Info</button>
            </form>
        </div>
        <div class="col-sm-8">
            <p>Information</p>
            <form action="{!! route('video.submit') !!}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Enter description">
                </div>
                <div class="form-group">
                    <label for="description">Publish as</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Enter description">
                </div>
                <div class="form-group">
                    <label for="description">Tags</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Enter description">
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
    <hr>
    <div class="row col-sm-12">
        <p>Recent added items</p>
        <ul>
            @foreach($videos as $video)
                <li>{{ $video->youtube_id }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
