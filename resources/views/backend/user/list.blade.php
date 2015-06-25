@extends('backend.layouts.master')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">List of users</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @include('backend.partials.message')
                        <div class="row">
                            <div class="col-sm-6 form-group pull-right">
                                <label for="categories" class="col-sm-2 control-label">User Status</label>
                                <div class="col-sm-6">
                                    {!! Form::select('status', [], null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <th style="width: 5%">{{_('ID')}}</th>
                                <th>{{_('Name')}}</th>
                                <th>{{_('Email')}}</th>
                                <th>{{_('Last Logged in')}}</th>
                                <th>{{_('Sign ups at')}}</th>
                                <th style="width: 10%">{{_('Action')}}</th>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->last_logged }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>
                                        <form method="post" action="{{ route('backend.user.delete', $user->id) }}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="button" class="btn-delete btn btn-danger pull-right">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </form>
                                        <a style="margin-right: 5px;" class="btn btn-primary pull-right" href="{{ route('backend.user.edit', $user->id) }}"><i class="fa fa-pencil-square-o"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $users->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop