@forelse($videos as $item)
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <!-- Video Box Start -->
        <div class="videobox2">
            <figure>
                <!-- Video Thumbnail Start -->
                <a href="video-detail-double-sidebar.html">
                    <img src="{{ $item->getFeaturedImage() }}" class="img-responsive hovereffect" alt="" />
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
            <h4><a href="{{ url($item->slug)}}">{{ $item->title }}</a></h4>
            <!-- Video Title End -->
        </div>
        <!-- Video Box End -->
    </div>
@empty
    <div class="row">
        <div class="col-sm-12">
            Oops, curreny we have no video for this category.
        </div>
    </div>
@endforelse
