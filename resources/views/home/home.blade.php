@extends('layouts.master')

@section('content')
        <div class="well well-sm">
            <span class="label label-info"><i class="fa fa-bullhorn"></i> Info</span> <strong>SeaGame 28</strong> <br />
            <span class="label label-info"><i class="fa fa-bullhorn"></i> Info</span> <strong>SeaGame 28</strong> <br />
            <span class="label label-info"><i class="fa fa-bullhorn"></i> Info</span> <strong>SeaGame 28</strong> <br />
        </div>

        <div class="page-header">
            <h2> <i class="fa fa-newspaper-o"></i> Tin tức </h2>
        </div>
        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                </a>
                <h4><a href="{!! route('video.detail') !!}">Project Name</a></h4>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                </a>
                <h4><a href="{!! route('video.detail') !!}">Project Name</a></h4>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                </a>
                <h4><a href="{!! route('video.detail') !!}">Project Name</a></h4>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                </a>
                <h4><a href="{!! route('video.detail') !!}">Project Name</a></h4>
            </div>
        </div>
        <!-- /.row -->

        <div class="page-header">
            <h2> <i class="fa fa-youtube"></i> Thi đấu </h2>
        </div>
        <div class="row">
            @foreach($videos as $video)
                <div class="col-md-3 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="http://img.youtube.com/vi/{{ $video->youtube_id }}/mqdefault.jpg" alt=""/>
                    </a>
                    <h4><a href="{!! route('video.detail') !!}">{{ $video->title }}</a></h4>
                </div>
            @endforeach
        </div>
        <!-- /.row -->

        <div class="page-header">
            <h2> <i class="fa fa-youtube-play"></i> Video hay </h2>
        </div>
        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                </a>
                <h4><a href="{!! route('video.detail') !!}">Project Name</a></h4>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                </a>
                <h4><a href="{!! route('video.detail') !!}">Project Name</a></h4>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                </a>
                <h4><a href="{!! route('video.detail') !!}">Project Name</a></h4>
            </div>
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                </a>
                <h4><a href="{!! route('video.detail') !!}">Project Name</a></h4>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>
@endsection
