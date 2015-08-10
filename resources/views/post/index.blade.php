@extends('layouts.master')
@section('content')
    @foreach($posts as $post)
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="blogposttwo">
                <figure>
                    <a href="{{ $post->getPermanentLink() }}">
                        <img src="{{ $post->getFeaturedImage() }}" class="img-responsive hovereffect" alt="">
                    </a>
                </figure>
                <div class="text">
                    <h4><a href="{{ $post->getPermanentLink() }}">{{ $post->title }}</a></h4>
                    <ul>
                        <li><i class="fa fa-calendar"></i>{{ $post->getPublishedAt() }}</li>
                        <li>
                            <i class="fa fa-align-justify"></i>
                            <a href="#">{{ $post->getCategory() }}</a>
                        </li>
                    </ul>
                    <p>
                        {{ $post->getShortContent() }}
                    </p>
                    <a href="{{ $post->getPermanentLink() }}" class="btn btn-primary btn-xs backcolor">Read More</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    @endforeach
    <!-- Pagination Start -->
    <?php echo $posts->render(); ?>
    <div class="clearfix"></div>
    <!-- Pagination End -->
@endsection