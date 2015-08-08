@forelse(range(1, 6) as $item)
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <div class="blogposttwo">
            <figure>
                <a href="blogdetail-double-sidebar.html">
                    <img src="img/img1.jpg" class="img-responsive hovereffect" alt="">
                </a>
            </figure>
            <div class="text">
                <h4><a href="blogdetail-double-sidebar.html">Waters Years</a></h4>
                <ul>
                    <li><i class="fa fa-calendar"></i>25-03-2014</li>
                    <li>
                        <i class="fa fa-align-justify"></i>
                        <a href="#">News</a>
                    </li>
                </ul>
                <p>
                    Fly whales she'd and. Winged, image very unto give...
                </p>
                <a href="blogdetail-double-sidebar.html" class="btn btn-primary btn-xs backcolor">Read More</a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
@empty
    <div class="row">
        <div class="col-sm-12">
            Oops, curreny we have no video for this category.
        </div>
    </div>
@endforelse
