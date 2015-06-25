@extends('backend.layouts.master')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">List of post categories</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @include('backend.partials.message')
                        <table class="table table-bordered">
                            <thead>
                                <th style="width: 5%">{{_('ID')}}</th>
                                <th>{{_('Name')}}</th>
                                <th>{{_('Description')}}</th>
                                <th style="width: 10%">{{_('Action')}}</th>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ str_limit($category->description, 200) }}</td>
                                    <td>
                                        <form method="post" action="{{ route('backend.post.category.delete', $category->id) }}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="button" class="mg2 btn-delete btn btn-danger pull-right">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </form>
                                        <a class="mg2 btn btn-primary pull-right" href="{{ route('backend.post.category.edit', $category->id) }}"><i class="fa fa-pencil-square-o"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $categories->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop