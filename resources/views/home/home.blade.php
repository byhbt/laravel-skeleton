@extends('layouts.master')
@section('content')
<!-- Contents Section Started -->
<div class="sections">
    <h2 class="heading">Tin tức mới</h2>
    <div class="clearfix"></div>
    <div class="row">
        @include('home._news')
    </div>
</div>
<!-- Contents Section End -->
<!-- Contents Section Started -->
<div class="sections">
    <h2 class="heading">Video mới</h2>
    <div class="clearfix"></div>
    <div class="row">
        @include('home._video')
    </div>
</div>
<!-- Contents Section End -->
<div class="clearfix"></div>
@endsection
