<?php
/**
 * Created by PhpStorm.
 * User: Danish Ch
 * Date: 2/8/2018
 * Time: 10:24 PM
 */?>
@extends('layouts.admin_dashboard_layout')
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
                    Assign Class Incharge
                </h4>
            </div>
            <div class="col-lg-5">
                {!! Form::open(array('url'=>'/next_add_incharge','id'=>'next_add_incharge','enctype'=>'multipart/form-data','method'=>'POST')) !!}
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                </div>
                <div class="form-group row m-t-25">
                    <div class="col-xl-4 text-xl-right">
                        {!! Form::label('class_name', 'Class Name: ',['class'=>'form-control-label']) !!}
                    </div>
                    <div class="col-xl-6">
                        <select id="class_name" name="class_name" class=" form-control select2 chzn-select">
                            <option value=" " disabled selected>Select Class name</option>
                            @foreach($classes as $class)
                                <option value="{{$class->id}}">{{$class->class_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row m-t-25">
                    <div class="col-xl-3 text-xl-right">
                    </div>
                    {{--<div class="col-xl-5">--}}
                    {{--</div>--}}
                    <div class="col-xl-3 col-lg-3">
                        <div class="input-group">
                            <button class="btn btn-primary add_incharge" type="submit">
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
                        <a href="#">Manage Class Incharge</a>
                    </li>
                    <li class="breadcrumb-item active">Assign Section</li>
                </ol>
            </div>
        </div>
    </header>
    <div class="outer bg-container" id="assign_incharge">
        <div class="card">
            <div class="card-block m-t-35 assign-incharge-form">

            </div>
            <div class="alert alert-danger print-reg-error-msg" style="display:none">
                <ul></ul>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
<script type="text/javascript" src="{{asset('/js/admin-js/pluginjs/jquery.form.js')}}"></script>
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
<script type="text/javascript">
    $("body").on("click",".add_incharge",function(e){
        $(this).parents("form").ajaxForm(add_section_incharge);
    });
    var add_section_incharge = {
        complete: function(response)
        {
            if($.isEmptyObject(response.responseJSON.error)){

//                var total_fee = parseInt(response.responseJSON[0].admission_fee) + parseInt(response.responseJSON[0].monthly_fee) + parseInt(response.responseJSON[0].annual_funds_others);
                var class_id = response.responseJSON.class_id;
                var sections = response.responseJSON.sections;
                var teachers = response.responseJSON.teachers;

//  var address = (count);
//                console.log(count);
//                alert(address);
                jQuery("#assign_incharge").show(function () {
//                $(".registration-form").html(
                    form_print = ' {!! Form::open(array('class'=>'ajax','id'=>'assign_incharge','url'=>'/assign_incharge','enctype'=>'multipart/form-data')) !!}' +
                        '<meta name="csrf-token" content="{{ csrf_token() }}">'+
                        '<div class="alert alert-danger print-error-msg" style="display:none">' +
                        '<ul></ul>' +
                        '</div>' +
                        '<input type="hidden" value='+ class_id + ' name="class_id">' +
                        '<div class="form-group row">' +
                        '<div class="col-xl-3 text-xl-right">' +
                        '<?php echo Form::label('select_section', 'Select Section ', ['class' => 'form-control-label'])?>' +
                        '</div>' +
                        '<div class="col-xl-5">' +
                        '<select id="select_section" name="select_section" class=" form-control select2 chzn-select">' +
                        '<option value=" " disabled selected>Select Section Name</option>';


                    for (var i = 0; i < sections.length; i++) {
                        form_print += '<option value="' + sections[i].id + '">' + sections[i].section_name + '</option>';
                    }

                    form_print += '</select>' +
                        '</div>' +
                        '</div>' +

                        '<div class="form-group row">' +
                        '<div class="col-xl-3 text-xl-right">' +
                        '<?php echo Form::label('select_teacher', 'Select Teacher ', ['class' => 'form-control-label'])?>' +
                        '</div>' +
                        '<div class="col-xl-5">' +
                        '<select id="select_teacher" name="select_teacher" class=" form-control select2 chzn-select">' +
                        '<option value=" " disabled selected>Select Teacher Name</option>';


                    for (var i = 0; i < teachers.length; i++) {
                        form_print += '<option value="' + teachers[i].id + '">' + teachers[i].emp_f_name +' '+ teachers[i].emp_m_name +' '+ teachers[i].emp_l_name + '</option>';
                    }

                    form_print += '</select>' +
                        '</div>' +
                        '</div>' +

                        '<div class="form-actions form-group row">' +
                        '<div class="col-xl-8 push-xl-4">' +
                        '<input type="submit" value=" Add " class="btn btn-primary assign_section_incharge">' +
                        '</div>' +
                        '</div>' +
                        '{!! Form::close() !!}';
                    $(".assign-incharge-form").html(form_print)

                });

            }else{
                printErrorMsg(response.responseJSON.error);
            }

        }
    };

    $("body").on("click",".assign_section_incharge",function(e){
        $(this).parents("form").ajaxForm(AssignIncharge);
    });

    var AssignIncharge = {
        complete: function(response)
        {
            if($.isEmptyObject(response.responseJSON.error)){
                swal({
                    title: "Success.",
                    text: "Section Incharge Successfully Assigned",
                    type: "success",
                    allowOutsideClick: false
                }).then(function(res) {
                    location.reload('url()');
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
</script>
<script type="text/javascript">
    $("body").on("click",".new_admission",function(e){
        $(this).parents("form").ajaxForm(new_std);
    });

    var new_std = {
        complete: function(response)
        {
            if($.isEmptyObject(response.responseJSON.error)){
//                alert('Item deleted Successfully.');
                swal({
                    title: "Success.",
                    text: "Successfully Registered <br>"+response.responseJSON.success+"</br>",
                    type: "success",
                    allowOutsideClick: false
                }).then(function() {
                    location.reload('url()');
                });
            }else{
                printErrorMsg(response.responseJSON.error);
            }

            if($.Object(response.responseJSON.success)){
                $("#answers").html(success);
            }
        }
    };

    function printErrorMsg (msg) {
        $(".print-reg-error-msg").find("ul").html('');
        $(".print-reg-error-msg").css('display','block');
        $.each( msg, function( key, value ) {
            $(".print-reg-error-msg").find("ul").append('<li>'+value+'</li>');
        });
    }
</script>

@endpush
