@extends('backend.layouts.master')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">List of events</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @include('backend.partials.message')
                        <table class="table table-bordered">
                            <thead>
                                <th style="width: 5%">{{_('ID')}}</th>
                                <th>{{_('Title')}}</th>
                                <th>{{_('Time')}}</th>
                                <th>{{_('Address')}}</th>
                                <th>{{_('Description')}}</th>
                                <th>{{_('Creator')}}</th>
                                <th style="width: 10%">{{_('Action')}}</th>
                            </thead>
                            <tbody>
                            @foreach($events as $event)
                                <tr>
                                    <td>{{ $event->id }}</td>
                                    <td>{{ $event->title }}</td>
                                    <td>{{ $event->time }}</td>
                                    <td>{{ $event->address }}</td>
                                    <td>{{ str_limit($event->description, 200) }}</td>
                                    <td>{{ $event->creator }}</td>
                                    <td>
                                        <form method="post" action="{{ route('backend.event.delete', $event->id) }}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="button" class="mg2 btn-delete btn btn-danger pull-right">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </form>
                                        <a class="mg2 btn btn-primary pull-right" href="{{ route('backend.event.edit', $event->id) }}"><i class="fa fa-pencil-square-o"></i></a>
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