<?php
/**
 * Created by PhpStorm.
 * User: Danish Ch
 * Date: 6/4/2018
 * Time: 5:05 AM
 */
?>
@extends('layouts.teacher_dashboard_layout')
@push('styles')
    <!--validation Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/bootstrapvalidator/css/bootstrapValidator.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/jasny-bootstrap/css/jasny-bootstrap.min.css')}}"/>
    <!-------form layout start------->
    <link rel="stylesheet" href="{{asset('/admin-vendor/intl-tel-input/css/intlTelInput.css')}}">
    {{--<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/bootstrapvalidator/css/bootstrapValidator.min.css')}}" />--}}
    <link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/sweetalert/css/sweetalert2.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/pages/sweet_alert.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/pages/form_layouts.css')}}" />
    <!-------form layout end------->
    <!--datetime picker plugin syles-->
    <link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/inputlimiter/css/jquery.inputlimiter.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/jquery-tagsinput/css/jquery.tagsinput.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/daterangepicker/css/daterangepicker.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/datepicker/css/bootstrap-datepicker.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/bootstrap-switch/css/bootstrap-switch.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/jasny-bootstrap/css/jasny-bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/datetimepicker/css/DateTimePicker.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/j_timepicker/css/jquery.timepicker.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/clockpicker/css/jquery-clockpicker.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/pages/colorpicker_hack.css')}}" />
    <!-- end of datetime picker plugin styles -->
@endpush
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <header class="head">
        <div class="main-bar row">
            <div class="col-lg-3">
                <h4 class="nav_top_align skin_txt">
                    <i class="fa fa-user"></i>
                    View Attendance
                </h4>
            </div>
            <div class="col-lg-5">
                {!! Form::open(array('class'=>'ajax','url'=>'/ajax_form_view_attendance','id'=>'ajax_form_view_attendance','enctype'=>'multipart/form-data','method'=>'POST')) !!}
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                </div>
                <input type="hidden" value="{{$employee->section_id}}" name="hidden_section_id">
                <div class="form-group row m-t-25">
                    <div class="col-xl-4 text-xl-right">
                        {!! Form::label('select_date', 'Select Date: ',['class'=>'form-control-label']) !!}
                    </div>
                    <div class="col-xl-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" name="select_date" placeholder="dd/mm/yyyy" data-date-format="dd/M/yyyy" id="dp2">
                        </div>
                    </div>
                </div>
                <div class="form-group row m-t-25">
                    <div class="col-xl-3 text-xl-right">
                    </div>
                    {{--<div class="col-xl-5">--}}
                    {{--</div>--}}
                    <div class="col-xl-3 col-lg-3">
                        <div class="input-group">
                            <button class="btn btn-primary view_attendance" type="submit">
                                <i class="fa fa-search"></i>
                                Next
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="input-group">
                            <button class="btn btn-warning" type="reset" id="clear">
                                <i class="fa fa-refresh"></i>
                                Reset
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
            <div class="col-lg-4">
                <ol class="breadcrumb float-xs-right nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="">
                            <i class="fa fa-home" data-pack="default" data-tags=""></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Attendance</a>
                    </li>
                    <li class="breadcrumb-item active">View Attendance</li>
                </ol>
            </div>
        </div>
    </header>
    <div class="outer bg-container" id="class_all_students">
        <div class="card">
            <div class="card-block m-t-35 class-students-form">

            </div>
            <div class="alert alert-danger print-reg-error-msg" style="display:none">
                <ul></ul>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{asset('/js/admin-js/pluginjs/jquery.form.js')}}"></script>
    <script type="text/javascript">
        $("body").on("click",".view_attendance",function(e){
            $(this).parents("form").ajaxForm(ViewAttendance);
        });
        var ViewAttendance = {
            complete: function(response)
            {
                $.ajaxSetup({
                    header: $('meta[name="csrf-token"]').attr('content')
                });
                if($.isEmptyObject(response.responseJSON.error)){
                    var class_students = response.responseJSON.class_students;
                    jQuery("#class_all_students").show(function () {
//                $(".registration-form").html(
                        form_print =
                                {{--' {!! Form::open(array('class'=>'ajax','id'=>'upload_result','url'=>'/upload_result','method'=>'POST')) !!}' +--}}
                                    '<meta name="_token" content="{{ csrf_token() }}">'+
                            '<div class="alert alert-danger print-error-msg" style="display:none">' +
                            '<ul></ul>' +
                            '</div>' +

                            '<div class="form-group row">' +
                            '<div class="col-xl-12"><b>' +
                            '<div class="form-group row">' +
                            '<div class="col-xl-2 text-xl-center">'+
                            '<?php echo Form::label('student_roll_no', 'Roll No', ['class' => 'form-control-label'])?>' +
                            '</div>'+
                            '<div class="col-xl-3">'+
                            '<?php echo Form::label('student_name',' Student Name ', ['class' => 'form-control-label'])?>' +
                            '</div>'+
                            '<div class="col-xl-3">'+
                            '<?php echo Form::label('father_name', ' Father Name ', ['class' => 'form-control-label'])?>' +
                            '</div>'+
                            '<div class="col-xl-2">'+
                            '<?php echo Form::label('status', 'Status', ['class' => 'form-control-label'])?>' +
                            '</div>'+
                            '</div>'+
                            '<hr class="alert-info">';
                        var j = 0;
                        for (var i = 0; i < class_students.length; i++) {
                            j++;
                            form_print += '<div class="form-group row">' +
                                '<div class="col-xl-2 text-xl-center">'+
                                '<label for="roll_no">'+class_students[i].roll_no+'</label>'+
                                '</div>'+
                                '<div class="col-xl-3">'+
                                '<label for="std_name">'+class_students[i].std_name +'</label>'+
                                '</div>'+
                                '<div class="col-xl-3">'+
                                '<label for="father_name">'+class_students[i].father_name +'</label>'+
                                '</div>'+
                                '<div class="col-xl-2">';
                            // form_print += isFalsyAttrValue(class_students[i].status)+
                            //     '<label for="father_name">'+Absent+'</label>';

                            if(class_students[i].status != 0){
                                form_print += '<label for="father_name" style="color: green">Present</label>';
                            }
                            else{
                                form_print += '<label for="father_name" style="color: red">Absent</label>';
                            }

                            form_print += '</div>'+
                                '</div>'+
                                '<hr class="#f3f6db">';

                        }

                        form_print +='</div>' +
                            '</div>' +
                                {{--'{!! Form::close() !!}';--}}
                                $(".class-students-form").html(form_print)

                    });

                }else{
                    printErrorMsg(response.responseJSON.error);
                }

            }
        };

        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
    </script>

    <!--datetime picker plugin scripts -->
    <script type="text/javascript" src="{{asset('/admin-vendor/jquery.uniform/js/jquery.uniform.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin-vendor/inputlimiter/js/jquery.inputlimiter.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin-vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin-vendor/jquery-tagsinput/js/jquery.tagsinput.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin-vendor/validval/js/jquery.validVal.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin-vendor/inputmask/js/jquery.inputmask.bundle.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin-vendor/moment/js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin-vendor/daterangepicker/js/daterangepicker.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin-vendor/datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin-vendor/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin-vendor/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin-vendor/autosize/js/jquery.autosize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin-vendor/jasny-bootstrap/js/jasny-bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin-vendor/jasny-bootstrap/js/inputmask.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin-vendor/datetimepicker/js/DateTimePicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin-vendor/j_timepicker/js/jquery.timepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin-vendor/clockpicker/js/jquery-clockpicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/form.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/admin-js/pages/datetime_piker.js')}}"></script>
    <!--end of datetime picker plugin scripts-->

    <!--  validation scripts start-->
    <script type="text/javascript" src="{{asset('/admin-vendor/holderjs/js/holder.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin-vendor/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/admin-js/pluginjs/jasny-bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/admin-js/pages/validation.js')}}"></script>

    <!--form layout scripts start-->
    <script type="text/javascript" src="{{asset('/admin-vendor/intl-tel-input/js/intlTelInput.js')}}"></script>
    {{--<script type="text/javascript" src="{{asset('/admin-vendor/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>--}}
    <script type="text/javascript" src="{{asset('/admin-vendor/sweetalert/js/sweetalert2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/admin-js/pages/form_layouts.js')}}"></script>
    <!--End of form layout Plugin scripts-->
@endpush

