@extends('layouts.master')

@section('content')
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Please Sign In</h3>
    </div>
    <div class="panel-body">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row">
            <div class="col-md-5" >
                <a href="{!!URL::to('facebook')!!}"><img src="{{ asset('/img/fb.png') }}" /></a><br/>
                <a href="#"><img src="{{ asset('/img/tw.png') }}" /></a><br/>
                <a href="#"><img src="{{ asset('/img/gplus.png') }}" /></a>
            </div>
            <div class="col-md-7" style="border-left:1px solid #ccc;height:160px">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <input id="textinput" name="email" type="text" placeholder="Enter Email" class="form-control input-md">
                        <input id="textinput" name="password" type="password" placeholder="Enter Password" class="form-control input-md">
                        <input type="checkbox" name="remember" id="remember"> <label for="remember">Remember me</label><br/>
                        <a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a><br/>
                        <button id="singlebutton" name="singlebutton" class="btn btn-info btn-sm pull-right">Sign In</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
