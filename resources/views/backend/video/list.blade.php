@extends('backend.layouts.master')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">List of video</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @include('backend.partials.message')
                        <div class="row">
                            <div class="col-sm-6 form-group pull-right">
                                <label for="categories" class="col-sm-2 control-label">Categories</label>
                                <div class="col-sm-6">
                                    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <th style="width: 5%">{{_('ID')}}</th>
                                <th>{{_('Youtube ID')}}</th>
                                <th>{{_('Title')}}</th>
                                <th>{{_('Created')}}</th>
                                <th>{{_('Updated')}}</th>
                                <th style="width: 10%">{{_('Action')}}</th>
                            </thead>
                            <tbody>
                            @foreach($videos as $video)
                                <tr>
                                    <td>{{ $video->id }}</td>
                                    <td>{{ $video->youtube_id }}</td>
                                    <td>{{ $video->title }}</td>
                                    <td>{{ $video->created_at }}</td>
                                    <td>{{ $video->updated_at }}</td>
                                    <td>
                                        <form method="post" action="{{ route('backend.video.delete', $video->id) }}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="button" class="btn-delete btn btn-danger pull-right">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </form>
                                        <a style="margin-right: 5px;" class="btn btn-primary pull-right" href="{{ route('backend.video.edit', $video->id) }}"><i class="fa fa-pencil-square-o"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $videos->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop