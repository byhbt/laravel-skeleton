@extends('backend.layouts.master')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Create new post</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @include('backend.partials.message')
                        <form role="form" action="{{ route('backend.post.store') }}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="slug" class="col-sm-2 control-label">Slug</label>
                                <div class="col-sm-10">
                                    <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="categories" class="col-sm-2 control-label">Categories</label>
                                <div class="col-sm-10">
                                    {!! Form::select('category_id', $categories, null,['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="slug" class="col-sm-2 control-label">Content</label>
                                <div class="col-sm-10">
                                    <textarea name="description" id="textarea" class="form-control textarea" cols="30" rows="10"></textarea>
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