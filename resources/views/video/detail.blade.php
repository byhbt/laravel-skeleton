@extends('layouts.master')
@section('content')
    <div class="videoplayersec">
        <div class="vidcontainer">
            <div class="row"> 
                <!-- Video Player Start -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 playershadow">
                    <div class="playeriframe">
                        <iframe src="{{ $video->getYoutubeEmbedLink() }}" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                    </div>
                </div>
                <!-- Video Player End --> 
                <!-- Video Stats and Sharing Start -->
                <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 videoinfo">-->
                    <!--<div class="row">-->
                        {{-- @include('video._video-info') --}}
                    <!--</div>-->
                <!--</div>-->
                <!-- Video Stats and Sharing End --> 
                <!-- Like This Video Start -->
                <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 likeit">-->
                    <!--<hr>-->
                    <!--<a class="btn btn-primary backcolor" href="#">Like This Video</a>-->
                <!--</div>-->
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 equalcol conentsection" style="height: 2232px;"> 
        <!-- Video Detail Started -->
        <div class="blogdetail videodetail sections">
            {{-- @include('video._video-description') --}}
        </div>
        <!-- Video Detail End -->
        <div class="clearfix"></div>
        <!-- Contents Section Started -->
        <div class="sections">
            @include('video._related-video')
        </div>
        <!-- Contents Section End -->
        <div class="clearfix"></div>
        <!-- Contents Section Started -->
        <div class="sections">
            {{-- @include('video._comment') --}}
        </div>
        <!-- Contents Section End -->
        <div class="clearfix"></div>
        <!-- Contents Section Started -->
        <div class="sections">
            {{-- @include('video._comment-form') --}}
        </div>
        <!-- Contents Section End -->
        <div class="clearfix"></div>
    </div>
@endsection