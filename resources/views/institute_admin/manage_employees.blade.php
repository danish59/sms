@extends('layouts.admin_dashboard_layout')

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
{{--<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/datepicker/css/bootstrap-datepicker3.css')}}">--}}
{{--<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/datetimepicker/css/DateTimePicker.min.css')}}">--}}
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
                    Manage Initials
                </h4>
            </div>
            <div class="col-lg-6 col-sm-8 col-xs-12">
                <ol class="breadcrumb float-xs-right  nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="index1.html">
                            <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Manage Initials</a>
                    </li>
                    <li class="active breadcrumb-item">Manage Employes</li>
                </ol>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                <div class="card-header bg-white">
                    Manage Employees
                </div>
                <div class="card-block m-t-35" id="user_body">
                    <div class="table-toolbar">
                        <div class="btn-group">
                            {{--<button class="btn btn-raised btn-info adv_cust_mod_btn lightspeedin"--}}
                                    {{--data-toggle="modal" data-target="#modal-lightspeedin"><i class="fa fa-plus"></i> Add New--}}
                            {{--</button>--}}
                            <a href="{{url('/new_appointment')}}" class=" btn btn-raised btn-info adv_cust_mod_btn">
                                <i class="fa fa-plus"></i> New Appointment
                            </a>
                        </div>
                        <div class="btn-group float-xs-right users_grid_tools">
                            <div class="tools"></div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <table class="table  table-striped table-bordered table-hover dataTable no-footer" id="editable_table" role="grid">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">No#</th>
                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">Employee Name</th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Employee CNIC</th>
                                    <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Father Name</th>
                                    <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Campus name</th>
                                    <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">Designation</th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Action</th>
                                </tr>
                                </thead>
                                <tbody  id="viewEmployees">
                                <?php $i = 1;?>
                                @foreach($employees as $emp)
                                <tr role="row" class="even">
                                    <td class="sorting_1">{{$i}}</td>
                                    <td>{{$emp->emp_f_name." ".$emp->emp_m_name." ".$emp->emp_l_name}}</td>
                                    <td>{{$emp->emp_cnic}}</td>
                                    <td class="center">{{$emp->father_name}}</td>
                                    <td class="sorting_1">{{$emp->campus_name}}</td>
                                    <td class="sorting_1">{{$emp->role_name}}</td>
                                    <td>
                                        {{--<a class="btn btn-primary" role="button" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseExample"  href="#{{$emp->emp_f_name.$i}}"><b><i>Mission &amp; Vision<br /></i></b></a>--}}
                                        <a href="#{{$emp->emp_f_name.$i}}" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample" title="View"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;
                                        <a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" href="{{url('edit_employee/'.$emp->id)}}"><i class="fa fa-pencil text-warning"></i></a>&nbsp; &nbsp;
                                        <a class="delete" onclick="emp_delete( {{$emp->id}})" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash text-danger"></i></a>
                                        {{--{!! Form::open(array('url'=>'/delete_employee','id'=>'del_emp','method'=>'post','class'=>'form-horizontal login_validator')) !!}--}}
                                         {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}
                                        {{--{!! Form:: hidden('id',$emp->id) !!}--}}

                                        {{--<button class="btn upload-image" type="submit" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash text-danger"></i></button>--}}
                                        {{--<button class="delete btn btn-primary upload-image" type="submit">--}}
                                            {{--<i class="fa fa-user"></i>--}}
                                            {{--Conform Update--}}
                                        {{--</button>--}}
                                        {{--{!! Form::close() !!}--}}

                                        {{--<div class="examples">--}}
                                            {{--<button class="btn btn-success m-r-20 custom-image">Custom Image--}}
                                            {{--</button>--}}
                                            {{--<button class="btn btn-primary m-r-20 custom-width-padding-background">--}}
                                                {{--Background Submit--}}
                                            {{--</button>--}}
                                            {{--<button class="btn btn-warning m-r-20 warning confirm">Delete--}}
                                            {{--</button>--}}
                                            {{--<button class="btn btn-mint m-r-20 warning cancel">Delete and Cancel--}}
                                            {{--</button>--}}
                                            {{--<button class="btn btn-info m-r-20 jqueryhtml">JQuery HTML</button>--}}
                                        {{--</div>--}}
                                        <div class="collapse" id="{{$emp->emp_f_name.$i}}">
                                            <div class="well">
                                                <table>
                                                    <tr>
                                                       <td><img src="{{asset('/images/emp-images/'.$emp->emp_image)}}" alt="Not found" style="width:150px; height:150px" /></td>                                                    </tr>
                                                    <tr>
                                                        <td><b>Father CNIC:</b></td><td>{{$emp->father_cnic}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Date Birth:</b></td><td>{{$emp->date_birth}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Gender:</b></td><td>{{$emp->gender}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Religion:</b></td><td>{{$emp->religion}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Cast:</b></td><td>{{$emp->cast}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Email:</b></td><td>{{$emp->emp_email}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Phone:</b></td><td>{{$emp->emp_phone}}</td>
                                                    </tr>
                                                    <tr>
                                                        <?php
                                                        $address = $emp->address;
                                                        $add = unserialize($address);
                                                        ?>
                                                        <td><b>Address:</b></td>
                                                        <td>{{$add['street']." ".$add['city']." ".$add['country']}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Degree/Certificate:</b></td><td>{{$emp->degree_certificate}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>CGPA/Percentage:</b></td><td>{{$emp->cgpa_percentage}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>University/College:</b></td><td>{{$emp->university_college}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Passing Year:</b></td><td>{{$emp->passing_year}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Experience:</b></td><td>{{$emp->experience}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Duration:</b></td><td>{{$emp->duration}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Certificates/Coureses:</b></td><td>{{$emp->certificates_coureses1}}</td><td>{{$emp->certificates_coureses1}}</td><td>{{$emp->certificates_coureses1}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Skils:</b></td><td>{{$emp->skil1}}</td><td>{{$emp->skil2}}</td><td>{{$emp->skil3}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>User Account:</b></td>
                                                        @if($emp->user_account)
                                                        <td>User</td>
                                                            @else
                                                            <td>Not User</td>
                                                            @endif
                                                    </tr>

                                                </table>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                    <?php $i++; ?>
                                @endforeach
                                </tbody>
                            </table>
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
        {{--<div class="modal" tabindex="-1" id="modal-zoomin" role="dialog"--}}
             {{--aria-labelledby="modalLabelzoom" aria-hidden="true">--}}
            {{--<div class="modal-dialog" role="document">--}}
                {{--<div class="modal-content">--}}
                    {{--<div class="modal-header bg-success">--}}
                        {{--<h4 class="modal-title text-white" id="modalLabelzoom">Zoom In</h4>--}}
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
                    {{--<h4 class="modal-title text-white" id="modalLabellightspeedin">Add New Campus</h4>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                {{--{!! Form::open(array('class'=>'ajax','url'=>'/add_campus','enctype'=>'multipart/form-data','id'=>'add_campus')) !!}--}}
                {{--<!---row 1 start---->--}}
                    {{--<div class="form-group row">--}}
                        {{--<div class="col-xl-3 text-xl-right">--}}
                            {{--{!! Form::label('required', 'Campus Name: ',['class'=>'form-control-label']) !!}--}}
                        {{--</div>--}}
                        {{--<div class="col-xl-5">--}}
                            {{--{!! Form:: text('campus_name',null,['placeholder'=>'enter campus name','class'=>'form-control']) !!}--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group row">--}}
                        {{--<div class="col-xl-3 text-xl-right">--}}
                            {{--{!! Form::label('address', 'Address:',['class'=>'form-control-label']) !!}--}}
                        {{--</div>--}}
                        {{--<div class="col-xl-5">--}}
                            {{--{!! Form:: text('street',null,['placeholder'=>'enter address','class'=>'form-control']) !!}--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group row">--}}
                        {{--<div class="col-xl-3 text-xl-right">--}}
                            {{--{!! Form::label('city', 'City:',['class'=>'form-control-label']) !!}--}}
                        {{--</div>--}}
                        {{--<div class="col-xl-5">--}}
                            {{--{!! Form:: text('city',null,['placeholder'=>'enter city','class'=>'form-control']) !!}--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group row">--}}
                        {{--<div class="col-xl-3 text-xl-right">--}}
                            {{--{!! Form::label('country', 'Country:',['class'=>'form-control-label']) !!}--}}
                        {{--</div>--}}
                        {{--<div class="col-xl-5">--}}
                            {{--<select id="country" name="country" class="validate[required] form-control select2 chzn-select">--}}
                                {{--<option value="" disabled selected>Select Country</option>--}}
                                {{--<option value="United States">United States</option>--}}
                                {{--<option value="United Kingdom">United Kingdom</option>--}}
                                {{--<option value="Afghanistan">Afghanistan</option>--}}
                                {{--<option value="Albania">Albania</option>--}}
                                {{--<option value="Algeria">Algeria</option>--}}
                                {{--<option value="American Samoa">American Samoa</option>--}}
                                {{--<option value="Andorra">Andorra</option>--}}
                                {{--<option value="Angola">Angola</option>--}}
                                {{--<option value="Anguilla">Anguilla</option>--}}
                                {{--<option value="Antarctica">Antarctica</option>--}}
                                {{--<option value="Antigua and Barbuda">Antigua and Barbuda</option>--}}
                                {{--<option value="Argentina">Argentina</option>--}}
                                {{--<option value="Armenia">Armenia</option>--}}
                                {{--<option value="Aruba">Aruba</option>--}}
                                {{--<option value="Australia">Australia</option>--}}
                                {{--<option value="Austria">Austria</option>--}}
                                {{--<option value="Azerbaijan">Azerbaijan</option>--}}
                                {{--<option value="Bahamas">Bahamas</option>--}}
                                {{--<option value="Bahrain">Bahrain</option>--}}
                                {{--<option value="Bangladesh">Bangladesh</option>--}}
                                {{--<option value="Barbados">Barbados</option>--}}
                                {{--<option value="Belarus">Belarus</option>--}}
                                {{--<option value="Belgium">Belgium</option>--}}
                                {{--<option value="Belize">Belize</option>--}}
                                {{--<option value="Benin">Benin</option>--}}
                                {{--<option value="Bermuda">Bermuda</option>--}}
                                {{--<option value="Bhutan">Bhutan</option>--}}
                                {{--<option value="Bolivia">Bolivia</option>--}}
                                {{--<option value="Bosnia and Herzegovina">Bosnia and Herzegovina--}}
                                {{--</option>--}}
                                {{--<option value="Botswana">Boorm-control-sm"tswana</option>--}}
                                {{--<option value="Bouvet Island">Bouvet Island</option>--}}
                                {{--<option value="Brazil">Brazil</option>--}}
                                {{--<option value="British Indian Ocean Territory">British Indian Ocean--}}
                                    {{--Territory--}}
                                {{--</option>--}}
                                {{--<option value="Brunei Darussalam">Brunei Darussalam</option>--}}
                                {{--<option value="Bulgaria">Bulgaria</option>--}}
                                {{--<option value="Burkina Faso">Burkina Faso</option>--}}
                                {{--<option value="Burundi">Burundi</option>--}}
                                {{--<option value="Cambodia">Cambodia</option>--}}
                                {{--<option value="Cameroon">Cameroon</option>--}}
                                {{--<option value="Canada">Canada</option>--}}
                                {{--<option value="Cape Verde">Cape Verde</option>--}}
                                {{--<option value="Cayman Islands">Cayman Islands</option>--}}
                                {{--<option value="Central African Republic">Central African Republic--}}
                                {{--</option>--}}
                                {{--<option value="Chad">Chad</option>--}}
                                {{--<option value="Chile">Chile</option>--}}
                                {{--<option value="China">China</option>--}}
                                {{--<option value="Christmas Island">Christmas Island</option>--}}
                                {{--<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands--}}
                                {{--</option>--}}
                                {{--<option value="Colombia">Colombia</option>--}}
                                {{--<option value="Comoros">Comoros</option>--}}
                                {{--<option value="Congo">Congo</option>--}}
                                {{--<option value="Congo, The Democratic Republic of The">Congo, The--}}
                                    {{--Democratic Republic of The--}}
                                {{--</option>--}}
                                {{--<option value="Cook Islands">Cook Islands</option>--}}
                                {{--<option value="Costa Rica">Costa Rica</option>--}}
                                {{--<option value="Cote D'ivoire">Cote D'ivoire</option>--}}
                                {{--<option value="Croatia">Croatia</option>--}}
                                {{--<option value="Cuba">Cuba</option>--}}
                                {{--<option value="Cyprus">Cyprus</option>--}}
                                {{--<option value="Czech Republic">Czech Republic</option>--}}
                                {{--<option value="Denmark">Denmark</option>--}}
                                {{--<option value="Djibouti">Djibouti</option>--}}
                                {{--<option value="Dominica">Dominica</option>--}}
                                {{--<option value="Dominican Republic">Dominican Republic</option>--}}
                                {{--<option value="Ecuador">Ecuador</option>--}}
                                {{--<option value="Egypt">Egypt</option>--}}
                                {{--<option value="El Salvador">El Salvador</option>--}}
                                {{--<option value="Equatorial Guinea">Equatorial Guinea</option>--}}
                                {{--<option value="Eritrea">Eritrea</option>--}}
                                {{--<option value="Estonia">Estonia</option>--}}
                                {{--<option value="Ethiopia">Ethiopia</option>--}}
                                {{--<option value="Falkland Islands (Malvinas)">Falkland Islands--}}
                                    {{--(Malvinas)--}}
                                {{--</option>--}}
                                {{--<option value="Faroe Islands">Faroe Islands</option>--}}
                                {{--<option value="Fiji">Fiji</option>--}}
                                {{--<option value="Finland">Finland</option>--}}
                                {{--<option value="France">France</option>--}}
                                {{--<option value="French Guiana">French Guiana</option>--}}
                                {{--<option value="French Polynesia">French Polynesia</option>--}}
                                {{--<option value="French Southern Territories">French Southern--}}
                                    {{--Territories--}}
                                {{--</option>--}}
                                {{--<option value="Gabon">Gabon</option>--}}
                                {{--<option value="Gambia">Gambia</option>--}}
                                {{--<option value="Georgia">Georgia</option>--}}
                                {{--<option value="Germany">Germany</option>--}}
                                {{--<option value="Ghana">Ghana</option>--}}
                                {{--<option value="Gibraltar">Gibraltar</option>--}}
                                {{--<option value="Greece">Greece</option>--}}
                                {{--<option value="Greenland">Greenland</option>--}}
                                {{--<option value="Grenada">Grenada</option>--}}
                                {{--<option value="Guadeloupe">Guadeloupe</option>--}}
                                {{--<option value="Guam">Guam</option>--}}
                                {{--<option value="Guatemala">Guatemala</option>--}}
                                {{--<option value="Guinea">Guinea</option>--}}
                                {{--<option value="Guinea-bissau">Guinea-bissau</option>--}}
                                {{--<option value="Guyana">Guyana</option>--}}
                                {{--<option value="Haiti">Haiti</option>--}}
                                {{--<option value="Heard Island and Mcdonald Islands">Heard Island and--}}
                                    {{--Mcdonald Islands--}}
                                {{--</option>--}}
                                {{--<option value="Holy See (Vatican City State)">Holy See (Vatican City--}}
                                    {{--State)--}}
                                {{--</option>--}}
                                {{--<option value="Honduras">Honduras</option>--}}
                                {{--<option value="Hong Kong">Hong Kong</option>--}}
                                {{--<option value="Hungary">Hungary</option>--}}
                                {{--<option value="Iceland">Iceland</option>--}}
                                {{--<option value="India">India</option>--}}
                                {{--<option value="Indonesia">Indonesia</option>--}}
                                {{--<option value="Iran, Islamic Republic of">Iran, Islamic Republic--}}
                                    {{--of--}}
                                {{--</option>--}}
                                {{--<option value="Iraq">Iraq</option>--}}
                                {{--<option value="Ireland">Ireland</option>--}}
                                {{--<option value="Israel">Israel</option>--}}
                                {{--<option value="Italy">Italy</option>--}}
                                {{--<option value="Jamaica">Jamaica</option>--}}
                                {{--<option value="Japan">Japan</option>--}}
                                {{--<option value="Jordan">Jordan</option>--}}
                                {{--<option value="Kazakhstan">Kazakhstan</option>--}}
                                {{--<option value="Kenya">Kenya</option>--}}
                                {{--<option value="Kiribati">Kiribati</option>--}}
                                {{--<option value="Korea, Democratic People's Republic of">Korea,--}}
                                    {{--Democratic People's Republic of--}}
                                {{--</option>--}}
                                {{--<option value="Korea, Republic of">Korea, Republic of</option>--}}
                                {{--<option value="Kuwait">Kuwait</option>--}}
                                {{--<option value="Kyrgyzstan">Kyrgyzstan</option>--}}
                                {{--<option value="Lao People's Democratic Republic">Lao People's--}}
                                    {{--Democratic Republic--}}
                                {{--</option>--}}
                                {{--<option value="Latvia">Latvia</option>--}}
                                {{--<option value="Lebanon">Lebanon</option>--}}
                                {{--<option value="Lesotho">Lesotho</option>--}}
                                {{--<option value="Liberia">Liberia</option>--}}
                                {{--<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya--}}
                                {{--</option>--}}
                                {{--<option value="Liechtenstein">Liechtenstein</option>--}}
                                {{--<option value="Lithuania">Lithuania</option>--}}
                                {{--<option value="Luxembourg">Luxembourg</option>--}}
                                {{--<option value="Macao">Macao</option>--}}
                                {{--<!--<option value="Macedonia, The Former Yugoslav Republic of">-->--}}
                                {{--<!--Macedonia, The Former Yugoslav Republic of-->--}}
                                {{--<!--</option>-->--}}
                                {{--<option value="Madagascar">Madagascar</option>--}}
                                {{--<option value="Malawi">Malawi</option>--}}
                                {{--<option value="Malaysia">Malaysia</option>--}}
                                {{--<option value="Maldives">Maldives</option>--}}
                                {{--<option value="Mali">Mali</option>--}}
                                {{--<option value="Malta">Malta</option>--}}
                                {{--<option value="Marshall Islands">Marshall Islands</option>--}}
                                {{--<option value="Martinique">Martinique</option>--}}
                                {{--<option value="Mauritania">Mauritania</option>--}}
                                {{--<option value="Mauritius">Mauritius</option>--}}
                                {{--<option value="Mayotte">Mayotte</option>--}}
                                {{--<option value="Mexico">Mexico</option>--}}
                                {{--<option value="Micronesia, Federated States of">Micronesia,--}}
                                    {{--Federated States of--}}
                                {{--</option>--}}
                                {{--<option value="Moldova, Republic of">Moldova, Republic of</option>--}}
                                {{--<option value="Monaco">Monaco</option>--}}
                                {{--<option value="Mongolia">Mongolia</option>--}}
                                {{--<option value="Montenegro">Montenegro</option>--}}
                                {{--<option value="Montserrat">Montserrat</option>--}}
                                {{--<option value="Morocco">Morocco</option>--}}
                                {{--<option value="Mozambique">Mozambique</option>--}}
                                {{--<option value="Myanmar">Myanmar</option>--}}
                                {{--<option value="Namibia">Namibia</option>--}}
                                {{--<option value="Nauru">Nauru</option>--}}
                                {{--<option value="Nepal">Nepal</option>--}}
                                {{--<option value="Netherlands">Netherlands</option>--}}
                                {{--<option value="Netherlands Antilles">Netherlands Antilles</option>--}}
                                {{--<option value="New Caledonia">New Caledonia</option>--}}
                                {{--<option value="New Zealand">New Zealand</option>--}}
                                {{--<option value="Nicaragua">Nicaragua</option>--}}
                                {{--<option value="Niger">Niger</option>--}}
                                {{--<option value="Nigeria">Nigeria</option>--}}
                                {{--<option value="Niue">Niue</option>--}}
                                {{--<option value="Norfolk Island">Norfolk Island</option>--}}
                                {{--<option value="Northern Mariana Islands">Northern Mariana Islands--}}
                                {{--</option>--}}
                                {{--<option value="Norway">Norway</option>--}}
                                {{--<option value="Oman">Oman</option>--}}
                                {{--<option value="Pakistan">Pakistan</option>--}}
                                {{--<option value="Palau">Palau</option>--}}
                                {{--<option value="Palestinian Territory, Occupied">Palestinian--}}
                                    {{--Territory, Occupied--}}
                                {{--</option>--}}
                                {{--<option value="Panama">Panama</option>--}}
                                {{--<option value="Papua New Guinea">Papua New Guinea</option>--}}
                                {{--<option value="Paraguay">Paraguay</option>--}}
                                {{--<option value="Peru">Peru</option>--}}
                                {{--<option value="Philippines">Philippines</option>--}}
                                {{--<option value="Pitcairn">Pitcairn</option>--}}
                                {{--<option value="Poland">Poland</option>--}}
                                {{--<option value="Portugal">Portugal</option>--}}
                                {{--<option value="Puerto Rico">Puerto Rico</option>--}}
                                {{--<option value="Qatar">Qatar</option>--}}
                                {{--<option value="Reunion">Reunion</option>--}}
                                {{--<option value="Romania">Romania</option>--}}
                                {{--<option value="Russian Federation">Russian Federation</option>--}}
                                {{--<option value="Rwanda">Rwanda</option>--}}
                                {{--<option value="Saint Helena">Saint Helena</option>--}}
                                {{--<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>--}}
                                {{--<option value="Saint Lucia">Saint Lucia</option>--}}
                                {{--<option value="Saint Pierre and Miquelon">Saint Pierre and--}}
                                    {{--Miquelon--}}
                                {{--</option>--}}
                                {{--<option value="Saint Vincent and The Grenadines">Saint Vincent and--}}
                                    {{--The Grenadines--}}
                                {{--</option>--}}
                                {{--<option value="Samoa">Samoa</option>--}}
                                {{--<option value="San Marino">San Marino</option>--}}
                                {{--<option value="Sao Tome and Principe">Sao Tome and Principe</option>--}}
                                {{--<option value="Saudi Arabia">Saudi Arabia</option>--}}
                                {{--<option value="Senegal">Senegal</option>--}}
                                {{--<option value="Serbia">Serbia</option>--}}
                                {{--<option value="Seychelles">Seychelles</option>--}}
                                {{--<option value="Sierra Leone">Sierra Leone</option>--}}
                                {{--<option value="Singapore">Singapore</option>--}}
                                {{--<option value="Slovakia">Slovakia</option>--}}
                                {{--<option value="Slovenia">Slovenia</option>--}}
                                {{--<option value="Solomon Islands">Solomon Islands</option>--}}
                                {{--<option value="Somalia">Somalia</option>--}}
                                {{--<option value="South Africa">South Africa</option>--}}
                                {{--<option value="South Sudan">South Sudan</option>--}}
                                {{--<option value="Spain">Spain</option>--}}
                                {{--<option value="Sri Lanka">Sri Lanka</option>--}}
                                {{--<option value="Sudan">Sudan</option>--}}
                                {{--<option value="Suriname">Suriname</option>--}}
                                {{--<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen--}}
                                {{--</option>--}}
                                {{--<option value="Swaziland">Swaziland</option>--}}
                                {{--<option value="Sweden">Sweden</option>--}}
                                {{--<option value="Switzerland">Switzerland</option>--}}
                                {{--<option value="Syrian Arab Republic">Syrian Arab Republic</option>--}}
                                {{--<option value="Taiwan, Republic of China">Taiwan, Republic of--}}
                                    {{--China--}}
                                {{--</option>--}}
                                {{--<option value="Tajikistan">Tajikistan</option>--}}
                                {{--<option value="Tanzania, United Republic of">Tanzania, United--}}
                                    {{--Republic of--}}
                                {{--</option>--}}
                                {{--<option value="Thailand">Thailand</option>--}}
                                {{--<option value="Timor-leste">Timor-leste</option>--}}
                                {{--<option value="Togo">Togo</option>--}}
                                {{--<option value="Tokelau">Tokelau</option>--}}
                                {{--<option value="Tonga">Tonga</option>--}}
                                {{--<option value="Trinidad and Tobago">Trinidad and Tobago</option>--}}
                                {{--<option value="Tunisia">Tunisia</option>--}}
                                {{--<option value="Turkey">Turkey</option>--}}
                                {{--<option value="Turkmenistan">Turkmenistan</option>--}}
                                {{--<option value="Turks and Caicos Islands">Turks and Caicos Islands--}}
                                {{--</option>--}}
                                {{--<option value="Tuvalu">Tuvalu</option>--}}
                                {{--<option value="Uganda">Uganda</option>--}}
                                {{--<option value="Ukraine">Ukraine</option>--}}
                                {{--<option value="United Arab Emirates">United Arab Emirates</option>--}}
                                {{--<option value="United Kingdom">United Kingdom</option>--}}
                                {{--<option value="United States">United States</option>--}}
                                {{--<option value="United States Minor Outlying Islands">United States--}}
                                    {{--Minor Outlying Islands--}}
                                {{--</option>--}}
                                {{--<option value="Uruguay">Uruguay</option>--}}
                                {{--<option value="Uzbekistan">Uzbekistan</option>--}}
                                {{--<option value="Vanuatu">Vanuatu</option>--}}
                                {{--<option value="Venezuela">Venezuela</option>--}}
                                {{--<option value="Viet Nam">Viet Nam</option>--}}
                                {{--<option value="Virgin Islands, British">Virgin Islands, British--}}
                                {{--</option>--}}
                                {{--<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>--}}
                                {{--<option value="Wallis and Futuna">Wallis and Futuna</option>--}}
                                {{--<option value="Western Sahara">Western Sahara</option>--}}
                                {{--<option value="Yemen">Yemen</option>--}}
                                {{--<option value="Zambia">Zambia</option>--}}
                                {{--<option value="Zimbabwe">Zimbabwe</option>--}}
                            {{--</select>--}}

                        {{--</div>--}}

                    {{--</div>--}}
                    {{--<div class="form-group row">--}}
                        {{--<div class="col-xl-3 text-xl-right">--}}
                            {{--{!! Form::label('principle', 'Principle:',['class'=>'form-control-label']) !!}--}}
                        {{--</div>--}}
                        {{--<div class="col-xl-5">--}}
                            {{--<select id="principle" name="principle" class="validate[required] form-control select2 chzn-select">--}}
                                {{--<option value="" disabled selected>Select Principle</option>--}}
                                {{--<option value="United States">United States</option>--}}
                                {{--<option value="United Kingdom">United Kingdom</option>--}}
                                {{--<option value="Afghanistan">Afghanistan</option>--}}
                                {{--<option value="Albania">Albania</option>--}}
                                {{--<option value="Algeria">Algeria</option>--}}
                                {{--<option value="American Samoa">American Samoa</option>--}}
                                {{--<option value="Andorra">Andorra</option>--}}
                                {{--<option value="Angola">Angola</option>--}}
                                {{--<option value="Anguilla">Anguilla</option>--}}
                                {{--<option value="Antarctica">Antarctica</option>--}}
                                {{--<option value="Antigua and Barbuda">Antigua and Barbuda</option>--}}
                                {{--<option value="Argentina">Argentina</option>--}}
                                {{--<option value="Armenia">Armenia</option>--}}
                                {{--<option value="Aruba">Aruba</option>--}}
                                {{--<option value="Australia">Australia</option>--}}
                                {{--<option value="Austria">Austria</option>--}}
                                {{--<option value="Azerbaijan">Azerbaijan</option>--}}
                                {{--<option value="Bahamas">Bahamas</option>--}}
                                {{--<option value="Bahrain">Bahrain</option>--}}
                                {{--<option value="Bangladesh">Bangladesh</option>--}}
                                {{--<option value="Barbados">Barbados</option>--}}
                                {{--<option value="Belarus">Belarus</option>--}}
                                {{--<option value="Belgium">Belgium</option>--}}
                                {{--<option value="Belize">Belize</option>--}}
                                {{--<option value="Benin">Benin</option>--}}
                                {{--<option value="Bermuda">Bermuda</option>--}}
                                {{--<option value="Bhutan">Bhutan</option>--}}
                                {{--<option value="Bolivia">Bolivia</option>--}}
                                {{--<option value="Bosnia and Herzegovina">Bosnia and Herzegovina--}}
                                {{--</option>--}}
                                {{--<option value="Botswana">Boorm-control-sm"tswana</option>--}}
                                {{--<option value="Bouvet Island">Bouvet Island</option>--}}
                                {{--<option value="Brazil">Brazil</option>--}}
                                {{--<option value="British Indian Ocean Territory">British Indian Ocean--}}
                                    {{--Territory--}}
                                {{--</option>--}}
                                {{--<option value="Brunei Darussalam">Brunei Darussalam</option>--}}
                                {{--<option value="Bulgaria">Bulgaria</option>--}}
                                {{--<option value="Burkina Faso">Burkina Faso</option>--}}
                                {{--<option value="Burundi">Burundi</option>--}}
                                {{--<option value="Cambodia">Cambodia</option>--}}
                                {{--<option value="Cameroon">Cameroon</option>--}}
                                {{--<option value="Canada">Canada</option>--}}
                                {{--<option value="Cape Verde">Cape Verde</option>--}}
                                {{--<option value="Cayman Islands">Cayman Islands</option>--}}
                                {{--<option value="Central African Republic">Central African Republic--}}
                                {{--</option>--}}
                                {{--<option value="Chad">Chad</option>--}}
                                {{--<option value="Chile">Chile</option>--}}
                                {{--<option value="China">China</option>--}}
                                {{--<option value="Christmas Island">Christmas Island</option>--}}
                                {{--<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands--}}
                                {{--</option>--}}
                                {{--<option value="Colombia">Colombia</option>--}}
                                {{--<option value="Comoros">Comoros</option>--}}
                                {{--<option value="Congo">Congo</option>--}}
                                {{--<option value="Congo, The Democratic Republic of The">Congo, The--}}
                                    {{--Democratic Republic of The--}}
                                {{--</option>--}}
                                {{--<option value="Cook Islands">Cook Islands</option>--}}
                                {{--<option value="Costa Rica">Costa Rica</option>--}}
                                {{--<option value="Cote D'ivoire">Cote D'ivoire</option>--}}
                                {{--<option value="Croatia">Croatia</option>--}}
                                {{--<option value="Cuba">Cuba</option>--}}
                                {{--<option value="Cyprus">Cyprus</option>--}}
                                {{--<option value="Czech Republic">Czech Republic</option>--}}
                                {{--<option value="Denmark">Denmark</option>--}}
                                {{--<option value="Djibouti">Djibouti</option>--}}
                                {{--<option value="Dominica">Dominica</option>--}}
                                {{--<option value="Dominican Republic">Dominican Republic</option>--}}
                                {{--<option value="Ecuador">Ecuador</option>--}}
                                {{--<option value="Egypt">Egypt</option>--}}
                                {{--<option value="El Salvador">El Salvador</option>--}}
                                {{--<option value="Equatorial Guinea">Equatorial Guinea</option>--}}
                                {{--<option value="Eritrea">Eritrea</option>--}}
                                {{--<option value="Estonia">Estonia</option>--}}
                                {{--<option value="Ethiopia">Ethiopia</option>--}}
                                {{--<option value="Falkland Islands (Malvinas)">Falkland Islands--}}
                                    {{--(Malvinas)--}}
                                {{--</option>--}}
                                {{--<option value="Faroe Islands">Faroe Islands</option>--}}
                                {{--<option value="Fiji">Fiji</option>--}}
                                {{--<option value="Finland">Finland</option>--}}
                                {{--<option value="France">France</option>--}}
                                {{--<option value="French Guiana">French Guiana</option>--}}
                                {{--<option value="French Polynesia">French Polynesia</option>--}}
                                {{--<option value="French Southern Territories">French Southern--}}
                                    {{--Territories--}}
                                {{--</option>--}}
                                {{--<option value="Gabon">Gabon</option>--}}
                                {{--<option value="Gambia">Gambia</option>--}}
                                {{--<option value="Georgia">Georgia</option>--}}
                                {{--<option value="Germany">Germany</option>--}}
                                {{--<option value="Ghana">Ghana</option>--}}
                                {{--<option value="Gibraltar">Gibraltar</option>--}}
                                {{--<option value="Greece">Greece</option>--}}
                                {{--<option value="Greenland">Greenland</option>--}}
                                {{--<option value="Grenada">Grenada</option>--}}
                                {{--<option value="Guadeloupe">Guadeloupe</option>--}}
                                {{--<option value="Guam">Guam</option>--}}
                                {{--<option value="Guatemala">Guatemala</option>--}}
                                {{--<option value="Guinea">Guinea</option>--}}
                                {{--<option value="Guinea-bissau">Guinea-bissau</option>--}}
                                {{--<option value="Guyana">Guyana</option>--}}
                                {{--<option value="Haiti">Haiti</option>--}}
                                {{--<option value="Heard Island and Mcdonald Islands">Heard Island and--}}
                                    {{--Mcdonald Islands--}}
                                {{--</option>--}}
                                {{--<option value="Holy See (Vatican City State)">Holy See (Vatican City--}}
                                    {{--State)--}}
                                {{--</option>--}}
                                {{--<option value="Honduras">Honduras</option>--}}
                                {{--<option value="Hong Kong">Hong Kong</option>--}}
                                {{--<option value="Hungary">Hungary</option>--}}
                                {{--<option value="Iceland">Iceland</option>--}}
                                {{--<option value="India">India</option>--}}
                                {{--<option value="Indonesia">Indonesia</option>--}}
                                {{--<option value="Iran, Islamic Republic of">Iran, Islamic Republic--}}
                                    {{--of--}}
                                {{--</option>--}}
                                {{--<option value="Iraq">Iraq</option>--}}
                                {{--<option value="Ireland">Ireland</option>--}}
                                {{--<option value="Israel">Israel</option>--}}
                                {{--<option value="Italy">Italy</option>--}}
                                {{--<option value="Jamaica">Jamaica</option>--}}
                                {{--<option value="Japan">Japan</option>--}}
                                {{--<option value="Jordan">Jordan</option>--}}
                                {{--<option value="Kazakhstan">Kazakhstan</option>--}}
                                {{--<option value="Kenya">Kenya</option>--}}
                                {{--<option value="Kiribati">Kiribati</option>--}}
                                {{--<option value="Korea, Democratic People's Republic of">Korea,--}}
                                    {{--Democratic People's Republic of--}}
                                {{--</option>--}}
                                {{--<option value="Korea, Republic of">Korea, Republic of</option>--}}
                                {{--<option value="Kuwait">Kuwait</option>--}}
                                {{--<option value="Kyrgyzstan">Kyrgyzstan</option>--}}
                                {{--<option value="Lao People's Democratic Republic">Lao People's--}}
                                    {{--Democratic Republic--}}
                                {{--</option>--}}
                                {{--<option value="Latvia">Latvia</option>--}}
                                {{--<option value="Lebanon">Lebanon</option>--}}
                                {{--<option value="Lesotho">Lesotho</option>--}}
                                {{--<option value="Liberia">Liberia</option>--}}
                                {{--<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya--}}
                                {{--</option>--}}
                                {{--<option value="Liechtenstein">Liechtenstein</option>--}}
                                {{--<option value="Lithuania">Lithuania</option>--}}
                                {{--<option value="Luxembourg">Luxembourg</option>--}}
                                {{--<option value="Macao">Macao</option>--}}
                                {{--<!--<option value="Macedonia, The Former Yugoslav Republic of">-->--}}
                                {{--<!--Macedonia, The Former Yugoslav Republic of-->--}}
                                {{--<!--</option>-->--}}
                                {{--<option value="Madagascar">Madagascar</option>--}}
                                {{--<option value="Malawi">Malawi</option>--}}
                                {{--<option value="Malaysia">Malaysia</option>--}}
                                {{--<option value="Maldives">Maldives</option>--}}
                                {{--<option value="Mali">Mali</option>--}}
                                {{--<option value="Malta">Malta</option>--}}
                                {{--<option value="Marshall Islands">Marshall Islands</option>--}}
                                {{--<option value="Martinique">Martinique</option>--}}
                                {{--<option value="Mauritania">Mauritania</option>--}}
                                {{--<option value="Mauritius">Mauritius</option>--}}
                                {{--<option value="Mayotte">Mayotte</option>--}}
                                {{--<option value="Mexico">Mexico</option>--}}
                                {{--<option value="Micronesia, Federated States of">Micronesia,--}}
                                    {{--Federated States of--}}
                                {{--</option>--}}
                                {{--<option value="Moldova, Republic of">Moldova, Republic of</option>--}}
                                {{--<option value="Monaco">Monaco</option>--}}
                                {{--<option value="Mongolia">Mongolia</option>--}}
                                {{--<option value="Montenegro">Montenegro</option>--}}
                                {{--<option value="Montserrat">Montserrat</option>--}}
                                {{--<option value="Morocco">Morocco</option>--}}
                                {{--<option value="Mozambique">Mozambique</option>--}}
                                {{--<option value="Myanmar">Myanmar</option>--}}
                                {{--<option value="Namibia">Namibia</option>--}}
                                {{--<option value="Nauru">Nauru</option>--}}
                                {{--<option value="Nepal">Nepal</option>--}}
                                {{--<option value="Netherlands">Netherlands</option>--}}
                                {{--<option value="Netherlands Antilles">Netherlands Antilles</option>--}}
                                {{--<option value="New Caledonia">New Caledonia</option>--}}
                                {{--<option value="New Zealand">New Zealand</option>--}}
                                {{--<option value="Nicaragua">Nicaragua</option>--}}
                                {{--<option value="Niger">Niger</option>--}}
                                {{--<option value="Nigeria">Nigeria</option>--}}
                                {{--<option value="Niue">Niue</option>--}}
                                {{--<option value="Norfolk Island">Norfolk Island</option>--}}
                                {{--<option value="Northern Mariana Islands">Northern Mariana Islands--}}
                                {{--</option>--}}
                                {{--<option value="Norway">Norway</option>--}}
                                {{--<option value="Oman">Oman</option>--}}
                                {{--<option value="Pakistan">Pakistan</option>--}}
                                {{--<option value="Palau">Palau</option>--}}
                                {{--<option value="Palestinian Territory, Occupied">Palestinian--}}
                                    {{--Territory, Occupied--}}
                                {{--</option>--}}
                                {{--<option value="Panama">Panama</option>--}}
                                {{--<option value="Papua New Guinea">Papua New Guinea</option>--}}
                                {{--<option value="Paraguay">Paraguay</option>--}}
                                {{--<option value="Peru">Peru</option>--}}
                                {{--<option value="Philippines">Philippines</option>--}}
                                {{--<option value="Pitcairn">Pitcairn</option>--}}
                                {{--<option value="Poland">Poland</option>--}}
                                {{--<option value="Portugal">Portugal</option>--}}
                                {{--<option value="Puerto Rico">Puerto Rico</option>--}}
                                {{--<option value="Qatar">Qatar</option>--}}
                                {{--<option value="Reunion">Reunion</option>--}}
                                {{--<option value="Romania">Romania</option>--}}
                                {{--<option value="Russian Federation">Russian Federation</option>--}}
                                {{--<option value="Rwanda">Rwanda</option>--}}
                                {{--<option value="Saint Helena">Saint Helena</option>--}}
                                {{--<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>--}}
                                {{--<option value="Saint Lucia">Saint Lucia</option>--}}
                                {{--<option value="Saint Pierre and Miquelon">Saint Pierre and--}}
                                    {{--Miquelon--}}
                                {{--</option>--}}
                                {{--<option value="Saint Vincent and The Grenadines">Saint Vincent and--}}
                                    {{--The Grenadines--}}
                                {{--</option>--}}
                                {{--<option value="Samoa">Samoa</option>--}}
                                {{--<option value="San Marino">San Marino</option>--}}
                                {{--<option value="Sao Tome and Principe">Sao Tome and Principe</option>--}}
                                {{--<option value="Saudi Arabia">Saudi Arabia</option>--}}
                                {{--<option value="Senegal">Senegal</option>--}}
                                {{--<option value="Serbia">Serbia</option>--}}
                                {{--<option value="Seychelles">Seychelles</option>--}}
                                {{--<option value="Sierra Leone">Sierra Leone</option>--}}
                                {{--<option value="Singapore">Singapore</option>--}}
                                {{--<option value="Slovakia">Slovakia</option>--}}
                                {{--<option value="Slovenia">Slovenia</option>--}}
                                {{--<option value="Solomon Islands">Solomon Islands</option>--}}
                                {{--<option value="Somalia">Somalia</option>--}}
                                {{--<option value="South Africa">South Africa</option>--}}
                                {{--<option value="South Sudan">South Sudan</option>--}}
                                {{--<option value="Spain">Spain</option>--}}
                                {{--<option value="Sri Lanka">Sri Lanka</option>--}}
                                {{--<option value="Sudan">Sudan</option>--}}
                                {{--<option value="Suriname">Suriname</option>--}}
                                {{--<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen--}}
                                {{--</option>--}}
                                {{--<option value="Swaziland">Swaziland</option>--}}
                                {{--<option value="Sweden">Sweden</option>--}}
                                {{--<option value="Switzerland">Switzerland</option>--}}
                                {{--<option value="Syrian Arab Republic">Syrian Arab Republic</option>--}}
                                {{--<option value="Taiwan, Republic of China">Taiwan, Republic of--}}
                                    {{--China--}}
                                {{--</option>--}}
                                {{--<option value="Tajikistan">Tajikistan</option>--}}
                                {{--<option value="Tanzania, United Republic of">Tanzania, United--}}
                                    {{--Republic of--}}
                                {{--</option>--}}
                                {{--<option value="Thailand">Thailand</option>--}}
                                {{--<option value="Timor-leste">Timor-leste</option>--}}
                                {{--<option value="Togo">Togo</option>--}}
                                {{--<option value="Tokelau">Tokelau</option>--}}
                                {{--<option value="Tonga">Tonga</option>--}}
                                {{--<option value="Trinidad and Tobago">Trinidad and Tobago</option>--}}
                                {{--<option value="Tunisia">Tunisia</option>--}}
                                {{--<option value="Turkey">Turkey</option>--}}
                                {{--<option value="Turkmenistan">Turkmenistan</option>--}}
                                {{--<option value="Turks and Caicos Islands">Turks and Caicos Islands--}}
                                {{--</option>--}}
                                {{--<option value="Tuvalu">Tuvalu</option>--}}
                                {{--<option value="Uganda">Uganda</option>--}}
                                {{--<option value="Ukraine">Ukraine</option>--}}
                                {{--<option value="United Arab Emirates">United Arab Emirates</option>--}}
                                {{--<option value="United Kingdom">United Kingdom</option>--}}
                                {{--<option value="United States">United States</option>--}}
                                {{--<option value="United States Minor Outlying Islands">United States--}}
                                    {{--Minor Outlying Islands--}}
                                {{--</option>--}}
                                {{--<option value="Uruguay">Uruguay</option>--}}
                                {{--<option value="Uzbekistan">Uzbekistan</option>--}}
                                {{--<option value="Vanuatu">Vanuatu</option>--}}
                                {{--<option value="Venezuela">Venezuela</option>--}}
                                {{--<option value="Viet Nam">Viet Nam</option>--}}
                                {{--<option value="Virgin Islands, British">Virgin Islands, British--}}
                                {{--</option>--}}
                                {{--<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>--}}
                                {{--<option value="Wallis and Futuna">Wallis and Futuna</option>--}}
                                {{--<option value="Western Sahara">Western Sahara</option>--}}
                                {{--<option value="Yemen">Yemen</option>--}}
                                {{--<option value="Zambia">Zambia</option>--}}
                                {{--<option value="Zimbabwe">Zimbabwe</option>--}}
                            {{--</select>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-actions form-group row">--}}
                        {{--<div class="col-xl-8 push-xl-4">--}}
                            {{--<input type="submit" value="Add" class="btn btn-primary">--}}
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
<script type="text/javascript">

    function emp_delete(emp_id) {
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
                url: '/delete_employee/'+emp_id,
                datatype:'json',
                success: function (employees) {
                   // json_decode(employees);
                    //alert(employees);
//                    if ($.Object(response.responseJSON.employees)){

                        //$('#viewEmployees').html(employees);
                        swal({
                            title: 'Deleted!',
                            text: 'Your employee has been removed!',
                            type: 'success',
                            confirmButtonColor: '#ff9933'
                        }).then(function () {
                            location.reload()
                        });
                    //}
                }
            });

        });
    }
</script>

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


@endpush