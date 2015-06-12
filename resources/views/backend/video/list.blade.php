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
                                        <a class="btn btn-primary" href="{{ route('backend.video.edit', $video->id) }}"><i class="fa fa-pencil-square-o"></i>
                                            </a>
                                        <form method="post" action="{{ route('backend.video.delete', $video->id) }}">
                                            <button type="button" class="btn-delete btn btn-danger pull-right" style="margin-right: 5px;">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </form>
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