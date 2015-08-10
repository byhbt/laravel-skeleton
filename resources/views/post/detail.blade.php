@extends('layouts.master')
@section('content')
        <!-- Blog Detail Started -->
        <div class="blogdetail sections">
<!--            <div class="bootstrap-carousel">
                <div data-ride="carousel" class="carousel slide" id="carousel-example-captions">
                    <ol class="carousel-indicators">
                        <li class="" data-slide-to="0" data-target="#carousel-example-captions"></li>
                        <li data-slide-to="1" data-target="#carousel-example-captions" class="active"></li>
                        <li data-slide-to="2" data-target="#carousel-example-captions" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item">
                            <img src="images/img1-big.jpg" alt="">
                        </div>
                        <div class="item active">
                            <img src="images/img2-big.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/img3-big.jpg" alt="">
                        </div>
                    </div>
                    <a data-slide="prev" href="#carousel-example-captions" class="left carousel-control">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a data-slide="next" href="#carousel-example-captions" class="right carousel-control">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>-->
            <div class="row">
<!--                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <div class="avatar">
                        <figure>
                            <a href="#"><img src="images/avatar.gif" alt=""></a>
                        </figure>
                        <h5>{{ $post->getAuthor() }}</h5>
                        <p>
                            Description
                        </p>
                    </div>
                </div>-->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="blogtext">
                        <h2 class="heading">{{ $post->title }}</h2>
                        <div class="clearfix"></div>
                        <div class="blogmetas">
                            <ul>
                                <li><i class="fa fa-calendar"></i>{{ $post->getPublishedAt() }}</li>
                                <li>
                                    <i class="fa fa-align-justify"></i>
                                    <a href="#">{{ $post->getCategory() }} </a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        {{ $post->content }}
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Detail End -->
        <div class="clearfix"></div>
        <!-- Contents Section Started -->
        <div class="sections">
            <h2 class="heading">Related Posts</h2>
            <div class="clearfix"></div>
            <div class="row">
                @include('post._related-post')
            </div>
        </div>
        <!-- Contents Section End -->
        <div class="clearfix"></div>
        <!-- Contents Section Started -->
        <!--  <div class="sections">
            <h2 class="heading">Comments (19)</h2>
            <div class="clearfix"></div>
            <div id="comments">
                {{-- @include('post._comment') --}}
            </div>
        </div>
        <!-- Contents Section End -->
        <div class="clearfix"></div>
        <!-- Contents Section Started -->
        <!-- <div class="sections"> -->
            {{-- @include('post._comment-form') --}}
        <!-- </div> -->
        <!-- Contents Section End -->
        <div class="clearfix"></div>
@endsection
                