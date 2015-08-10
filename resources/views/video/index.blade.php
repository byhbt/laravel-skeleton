@extends('layouts.master')
@section('content')
    @foreach($videos as $video)
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"> 
            <!-- Video Box Start -->
            <div class="videobox2">
                <figure> 
                    <!-- Video Thumbnail Start --> 
                    <a href="{{ $video->getPermanentLink() }}">
                        <img src="{{ $video->getFeaturedImage() }}" class="img-responsive hovereffect" alt="">
                    </a> 
                    <!-- Video Thumbnail End --> 
                    <!-- Video Info Start -->
                    <div class="vidopts">
                        <ul>
                            <li><i class="fa fa-heart"></i>1056</li>
                            <li><i class="fa fa-clock-o"></i>12:23</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Video Info End --> 
                </figure>
                <!-- Video Title Start -->
                <h4><a href="{{ $video->getPermanentLink() }}">{{ $video->title }}</a></h4>
                <!-- Video Title End --> 
            </div>
            <!-- Video Box End --> 
        </div>
    @endforeach
    <!-- Pagination Start -->
    <?php echo $videos->render(); ?>
    <div class="clearfix"></div>
    <!-- Pagination End -->
@endsection