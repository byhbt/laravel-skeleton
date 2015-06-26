@extends('backend.layouts.master')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">List of courts</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @include('backend.partials.message')
                        <table class="table table-bordered">
                            <thead>
                                <th style="width: 5%">{{_('ID')}}</th>
                                <th>{{_('Name')}}</th>
                                <th>{{_('Address')}}</th>
                                <th>{{_('Website')}}</th>
                                <th>{{_('Facebook')}}</th>
                                <th>{{_('Added By')}}</th>
                                <th style="width: 10%">{{_('Action')}}</th>
                            </thead>
                            <tbody>
                            @foreach($courts as $court)
                                <tr>
                                    <td>{{ $court->id }}</td>
                                    <td>{{ $court->name }}</td>
                                    <td>{{ $court->address }}</td>
                                    <td>{{ $court->website }}</td>
                                    <td>{{ $court->facebook }}</td>
                                    <td>{{ $court->user_id }}</td>
                                    <td>
                                        <form method="post" action="{{ route('backend.court.delete', $court->id) }}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="button" class="mg2 btn-delete btn btn-danger pull-right">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </form>
                                        <a class="mg2 btn btn-primary pull-right" href="{{ route('backend.court.edit', $court->id) }}"><i class="fa fa-pencil-square-o"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $events->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop