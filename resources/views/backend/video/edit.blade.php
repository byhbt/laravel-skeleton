@extends('backend.layouts.master')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Edit video</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @include('backend.partials.message')
                        <form role="form" action="{{ route('backend.video.update', $video->id) }}" method="post" class="form-horizontal">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="youtube_id" class="col-sm-2 control-label">Youtube Id</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="youtube_id" id="youtube_id" placeholder="Youtube Id" value="{{ $video->youtube_id }}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $video->title }}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="slug" class="col-sm-2 control-label">Slug</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug" value="{{ $video->slug }}" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-info btn-get-slug" type="button">Get Slug</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="slug" class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" id="textarea" class="form-control textarea" cols="30" rows="10">{{ $video->description }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="categories" class="col-sm-2 control-label">Categories</label>
                                <div class="col-sm-10">
                                    {!! Form::select('category_id', $categories, $video->category_id, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop