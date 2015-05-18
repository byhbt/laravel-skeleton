@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <form action="{!! route('video.submit') !!}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="videoId">Video ID</label>
                <input type="text" class="form-control" name="youtube_id" id="youtube_id" placeholder="Enter Youtube Video">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
