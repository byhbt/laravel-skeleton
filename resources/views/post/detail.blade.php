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
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <div class="avatar">
                        <figure>
                            <a href="blog-fullwidth.html"><img src="images/avatar.gif" alt=""></a>
                        </figure>
                        <h5>By Kax Miller</h5>
                        <p>
                            Description
                        </p>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                    <div class="blogtext">
                        <h2 class="heading">{{ $post->title }}</h2>
                        <div class="clearfix"></div>
                        <div class="blogmetas">
                            <ul>
                                <li><i class="fa fa-calendar"></i>25-03-2014</li>
                                <li>
                                    <i class="fa fa-align-justify"></i>
                                    <a href="#">News, </a>
                                    <a href="#">Videos, </a>
                                    <a href="#">Music</a>
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
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="blogposttwo">
                        <figure>
                            <a href="blogdetail-double-sidebar.html">
                                <img src="images/img10.jpg" class="img-responsive hovereffect" alt="">
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
                            <a href="blogdetail-double-sidebar.html" class="btn btn-primary btn-xs backcolor">Read More</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="blogposttwo">
                        <figure>
                            <a href="blogdetail-double-sidebar.html">
                                <img src="images/img11.jpg" class="img-responsive hovereffect" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <h4><a href="#">Fourth Winged</a></h4>
                            <ul>
                                <li><i class="fa fa-calendar"></i>25-03-2014</li>
                                <li>
                                    <i class="fa fa-align-justify"></i>
                                    <a href="#">News</a>
                                </li>
                            </ul>
                            <a href="blogdetail-double-sidebar.html" class="btn btn-primary btn-xs backcolor">Read More</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="blogposttwo">
                        <figure>
                            <a href="#">
                                <img src="images/img12.jpg" class="img-responsive hovereffect" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <h4><a href="blogdetail-double-sidebar.html">Gathering Creepeth</a></h4>
                            <ul>
                                <li><i class="fa fa-calendar"></i>25-03-2014</li>
                                <li>
                                    <i class="fa fa-align-justify"></i>
                                    <a href="#">News</a>
                                </li>
                            </ul>
                            <a href="blogdetail-double-sidebar.html" class="btn btn-primary btn-xs backcolor">Read More</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- Contents Section End -->
        <div class="clearfix"></div>
        <!-- Contents Section Started -->
        <div class="sections">
            <h2 class="heading">Comments (19)</h2>
            <div class="clearfix"></div>
            <div id="comments">
                <div class="media">
                    <a href="#" class="pull-left">
                        <img alt="" class="media-object" src="images/avatar1.jpg">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="#">John Creator</a></h4>
                        <time datetime="2014-05-12T17:02">MAY 12, 2013 - 5:02 pm</time>
                        <p>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </p>
                        <a class="btn btn-primary btn-xs backcolor" href="#">Reply</a>
                    </div>
                </div>
                <div class="media">
                    <a href="#" class="pull-left">
                        <img alt="" class="media-object" src="images/avatar2.jpg">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="#">Robert D. Foust</a></h4>
                        <time datetime="2014-05-12T17:02">MAY 12, 2013 - 5:02 pm</time>
                        <p>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </p>
                        <a class="btn btn-primary btn-xs backcolor" href="#">Reply</a>
                        <div class="media">
                            <a href="#" class="pull-left">
                                <img alt="" class="media-object" src="images/avatar3.jpg">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">Jimmy B. Allen</a></h4>
                                <time datetime="2014-05-12T17:02">MAY 12, 2013 - 5:02 pm</time>
                                <p>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </p>
                                <a class="btn btn-primary btn-xs backcolor" href="#">Reply</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <a href="#" class="pull-left">
                        <img alt="" class="media-object" src="images/avatar4.jpg">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="#">Lorraine L. Keys</a></h4>
                        <time datetime="2014-05-12T17:02">MAY 12, 2013 - 5:02 pm</time>
                        <p>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </p>
                        <a class="btn btn-primary btn-xs backcolor" href="#">Reply</a>
                    </div>
                </div>
                <div class="media">
                    <a href="#" class="pull-left">
                        <img alt="" class="media-object" src="images/avatar5.jpg">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="#">William M. Huggard</a></h4>
                        <time datetime="2014-05-12T17:02">MAY 12, 2013 - 5:02 pm</time>
                        <p>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </p>
                        <a class="btn btn-primary btn-xs backcolor" href="#">Reply</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contents Section End -->
        <div class="clearfix"></div>
        <!-- Contents Section Started -->
        <div class="sections">
            <h2 class="heading">Leave Reply</h2>
            <div class="clearfix"></div>
            <div id="leavereply">
                <form action="send.php">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Website</label>
                                <input type="url" class="form-control" placeholder="Website">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Your Comments</label>
                                <textarea class="form-control" rows="3" placeholder="Your Comments"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" class="btn btn-primary backcolor">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Contents Section End -->
        <div class="clearfix"></div>
@endsection
                