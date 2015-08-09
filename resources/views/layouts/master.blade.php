<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ChoiCauLong.com</title>
<!--// Responsive //-->
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="True">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<!--// Stylesheets //-->
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" media="screen" />
<link href="{{ asset('css/style.css') }}" rel="stylesheet" media="screen" />
@include('partial.meta')
<!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/respond.min.js') }}"></script>
<![endif]-->
</head>
<body>
<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Header Start -->
    <header>
        <!-- Header Top Strip Start -->
        <div class="topstrip">
            <div class="custom-container">
                <div class="row">
                    <!-- Top Categories Start -->
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                        <div class="topcategories">
                            <!-- navbar Start -->
                            <div class="navbar yamm navbar-default">
                                <div class="navbar-header">
                                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-2" class="navbar-toggle">
                                        <i class="fa fa-bars"></i> Categories
                                    </button>
                                </div>
                                <div id="navbar-collapse-2" class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav">
                                        <li><a href="#">#Lindan</a></li>
                                        <li><a href="#">#Tien Minh</a></li>
                                        <li><a href="#">#Mua vot</a></li>
                                        <li><a href="#">#Tap choi</a></li>
                                        <li><a href="#">#Video hay</a></li>
                                        <li><a href="#">#LeeChongWeei</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- Top Categories End -->
                    <!-- Social Network Start -->
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <div class="socialnetworks">
                            @include('layouts.social-icons-header')
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- Social Network End -->
                </div>
            </div>
        </div>
        <!-- Header Top Strip End -->
        <!-- Logo + Search + Advertisment Start -->
        <div class="logobar">
            <div class="custom-container">
                <div class="row">
                    <!-- Logo Start -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt="" /></a>
                        </div>
                    </div>
                    <!-- Logo End -->
                    <!-- Search Start -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="searchbox">
                            <form>
                                <ul>
                                    <li><input type="text" placeholder="Search Videos" /></li>
                                    <li class="pull-right"><input type="submit" value="GO" /></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <!-- Search End -->
                    <!-- Advertisment Start -->
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <figure class="header-adv">
                            <a href="#"><img src="img/adv.gif" class="img-responsive" alt="Advertisment" /></a>
                        </figure>
                    </div>
                    <!-- Advertisment End -->
                </div>
            </div>
        </div>
        <!-- Logo + Search + Advertisment End -->
        <!-- Navigation Strip Start -->
        <div class="navigationstrip bordercolor-top">
            <div class="custom-container">
                <div class="row">
                    @include('layouts.nav')
                </div>
            </div>
        </div>
        <!-- Navigation Strip End -->
    </header>
    <!-- Header End -->
    <!-- Contents Start -->
    <div class="contents">
        <div class="custom-container">
            <div class="row">
                <!-- Bread Crumb Start -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Videos - Single Sidebar</li>
                    </ol>
                </div>
                <!-- Bread Crumb End -->
                <!-- Content Column Start -->
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 equalcol conentsection">
                    @yield('content')
                </div>
                <!-- Content Column End -->
                <!-- Gray Sidebar Start -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 equalcol graysidebar">
                    <!-- Interactive Tabs Widget start -->
                    @include('layouts.sidebar')
                    <div class="clearfix"></div>
                    <!-- Recent Post Widget end -->
                </div>
                <!-- Gray Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Contents End -->
    <!-- Footer Start -->
    <footer class="style2">
        @include('layouts.footer')
    </footer>
    <!-- Footer End -->
    <a href="#" class="pull-right gotop btn btn-primary backcolor"> <i class="fa fa-arrow-up"></i> </a>
</div>
<!-- Wrapper End -->
<!--// Javascript //-->
<script type="text/javascript" src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/responsiveCarousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/slimbox2.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/responsive-paginate.js') }}"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  // ga('create', 'UA-50738310-1', 'softcircles.net');
  ga('send', 'pageview');

</script>
</body>
</html>
