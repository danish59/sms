<?php
/**
 * Created by PhpStorm.
 * User: Danish Ch
 * Date: 2/16/2018
 * Time: 8:38 PM
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
                    Upload Result
                </h4>
            </div>
            <div class="col-lg-5">
                {{--{!! Form::open(array('url'=>'/manage_students','id'=>'manage_students','enctype'=>'multipart/form-data','method'=>'POST')) !!}--}}
                {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}
                {{--<div class="alert alert-danger print-error-msg" style="display:none">--}}
                    {{--<ul></ul>--}}
                {{--</div>--}}
                {{--<div class="form-group row m-t-25">--}}
                    {{--<div class="col-xl-4 text-xl-right">--}}
                        {{--{!! Form::label('select_session', 'Select Session: ',['class'=>'form-control-label']) !!}--}}
                    {{--</div>--}}
                    {{--<div class="col-xl-4">--}}
                        {{--<div class="input-group input-append  date" id="dpMonths" data-date-format="mm/yyyy" data-date-viewmode="years" data-date-minviewmode="months">--}}
                            {{--<input class="form-control" name="session_from" id="session_from" type="text" placeholder="mm/yyyy">--}}
                            {{--<span class="input-group-addon add-on"><i class="fa fa-calendar"> To</i></span>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-xl-4">--}}
                        {{--<div class="input-group input-append  date" id="dpMonths" data-date-format="mm/yyyy" data-date-viewmode="years" data-date-minviewmode="months">--}}
                            {{--<input class="form-control" type="text" id="session_to" name="session_to" placeholder="mm/yyyy">--}}
                            {{--<span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group row m-t-25">--}}
                    {{--<div class="col-xl-4 text-xl-right">--}}
                        {{--{!! Form::label('subject_name', 'Suject Name: ',['class'=>'form-control-label']) !!}--}}
                    {{--</div>--}}
                    {{--<div class="col-xl-6">--}}
                        {{--<select id="subject_name" name="subject_name" class=" form-control select2 chzn-select">--}}
                            {{--<option value=" " disabled selected>Select Subject</option>--}}
                            {{--@foreach($subjects as $subject)--}}
                                {{--<option value="{{$subject->id}}">{{$subject->subject_name}}</option>--}}
                            {{--@endforeach--}}
                        {{--</select>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group row m-t-25">--}}
                    {{--<div class="col-xl-4 text-xl-right">--}}
                        {{--{!! Form::label('select_exam', 'Select Exam: ',['class'=>'form-control-label']) !!}--}}
                    {{--</div>--}}
                    {{--<div class="col-xl-6">--}}
                        {{--<select id="select_exam" name="select_exam" class=" form-control select2 chzn-select">--}}
                            {{--<option value=" " disabled selected>Select Exam</option>--}}
                            {{--<option value="Class Unit Test#1">Class Unit Test#1</option>--}}
                            {{--<option value="Class Unit Test#2">Class Unit Test#2</option>--}}
                            {{--<option value="Class Unit Test#3">Class Unit Test#3</option>--}}
                            {{--<option value="Class Unit Test#4">Class Unit Test#4</option>--}}
                            {{--<option value="Class Unit Test#5">Class Unit Test#5</option>--}}
                            {{--<option value="Class Unit Test#6">Class Unit Test#6</option>--}}
                            {{--<option value="Class Unit Test#7">Class Unit Test#7</option>--}}
                            {{--<option value="Class Unit Test#8">Class Unit Test#8</option>--}}
                            {{--<option value="Class Unit Test#9">Class Unit Test#9</option>--}}
                            {{--<option value="Class Unit Test#10">Class Unit Test#10</option>--}}
                            {{--<option value="Class Monthly Test">Class Monthly Test</option>--}}
                            {{--<option value="Mid Term Exam">Mid Term Exam</option>--}}
                            {{--<option value="Final Term exam">Final Term exam</option>--}}
                        {{--</select>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group row m-t-25">--}}
                    {{--<div class="col-xl-3 text-xl-right">--}}
                    {{--</div>--}}
                    {{--<div class="col-xl-5">--}}
                    {{--</div>--}}
                    {{--<div class="col-xl-3 col-lg-3">--}}
                        {{--<div class="input-group">--}}
                            {{--<button class="btn btn-primary manage_students" type="submit">--}}
                                {{--<i class="fa fa-search"></i>--}}
                                {{--Next--}}
                            {{--</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-xl-3 col-lg-3">--}}
                        {{--<div class="input-group">--}}
                            {{--<button class="btn btn-warning" type="reset" id="clear">--}}
                                {{--<i class="fa fa-refresh"></i>--}}
                                {{--Reset--}}
                            {{--</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-xl-3 col-lg-3">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--{!! Form::close() !!}--}}

                {!! Form::open(array('class'=>'ajax','url'=>'/ajax_form_upload_result','id'=>'ajax_form_upload_result','enctype'=>'multipart/form-data','method'=>'POST')) !!}
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                </div>
                <div class="form-group row m-t-25">
                    <div class="col-xl-4 text-xl-right">
                        {!! Form::label('select_session', 'Select Session: ',['class'=>'form-control-label']) !!}
                    </div>
                    <div class="col-xl-4">
                        <div class="input-group input-append  date" id="dpMonths" data-date-format="mm/yyyy" data-date-viewmode="years" data-date-minviewmode="months">
                            <input class="form-control" name="session_from" id="session_from" type="text" placeholder="mm/yyyy">
                            <span class="input-group-addon add-on"><i class="fa fa-calendar"> To</i></span>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="input-group input-append  date" id="dpMonths" data-date-format="mm/yyyy" data-date-viewmode="years" data-date-minviewmode="months">
                            <input class="form-control" type="text" id="session_to" name="session_to" placeholder="mm/yyyy">
                            <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group row m-t-25">
                    <div class="col-xl-4 text-xl-right">
                        {!! Form::label('subject_name', 'Suject Name: ',['class'=>'form-control-label']) !!}
                    </div>
                    <div class="col-xl-6">
                        <select id="subject_name" name="subject_name" class=" form-control select2 chzn-select">
                            <option value=" " disabled selected>Select Subject</option>
                            @foreach($subjects as $subject)
                                <option value="{{$subject->subject_id}}">{{$subject->subject_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row m-t-25">
                    <div class="col-xl-4 text-xl-right">
                        {!! Form::label('select_exam', 'Select Exam: ',['class'=>'form-control-label']) !!}
                    </div>
                    <div class="col-xl-6">
                        <select id="select_exam" name="select_exam" class=" form-control select2 chzn-select">
                            <option value=" " disabled selected>Select Exam</option>
                            <option value="Class-Unit-Test#1">Class-Unit-Test#1</option>
                            <option value="Class-Unit-Test#2">Class-Unit-Test#2</option>
                            <option value="Class-Unit-Test#3">Class-Unit-Test#3</option>
                            <option value="Class-Unit-Test#4">Class-Unit-Test#4</option>
                            <option value="Class-Unit-Test#5">Class-Unit-Test#5</option>
                            <option value="Class-Unit-Test#6">Class-Unit-Test#6</option>
                            <option value="Class-Unit-Test#7">Class-Unit-Test#7</option>
                            <option value="Class-Unit-Test#8">Class-Unit-Test#8</option>
                            <option value="Class-Unit-Test#9">Class-Unit-Test#9</option>
                            <option value="Class-Unit-Test#10">Class-Unit-Test#10</option>
                            <option value="Class-Monthly-Test">Class-Monthly-Test</option>
                            <option value="Mid-Term-Exam">Mid-Term-Exam</option>
                            <option value="Final-Term-exam">Final-Term-exam</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row m-t-25">
                    <div class="col-xl-4 text-xl-right">
                        {!! Form::label('total_number', 'Total Number: ',['class'=>'form-control-label']) !!}
                    </div>
                    <div class="col-xl-6">
                        <input class="form-control" type="text" id="total_number" name="total_number" placeholder="Enter total number">
                    </div>
                </div>
                <div class="form-group row m-t-25">
                    <div class="col-xl-3 text-xl-right">
                    </div>
                    {{--<div class="col-xl-5">--}}
                    {{--</div>--}}
                    <div class="col-xl-3 col-lg-3">
                        <div class="input-group">
                            <button class="btn btn-primary manage_students" type="submit">
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
                        <a href="#">Exam Result</a>
                    </li>
                    <li class="breadcrumb-item active">Upload Result</li>
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
    $("body").on("click",".manage_students",function(e){
        $(this).parents("form").ajaxForm(manage_std);
    });
    var manage_std = {
        complete: function(response)
        {
            $.ajaxSetup({
                header: $('meta[name="csrf-token"]').attr('content')
            });
            if($.isEmptyObject(response.responseJSON.error)){

                var session = response.responseJSON.session;
                var subject_name = response.responseJSON.subject_name;
                var total_number = response.responseJSON.total_number;
                var select_exam = response.responseJSON.select_exam;
                var class_students = response.responseJSON.class_students;
                jQuery("#class_all_students").show(function () {
//                $(".registration-form").html(
                    form_print = ' {!! Form::open(array('class'=>'ajax','id'=>'upload_result','url'=>'/upload_result','method'=>'POST')) !!}' +
                        '<meta name="_token" content="{{ csrf_token() }}">'+
                        '<div class="alert alert-danger print-error-msg" style="display:none">' +
                        '<ul></ul>' +
                        '</div>' +
//                        '<h2>Total Number Of Students: '+count+'</h2>'+
                        '<input type="hidden" value='+ session + ' name="hidden_session">' +
                        '<input type="hidden" value='+ select_exam + ' name="hidden_exam_type">' +
                        '<input type="hidden" value='+ subject_name + ' name="hidden_name_subject">' +
                        '<input type="hidden" value='+ total_number + ' name="hidden_total_marks">' +

                        '<div class="form-group row">' +
                            '<div class="col-xl-12"><b>' +
                        '<div class="form-group row">' +
                        '<div class="col-xl-3 text-xl-center">'+
                        '<?php echo Form::label('student_roll_no', 'Roll No', ['class' => 'form-control-label'])?>' +
                        '</div>'+
                        '<div class="col-xl-3">'+
                        '<?php echo Form::label('student_name',' Student Name ', ['class' => 'form-control-label'])?>' +
                        '</div>'+
                        '<div class="col-xl-3">'+
                        '<?php echo Form::label('father_name', ' Father Name ', ['class' => 'form-control-label'])?>' +
                        '</div>'+
                        '<div class="col-xl-3">'+
                        '<?php echo Form::label('objained_marks', 'Obtained Marks', ['class' => 'form-control-label'])?>' +
                        '</b></div>'+
                        '</div>'+
                         '<hr class="alert-info">';
                        var j = 0;
                                    for (var i = 0; i < class_students.length; i++) {
                                        j++;
                                    form_print += '<div class="form-group row">' +
                                        '<div class="col-xl-3 text-xl-center">'+
                                        '<label for="roll_no">'+class_students[i].roll_no+'</label>'+
                                        '<input type="hidden" name="roll_no'+j+'" class="form-control" value='+class_students[i].roll_no +'>' +
                                        '</div>'+
                                        '<div class="col-xl-3">'+
                                        '<label for="std_name">'+class_students[i].std_name +'</label>'+
                                        '<input type="hidden" name="student_name'+j+'" class="form-control" value='+class_students[i].std_name +'>' +
                                        '</div>'+
                                        '<div class="col-xl-3">'+
                                        '<label for="father_name">'+class_students[i].father_name +'</label>'+
                                        '<input type="hidden" name="father_name'+j+'" class="form-control" value='+class_students[i].father_name +'>' +
                                        '</div>'+
                                        '<div class="col-xl-3">'+
                                        '<input type="text" name="obtained_marks'+j+'" class="form-control" style=" max-width:100px" maxlength="3" placeholder="000" required>' +
                                        '</div>'+
                                        '</div>'+
                                        '<hr class="#f3f6db">';

                                    }

                    form_print +='</div>' +
                            '</div>' +
                        '<input type="hidden" name="j_container" value='+j+' readonly>'+
                        '<div class="form-actions form-group row">' +
                        '<div class="col-xl-12 text-xl-center">' +
                        '<input type="submit" value=" Upload Result " class="btn btn-primary upload_result">' +
                        '</div>' +
                        '</div>' +
                        '{!! Form::close() !!}';
                    $(".class-students-form").html(form_print)

                });

            }else{
                printErrorMsg(response.responseJSON.error);
            }

        }
    };

    $("body").on("click",".upload_result",function(e){
        $(this).parents("form").ajaxForm(UploadResult);
    });

    var UploadResult = {
        complete: function(response)
        {
            // console.log('well');
            if($.isEmptyObject(response.responseJSON.error)){
                swal({
                    title: "Success.",
                    text: "Result Successfully Uploaded ",
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
