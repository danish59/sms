<?php
/**
 * Created by PhpStorm.
 * User: Danish Ch
 * Date: 2/8/2018
 * Time: 6:46 PM
 */?>
@extends('layouts.teacher_dashboard_layout')
<!-- Push a style dynamically from a view -->
@push('styles')
<!--Plugin styles-->
<link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/select2.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/pages/dataTables.bootstrap.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/modal/css/component.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('/admin-vendor/animate/css/animate.min.css')}}" />
<!----form elements start--->
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/inputlimiter/css/jquery.inputlimiter.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/chosen/css/chosen.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/jquery-tagsinput/css/jquery.tagsinput.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/daterangepicker/css/daterangepicker.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/datepicker/css/bootstrap-datepicker.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/bootstrap-switch/css/bootstrap-switch.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/jasny-bootstrap/css/jasny-bootstrap.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/fileinput/css/fileinput.min.css')}}"/>
<!----form elements end--->
<!--validation--->
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/jquery-validation-engine/css/validationEngine.jquery.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/bootstrapvalidator/css/bootstrapValidator.min.css')}}" />
<!-- end of plugin styles -->
<!--Page level styles-->
<link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/pages/tables.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/pages/portlet.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/pages/advanced_components.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/pages/form_elements.css')}}"/>
<!----validation--->
<link type="text/css" rel="stylesheet" href="{{asset('css/admin-css/pages/form_validations.css')}}" />



@endpush

@section('content')
    <header class="head">
        <div class="main-bar row">
            <div class="col-lg-6 col-sm-4">
                <h4 class="nav_top_align">
                    <i class="fa fa-user"></i>
                    View Class Routine
                </h4>
            </div>
            <div class="col-lg-6 col-sm-8 col-xs-12">
                <ol class="breadcrumb float-xs-right  nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="{{url('/home')}}">
                            <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{URL('/class_routine')}}"> Class Routine</a>
                    </li>
                    <li class="active breadcrumb-item">View Class Routine</li>
                </ol>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                <div class="card-header bg-white">
                    CLASS ROUTINE OF
                    <?php $i = 1;?>
                    @foreach($view_class_routine as $class_routine)
                        @if($i == 1)
                            {{$class_routine->class_name."-".$class_routine->section_name}}
                        @endif
                        <?php $i++?>
                    @endforeach
                </div>
                <div class="card-block m-t-35" id="user_body">
                    <div class="table-toolbar">
                        <div class="btn-group">
                            {{--<button class="btn btn-raised btn-info adv_cust_mod_btn lightspeedin"--}}
                            {{--data-toggle="modal" data-target="#modal-lightspeedin"><i class="fa fa-plus"></i> Add New Class--}}
                            {{--</button>--}}
                            {{--<a href="add_user.html" id="editable_table_new" class=" btn btn-default">--}}
                            {{--Add User  <i class="fa fa-plus"></i>--}}
                            {{--</a>--}}
                        </div>
                        <div class="btn-group float-xs-right users_grid_tools">
                            <div class="tools"></div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <table class="table  table-striped table-bordered table-hover no-footer dataTable" id="editable_table" role="grid">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Day</th>
                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">No#</th>
                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">Subject</th>
                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Time Preiod</th>
                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Teacher</th>
                                </tr>
                                </thead>
                                <tbody id="editable">
                                <?php $i = 1;?>
                                @foreach($view_class_routine as $class_routine)
                                    @if($class_routine->day == "Monday")
                                        <tr role="row" class="even">
                                            <td class="sorting_1">{{$class_routine->day}} </td>
                                            <td class="sorting_1">{{$i}}</td>
                                            <td>{{$class_routine->subject_name}}</td>
                                            <td>{{$class_routine->time}}</td>
                                            <td>{{$class_routine->emp_f_name.' '.$class_routine->emp_m_name.' '.$class_routine->emp_l_name}}</td>
                                        </tr>
                                    @endif
                                    @if($class_routine->day == "Tuesday")
                                        <tr role="row" class="even">
                                            <td class="sorting_1">{{$class_routine->day}} </td>
                                            <td class="sorting_1">{{$i}}</td>
                                            <td>{{$class_routine->subject_name}}</td>
                                            <td>{{$class_routine->time}}</td>
                                            <td>{{$class_routine->emp_f_name.' '.$class_routine->emp_m_name.' '.$class_routine->emp_l_name}}</td>
                                        </tr>
                                    @endif
                                    @if($class_routine->day == "Wednesday")
                                        <tr role="row" class="even">
                                            <td class="sorting_1">{{$class_routine->day}} </td>
                                            <td class="sorting_1">{{$i}}</td>
                                            <td>{{$class_routine->subject_name}}</td>
                                            <td>{{$class_routine->time}}</td>
                                            <td>{{$class_routine->emp_f_name.' '.$class_routine->emp_m_name.' '.$class_routine->emp_l_name}}</td>
                                        </tr>
                                    @endif
                                    @if($class_routine->day == "Thursday")
                                        <tr role="row" class="even">
                                            <td class="sorting_1">{{$class_routine->day}} </td>
                                            <td class="sorting_1">{{$i}}</td>
                                            <td>{{$class_routine->subject_name}}</td>
                                            <td>{{$class_routine->time}}</td>
                                            <td>{{$class_routine->emp_f_name.' '.$class_routine->emp_m_name.' '.$class_routine->emp_l_name}}</td>
                                        </tr>
                                    @endif
                                    @if($class_routine->day == "Friday")
                                        <tr role="row" class="even">
                                            <td class="sorting_1">{{$class_routine->day}} </td>
                                            <td class="sorting_1">{{$i}}</td>
                                            <td>{{$class_routine->subject_name}}</td>
                                            <td>{{$class_routine->time}}</td>
                                            <td>{{$class_routine->emp_f_name.' '.$class_routine->emp_m_name.' '.$class_routine->emp_l_name}}</td>
                                        </tr>
                                    @endif
                                    @if($class_routine->day == "Saturday")
                                        <tr role="row" class="even">
                                            <td class="sorting_1">{{$class_routine->day}} </td>
                                            <td class="sorting_1">{{$i}}</td>
                                            <td>{{$class_routine->subject_name}}</td>
                                            <td>{{$class_routine->time}}</td>
                                            <td>{{$class_routine->emp_f_name.' '.$class_routine->emp_m_name.' '.$class_routine->emp_l_name}}</td>
                                        </tr>
                                    @endif
                                    @if($class_routine->day == "Sunday")
                                        <tr role="row" class="even">
                                            <td class="sorting_1">{{$class_routine->day}} </td>
                                            <td class="sorting_1">{{$i}}</td>
                                            <td>{{$class_routine->subject_name}}</td>
                                            <td>{{$class_routine->time}}</td>
                                            <td>{{$class_routine->emp_f_name.' '.$class_routine->emp_m_name.' '.$class_routine->emp_l_name}}</td>
                                        </tr>
                                    @endif
                                    <?php $i++; ?>
                                @endforeach
                                </tbody>
                            </table>

                            {{--@include('institute_admin.table_file')--}}
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
    {{--<div class="outer">--}}
    {{--<div class="inner bg-container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-lg-12">--}}
    {{--<div class="card">--}}
    {{--<div class="card-block">--}}
    {{--<div class="row">--}}
    {{--<div class="col-lg-12">--}}
    {{--<h5 class="m-t-35">Basic Modals</h5>--}}
    {{--<span class="adv_com_fade_bottom">Simple modal with title and footer</span>--}}
    {{--<div>--}}
    {{--<button class="btn btn-raised btn-secondary adv_cust_mod_btn"--}}
    {{--data-toggle="modal" data-target="#normal">Basic modal--}}
    {{--</button>--}}
    {{--<button class="btn btn-raised btn-secondary adv_cust_mod_btn"--}}
    {{--data-toggle="modal" data-target="#large">Large modal--}}
    {{--</button>--}}
    {{--<button class="btn btn-raised btn-secondary adv_cust_mod_btn"--}}
    {{--data-toggle="modal" data-target="#small">Small modal--}}
    {{--</button>--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col-lg-12">--}}
    {{--<h5 class="m-t-35">--}}
    {{--Color Variation--}}
    {{--</h5>--}}
    {{--<span>--}}
    {{--Like in a normal page, you can add class to make your modal responsive.--}}
    {{--</span>--}}
    {{--<div>--}}
    {{--<button class="btn btn-raised btn-secondary md-trigger adv_cust_mod_btn"--}}
    {{--data-toggle="modal" data-target="#modal-19">Default--}}
    {{--</button>--}}
    {{--<button class="btn btn-raised btn-primary md-trigger adv_cust_mod_btn"--}}
    {{--data-toggle="modal" data-target="#modal-16">Primary--}}
    {{--</button>--}}
    {{--<button class="btn btn-raised btn-info md-trigger adv_cust_mod_btn"--}}
    {{--data-toggle="modal" data-target="#modal-17">Info--}}
    {{--</button>--}}
    {{--<button class="btn btn-raised btn-success md-trigger adv_cust_mod_btn"--}}
    {{--data-toggle="modal" data-target="#modal-18">Success--}}
    {{--</button>--}}
    {{--<button class="btn btn-raised btn-warning md-trigger adv_cust_mod_btn"--}}
    {{--data-toggle="modal" data-target="#modal-20">Warning--}}
    {{--</button>--}}

    {{--<button class="btn btn-raised btn-danger md-trigger adv_cust_mod_btn"--}}
    {{--data-toggle="modal" data-target="#modal-21">Danger--}}
    {{--</button>--}}
    {{--<button class="btn btn-raised btn-primary adv_cust_mod_btn"--}}
    {{--data-toggle="modal" data-target="#just_me">Just me--}}
    {{--</button>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col-lg-6">--}}
    {{--<div class="card m-t-35">--}}
    {{--<div class="card-block">--}}
    {{--<div class="row">--}}
    {{--<div class="col-lg-12">--}}
    {{--<h5 class="m-t-35">Fade And Slide Effects</h5>--}}
    {{--<span class="adv_com_fade_bottom">Simple fade modal with title and footer</span>--}}
    {{--<div>--}}
    {{--<button class="btn btn-raised btn-primary adv_cust_mod_btn fadein"--}}
    {{--data-toggle="modal" data-target="#modal-1">Fade In--}}
    {{--</button>--}}
    {{--<button class="btn btn-raised btn-primary adv_cust_mod_btn fadeindown"--}}
    {{--data-toggle="modal" data-target="#modal-fadeindown">Fade In Down--}}
    {{--</button>--}}
    {{--<button class="btn btn-raised btn-primary adv_cust_mod_btn slideinleft"--}}
    {{--data-toggle="modal" data-target="#modal-slideinleft">Slide In Left--}}
    {{--</button>--}}
    {{--<button class="btn btn-raised btn-primary adv_cust_mod_btn slideinright"--}}
    {{--data-toggle="modal" data-target="#modal-slideinright">Slide In Right--}}
    {{--</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col-lg-12">--}}
    {{--<h5 class="m-t-35">Rotate Effects</h5>--}}
    {{--<span class="adv_com_fade_bottom">Simple rotate modal with title and footer</span>--}}
    {{--<div>--}}
    {{--<button class="btn btn-raised btn-success adv_cust_mod_btn rotatein"--}}
    {{--data-toggle="modal" data-target="#modal-rotatein">Rotate In--}}
    {{--</button>--}}
    {{--<button class="btn btn-raised btn-success adv_cust_mod_btn rotatedownright"--}}
    {{--data-toggle="modal" data-target="#modal-rotatedownright">Rotate Down Right--}}
    {{--</button>--}}
    {{--<button class="btn btn-raised btn-success adv_cust_mod_btn flipiny"--}}
    {{--data-toggle="modal" data-target="#modal-flipiny">Flip In Y--}}
    {{--</button>--}}
    {{--<button class="btn btn-raised btn-success adv_cust_mod_btn zoomin"--}}
    {{--data-toggle="modal" data-target="#modal-zoomin">Zoom In--}}
    {{--</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-lg-6">--}}
    {{--<div class="card m-t-35">--}}
    {{--<div class="card-block">--}}
    {{--<div class="row">--}}
    {{--<div class="col-lg-12">--}}
    {{--<h5 class="m-t-35">Transition Effects</h5>--}}
    {{--<span>--}}
    {{--Simple transition modal with title and footer--}}
    {{--</span>--}}
    {{--<div>--}}
    {{--<button class="btn btn-raised btn-info adv_cust_mod_btn swing"--}}
    {{--data-toggle="modal" data-target="#modal-swing">Swing--}}
    {{--</button>--}}
    {{--<button class="btn btn-raised btn-info adv_cust_mod_btn tada"--}}
    {{--data-toggle="modal" data-target="#modal-tada">Tada--}}
    {{--</button>--}}
    {{--<button class="btn btn-raised btn-info adv_cust_mod_btn shake"--}}
    {{--data-toggle="modal" data-target="#modal-shake">Shake--}}
    {{--</button>--}}
    {{--<button class="btn btn-raised btn-info adv_cust_mod_btn lightspeedin"--}}
    {{--data-toggle="modal" data-target="#modal-lightspeedin">Light Speed In--}}
    {{--</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col-lg-12">--}}
    {{--<h5 class="m-t-35">--}}
    {{--Bouncing Effects--}}
    {{--</h5>--}}
    {{--<span class="adv_com_fade_bottom">--}}
    {{--Simple bounce modal with title and footer--}}
    {{--</span>--}}
    {{--<div>--}}
    {{--<button class="btn btn-raised btn-warning adv_cust_mod_btn bounceinright"--}}
    {{--data-toggle="modal" data-target="#modal-2">Bounce In Right--}}
    {{--</button>--}}
    {{--<button class="btn btn-raised btn-warning adv_cust_mod_btn bounceindown"--}}
    {{--data-toggle="modal" data-target="#modal-3">Bounce In Down--}}
    {{--</button>--}}
    {{--<button class="btn btn-raised btn-warning adv_cust_mod_btn bounceinup"--}}
    {{--data-toggle="modal" data-target="#modal-bounceinup">Bounce In Up--}}
    {{--</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col-lg-12">--}}
    {{--<div class="card m-t-35">--}}
    {{--<div class="card-block">--}}
    {{--<div class="row">--}}
    {{--<div class="col-lg-12">--}}
    {{--<h5 class="m-t-35">--}}
    {{--Extended Modals--}}
    {{--</h5>--}}
    {{--<span>--}}
    {{--Different type of modals with title and footer.--}}
    {{--</span>--}}
    {{--<div>--}}
    {{--<a class="btn btn-success btn-md adv_cust_mod_btn" data-toggle="modal"--}}
    {{--data-href="#responsive" href="#responsive">Reponsive</a>--}}
    {{--<a class="btn btn-primary btn-md adv_cust_mod_btn" data-toggle="modal"--}}
    {{--data-href="#stack1" href="#stack1">Stackable</a>--}}
    {{--<!--<a class="btn btn-info btn-md adv_cust_mod_btn" data-toggle="modal"-->--}}
    {{--<!--data-href="#custom" href="#custom">Custom Width</a>-->--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col-lg-12">--}}
    {{--<h5 class="m-t-35">--}}
    {{--Fullwidth Modal With Effects--}}
    {{--</h5>--}}
    {{--<span class="adv_com_fade_bottom">--}}
    {{--For fullwidth modal, add the class--}}
    {{--<code>modal-lg</code> .--}}
    {{--</span>--}}
    {{--<div>--}}
    {{--<button class="btn btn-raised btn-warning adv_cust_mod_btn"--}}
    {{--data-toggle="modal" data-target="#modal-4">Pulldown--}}
    {{--</button>--}}
    {{--<button class="btn btn-raised btn-warning adv_cust_mod_btn"--}}
    {{--data-toggle="modal" data-target="#modal-5">Floating--}}
    {{--</button>--}}
    {{--<button class="btn btn-raised btn-warning adv_cust_mod_btn"--}}
    {{--data-toggle="modal" data-target="#modal-6">Stretch Left--}}
    {{--</button>--}}
    {{--<button class="btn btn-raised btn-warning adv_cust_mod_btn"--}}
    {{--data-toggle="modal" data-target="#modal-7">Pull Up--}}
    {{--</button>--}}
    {{--<button class="btn btn-raised btn-warning adv_cust_mod_btn"--}}
    {{--data-toggle="modal" data-target="#modal-11">Stretch Right--}}
    {{--</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col-lg-12">--}}
    {{--<h5 class="m-t-35">3D Effects</h5>--}}
    {{--<span>--}}
    {{--Animated modals with title and footer--}}
    {{--</span>--}}
    {{--<div>--}}
    {{--<button class="btn btn-raised btn-info adv_cust_mod_btn"--}}
    {{--data-toggle="modal" data-target="#modal-8">3D Expand Open--}}
    {{--</button>--}}
    {{--<button class="btn btn-raised btn-info adv_cust_mod_btn"--}}
    {{--data-toggle="modal" data-target="#modal-9">3D Big Entrance--}}
    {{--</button>--}}
    {{--<button class="btn btn-raised btn-info adv_cust_mod_btn"--}}
    {{--data-toggle="modal" data-target="#modal-10">3D Expand Up--}}
    {{--</button>--}}
    {{--<button class="btn btn-raised btn-info adv_cust_mod_btn"--}}
    {{--data-toggle="modal" data-target="#modal-14">3D Bounce--}}
    {{--</button>--}}
    {{--<button class="btn btn-raised btn-info adv_cust_mod_btn"--}}
    {{--data-toggle="modal" data-target="#modal-15">3D Pulse--}}
    {{--</button>--}}
    {{--<button class="btn btn-raised btn-info adv_cust_mod_btn"--}}
    {{--data-toggle="modal" data-target="#modal-13">3D Tossing--}}
    {{--</button>--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<!-- end of tags input-->--}}
    {{--<!-- advanced modal starts-->--}}

    {{--<div class="modal fade" id="normal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"--}}
    {{--aria-hidden="true">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header">--}}
    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
    {{--<span aria-hidden="true">×</span>--}}
    {{--</button>--}}
    {{--<h4 class="modal-title" id="modalLabel">Basic Modal</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn  btn-secondary" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal fade" id="large" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge"--}}
    {{--aria-hidden="true">--}}
    {{--<div class="modal-dialog modal-lg">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header">--}}
    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
    {{--<span aria-hidden="true">×</span>--}}
    {{--</button>--}}
    {{--<h4 class="modal-title" id="modalLabelLarge">Large Modal</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn  btn-secondary" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal fade" id="small" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall"--}}
    {{--aria-hidden="true">--}}
    {{--<div class="modal-dialog modal-sm">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header">--}}
    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
    {{--<span aria-hidden="true">×</span>--}}
    {{--</button>--}}
    {{--<h4 class="modal-title" id="modalLabelSmall">Small Modal</h4>--}}
    {{--</div>--}}

    {{--<div class="modal-body">--}}
    {{--This is a small modal window. <br>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important so don't--}}
    {{--forget to read what they say.--}}
    {{--<br>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn  btn-secondary" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!--moddal dialog -->--}}
    {{--<div class="modal fade modal-fade-in-scale-up jest_me" tabindex="-1" id="just_me" role="dialog"--}}
    {{--aria-labelledby="modalLabeljust" aria-hidden="true">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-primary">--}}
    {{--<h4 class="modal-title text-white" id="modalLabeljust">Just me</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn  btn-primary" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="modal" tabindex="-1" id="modal-1" role="dialog"--}}
    {{--aria-labelledby="modalLabelfade" aria-hidden="true">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-primary">--}}
    {{--<h4 class="modal-title text-white" id="modalLabelfade">Fade In</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn  btn-primary" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal" id="modal-2" role="dialog" aria-labelledby="modalLabelbounce">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-warning">--}}
    {{--<h4 class="modal-title text-white" id="modalLabelbounce">Bounce In Right</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn  btn-warning" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal" id="modal-3" role="dialog" aria-labelledby="modalLabelbouncedown">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-warning">--}}
    {{--<h4 class="modal-title text-white" id="modalLabelbouncedown">Bounce In Down</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn  btn-warning" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal fade pullDown" id="modal-4" role="dialog" aria-labelledby="modalLabelnews">--}}
    {{--<div class="modal-dialog modal-lg" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-warning">--}}
    {{--<h4 class="modal-title text-white" id="modalLabelnews">Pulldown</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn  btn-warning" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal fade floating" id="modal-5" role="dialog" aria-labelledby="modalLabelfall">--}}
    {{--<div class="modal-dialog modal-lg" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-warning">--}}
    {{--<h4 class="modal-title text-white" id="modalLabelfall">Floating</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn  btn-warning" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal fade stretchLeft" id="modal-6" role="dialog" aria-labelledby="modalLabelsidefall1">--}}
    {{--<div class="modal-dialog modal-lg" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-warning">--}}
    {{--<h4 class="modal-title text-white" id="modalLabelsidefall1">Stretch Left</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn  btn-warning" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal fade pullUp" id="modal-7" role="dialog" aria-labelledby="modalLabelsticky">--}}
    {{--<div class="modal-dialog modal-lg" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-warning">--}}
    {{--<h4 class="modal-title text-white" id="modalLabelsticky">Pull Up</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn  btn-warning" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal fade expandOpen" id="modal-8" role="dialog" aria-labelledby="my3dlabel">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-info">--}}
    {{--<h4 class="modal-title text-white" id="my3dlabel">3D Expand Open</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button type="button" class="btn btn-info" data-dismiss="modal">Close Me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal fade bigEntrance" id="modal-9" role="dialog" aria-labelledby="Modallabel3dflip">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content ">--}}
    {{--<div class="modal-header bg-info ">--}}
    {{--<h4 class="modal-title text-white" id="Modallabel3dflip">3D Big Entrance </h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button type="button" class="btn btn-info" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal fade slideExpandUp" id="modal-10" role="dialog" aria-labelledby="Modallabel3dsign">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content ">--}}
    {{--<div class="modal-header bg-info ">--}}
    {{--<h4 class="modal-title text-white" id="Modallabel3dsign">3D Expand Up</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn btn-info" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal fade stretchRight" id="modal-11" role="dialog" aria-labelledby="modalLabelsidefall2">--}}
    {{--<div class="modal-dialog modal-lg" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-warning">--}}
    {{--<h4 class="modal-title text-white" id="modalLabelsidefall2">Stretch Right</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn  btn-warning" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="md-modal md-effect-12" id="modal-12">--}}
    {{--<div class="md-content">--}}
    {{--<h3>Modal Dialog</h3>--}}
    {{--<div class="modal-red">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important so--}}
    {{--don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just look--}}
    {{--at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--<button class="btn btn-modal btn-secondary md-close">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal fade tossing" id="modal-13" role="dialog" aria-labelledby="Modallabel3dslit">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content ">--}}
    {{--<div class="modal-header bg-info ">--}}
    {{--<h4 class="modal-title text-white" id="Modallabel3dslit">3D tossing</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn  btn-info" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal fade bounce" id="modal-14" role="dialog" aria-labelledby="Modallabel3drotate">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content ">--}}
    {{--<div class="modal-header bg-info ">--}}
    {{--<h4 class="modal-title text-white" id="Modallabel3drotate">3D Bounce</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn btn-info" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal fade pulse" id="modal-15" role="dialog" aria-labelledby="Modallabel3drotateinleft">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content ">--}}
    {{--<div class="modal-header bg-info ">--}}
    {{--<h4 class="modal-title text-white" id="Modallabel3drotateinleft">3D Pulse</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn btn-info " data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal fade" id="modal-16" role="dialog" aria-labelledby="modalLabelprimary">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-primary">--}}
    {{--<h4 class="modal-title text-white" id="modalLabelprimary">Primary Modal</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn  btn-primary" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal fade" id="modal-17" role="dialog" aria-labelledby="modalLabelinfo">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-info">--}}
    {{--<h4 class="modal-title text-white" id="modalLabelinfo">Info Modal</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn  btn-info" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal fade" id="modal-18" role="dialog" aria-labelledby="modalLabelsuccess">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-success">--}}
    {{--<h4 class="modal-title text-white" id="modalLabelsuccess">Success Modal</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn  btn-success" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal fade" id="modal-19" role="dialog" aria-labelledby="modalLabeldefault">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header">--}}
    {{--<h4 class="modal-title" id="modalLabeldefault">Default Modal</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn  btn-secondary" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal fade" id="modal-20" role="dialog" aria-labelledby="modalLabelwarn">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-warning">--}}
    {{--<h4 class="modal-title text-white" id="modalLabelwarn">Warning Modal</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn  btn-warning" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal fade" id="modal-21" role="dialog" aria-labelledby="modalLabeldanger">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-danger">--}}
    {{--<h4 class="modal-title text-white" id="modalLabeldanger">Danger Modal</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn  btn-danger" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!--- end modals-->--}}
    {{--</div>--}}
    {{--<!--- responsive model -->--}}
    {{--<div class="modal fade in display_none" id="responsive" tabindex="-1" role="dialog" aria-hidden="false">--}}
    {{--<div class="modal-dialog modal-lg">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-success">--}}
    {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>--}}
    {{--<h4 class="modal-title text-white">Responsive</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-6">--}}
    {{--<h4>Some More data</h4>--}}
    {{--<p>--}}
    {{--<input id="name" name="name" type="text" placeholder="Your name"--}}
    {{--class="form-control"></p>--}}
    {{--<p>--}}
    {{--<input id="name1" name="name" type="text" placeholder="Your name"--}}
    {{--class="form-control"></p>--}}
    {{--<p>--}}
    {{--<input id="name2" name="name" type="text" placeholder="Your name"--}}
    {{--class="form-control"></p>--}}
    {{--<p>--}}
    {{--<input id="name3" name="name" type="text" placeholder="Your name"--}}
    {{--class="form-control"></p>--}}
    {{--<p>--}}
    {{--<input id="name4" name="name" type="text" placeholder="Your name"--}}
    {{--class="form-control"></p>--}}
    {{--<p>--}}
    {{--<input id="name5" name="name" type="text" placeholder="Your name"--}}
    {{--class="form-control"></p>--}}
    {{--</div>--}}
    {{--<div class="col-md-6">--}}
    {{--<h4>Some More data</h4>--}}
    {{--<p>--}}
    {{--<input id="name6" name="name" type="text" placeholder="Your name"--}}
    {{--class="form-control"></p>--}}
    {{--<p>--}}
    {{--<input id="name7" name="name" type="text" placeholder="Your name"--}}
    {{--class="form-control"></p>--}}
    {{--<p>--}}
    {{--<input id="name8" name="name" type="text" placeholder="Your name"--}}
    {{--class="form-control"></p>--}}
    {{--<p>--}}
    {{--<input id="name9" name="name" type="text" placeholder="Your name"--}}
    {{--class="form-control"></p>--}}
    {{--<p>--}}
    {{--<input id="name10" name="name" type="text" placeholder="Your name"--}}
    {{--class="form-control"></p>--}}
    {{--<p>--}}
    {{--<input id="name41" name="name" type="text" placeholder="Your name"--}}
    {{--class="form-control"></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>--}}
    {{--<button type="button" class="btn btn-success">Save changes</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!-- END modal-->--}}
    {{--<!--- stack1 model -->--}}
    {{--<div class="modal fade bs-example-modal-sm in display_none" id="stack1" tabindex="-1" role="dialog"--}}
    {{--aria-hidden="false">--}}
    {{--<div class="modal-dialog modal-lg">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-primary">--}}
    {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>--}}
    {{--<h4 class="modal-title text-white">Stack One</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>One fine body…</p>--}}
    {{--<p>One fine body…</p>--}}
    {{--<p>One fine body…</p>--}}
    {{--<p>--}}
    {{--Name:--}}
    {{--<input id="name21" type="text" name="name" class="form-control"/>--}}
    {{--</p>--}}
    {{--<p>--}}
    {{--Password:--}}
    {{--<input id="name22" type="password" name="password" class="form-control">--}}
    {{--</p>--}}
    {{--<a class="btn btn-secondary" data-toggle="modal" href="#stack2">Launch modal</a>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>--}}
    {{--<button type="button" class="btn btn-primary">Ok</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!-- stack2 modal-->--}}
    {{--<div class="modal fade bs-example-modal-md in display_none" id="stack2" tabindex="-1" role="dialog"--}}
    {{--aria-hidden="false">--}}
    {{--<div class="modal-dialog modal-md">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-primary">--}}
    {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>--}}
    {{--<h4 class="modal-title text-white">Stack two</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>One fine body…</p>--}}
    {{--<p>One fine body…</p>--}}
    {{--<p>--}}
    {{--Name:--}}
    {{--<input id="name11" name="name" type="text" class="form-control"></p>--}}
    {{--<p>--}}
    {{--Password:--}}
    {{--<input id="name12" name="name" type="password" class="form-control"></p>--}}
    {{--<a class="btn btn-secondary" data-toggle="modal" href="#stack3">Launch modal</a>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>--}}
    {{--<button type="button" class="btn btn-primary">Ok</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!-- END modal-->--}}
    {{--<!-- stack3 modal-->--}}
    {{--<div class="modal fade in display_none" id="stack3" tabindex="-1" role="dialog" aria-hidden="false">--}}
    {{--<div class="modal-dialog modal-sm">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-primary">--}}
    {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>--}}
    {{--<h4 class="modal-title text-white">Stack three</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>One fine body…</p>--}}
    {{--<p>--}}
    {{--Name:--}}
    {{--<input id="name13" name="name" type="text" class="form-control"></p>--}}
    {{--<p>--}}
    {{--Password:--}}
    {{--<input id="name14" name="name" type="password" class="form-control"></p>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>--}}
    {{--<button type="button" class="btn btn-primary">Ok</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal" tabindex="-1" id="modal-rotatein" role="dialog"--}}
    {{--aria-labelledby="modalLabelrotate" aria-hidden="true">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-success">--}}
    {{--<h4 class="modal-title text-white" id="modalLabelrotate">Rotate In</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn btn-success" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal" tabindex="-1" id="modal-rotatedownright" role="dialog"--}}
    {{--aria-labelledby="modalLabelrotate1" aria-hidden="true">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-success">--}}
    {{--<h4 class="modal-title text-white" id="modalLabelrotate1">Rotate Down Right</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn  btn-success" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal" tabindex="-1" id="modal-flipiny" role="dialog"--}}
    {{--aria-labelledby="modalLabelflip" aria-hidden="true">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-success">--}}
    {{--<h4 class="modal-title text-white" id="modalLabelflip">Flip In Y</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn  btn-success" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}






    <div class="modal" tabindex="-1" id="modal-zoomin" role="dialog"
         aria-labelledby="modalLabelzoom" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h4 class="modal-title text-white" id="modalLabelzoom">Update Class Routine</h4>
                </div>
                <div class="modal-body print-clsss">
                    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

                </div>
                <div class="modal-footer">
                    <button class="btn  btn-success" data-dismiss="modal" onclick="model_dismiss()">Close me!</button>
                </div>
            </div>
        </div>
    </div>







    {{--<div class="modal" tabindex="-1" id="modal-swing" role="dialog"--}}
    {{--aria-labelledby="modalLabelswing" aria-hidden="true">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-info">--}}
    {{--<h4 class="modal-title text-white" id="modalLabelswing">Swing</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn btn-info" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal" tabindex="-1" id="modal-tada" role="dialog"--}}
    {{--aria-labelledby="modalLabeltada" aria-hidden="true">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-info">--}}
    {{--<h4 class="modal-title text-white" id="modalLabeltada">Tada</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn btn-info" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal" tabindex="-1" id="modal-shake" role="dialog"--}}
    {{--aria-labelledby="modalLabelshake" aria-hidden="true">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-info">--}}
    {{--<h4 class="modal-title text-white" id="modalLabelshake">Shake</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn btn-info" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal" tabindex="-1" id="modal-lightspeedin" role="dialog"--}}
    {{--aria-labelledby="modalLabellightspeedin" aria-hidden="true">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-info">--}}
    {{--<h4 class="modal-title text-white" id="modalLabellightspeedin">Light Speed In</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn btn-info" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal" tabindex="-1" id="modal-slideinleft" role="dialog"--}}
    {{--aria-labelledby="modalLabelslide" aria-hidden="true">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-primary">--}}
    {{--<h4 class="modal-title text-white" id="modalLabelslide">Slide In Left</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn btn-primary" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal" tabindex="-1" id="modal-slideinright" role="dialog"--}}
    {{--aria-labelledby="modalLabelslide1" aria-hidden="true">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-primary">--}}
    {{--<h4 class="modal-title text-white" id="modalLabelslide1">Slide In Right</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn btn-primary" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal" tabindex="-1" id="modal-fadeindown" role="dialog"--}}
    {{--aria-labelledby="modalLabelfade3" aria-hidden="true">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-primary">--}}
    {{--<h4 class="modal-title text-white" id="modalLabelfade3">Fade In Down</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn btn-primary" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal" tabindex="-1" id="modal-bounceinup" role="dialog"--}}
    {{--aria-labelledby="modalLabelbounceup" aria-hidden="true">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-warning">--}}
    {{--<h4 class="modal-title text-white" id="modalLabelbounceup">Bounce In Up</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p>--}}
    {{--This is a modal window. You can do the following things with it:--}}
    {{--</p>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>Read:</strong> modal windows will probably tell you something important--}}
    {{--so don't forget to read what they say.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Look:</strong> a modal window enjoys a certain kind of attention; just--}}
    {{--look at it and appreciate its presence.--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>Close:</strong> click on the button below to close the modal.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button class="btn btn-warning" data-dismiss="modal">Close me!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!-- ajax-modal modal-->--}}
    {{--<!-- end of advanced modals-->--}}
    {{--<!-- /.inner -->--}}
    {{--</div>--}}

    <!-- Modal -->
    {{--<div class="modal" tabindex="-1" id="modal-lightspeedin" role="dialog"--}}
    {{--aria-labelledby="modalLabellightspeedin" aria-hidden="true">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header bg-info">--}}
    {{--<h4 class="modal-title text-white" id="modalLabellightspeedin">Add New Class</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--{!! Form::open(array('class'=>'ajax','id'=>'add_class','url'=>'/add_class','enctype'=>'multipart/form-data')) !!}--}}
    {{--<!---row 1 start---->--}}
    {{--<!-- CSRF Token -->--}}
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}
    {{--<div class="alert alert-danger print-error-msg" style="display:none">--}}
    {{--<ul></ul>--}}
    {{--</div>--}}
    {{--<div class="form-group row">--}}
    {{--<div class="col-xl-3 text-xl-right">--}}
    {{--{!! Form::label('class_name', 'Class Name: ',['class'=>'form-control-label']) !!}--}}
    {{--</div>--}}
    {{--<div class="col-xl-5">--}}
    {{--{!! Form:: text('class_name',null,['placeholder'=>'enter new class name','class'=>'form-control']) !!}--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="form-actions form-group row">--}}
    {{--<div class="col-xl-8 push-xl-4">--}}
    {{--<input type="submit" value="Add" class="btn btn-primary add-class">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--{!! Form::close() !!}--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal fade" id="search_modal" tabindex="-1" role="dialog"--}}
    {{--aria-hidden="true">--}}
    {{--<form>--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
    {{--<span aria-hidden="true">&times;</span>--}}
    {{--</button>--}}
    {{--<div class="input-group search_bar_small">--}}
    {{--<input type="text" class="form-control" placeholder="Search..." name="search">--}}
    {{--<span class="input-group-btn">--}}
    {{--<button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>--}}
    {{--</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</form>--}}
    {{--</div>--}}
@endsection
<!-- Push a script dynamically from a view -->
@push('scripts')
<script type="text/javascript" src="{{asset('/js/admin-js/pluginjs/jquery.form.js')}}"></script>

<!--  plugin scripts -->
<script type="text/javascript" src="{{asset('/admin-vendor/select2/js/select2.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datatables/js/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datatables/js/dataTables.responsive.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datatables/js/dataTables.buttons.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datatables/js/buttons.colVis.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datatables/js/buttons.html5.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datatables/js/buttons.bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datatables/js/buttons.print.min.js')}}"></script>
<!-----form elements start------>
<script type="text/javascript" src="{{asset('/admin-vendor/jquery.uniform/js/jquery.uniform.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/inputlimiter/js/jquery.inputlimiter.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/chosen/js/chosen.jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/jquery-tagsinput/js/jquery.tagsinput.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/validval/js/jquery.validVal.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/moment/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/daterangepicker/js/daterangepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/autosize/js/jquery.autosize.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/inputmask/js/inputmask.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/inputmask/js/jquery.inputmask.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/inputmask/js/inputmask.date.extensions.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/inputmask/js/inputmask.extensions.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/fileinput/js/fileinput.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/fileinput/js/theme.js')}}"></script>
<script type="text/javascript" src="{{asset('js/form.js')}}"></script>
<script type="text/javascript" src="{{asset('js/admin-js/pages/form_elements.js')}}"></script>
<!-----form elements end------>

<!-----validation plugin------>
<script type="text/javascript" src="{{asset('/admin-vendor/jquery-validation-engine/js/jquery.validationEngine.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/jquery-validation-engine/js/jquery.validationEngine-en.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/jquery-validation/js/jquery.validate.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('/admin-vendor/datetimepicker/js/DateTimePicker.min.js')}}"></script>--}}
<script type="text/javascript" src="{{asset('/admin-vendor/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>

<!--End of plugin scripts-->
<!--Page level scripts-->
<script type="text/javascript" src="{{asset('/js/admin-js/pages/users.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/admin-js/pages/modals.js')}}"></script>
<!-----validation page---->
<script type="text/javascript" src="{{asset('/js/admin-js/pages/form_validation.js')}}"></script>

<!-- end page level scripts -->

<script type="text/javascript">
    $("body").on("click",".add-class",function(e){
        $(this).parents("form").ajaxForm(options);
    });

    var options = {
        complete: function(response)
        {
            $('#editable_table').DataTable().clear().destroy();

            if($.isEmptyObject(response.responseJSON.error)){
                swal({
                    title: "Success.",
                    text: "New Class Successfully Added",
                    type: "success",
                    allowOutsideClick: false
                }).then(function(res) {
                    var classes = response.responseJSON;
                    var i =1;
                    $.each( classes, function( key, value ) {
                        $("#editable").append(
                            '<tr role="row" class="even">' +
                            '<td class="sorting_1">'+i+'</td>' +
                            '<td>'+value.class_name+'</td>' +
                            '<td><a href="#class'+i+'" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample" title="View">' +
                            '<i class="fa fa-eye text-success"></i>' +
                            '</a>&nbsp; &nbsp;' +
                            '<a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" onclick="edit_class('+value.id+')" href="javascript:;">' +
                            '<i class="fa fa-pencil text-warning"></i>' +
                            '</a>&nbsp; &nbsp; ' +
                            '<a class="delete" onclick="delete_class('+value.id+')" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Delete">' +
                            '<i class="fa fa-trash text-danger"></i>' +
                            '</a>'+
                            '<div class="collapse" id="class'+i+'">' +
                            '<div class="well">'+
                            '<table>'+
                            '<tr>'+
                            '<td><b>Class Name</b></td><td>'+value.class_name+'</td>'+
                            '</tr>'+
                            '</table>'+
                            '</div>'+
                            '</div>'+
                            '</td></tr>');
                        i++;
                    });
                    var table = $('#editable_table');
                    table.DataTable({
                        dom: '<"text-xs-right"B><f>lr<"table-responsive"t>ip',
                        buttons: [
                            'copy', 'csv', 'print'
                        ]
                    });
                    var tableWrapper = $("#editable_table_wrapper");
                    tableWrapper.find(".dataTables_length select").select2({
                        showSearchInput: false //hide search box with special css class
                    }); // initialize select2 dropdown
                    $("#editable_table_wrapper .dt-buttons .btn").addClass('btn-secondary').removeClass('btn-default');
//                    location.reload('url()');
                });
            }else{
                printErrorMsg(response.responseJSON.error);
            }

//            if($.Object(response.responseJSON.success)){
//                $("#answers").html(success);
//            }
        }
    };

    function printErrorMsg (msg) {
        $(".print-error-msg").find("ul").html('');
        $(".print-error-msg").css('display','block');
        $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
        });
    }

    function delete_class_routine(class_routine_id) {
        $.ajaxSetup({
            header: $('meta[name="csrf-token"]').attr('content')
        });
        swal({
            title: 'Are you sure?',
            text: 'You won\'t be able to revert this!',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#4fb7fe',
            cancelButtonColor: '#EF6F6C',
            confirmButtonText: 'Yes, delete it!'
        }).then(function () {
            $.ajax({
                type: 'get',
                url: '/delete_class_routine/'+class_routine_id,
                datatype:'json',
                success: function (response) {
                    swal({
                        title: 'Deleted!',
                        text: 'Your Class has been removed!',
                        type: 'success',
                        confirmButtonColor: '#ff9933',
                        allowOutsideClick: false
                    }).then(function() {
                        $('#editable_table').DataTable().clear().destroy();
                        var view_class_routine = response;
                        var i =1;
                        $.each( view_class_routine, function( key, value ) {
                            switch(value.day){
                                case "Monday":
                                    $("#editable").append( '<tr role="row" class="even">' +
                                        '<td class="sorting_1">'+value.day+'</td>' +
                                        '<td class="sorting_1">'+i+'</td>' +
                                        '<td>'+value.subject_name+'</td>' +
                                        '<td>'+value.time+'</td>' +
                                        '<td>'+value.emp_f_name+' '+value.emp_m_name+' '+value.emp_l_name+'</td>' +
                                        '<td>' +
                                        '<a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" onclick="edit_class_routine('+value.id+')" href="javascript:;">' +
                                        '<i class="fa fa-pencil text-warning"></i>' +
                                        '</a>&nbsp; &nbsp; ' +
                                        '<a class="delete" onclick="delete_class_routine('+value.id+')" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Delete">' +
                                        '<i class="fa fa-trash text-danger"></i>' +
                                        '</a>'+
                                        '</td>' +
                                        '</tr>'
                                    );
                                    break;
                                case "Tuesday":
                                    $("#editable").append( '<tr role="row" class="even">' +
                                        '<td class="sorting_1">'+value.day+'</td>' +
                                        '<td class="sorting_1">'+i+'</td>' +
                                        '<td>'+value.subject_name+'</td>' +
                                        '<td>'+value.time+'</td>' +
                                        '<td>'+value.emp_f_name+' '+value.emp_m_name+' '+value.emp_l_name+'</td>' +
                                        '<td>' +
                                        '<a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" onclick="edit_class_routine('+value.id+')" href="javascript:;">' +
                                        '<i class="fa fa-pencil text-warning"></i>' +
                                        '</a>&nbsp; &nbsp; ' +
                                        '<a class="delete" onclick="delete_class_routine('+value.id+')" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Delete">' +
                                        '<i class="fa fa-trash text-danger"></i>' +
                                        '</a>'+
                                        '</td>' +
                                        '</tr>'
                                    );
                                    break;
                                case "Wednesday":
                                    $("#editable").append( '<tr role="row" class="even">' +
                                        '<td class="sorting_1">'+value.day+'</td>' +
                                        '<td class="sorting_1">'+i+'</td>' +
                                        '<td>'+value.subject_name+'</td>' +
                                        '<td>'+value.time+'</td>' +
                                        '<td>'+value.emp_f_name+' '+value.emp_m_name+' '+value.emp_l_name+'</td>' +
                                        '<td>' +
                                        '<a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" onclick="edit_class_routine('+value.id+')" href="javascript:;">' +
                                        '<i class="fa fa-pencil text-warning"></i>' +
                                        '</a>&nbsp; &nbsp; ' +
                                        '<a class="delete" onclick="delete_class_routine('+value.id+')" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Delete">' +
                                        '<i class="fa fa-trash text-danger"></i>' +
                                        '</a>'+
                                        '</td>' +
                                        '</tr>'
                                    );
                                    break;
                                case "Thursday":
                                    $("#editable").append( '<tr role="row" class="even">' +
                                        '<td class="sorting_1">'+value.day+'</td>' +
                                        '<td class="sorting_1">'+i+'</td>' +
                                        '<td>'+value.subject_name+'</td>' +
                                        '<td>'+value.time+'</td>' +
                                        '<td>'+value.emp_f_name+' '+value.emp_m_name+' '+value.emp_l_name+'</td>' +
                                        '<td>' +
                                        '<a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" onclick="edit_class_routine('+value.id+')" href="javascript:;">' +
                                        '<i class="fa fa-pencil text-warning"></i>' +
                                        '</a>&nbsp; &nbsp; ' +
                                        '<a class="delete" onclick="delete_class_routine('+value.id+')" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Delete">' +
                                        '<i class="fa fa-trash text-danger"></i>' +
                                        '</a>'+
                                        '</td>' +
                                        '</tr>'
                                    );
                                    break;
                                case "Friday":
                                    $("#editable").append( '<tr role="row" class="even">' +
                                        '<td class="sorting_1">'+value.day+'</td>' +
                                        '<td class="sorting_1">'+i+'</td>' +
                                        '<td>'+value.subject_name+'</td>' +
                                        '<td>'+value.time+'</td>' +
                                        '<td>'+value.emp_f_name+' '+value.emp_m_name+' '+value.emp_l_name+'</td>' +
                                        '<td>' +
                                        '<a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" onclick="edit_class_routine('+value.id+')" href="javascript:;">' +
                                        '<i class="fa fa-pencil text-warning"></i>' +
                                        '</a>&nbsp; &nbsp; ' +
                                        '<a class="delete" onclick="delete_class_routine('+value.id+')" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Delete">' +
                                        '<i class="fa fa-trash text-danger"></i>' +
                                        '</a>'+
                                        '</td>' +
                                        '</tr>'
                                    );
                                    break;
                                case "Saturday":
                                    $("#editable").append( '<tr role="row" class="even">' +
                                        '<td class="sorting_1">'+value.day+'</td>' +
                                        '<td class="sorting_1">'+i+'</td>' +
                                        '<td>'+value.subject_name+'</td>' +
                                        '<td>'+value.time+'</td>' +
                                        '<td>'+value.emp_f_name+' '+value.emp_m_name+' '+value.emp_l_name+'</td>' +
                                        '<td>' +
                                        '<a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" onclick="edit_class_routine('+value.id+')" href="javascript:;">' +
                                        '<i class="fa fa-pencil text-warning"></i>' +
                                        '</a>&nbsp; &nbsp; ' +
                                        '<a class="delete" onclick="delete_class_routine('+value.id+')" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Delete">' +
                                        '<i class="fa fa-trash text-danger"></i>' +
                                        '</a>'+
                                        '</td>' +
                                        '</tr>'
                                    );
                                    break;
                                case "Sunday":
                                    $("#editable").append( '<tr role="row" class="even">' +
                                        '<td class="sorting_1">'+value.day+'</td>' +
                                        '<td class="sorting_1">'+i+'</td>' +
                                        '<td>'+value.subject_name+'</td>' +
                                        '<td>'+value.time+'</td>' +
                                        '<td>'+value.emp_f_name+' '+value.emp_m_name+' '+value.emp_l_name+'</td>' +
                                        '<td>' +
                                        '<a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" onclick="edit_class_routine('+value.id+')" href="javascript:;">' +
                                        '<i class="fa fa-pencil text-warning"></i>' +
                                        '</a>&nbsp; &nbsp; ' +
                                        '<a class="delete" onclick="delete_class_routine('+value.id+')" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Delete">' +
                                        '<i class="fa fa-trash text-danger"></i>' +
                                        '</a>'+
                                        '</td>' +
                                        '</tr>'
                                    );
                                    break;
                            }
                            i++;
                        });
                        var table = $('#editable_table');
                        table.DataTable({
                            dom: '<"text-xs-right"B><f>lr<"table-responsive"t>ip',
                            buttons: [
                                'copy', 'csv', 'print'
                            ]
                        });
                        var tableWrapper = $("#editable_table_wrapper");
                        tableWrapper.find(".dataTables_length select").select2({
                            showSearchInput: false //hide search box with special css class
                        }); // initialize select2 dropdown
                        $("#editable_table_wrapper .dt-buttons .btn").addClass('btn-secondary').removeClass('btn-default');
                        //location.reload('url()');
                    });
                },
                error: function () {
                    alert("something went wrong");
                }
            });

        });
    }

    function edit_class_routine(class_routine_id) {
        $.ajaxSetup({
            header: $('meta[name="csrf-token"]').attr('content')
        });
        $.ajax({
            type: 'get',
            url: '/edit_class_routine/'+class_routine_id,
            datatype:'json',
            success: function (response) {
                var subjects = response.subjects;
                var teachers = response.teachers;

                if (response.error){
                    alert("something went wrong");
                }else{
                    jQuery("#modal-zoomin").show(function () {
                        form_print = ' {!! Form::open(array('class'=>'ajax','id'=>'update_class_routine','url'=>'/update_class_routine','enctype'=>'multipart/form-data')) !!}' +
                            '<div class="alert alert-danger print-error-msg" style="display:none">'+
                            '<ul></ul>'+
                            '</div>'+
                            '<input type="hidden" value='+response.view_class_routine[0].id+' name="class_routine_id">'+
                            '<input type="hidden" value='+response.view_class_routine[0].section_id+' name="section_id">'+
                            '<div class="form-group row">'+
                            '<div class="col-xl-3 text-xl-right">'+
                            '<?php echo Form::label('class_name', 'Class Name: ',['class'=>'form-control-label'])?>'+
                            '</div>'+
                            '<div class="col-xl-5">'+
                            '<input type="text" name="section_name" value='+response.view_class_routine[0].class_name+' placeholder="enter new section name" class="form-control" readonly>'+
                            '</div>'+
                            '</div>'+
                            '<div class="form-group row">'+
                            '<div class="col-xl-3 text-xl-right">'+
                            '<?php echo Form::label('section_name', 'Section Name: ',['class'=>'form-control-label'])?>'+
                            '</div>'+
                            '<div class="col-xl-5">'+
                            '<input type="text" name="section_name" value='+response.view_class_routine[0].section_name+' placeholder="enter new section name" class="form-control" readonly>'+
                            '</div>'+
                            '</div>'+

                            '<div class="form-group row">'+
                            '<div class="col-xl-3 text-xl-right">'+
                            '<?php echo Form::label('day', 'Select Day: ',['class'=>'form-control-label'])?>'+
                            '</div>'+
                            '<div class="col-xl-5">'+
                            '<select id="day" name="day" class=" form-control select2 chzn-select">'+
                            '<option value=" " disabled selected>Select Day Name</option>'+
                            '<option value="Monday">Monday </option>'+
                            '<option value="Tuesday">Tuesday </option>'+
                            '<option value="Wednesday">Wednesday </option>'+
                            '<option value="Thursday">Thursday </option>'+
                            '<option value="Friday">Friday </option>'+
                            '<option value="Saturday">Saturday </option>'+
                            '<option value="Sunday">Sunday </option>'+
                            '</select>' +
                            '</div>'+
                            '</div>'+

                            '<div class="form-group row">'+
                            '<div class="col-xl-3 text-xl-right">'+
                            '<?php echo Form::label('select_teacher', 'Select Teacher: ',['class'=>'form-control-label'])?>'+
                            '</div>'+
                            '<div class="col-xl-5">'+
                            '<select id="select_teacher" name="select_teacher" class=" form-control select2 chzn-select">'+
                            '<option value=" " disabled selected>Select Teacher Name</option>';
                        for (var t = 0; t< teachers.length; t++) {
                            form_print += '<option value="' + teachers[t].id + '">' + teachers[t].emp_f_name+' '+teachers[t].emp_m_name+' '+teachers[t].emp_l_name+ '</option>';
                        }

                        form_print += '</select>' +
                            '</div>'+
                            '</div>'+

                            '<div class="form-group row">'+
                            '<div class="col-xl-3 text-xl-right">'+
                            '<?php echo Form::label('select_subject', 'Select Subject: ',['class'=>'form-control-label'])?>'+
                            '</div>'+
                            '<div class="col-xl-5">'+
                            '<select id="select_subject" name="select_subject" class=" form-control select2 chzn-select">'+
                            '<option value=" " disabled selected>Select Subject Name</option>';



                        for (var i = 0; i< subjects.length; i++) {
                            form_print += '<option value="' + subjects[i].id + '">' + subjects[i].subject_name + '</option>';
                        }

                        form_print += '</select>' +
                            '</div>'+
                            '</div>'+

                            '<div class="form-group row">'+
                            '<div class="col-xl-3 text-xl-right">'+
                            '<?php echo Form::label('time_period', 'Old Time Period: ',['class'=>'form-control-label'])?>'+
                            '</div>'+
                            '<div class="col-xl-3">'+
                            '<input type="text" value='+response.view_class_routine[0].time+' name="from_time_period" class="form-control" readonly>'+
                            '</div>'+
                            '</div>'+

                            '<div class="form-group row">'+
                            '<div class="col-xl-3 text-xl-right">'+
                            '<?php echo Form::label('time_period', 'Set New Time Period: ',['class'=>'form-control-label'])?>'+
                            '</div>'+
                            '<div class="col-xl-3">'+
                            '<input type="time" value='+response.view_class_routine[0].section_name+' name="from_time_period" class="form-control">'+
                            '</div>'+
                            '<div class="col-xl-3">'+
                            '<input type="time" name="to_time_period" class="form-control">'+
                            '</div>'+
                            '</div>'+

                            '<div class="form-actions form-group row">'+
                            '<div class="col-xl-8 push-xl-4">'+
                            '<input type="submit" value="Add" class="btn btn-primary update_class_routine">'+
                            '</div>'+
                            '</div>'+
                            '{!! Form::close() !!}';
                        $(".print-clsss").html(form_print)
                    });
                }

            }
        });

    }

    $("body").on("click",".update_class_routine",function(e){
        $(this).parents("form").ajaxForm(upd_class_routine);
    });
    var upd_class_routine = {
        complete: function(response)
        {
            if($.isEmptyObject(response.responseJSON.error)){
                swal({
                    title: "Success.",
                    text: "Class Routine Successfully Updated",
                    type: "success",
                    allowOutsideClick: false
                }).then(function() {
                    $('#editable_table').DataTable().clear().destroy();
                    var view_class_routine = response.responseJSON;
                    var i =1;

                    $.each( view_class_routine, function( key, value ) {

                        switch(value.day){
                            case "Monday":
                                $("#editable").append( '<tr role="row" class="even">' +
                                    '<td class="sorting_1">'+value.day+'</td>' +
                                    '<td class="sorting_1">'+i+'</td>' +
                                    '<td>'+value.subject_name+'</td>' +
                                    '<td>'+value.time+'</td>' +
                                    '<td>'+value.emp_f_name+' '+value.emp_m_name+' '+value.emp_l_name+'</td>' +
                                    '<td>' +
                                    '<a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" onclick="edit_class_routine('+value.id+')" href="javascript:;">' +
                                    '<i class="fa fa-pencil text-warning"></i>' +
                                    '</a>&nbsp; &nbsp; ' +
                                    '<a class="delete" onclick="delete_class_routine('+value.id+')" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Delete">' +
                                    '<i class="fa fa-trash text-danger"></i>' +
                                    '</a>'+
                                    '</td>' +
                                    '</tr>'
                                );
                                break;
                            case "Tuesday":
                                $("#editable").append( '<tr role="row" class="even">' +
                                    '<td class="sorting_1">'+value.day+'</td>' +
                                    '<td class="sorting_1">'+i+'</td>' +
                                    '<td>'+value.subject_name+'</td>' +
                                    '<td>'+value.time+'</td>' +
                                    '<td>'+value.emp_f_name+' '+value.emp_m_name+' '+value.emp_l_name+'</td>' +
                                    '<td>' +
                                    '<a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" onclick="edit_class_routine('+value.id+')" href="javascript:;">' +
                                    '<i class="fa fa-pencil text-warning"></i>' +
                                    '</a>&nbsp; &nbsp; ' +
                                    '<a class="delete" onclick="delete_class_routine('+value.id+')" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Delete">' +
                                    '<i class="fa fa-trash text-danger"></i>' +
                                    '</a>'+
                                    '</td>' +
                                    '</tr>'
                                );
                                break;
                            case "Wednesday":
                                $("#editable").append( '<tr role="row" class="even">' +
                                    '<td class="sorting_1">'+value.day+'</td>' +
                                    '<td class="sorting_1">'+i+'</td>' +
                                    '<td>'+value.subject_name+'</td>' +
                                    '<td>'+value.time+'</td>' +
                                    '<td>'+value.emp_f_name+' '+value.emp_m_name+' '+value.emp_l_name+'</td>' +
                                    '<td>' +
                                    '<a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" onclick="edit_class_routine('+value.id+')" href="javascript:;">' +
                                    '<i class="fa fa-pencil text-warning"></i>' +
                                    '</a>&nbsp; &nbsp; ' +
                                    '<a class="delete" onclick="delete_class_routine('+value.id+')" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Delete">' +
                                    '<i class="fa fa-trash text-danger"></i>' +
                                    '</a>'+
                                    '</td>' +
                                    '</tr>'
                                );
                                break;
                            case "Thursday":
                                $("#editable").append( '<tr role="row" class="even">' +
                                    '<td class="sorting_1">'+value.day+'</td>' +
                                    '<td class="sorting_1">'+i+'</td>' +
                                    '<td>'+value.subject_name+'</td>' +
                                    '<td>'+value.time+'</td>' +
                                    '<td>'+value.emp_f_name+' '+value.emp_m_name+' '+value.emp_l_name+'</td>' +
                                    '<td>' +
                                    '<a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" onclick="edit_class_routine('+value.id+')" href="javascript:;">' +
                                    '<i class="fa fa-pencil text-warning"></i>' +
                                    '</a>&nbsp; &nbsp; ' +
                                    '<a class="delete" onclick="delete_class_routine('+value.id+')" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Delete">' +
                                    '<i class="fa fa-trash text-danger"></i>' +
                                    '</a>'+
                                    '</td>' +
                                    '</tr>'
                                );
                                break;
                            case "Friday":
                                $("#editable").append( '<tr role="row" class="even">' +
                                    '<td class="sorting_1">'+value.day+'</td>' +
                                    '<td class="sorting_1">'+i+'</td>' +
                                    '<td>'+value.subject_name+'</td>' +
                                    '<td>'+value.time+'</td>' +
                                    '<td>'+value.emp_f_name+' '+value.emp_m_name+' '+value.emp_l_name+'</td>' +
                                    '<td>' +
                                    '<a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" onclick="edit_class_routine('+value.id+')" href="javascript:;">' +
                                    '<i class="fa fa-pencil text-warning"></i>' +
                                    '</a>&nbsp; &nbsp; ' +
                                    '<a class="delete" onclick="delete_class_routine('+value.id+')" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Delete">' +
                                    '<i class="fa fa-trash text-danger"></i>' +
                                    '</a>'+
                                    '</td>' +
                                    '</tr>'
                                );
                                break;
                            case "Saturday":
                                $("#editable").append( '<tr role="row" class="even">' +
                                    '<td class="sorting_1">'+value.day+'</td>' +
                                    '<td class="sorting_1">'+i+'</td>' +
                                    '<td>'+value.subject_name+'</td>' +
                                    '<td>'+value.time+'</td>' +
                                    '<td>'+value.emp_f_name+' '+value.emp_m_name+' '+value.emp_l_name+'</td>' +
                                    '<td>' +
                                    '<a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" onclick="edit_class_routine('+value.id+')" href="javascript:;">' +
                                    '<i class="fa fa-pencil text-warning"></i>' +
                                    '</a>&nbsp; &nbsp; ' +
                                    '<a class="delete" onclick="delete_class_routine('+value.id+')" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Delete">' +
                                    '<i class="fa fa-trash text-danger"></i>' +
                                    '</a>'+
                                    '</td>' +
                                    '</tr>'
                                );
                                break;
                            case "Sunday":
                                $("#editable").append( '<tr role="row" class="even">' +
                                    '<td class="sorting_1">'+value.day+'</td>' +
                                    '<td class="sorting_1">'+i+'</td>' +
                                    '<td>'+value.subject_name+'</td>' +
                                    '<td>'+value.time+'</td>' +
                                    '<td>'+value.emp_f_name+' '+value.emp_m_name+' '+value.emp_l_name+'</td>' +
                                    '<td>' +
                                    '<a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" onclick="edit_class_routine('+value.id+')" href="javascript:;">' +
                                    '<i class="fa fa-pencil text-warning"></i>' +
                                    '</a>&nbsp; &nbsp; ' +
                                    '<a class="delete" onclick="delete_class_routine('+value.id+')" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Delete">' +
                                    '<i class="fa fa-trash text-danger"></i>' +
                                    '</a>'+
                                    '</td>' +
                                    '</tr>'
                                );
                                break;
                        }
                        i++;
                    });
                    var table = $('#editable_table');
                    table.DataTable({
                        dom: '<"text-xs-right"B><f>lr<"table-responsive"t>ip',
                        buttons: [
                            'copy', 'csv', 'print'
                        ]
                    });
                    var tableWrapper = $("#editable_table_wrapper");
                    tableWrapper.find(".dataTables_length select").select2({
                        showSearchInput: false //hide search box with special css class
                    }); // initialize select2 dropdown
                    $("#editable_table_wrapper .dt-buttons .btn").addClass('btn-secondary').removeClass('btn-default');
                    //location.reload('url()');
                });
            }else{
                printErrorMsg(response.responseJSON.error);
            }
        }
    };

    function model_dismiss() {
        jQuery("#modal-zoomin").hide();
    }

</script>
@endpush

