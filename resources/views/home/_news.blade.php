@forelse($posts as $item)
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <div class="blogposttwo">
            <figure>
                <a href="{{ route('news.detail', ['slug' => $item->slug]) }}">
                    <img src="{{ $item->getFeaturedImage() }}" class="img-responsive hovereffect" alt="">
                </a>
            </figure>
            <div class="text">
                <h4><a href="{{ route('news.detail', ['slug' => $item->slug]) }}">{{ $item->title }}</a></h4>
                <ul>
                    <li><i class="fa fa-calendar"></i>{{ $item->getPublishedAt() }}</li>
                    <li>
                        <i class="fa fa-align-justify"></i>
                        <a href="#">{{ $item->getCategory() }}</a>
                    </li>
                </ul>
                <p>{{ str_limit($item->description, 100) }}</p>
                <a href="{{ route('news.detail', ['slug' => $item->slug]) }}" class="btn btn-primary btn-xs backcolor">Read More</a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
@empty
    <div class="row">
        <div class="col-sm-12">
            Oops, curreny we have no news for this category.
        </div>
    </div>
@endforelse
