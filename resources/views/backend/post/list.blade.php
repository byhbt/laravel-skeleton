@extends('backend.layouts.master')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">List of posts</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @include('backend.partials.message')
                        <table class="table table-bordered">
                            <thead>
                                <th style="width: 5%">{{_('ID')}}</th>
                                <th>{{_('Title')}}</th>
                                <th>{{_('Created')}}</th>
                                <th>{{_('Updated')}}</th>
                                <th style="width: 10%">{{_('Action')}}</th>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>{{ $post->updated_at }}</td>
                                    <td>
                                        <form method="post" action="{{ route('backend.video.delete', $post->id) }}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="button" class="mg2 btn-delete btn btn-danger pull-right">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </form>
                                        <a class="mg2 btn btn-primary pull-right" href="{{ route('backend.post.edit', $post->id) }}"><i class="fa fa-pencil-square-o"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $posts->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop