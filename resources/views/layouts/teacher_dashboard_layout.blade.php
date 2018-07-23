<?php
/**
 * Created by PhpStorm.
 * User: Danish Ch
 * Date: 2/8/2018
 * Time: 3:34 AM
 */
?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teacher|Dashboard</title>
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--<base href="{{URL::asset('/')}}" target="_top">--}}
<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--<title>{{ config('app.name', 'Laravel') }}</title>--}}


<!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <link rel="shortcut icon" href="{{asset('/images/admin-images/logo1.ico')}}"/>

    <!--global styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/components.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/custom.css')}}" />
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/sweetalert/css/sweetalert2.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/pages/sweet_alert.css')}}"/>
    <!-- end of global styles-->

    <!--Dynamic StyleSheets added from a view would be pasted here-->
    @stack('styles')
    {{--<style>--}}
    {{--.loading {--}}
    {{--background: lightgoldenrodyellow url('{{asset('/images/admin-images/processing.gif')}}') no-repeat center 65%;--}}
    {{--height: 80px;--}}
    {{--width: 100px;--}}
    {{--position: fixed;--}}
    {{--border-radius: 4px;--}}
    {{--left: 50%;--}}
    {{--top: 50%;--}}
    {{--margin: -40px 0 0 -50px;--}}
    {{--z-index: 2000;--}}
    {{--display: none;--}}
    {{--}--}}
    {{--</style>--}}


    {{--<link type="text/css" rel="stylesheet" href="#" id="skin_change"/>--}}
</head>

<body class="body">
<div class="preloader" style=" position: fixed;
          width: 100%;
          height: 100%;
          top: 0;
          left: 0;
          z-index: 100000;
          backface-visibility: hidden;
          background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
          height: 200px;
          position: absolute;
          left: 48%;
          top: 48%;
          background-position: center;
        z-index: 999999">
        <img src="{{asset('/images/admin-images/loader.gif')}}" style=" width: 40px;" alt="loading...">
    </div>
</div>


<div class="bg-dark" id="wrap">
    <div id="top">
        <!-- .navbar -->
        <nav class="navbar navbar-static-top">
            <div class="container-fluid">
                <a class="navbar-brand text-xs-center" href="{{asset('/teacher')}}">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3><img src="{{asset('/images/admin-images/profile_images/'.$employee->image)}}" class="admin_img" alt="logo">{{' '.$employee->school_name}}</h3>
                        </div>
                        {{--<div class="col-lg-6">--}}

                        {{--</div>--}}

                    </div>
                    <div class="row">
                        <div class="col-lg-5" style="text-align: right">
                            <h4>{{$employee->campus_name}}</h4>
                        </div>
                        {{--<div class="col-lg-2" style="text-align: right">--}}
                            {{----}}
                        {{--</div>--}}
                        <div class="col-lg-7" style="text-align: left">
                            <h5>Class:{{' '.$employee->class_name.'-'.$employee->section_name}}</h5>
                        </div>

                    </div>
                </a>
                <div class="menu">
                    <span class="toggle-left" id="menu-toggle">
                         <i class="fa fa-bars"></i>
                    </span>
                </div>
                {{--<div class="row">--}}
                    {{--<div class="col-lg-2">--}}
                        {{--<h5>{{$employee->campus_name}}</h5>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div>
                </div>
                <div class="topnav dropdown-menu-right float-xs-right">
                    <div class="btn-group hidden-md-up small_device_search" data-toggle="modal"
                         data-target="#search_modal">
                        <i class="fa fa-search text-primary"></i>
                    </div>
                    <div class="btn-group">
                        <div class="notifications no-bg">
                            <a class="btn btn-default btn-sm messages" data-toggle="dropdown" id="messages_section"> <i
                                        class="fa fa-envelope-o fa-1x"></i>
                                <span class="tag tag-pill tag-warning notifications_tag_top">8</span>
                            </a>
                            <div class="dropdown-menu drop_box_align" role="menu" id="messages_dropdown">
                                <div class="popover-title">You have 8 Messages</div>
                                <div id="messages">
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('/images/admin-images/mailbox_imgs/5.jpg')}}" class="message-img avatar rounded-circle"
                                                 alt="avatar1"></div>
                                        <div class="col-xs-10 message-data"><strong>hally</strong>
                                            sent you an image.
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('/images/admin-images/mailbox_imgs/8.jpg')}}" class="message-img avatar rounded-circle"
                                                 alt="avatar1"></div>
                                        <div class="col-xs-10 message-data"><strong>Meri</strong>
                                            invitation for party.
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('/images/admin-images/mailbox_imgs/7.jpg')}}" class="message-img avatar rounded-circle"
                                                 alt="avatar1"></div>
                                        <div class="col-xs-10 message-data">
                                            <strong>Remo</strong>
                                            meeting details .
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('/images/admin-images/mailbox_imgs/6.jpg')}}" class="message-img avatar rounded-circle"
                                                 alt="avatar1"></div>
                                        <div class="col-xs-10 message-data">
                                            <strong>David</strong>
                                            upcoming events list.
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('/images/admin-images/mailbox_imgs/5.jpg')}}" class="message-img avatar rounded-circle"
                                                 alt="avatar1"></div>
                                        <div class="col-xs-10 message-data"><strong>hally</strong>
                                            sent you an image.
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('/images/admin-images/mailbox_imgs/8.jpg')}}" class="message-img avatar rounded-circle"
                                                 alt="avatar1"></div>
                                        <div class="col-xs-10 message-data"><strong>Meri</strong>
                                            invitation for party.
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('/images/admin-images/mailbox_imgs/7.jpg')}}" class="message-img avatar rounded-circle"
                                                 alt="avatar1"></div>
                                        <div class="col-xs-10 message-data">
                                            <strong>Remo</strong>
                                            meeting details .
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('/images/admin-images/mailbox_imgs/6.jpg')}}" class="message-img avatar rounded-circle"
                                                 alt="avatar1"></div>
                                        <div class="col-xs-10 message-data">
                                            <strong>David</strong>
                                            upcoming events list.
                                            <br>
                                            <small>add to timeline</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="popover-footer">
                                    <a href="mail_inbox.html" class="text-white">Inbox</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <div class="notifications messages no-bg">
                            <a class="btn btn-default btn-sm" data-toggle="dropdown" id="notifications_section"> <i
                                        class="fa fa-bell-o"></i>
                                <span class="tag tag-pill tag-danger notifications_tag_top">9</span>
                            </a>
                            <div class="dropdown-menu drop_box_align" role="menu" id="notifications_dropdown">
                                <div class="popover-title">You have 9 Notifications</div>
                                <div id="notifications">
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('/images/admin-images/mailbox_imgs/1.jpg')}}" class="message-img avatar rounded-circle"
                                                 alt="avatar1"></div>
                                        <div class="col-xs-10 message-data">
                                            <i class="fa fa-clock-o"></i>
                                            <strong>Remo</strong>
                                            sent you an image
                                            <br>
                                            <small class="primary_txt">just now.</small>
                                            <br></div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('/images/admin-images/mailbox_imgs/2.jpg')}}" class="message-img avatar rounded-circle"
                                                 alt="avatar1"></div>
                                        <div class="col-xs-10 message-data">
                                            <i class="fa fa-clock-o"></i>
                                            <strong>clay</strong>
                                            business propasals
                                            <br>
                                            <small class="primary_txt">20min Back.</small>
                                            <br></div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('/images/admin-images/mailbox_imgs/3.jpg')}}" class="message-img avatar rounded-circle"
                                                 alt="avatar1"></div>
                                        <div class="col-xs-10 message-data">
                                            <i class="fa fa-clock-o"></i>
                                            <strong>John</strong>
                                            meeting at Ritz
                                            <br>
                                            <small class="primary_txt">2hrs Back.</small>
                                            <br></div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('/images/admin-images/mailbox_imgs/6.jpg')}}" class="message-img avatar rounded-circle"
                                                 alt="avatar1"></div>
                                        <div class="col-xs-10 message-data">
                                            <i class="fa fa-clock-o"></i>
                                            <strong>Luicy</strong>
                                            Request Invitation
                                            <br>
                                            <small class="primary_txt">Yesterday.</small>
                                            <br></div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('/images/admin-images/mailbox_imgs/1.jpg')}}" class="message-img avatar rounded-circle"
                                                 alt="avatar1"></div>
                                        <div class="col-xs-10 message-data">
                                            <i class="fa fa-clock-o"></i>
                                            <strong>Remo</strong>
                                            sent you an image
                                            <br>
                                            <small class="primary_txt">just now.</small>
                                            <br></div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('/images/admin-images/mailbox_imgs/2.jpg')}}" class="message-img avatar rounded-circle"
                                                 alt="avatar1"></div>
                                        <div class="col-xs-10 message-data">
                                            <i class="fa fa-clock-o"></i>
                                            <strong>clay</strong>
                                            business propasals
                                            <br>
                                            <small class="primary_txt">20min Back.</small>
                                            <br></div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('/images/admin-images/mailbox_imgs/3.jpg')}}" class="message-img avatar rounded-circle"
                                                 alt="avatar1"></div>
                                        <div class="col-xs-10 message-data">
                                            <i class="fa fa-clock-o"></i>
                                            <strong>John</strong>
                                            meeting at Ritz
                                            <br>
                                            <small class="primary_txt">2hrs Back.</small>
                                            <br></div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('/images/admin-images/mailbox_imgs/6.jpg')}}" class="message-img avatar rounded-circle"
                                                 alt="avatar1"></div>
                                        <div class="col-xs-10 message-data">
                                            <i class="fa fa-clock-o"></i>
                                            <strong>Luicy</strong>
                                            Request Invitation
                                            <br>
                                            <small class="primary_txt">Yesterday.</small>
                                            <br></div>
                                    </div>
                                    <div class="data">
                                        <div class="col-xs-2">
                                            <img src="{{asset('/images/admin-images/mailbox_imgs/1.jpg')}}" class="message-img avatar rounded-circle"
                                                 alt="avatar1"></div>
                                        <div class="col-xs-10 message-data">
                                            <i class="fa fa-clock-o"></i>
                                            <strong>Remo</strong>
                                            sent you an image
                                            <br>
                                            <small class="primary_txt">just now.</small>
                                            <br></div>
                                    </div>
                                </div>

                                <div class="popover-footer">
                                    <a href="#" class="text-white">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <div class="notifications request_section no-bg">
                            <a class="btn btn-default btn-sm messages" id="request_btn"> <i
                                        class="fa fa-sliders" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="btn-group">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                                <img src="{{asset('/images/admin-images/admin.jpg')}}" class="admin_img2 img-thumbnail rounded-circle avatar-img"
                                     alt="avatar"> <strong>{{ Auth::user()->name }}</strong>
                                <span class="fa fa-sort-down white_bg"></span>
                            </button>
                            <div class="dropdown-menu admire_admin">
                                <a class="dropdown-item title" href="#">
                                    Admire Teacher</a>
                                {{--<a class="dropdown-item" href="edit_user.html"><i class="fa fa-cogs"></i>--}}
                                    {{--Account Settings</a>--}}
                                {{--<a class="dropdown-item" href="{{url('/manage_profile')}}">--}}
                                    {{--<i class="fa fa-user"></i>--}}
                                    {{--My Profile--}}
                                {{--</a>--}}
                                {{--<a class="dropdown-item" href="mail_inbox.html"><i class="fa fa-envelope"></i>--}}
                                    {{--Inbox</a>--}}

                                {{--<a class="dropdown-item" href="lockscreen.html"><i class="fa fa-lock"></i>--}}
                                    {{--Lock Screen</a>--}}
                                <a class="dropdown-item" href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                {{--<a class="dropdown-item" href="login2.html"><i class="fa fa-sign-out"></i>--}}
                                {{--Log Out</a>--}}
                            </div>
                        </div>
                    </div>

                </div>
                <div class="top_search_box float-xs-right hidden-sm-down">
                    <form class="header_input_search float-xs-right">
                        <input type="text" placeholder="Search" name="search">
                        <button type="submit">
                            <span class="font-icon-search"></span>
                        </button>
                        <div class="overlay"></div>
                    </form>
                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- /.navbar -->
        <!-- /.head -->
    </div>
    <!-- /#top -->
    <div class="wrapper">
        <div id="left">
            <div class="menu_scroll">
                <div class="left_media">
                    <div class="media user-media bg-dark dker">
                        <div class="user-media-toggleHover">
                            <span class="fa fa-user"></span>
                        </div>
                        <div class="user-wrapper bg-dark">
                            <a class="user-link" href="#">
                                <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
                                     src="{{asset('/images/admin-images/admin.jpg')}}">
                                <p class="user-info menu_hide"><strong> Welcome {{ Auth::user()->name }}</strong></p>
                            </a>
                        </div>
                    </div>
                    <hr/>
                </div>
                <ul id="menu">
                    {{--<li class="active">--}}
                        {{--<a href="{{URL('/home')}}">--}}
                            {{--<i class="fa fa-home"></i>--}}
                            {{--<span class="link-title menu_hide">&nbsp;Dashboard 1</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    <li>
                        <a href="{{URL('/teacher')}}">
                            <i class="fa fa-tachometer"></i>
                            <span class="link-title menu_hide">&nbsp;Dashboard
                                        <span class="tag tag-pill tag-success new_tag">New</span>
                                        </span>
                        </a>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-th-large"></i>
                            <span class="link-title menu_hide">&nbsp; Class Routine</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            {{--<li>--}}
                                {{--<a href="{{URL('/teacherView_class_routine/'. Auth::user()->emp_std_id)}}">--}}
                                    {{--<i class="fa fa-angle-right"></i>--}}
                                    {{--&nbsp;My Lectures--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            <li>
                                <a href="{{URL('/teacherView_class_routine/'.$employee->section_id)}}">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp;View Class Routine
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-th-large"></i>
                            <span class="link-title menu_hide">&nbsp; Exam Results</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{URL('/form_upload_result/'.$employee->section_id)}}">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Upload Results
                                </a>
                            </li>
                            <li>
                                <a href="{{URL('/view_result/'.$employee->section_id)}}">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; View Results
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-th-large"></i>
                            <span class="link-title menu_hide">&nbsp;Student Attendance</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{URL('/mark_attendance/'.$employee->section_id)}}">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Mark Attendance
                                </a>
                            </li>
                            <li>
                                <a href="{{URL('/view_attendance/'.$employee->section_id)}}">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; View Attendance
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown_menu">
                        <a href="javascript:;">
                            <i class="fa fa-th"></i>
                            <span class="link-title menu_hide">&nbsp; Layouts</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="boxed.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Boxed Layout
                                </a>
                            </li>
                            <li>
                                <a href="fixed-header-boxed.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Boxed &amp; Fixed Header
                                </a>
                            </li>
                            <li>
                                <a href="fixed-header-menu.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Fixed Header &amp; Menu
                                </a>
                            </li>
                            <li>
                                <a href="fixed-header.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Fixed Header
                                </a>
                            </li>
                            <li>
                                <a href="fixed-menu-boxed.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Boxed &amp; Fixed Menu
                                </a>
                            </li>
                            <li>
                                <a href="fixed-menu.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Fixed Menu
                                </a>
                            </li>
                            <li>
                                <a href="no-header.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; No Header
                                </a>
                            </li>
                            <li>
                                <a href="no-left-sidebar.html">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; No Left Sidebar
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{URL('')}}">
                            <i class="fa fa-tachometer"></i>
                            <span class="link-title menu_hide">&nbsp;Notisboard
                                        <span class="tag tag-pill tag-success new_tag">New</span>
                                        </span>
                        </a>
                    </li>
                    {{--<li>--}}
                        {{--<a href="{{URL('')}}">--}}
                            {{--<i class="fa fa-cog"></i>--}}
                            {{--<span class="link-title menu_hide">&nbsp;Settings--}}
                                        {{--</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="dropdown_menu">--}}
                        {{--<a href="javascript:;">--}}
                            {{--<i class="fa fa-th-large"></i>--}}
                            {{--<span class="link-title menu_hide">&nbsp; My Profile</span>--}}
                            {{--<span class="fa arrow menu_hide"></span>--}}
                        {{--</a>--}}
                        {{--<ul>--}}
                            {{--<li>--}}
                                {{--<a href="{{URL('/manage_profile')}}">--}}
                                    {{--<i class="fa fa-angle-right"></i>--}}
                                    {{--&nbsp; Manage Profile--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="{{URL('/manage_profile_gallery')}} ">--}}
                                    {{--<i class="fa fa-angle-right"></i>--}}
                                    {{--&nbsp; Manage Profile Gallery--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}

                </ul>
                <!-- /#menu -->
            </div>
        </div>
        <!-- /#left -->
        <div id="content" class="bg-container">

            @yield('content')

        </div>
        <div class="loading"></div>
        <!-- /#content -->
    </div>
    <!--/wrapper-->
    <div id="request_list">
        <div class="request_scrollable">
            <ul class="nav nav-tabs m-t-15">
                <li class="nav-item">
                    <a class="nav-link active text-xs-center" href="#settings" data-toggle="tab">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-xs-center" href="#favourites" data-toggle="tab">Favorites</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="settings">
                    <div id="settings_section">
                        <div class="layout_styles">
                            <div class="col-xs-12 m-t-35">
                                <h4>Layout settings</h4>
                            </div>
                            <form autocomplete="off">
                                <div class="col-xs-12">
                                    <div class="float-xs-left m-t-20">Fixed Header</div>
                                    <div class="float-xs-right m-t-15">
                                        <div id="setting_fixed_nav">
                                            <input class="make-switch" data-on-text="ON" data-off-text="OFF" type="checkbox"
                                                   data-size="small">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="float-xs-left m-t-20">Fixed menu</div>
                                    <div class="float-xs-right m-t-15">
                                        <div id="setting_fixed_menunav">
                                            <input class="make-switch" data-on-text="ON" data-off-text="OFF" name="radioBox" type="checkbox"
                                                   data-size="small">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="float-xs-left m-t-20">Folded menu</div>
                                    <div class="float-xs-right m-t-15">
                                        <div id="setting_folded_menu">
                                            <input class="make-switch" data-on-text="ON" data-off-text="OFF" name="radioBox" type="checkbox"
                                                   data-size="small" checked>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="float-xs-left m-t-20">No Breadcrumb</div>
                                    <div class="float-xs-right m-t-15">
                                        <div id="setting_breadcrumb">
                                            <input class="make-switch" data-on-text="ON" data-off-text="OFF" type="checkbox"
                                                   data-size="small">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xs-12 m-t-35">
                            <h4 class="setting_title">General Settings</h4>
                        </div>
                        <div class="data">
                            <div class="col-xs-2"><i class="fa fa-bell-o setting_ions text-info"></i></div>
                            <div class="col-xs-7">
                                <span class="chat_name">Notifications</span><br/>
                                Get new notifications
                            </div>
                            <div class="col-xs-2 checkbox float-xs-right">
                                <label class="text-info">
                                    <input type="checkbox" value="" checked>
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                </label>
                                <!--<input type="checkbox" class="js-switch sm_toggle1" checked/>-->
                            </div>

                        </div>
                        <div class="data">
                            <div class="col-xs-2"><i class="fa fa-envelope-o setting_ions text-danger"></i>
                            </div>
                            <div class="col-xs-7">
                                <span class="chat_name">Messages</span><br/>
                                Get new Messages
                            </div>
                            <div class="col-xs-2 checkbox float-xs-right">
                                <label class="text-danger">
                                    <input type="checkbox" value="" checked>
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                </label>
                                <!--<input type="checkbox" class="js-switch sm_toggle2" checked/>-->
                            </div>

                        </div>
                        <div class="data">
                            <div class="col-xs-2">
                                <i class="fa fa-exclamation-triangle setting_ions text-warning"></i>
                            </div>
                            <div class="col-xs-7">
                                <span class="chat_name">Warnings</span><br/>
                                Get new warnings
                            </div>
                            <div class="col-xs-2 checkbox float-xs-right">
                                <label class="text-warning">
                                    <input type="checkbox" value="" checked>
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                </label>
                                <!--<input type="checkbox" class="js-switch sm_toggle3" checked/>-->
                            </div>
                        </div>
                        <div class="data">
                            <div class="col-xs-2">
                                <i class="fa fa-calendar text-primary setting_ions"></i>
                            </div>
                            <div class="col-xs-7">
                                <span class="chat_name">Events</span><br/>
                                Show new Events
                            </div>
                            <div class="col-xs-2 checkbox float-xs-right">
                                <label class="text-primary">
                                    <input type="checkbox" value="">
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                </label>
                                <!--<input type="checkbox" class="js-switch sm_toggle4" checked/>-->
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="favourites">
                    <div id="requests">
                        <h4 class="setting_title">Favorites</h4>
                        <div class="data">
                            <div class="col-xs-2">
                                <img src="{{asset('/images/admin-images/images1.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                            <div class="col-xs-8 message-data"><span class="chat_name">Philip J. Webb</span><br/>
                                Available
                            </div>
                            <div class="col-lg-1">
                                <i class="fa fa-circle text-success"></i>
                            </div>
                        </div>
                        <div class="data">
                            <div class="col-xs-2">
                                <img src="{{asset('/images/admin-images/mailbox_imgs/8.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1">
                            </div>
                            <div class="col-xs-8 message-data">
                                <span class="chat_name">Nancy T. Strozier</span><br/>
                                Away
                            </div>
                            <div class="col-lg-1">
                                <i class="fa fa-circle text-warning"></i>
                            </div>
                        </div>
                        <div class="data">
                            <div class="col-xs-2">
                                <img src="{{asset('/images/admin-images/mailbox_imgs/3.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1">
                            </div>
                            <div class="col-xs-8 message-data">
                                <span class="chat_name">Robbinson</span><br/>
                                Offline
                            </div>
                            <div class="col-lg-1">
                                <i class="fa fa-circle"></i>
                            </div>
                        </div>
                        <h4 class="setting_title">Contacts</h4>
                        <!--<hr />-->
                        <div class="data">
                            <div class="col-xs-2">
                                <img src="{{asset('/images/admin-images/mailbox_imgs/7.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1">
                            </div>
                            <div class="col-xs-8 message-data">
                                <span class="chat_name">Chester Hardesty</span><br/>
                                Busy
                            </div>
                            <div class="col-lg-1">
                                <i class="fa fa-circle text-warning"></i>
                            </div>
                        </div>
                        <div class="data">
                            <div class="col-xs-2">
                                <img src="{{asset('/images/admin-images/mailbox_imgs/2.jpg')}}" class="message-img avatar rounded-circle"
                                     alt="avatar1"></div>
                            <div class="col-xs-8 message-data">
                                <span class="chat_name">Peter</span><br/>
                                Online
                            </div>
                            <div class="col-lg-1">
                                <i class="fa fa-circle text-warning"></i>
                            </div>
                        </div>
                        <div class="data">
                            <div class="col-xs-2">
                                <img src="{{asset('/images/admin-images/mailbox_imgs/6.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1">
                            </div>
                            <div class="col-xs-8 message-data">
                                <span class="chat_name">Devin Hartsell</span><br/>
                                Available
                            </div>
                            <div class="col-lg-1">
                                <i class="fa fa-circle text-success"></i>
                            </div>
                        </div>
                        <div class="data">
                            <div class="col-xs-2">
                                <img src="{{asset('/images/admin-images/mailbox_imgs/4.jpg')}}" class="message-img avatar rounded-circle"
                                     alt="avatar1"></div>
                            <div class="col-xs-8 message-data">
                                <span class="chat_name">Kimy Zorda</span><br/>
                                Available
                            </div>
                            <div class="col-lg-1">
                                <i class="fa fa-circle text-success"></i>
                            </div>
                        </div>
                        <div class="data">
                            <div class="col-xs-2">
                                <img src="{{asset('/images/admin-images/mailbox_imgs/5.jpg')}}" class="message-img avatar rounded-circle"
                                     alt="avatar1"></div>
                            <div class="col-xs-8 message-data">
                                <span class="chat_name">Jessica Bell</span><br/>
                                Offline
                            </div>
                            <div class="col-lg-1">
                                <i class="fa fa-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#content -->
    <div id="right">
        <div class="right_content">
            <div class="well-small dark m-t-15">
                <div class="row m-0">
                    <div class="col-lg-12 p-d-0">
                        <div class="skinmulti_btn" onclick="javascript:loadjscssfile('blue_black_skin.html','css')">
                            <div class="skin_blue skin_size b_t_r"></div>
                            <div class="skin_blue_border skin_shaddow skin_size b_b_r"></div>
                        </div>
                        <div class="skinmulti_btn" onclick="javascript:loadjscssfile('green_black_skin.html','css')">
                            <div class="skin_green skin_size b_t_r"></div>
                            <div class="skin_green_border skin_shaddow skin_size b_b_r"></div>
                        </div>
                        <div class="skinmulti_btn" onclick="javascript:loadjscssfile('purple_black_skin.html','css')">
                            <div class="skin_purple skin_size b_t_r"></div>
                            <div class="skin_purple_border skin_shaddow skin_size b_b_r"></div>
                        </div>
                        <div class="skinmulti_btn" onclick="javascript:loadjscssfile('orange_black_skin.html','css')">
                            <div class="skin_orange skin_size b_t_r"></div>
                            <div class="skin_orange_border skin_shaddow skin_size b_b_r"></div>
                        </div>
                        <div class="skinmulti_btn" onclick="javascript:loadjscssfile('red_black_skin.html','css')">
                            <div class="skin_red skin_size b_t_r"></div>
                            <div class="skin_red_border skin_shaddow skin_size b_b_r"></div>
                        </div>
                        <div class="skinmulti_btn" onclick="javascript:loadjscssfile('mint_black_skin.html','css')">
                            <div class="skin_mint skin_size b_t_r"></div>
                            <div class="skin_mint_border skin_shaddow skin_size b_b_r"></div>
                        </div>
                        <!--</div>-->
                        <div class="skin_btn skinsingle_btn skin_blue b_r height_40 skin_shaddow"
                             onclick="javascript:loadjscssfile('blue_skin.html','css')"></div>
                        <div class="skin_btn skinsingle_btn skin_green b_r height_40 skin_shaddow"
                             onclick="javascript:loadjscssfile('green_skin.html','css')"></div>
                        <div class="skin_btn skinsingle_btn skin_purple b_r height_40 skin_shaddow"
                             onclick="javascript:loadjscssfile('purple_skin.html','css')"></div>
                        <div class="skin_btn  skinsingle_btn skin_orange b_r height_40 skin_shaddow"
                             onclick="javascript:loadjscssfile('orange_skin.html','css')"></div>
                        <div class="skin_btn skinsingle_btn skin_red b_r height_40 skin_shaddow"
                             onclick="javascript:loadjscssfile('red_skin.html','css')"></div>
                        <div class="skin_btn skinsingle_btn skin_mint b_r height_40 skin_shaddow"
                             onclick="javascript:loadjscssfile('mint_skin.html','css')"></div>
                    </div>
                    <div class="col-lg-12 text-xs-center m-t-15">
                        <button class="btn btn-dark button-rounded"
                                onclick="javascript:loadjscssfile('black_skin.html','css')">Dark
                        </button>
                        <button class="btn btn-secondary button-rounded default_skin"
                                onclick="javascript:loadjscssfile('default_skin.html','css')">Default
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<!-- global scripts-->
{{--<script type="text/javascript" src="{{asset('/js/jquery.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('/js/tether.min.js')}}"></script>--}}
{{--<script src="{{asset('/js/myhome-js/plugins/jquery.validate.js')}}"></script>--}}
{{--<script src="{{asset('/js/myhome-js/plugins/jquery.validate.min.js')}}"></script>--}}
{{--<script src="{{asset('/js/myhome-js/plugins/additional-methods.js')}}"></script>--}}
{{--<script src="{{asset('/js/myhome-js/plugins/additional-methods.min.js')}}"></script>--}}

{{--<script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>--}}
<script type="text/javascript" src="{{asset('/js/components.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/custom.js')}}"></script>
<!-- plugin scripts -->
<script type="text/javascript" src="{{asset('/admin-vendor/sweetalert/js/sweetalert2.min.js')}}"></script>
<!-- end plugin scripts -->
<!--Page level scripts-->
{{--<script type="text/javascript" src="{{asset('/js/admin-js/pages/sweet_alerts.js')}}"></script>--}}
<!-- end of page level scripts-->
<!-- global scripts end-->

{{--<script>--}}
{{--//            $(document).ready(function() {--}}
{{--function ajaxLoad(filename, content) {--}}
{{--content = typeof content !== 'undefined' ? content : 'content';--}}

{{--//                console.log(filename);--}}
{{--//                console.log(content);--}}
{{--$('.loading').show();--}}
{{--$.ajax({--}}
{{--type: "GET",--}}
{{--url: filename,--}}
{{--contentType: false,--}}
{{--success: function (data) {--}}
{{--$("#" + content).html(data);--}}
{{--$('.loading').hide();--}}
{{--},--}}
{{--error: function (xhr, status, error) {--}}
{{--alert(xhr.responseText);--}}
{{--}--}}
{{--});--}}
{{--}--}}
{{--//            });--}}
{{--</script>--}}
{{--<script type="text/javascript" src="{{elixir('/js/admin-js/admin.js')}}"></script>--}}
@stack('scripts')
{{--<script type="text/javascript" src="{{asset('/js/admin-js/processing.js')}}">--}}
{{--</script>--}}
</html>

<!-- /#wrap -->

