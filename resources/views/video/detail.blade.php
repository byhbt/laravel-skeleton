@extends('layouts.master')
@section('content')
    <div class="videoplayersec">
        <div class="vidcontainer">
            <div class="row"> 
                <!-- Video Player Start -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 playershadow">
                    <div class="playeriframe">
                        <iframe src="http://player.vimeo.com/video/84413332" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                    </div>
                </div>
                <!-- Video Player End --> 
                <!-- Video Stats and Sharing Start -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 videoinfo">
                    <div class="row"> 
                        <!-- Uploader Start -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 uploader">
                            <figure> <a href="video-list.html"><img src="images/avatar2.jpg" alt=""></a> </figure>
                            <div class="aboutuploader">
                                <h5><a href="video-list.html">By Kax Miller</a></h5>
                                <time datetime="25-12-2014">Uploaded : 25 DEC 2014</time>
                                <br>
                                <a class="btn btn-primary btn-xs backcolor" href="#">Watch All Videos</a> </div>
                        </div>
                        <!-- Uploader End --> 
                        <!-- Video Stats Start -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 stats">
                            <hr class="visible-xs">
                            <ul>
                                <li class="likes">
                                    <h5>Likes</h5>
                                    <h2>250</h2>
                                </li>
                                <li class="views">
                                    <h5>Views</h5>
                                    <h2>70K</h2>
                                </li>
                            </ul>
                        </div>
                        <!-- Video Stats End --> 
                        <!-- Video Share Start -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 videoshare">
                            <ul>
                                <li class="facebook">
                                    <i class="fa fa-facebook"></i>
                                    <div class="shaingstats">
                                        <h5>36K</h5>
                                        <p>Shares</p>
                                    </div>
                                    <a href="http://www.facebook.com" class="link" target="_blank"></a>
                                </li>
                                <li class="twitter">
                                    <i class="fa fa-twitter"></i>
                                    <div class="shaingstats">
                                        <h5>15K</h5>
                                        <p>Tweets</p>
                                    </div>
                                    <a href="http://www.twitter.com" class="link" target="_blank"></a>
                                </li>
                                <li class="gplus">
                                    <i class="fa fa-google-plus"></i>
                                    <div class="shaingstats">
                                        <h5>7K</h5>
                                        <p>Shares</p>
                                    </div>
                                    <a href="https://plus.google.com" class="link" target="_blank"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Video Share End --> 
                    </div>
                </div>
                <!-- Video Stats and Sharing End --> 
                <!-- Like This Video Start -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 likeit">
                    <hr>
                    <a class="btn btn-primary backcolor" href="#">Like This Video</a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 equalcol conentsection" style="height: 2320px;">
            <div class="sections">
                        <h2 class="heading">Related Videos</h2>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"> 
                                <!-- Video Box Start -->
                                <div class="videobox2">
                                    <figure> 
                                        <!-- Video Thumbnail Start --> 
                                        <a href="video-detail-double-sidebar.html">
                                            <img alt="" class="img-responsive hovereffect" src="images/img14.jpg">
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
                                    <h4><a href="video-detail-double-sidebar.html">Darkness bearings</a></h4>
                                    <!-- Video Title End --> 
                                </div>
                                <!-- Video Box End --> 
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"> 
                                <!-- Video Box Start -->
                                <div class="videobox2">
                                    <figure> 
                                        <!-- Video Thumbnail Start --> 
                                        <a href="video-detail-double-sidebar.html">
                                            <img alt="" class="img-responsive hovereffect" src="images/img15.jpg">
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
                                    <h4><a href="video-detail-double-sidebar.html">Waters isn't one</a></h4>
                                    <!-- Video Title End --> 
                                </div>
                                <!-- Video Box End --> 
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"> 
                                <!-- Video Box Start -->
                                <div class="videobox2">
                                    <figure> 
                                        <!-- Video Thumbnail Start --> 
                                        <a href="video-detail-double-sidebar.html">
                                            <img alt="" class="img-responsive hovereffect" src="images/img16.jpg">
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
                                    <h4><a href="video-detail-double-sidebar.html">Life night dominion</a></h4>
                                    <!-- Video Title End --> 
                                </div>
                                <!-- Video Box End --> 
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"> 
                                <!-- Video Box Start -->
                                <div class="videobox2">
                                    <figure> 
                                        <!-- Video Thumbnail Start --> 
                                        <a href="video-detail-double-sidebar.html">
                                            <img alt="" class="img-responsive hovereffect" src="images/img17.jpg">
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
                                    <h4><a href="video-detail-double-sidebar.html">Shall Have And Two</a></h4>
                                    <!-- Video Title End --> 
                                </div>
                                <!-- Video Box End --> 
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"> 
                                <!-- Video Box Start -->
                                <div class="videobox2">
                                    <figure> 
                                        <!-- Video Thumbnail Start --> 
                                        <a href="video-detail-double-sidebar.html">
                                            <img alt="" class="img-responsive hovereffect" src="images/img18.jpg">
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
                                    <h4><a href="video-detail-double-sidebar.html">Greater Spirit</a></h4>
                                    <!-- Video Title End --> 
                                </div>
                                <!-- Video Box End --> 
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"> 
                                <!-- Video Box Start -->
                                <div class="videobox2">
                                    <figure> 
                                        <!-- Video Thumbnail Start --> 
                                        <a href="video-detail-double-sidebar.html">
                                            <img alt="" class="img-responsive hovereffect" src="images/img19.jpg">
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
                                    <h4><a href="video-detail-double-sidebar.html">Fruitful Subdue</a></h4>
                                    <!-- Video Title End --> 
                                </div>
                                <!-- Video Box End --> 
                            </div>
                        </div>
                    </div>
        </div>
    </div>
@endsection