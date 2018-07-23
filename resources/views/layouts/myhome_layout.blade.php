<!DOCTYPE html>
<html lang="en" xmlns:https="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Be Superior : Home</title>
    <!-- Favicon -->
    <!---scripts--->
    <!-- jQuery library -->
    <script src="{{asset('/js/myhome-js/plugins/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/myhome-js/plugins/new_school_registration.js')}}"></script>

    <script src="{{asset('/js/myhome-js/plugins/jquery.validate.js')}}"></script>
    <script src="{{asset('/js/myhome-js/plugins/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/js/myhome-js/plugins/additional-methods.js')}}"></script>
    <script src="{{asset('/js/myhome-js/plugins/additional-methods.min.js')}}"></script>


    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>--}}

    {{--<script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.js"></script>--}}
     {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js"></script>--}}
    {{--<script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/additional-methods.js"></script>--}}
    {{--<script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/additional-methods.min.js"></script>--}}
    {{--<script type="text/javascript" src="{{asset('js/my_schools/new_school_registration.js')}}"></script>--}}

<!-- Open Sans for body font -->
    {{--<link href="{{asset('/css/myhome-css/css')}}" rel='stylesheet' type='text/css'>--}}
    {{--<!-- Lato for Title -->--}}
    {{--<link href="{{'/css/myhome-css/css_2'}}" rel='stylesheet' type='text/css'>--}}

    {{--<!-- Open Sans for body font -->--}}
    {{--<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>--}}
    {{--<!-- Lato for Title -->--}}
    {{--<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>--}}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('/js/myhome-js/plugins/html5shiv.min.js')}}"></script>
    <script src="{{asset('/js/myhome-js/plugins/respond.min.js')}}"></script>
    <![endif]-->


    {{--<!--[if lt IE 9]>--}}
    {{--<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>--}}
    {{--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
    {{--<![endif]-->--}}

    <!-- Main Style -->
    <link href="{{asset('/css/myhome-css/my.css')}}" rel="stylesheet">

    <link rel="shortcut icon" type="image/icon" href="{{asset('/images/favicon.ico')}}"/>
    <!-- Font Awesome -->
    <link href="{{asset( '/css/myhome-css/font-awesome.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('/css/myhome-css/bootstrap.css')}} " rel="stylesheet">
    <link href="{{asset('/css/myhome-css/bootstrap.min.css')}} " rel="stylesheet">
    {{--<link href="{{asset('//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.js')}} " rel="stylesheet">--}}

    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/myhome-css/slick.css')}}"/>
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/myhome-css/animate.css')}}"/>
    <!-- Progress bar  -->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/myhome-css/bootstrap-progressbar-3.3.4.css')}}"/>
    <!-- Theme color -->
    <link id="switcher" href="{{asset('/css/theme-color/default-theme.css')}}" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{asset('/css/myhome-css/style.css')}}" rel="stylesheet">

    <!-- Fonts -->

 </head>
<body>

<!-- BEGAIN PRELOADER -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- END PRELOADER -->

<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<!-- END SCROLL TOP BUTTON -->

<!-- Start header -->
<header id="header">
    <!-- header top search -->
    <div class="header-top">
        <div class="container">
        {!! Form::open(array('class'=>'ajax','url'=>'/search_school')) !!}
                <!-- CSRF Token -->
                <meta name="csrf-token" content="{{ csrf_token() }}">
                 <div id="search">
                    <input type="text" placeholder="Type your search keyword here and hit Enter..." name="search_school" id="search_school" style="display: inline-block;">
                    <button type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                 </div>
            {!! form::close() !!}
        </div>
    </div>
    <!-- header bottom -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="header-contact">
                        <ul>
                            <li>
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    +92(333) 063-8959
                                </div>
                            </li>
                            <li>
                                <div class="mail">
                                    <i class="fa fa-envelope"></i>
                                    danish.hnd@gmail.com
                                </div>
                            </li>
                            <li>
                                <a href="{{url('/search')}}">
                                    <h3>Search School</h3><i class="fa fa-search">ui
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="header-login">
                        <a class="login " href='{{url('/search')}}'>My School</a>
                        <a class="login " href='{{url('/login')}}'>Login</a>
                        <a class="login " href={{url('/schoolReg')}}>Sign Up</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header -->
<!-- BEGIN MENU -->
<section id="menu-area">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <!-- TEXT BASED LOGO -->
                <a class="navbar-brand" href="/myhome">Intensely</a>
                <!-- IMG BASED LOGO  -->
                <!--            <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                    <li class="active"><a href="myhome.blade.php">Home</a></li>
                    <li><a href="feature.html">Feature</a></li>
                    <li><a href="service.html">Service</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="blog-archive.html">Blog Archive</a></li>
                            <li><a href="blog-single-with-left-sidebar.html">Blog Single with Left Sidebar</a></li>
                            <li><a href="blog-single-with-right-sidebar.html">Blog Single with Right Sidebar</a></li>
                            <li><a href="blog-single-with-out-sidebar.html">Blog Single with out Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href="404.html">404 Page</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div><!--/.nav-collapse -->
            <a href="{{url('/search')}}" id="search-icon">
                <i class="fa fa-search">
                </i>
            </a>
        </div>
    </nav>
</section>
<!-- END MENU -->
<div style="background-color: #f5f8fa";>
    @yield('content')

</div>


<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Bootstrap -->
<script src="{{asset('/js/myhome-js/bootstrap.js')}}"></script>
<!--my_schools js--->
{{--<script type="text/javascript" src="{{asset('/js/myhome-js/schoolsearch.js')}}"></script>--}}
<!-- Slick Slider -->
<script type="text/javascript" src="{{asset('/js/myhome-js/slick.js')}}"></script>
<!-- counter -->
<script src="{{asset('/js/myhome-js/waypoints.js')}}"></script>
<script src="{{asset('/js/myhome-js/jquery.counterup.js')}}"></script>
<!-- Wow animation -->
<script type="text/javascript" src="{{asset('/js/myhome-js/wow.js')}}"></script>
<!-- progress bar   -->
<script type="text/javascript" src="{{asset('/js/myhome-js/bootstrap-progressbar.js')}}"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{asset('/js/myhome-js/custom.js')}}"></script>
</body>
</html>
