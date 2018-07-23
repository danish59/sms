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
                    Register Student
                </h4>
            </div>
            <div class="col-lg-5">
                {!! Form::open(array('url'=>'/search_student','id'=>'search_student','enctype'=>'multipart/form-data','method'=>'POST')) !!}
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                </div>
                        <div class="form-group row m-t-25">
                            {{--<div class="col-xl-2 col-lg-2"></div>--}}
                            <div class="col-xl-6 col-lg-8">
                                <div class="input-group">
                                    <span class="input-group-addon"> <i class="fa fa-search text-primary"></i>
                                    </span>
                                    <input type="text" placeholder="Search by admission num  " name="adm_num" id="adm_num" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-2">
                                <div class="input-group">
                                    <button class="btn btn-primary search_student" type="submit">
                                        <i class="fa fa-search"></i>
                                        Search
                                    </button>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-2">
                                <div class="input-group">
                                    <button class="btn btn-warning" type="reset" id="clear">
                                        <i class="fa fa-refresh"></i>
                                        Reset
                                    </button>
                                </div>
                            </div>
                            {{--<div class="col-xl-2 col-lg-2"></div>--}}
                        </div>


                {!! Form::close() !!}

            </div>
            <div class="col-lg-4">
                <ol class="breadcrumb float-xs-right nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="index1.html">
                            <i class="fa fa-home" data-pack="default" data-tags=""></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Students</a>
                    </li>
                    <li class="breadcrumb-item active">Register Student</li>
                </ol>
            </div>
        </div>
    </header>
    <div class="outer bg-container" id="new_admission">
        <div class="card">
            <div class="card-block m-t-35 registration-form">
                {{--<div class="alert alert-danger print-error-msg" style="display:none">--}}
                    {{--<ul></ul>--}}
                    {{--</div>--}}
                {{--ADMISSION FORM--}}
                {{--<div>--}}
                    {{--<h4>Personal Information</h4>--}}
                {{--</div>--}}
            {{--{!! Form::open(array('url'=>'/new_admission','id'=>'admission_form','enctype'=>'multipart/form-data','method'=>'POST','class'=>'form-horizontal')) !!}--}}
                    {{--<!-- CSRF Token -->--}}
                {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}
                {{--<div class="alert alert-danger print-error-msg" style="display:none">--}}
                    {{--<ul></ul>--}}
                {{--</div>--}}
                {{--<div class="row">--}}
                    {{--<input type="hidden" name="campus_id" value="{{$data['campus_id']}}">--}}
                    {{--<div class="col-xs-6" style="border-right:dotted; border-width: thin">--}}
                        {{--<div class="form-group row m-t-25">--}}
                            {{--<div class="col-lg-4 text-lg-right">--}}
                                {{--<label for="std_f_name" class="form-control-label">First Name *</label>--}}
                            {{--</div>--}}
                            {{--<div class="col-xl-6 col-lg-8">--}}
                                {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon"> <i class="fa fa-user text-primary"></i>--}}
                                    {{--</span>--}}
                                    {{--<input type="text" placeholder="Enter Student First Name " name="std_f_name" id="std_f_name" class="form-control">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row m-t-25">--}}
                            {{--<div class="col-lg-4 text-lg-right">--}}
                                {{--<label for="std_m_name" class="form-control-label">Middle Name</label>--}}
                            {{--</div>--}}
                            {{--<div class="col-xl-6 col-lg-8">--}}
                                {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon"> <i class="fa fa-user text-primary"></i>--}}
                                    {{--</span>--}}
                                    {{--<input type="text" placeholder="Enter Student Middle Name " name="std_m_name" id="std_m_name" class="form-control">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row m-t-25">--}}
                            {{--<div class="col-lg-4 text-lg-right">--}}
                                {{--<label for="std_l_name" class="form-control-label">Last Name *</label>--}}
                            {{--</div>--}}
                            {{--<div class="col-xl-6 col-lg-8">--}}
                                {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon"> <i class="fa fa-user text-primary"></i>--}}
                                    {{--</span>--}}
                                    {{--<input type="text" placeholder="Enter Student Last Name" name="std_l_name" id="std_l_name" class="form-control">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row m-t-25">--}}
                            {{--<div class="col-lg-4 text-lg-right">--}}
                                {{--<label for="std_cnic" class="form-control-label">C.N.I.C or B-Form * </label>--}}
                            {{--</div>--}}
                            {{--<div class="col-xl-6 col-lg-8">--}}
                                {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon"> <i class="fa fa-user text-primary"></i>--}}
                                    {{--</span>--}}
                                    {{--<input type="text" placeholder="Enter CNIC or B-form Number" name="std_cnic" id="std_cnic" class="form-control">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row m-t-25">--}}
                            {{--<div class="col-lg-4 text-lg-right">--}}
                                {{--<label for="father_name" class="form-control-label">Father Name *</label>--}}
                            {{--</div>--}}
                            {{--<div class="col-xl-6 col-lg-8">--}}
                                {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon"> <i class="fa fa-user text-primary"></i>--}}
                                    {{--</span>--}}
                                    {{--<input type="text" placeholder="Enter Student Father Name" name="father_name" id="father_name" class="form-control">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row m-t-25">--}}
                            {{--<div class="col-lg-4 text-lg-right">--}}
                                {{--<label for="father_cnic" class="form-control-label">Father CNIC*</label>--}}
                            {{--</div>--}}
                            {{--<div class="col-xl-6 col-lg-8">--}}
                                {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon"> <i class="fa fa-user text-primary"></i>--}}
                                    {{--</span>--}}
                                    {{--<input type="text" placeholder="Enter Father CNIC" name="father_cnic" id="father_cnic" class="form-control">--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row m-t-25">--}}
                            {{--<div class="col-lg-4 text-lg-right">--}}
                                {{--<label for="date_birth" class="form-control-label">Date of Birth*</label>--}}
                            {{--</div>--}}
                            {{--<div class="col-xl-6 col-lg-8">--}}
                                {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon"><i class="fa fa-calendar"></i></span>--}}
                                    {{--<input type="date" class="form-control" name="date_birth" placeholder="dd/mm/yyyy" data-date-format="dd/mm/yyyy" id="dp2">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group gender_message row">--}}
                            {{--<div class="col-lg-4 text-lg-right">--}}
                                {{--<label class="form-control-label">Gender *</label>--}}
                            {{--</div>--}}
                            {{--<div class="col-xl-6 col-lg-8">--}}
                                {{--<div class="custom-controls-stacked">--}}
                                    {{--<label class="custom-control custom-radio">--}}
                                        {{--<input id="gender" type="radio" name="gender" value="Male" class="custom-control-input">--}}
                                        {{--<span class="custom-control-indicator"></span>--}}
                                        {{--<span class="custom-control-description">Male</span>--}}
                                    {{--</label>--}}
                                    {{--<label class="custom-control custom-radio">--}}
                                        {{--<input id="gender" type="radio" name="gender" value="Female" class="custom-control-input">--}}
                                        {{--<span class="custom-control-indicator"></span>--}}
                                        {{--<span class="custom-control-description">Female</span>--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row m-t-25">--}}
                            {{--<div class="col-lg-4 text-lg-right">--}}
                                {{--<label for="u-name" class="form-control-label">Religion *</label>--}}
                            {{--</div>--}}
                            {{--<div class="col-xl-6 col-lg-8">--}}
                                {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon"> <i class="fa fa-user text-primary"></i>--}}
                                    {{--</span>--}}
                                    {{--<input type="text" placeholder="Enter Religion" name="religion" id="religion" class="form-control">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row m-t-25">--}}
                            {{--<div class="col-lg-4 text-lg-right">--}}
                                {{--<label for="u-name" class="form-control-label">Cast *</label>--}}
                            {{--</div>--}}
                            {{--<div class="col-xl-6 col-lg-8">--}}
                                {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon"> <i class="fa fa-user text-primary"></i>--}}
                                    {{--</span>--}}
                                    {{--<input type="text" placeholder="Enter Cast" name="cast" id="cast" class="form-control">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-xs-6">--}}
                        {{--<div class="form-group row m-t-25">--}}
                            {{--<div class="col-lg-4 text-xs-center text-lg-right">--}}
                                {{--<label class="form-control-label">Profile Pic</label>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-6 text-xs-center text-lg-left">--}}
                                {{--<div class="fileinput fileinput-new" data-provides="fileinput">--}}
                                    {{--<div class="fileinput-new img-thumbnail text-xs-center">--}}
                                        {{--<img src="#" data-src="holder.js/100%x100%"  alt="not found" style="width:10px; height:10px; !important;"></div>--}}
                                    {{--<div class="fileinput-preview fileinput-exists img-thumbnail"></div>--}}
                                    {{--<div class="m-t-20 text-xs-center">--}}
                                                        {{--<span class="btn btn-primary btn-file">--}}
                                                            {{--<span class="fileinput-new">Select image</span>--}}
                                                            {{--<span class="fileinput-exists">Change</span>--}}
                                                            {{--<input type="file" name="std_image" id="std_image" ></span>--}}
                                        {{--<a href="#" class="btn btn-warning fileinput-exists"--}}
                                        {{--data-dismiss="fileinput">Remove</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="fileinput fileinput-new" data-provides="fileinput">--}}
                                    {{--<div class=" img-thumbnail text-xs-center">--}}
                                        {{--<img src="{{ asset('images/admin-images/profile_gallery/')}}" width="231px" height="171px" alt="not found">--}}
                                        {{--{!! Form:: hidden('previous_gallery_image8',null) !!}--}}
                                        {{--<div class="m-t-20 text-xs-center">--}}
                                            {{--<span>Previous Image</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div>--}}
                            {{--<h4>Contact Details</h4>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row">--}}
                            {{--<div class="col-lg-4 text-lg-right">--}}
                                {{--<label for="email" class="form-control-label">Email*</label>--}}
                            {{--</div>--}}
                            {{--<div class="col-xl-6 col-lg-8">--}}
                                {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon"><i class="fa fa-envelope text-primary"></i></span>--}}
                                    {{--<input type="text" placeholder="Enter Email " id="std_email" name="std_email"--}}
                                           {{--class="form-control">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row">--}}
                            {{--<div class="col-lg-4 text-lg-right">--}}
                                {{--<label for="phone" class="form-control-label">Phone--}}
                                    {{--*</label>--}}
                            {{--</div>--}}
                            {{--<div class="col-xl-6 col-lg-8">--}}
                            {{--<form class="form-horizontal" id="otp_validation">--}}
                            {{--<fieldset>--}}
                            {{--<!-- Name input-->--}}
                                {{--<div class="form-group row m-t-30">--}}
                                {{--<div class="col-xl-12 text-xs-center">--}}
                                {{--<span>--}}
                                {{--Please Enter 10 digit mobile number to receive OTP.--}}
                                {{--</span>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group row">--}}
                                    {{--<div class="col-lg-3 text-lg-right">--}}
                                    {{--<label for="onetime_password" class="form-control-label">Mobile Number</label>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-lg-8">--}}
                                        {{--<div class="input-group">--}}
                                            {{--<span class="input-group-addon"><i class="fa fa-phone text-primary"></i></span>--}}
                                            {{--<input type="tel" name="std_phone" class="form-control" id="std_phone" autocomplete="off">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group row">--}}
                                {{--<div class="col-lg-9 push-lg-3">--}}
                                {{--<button type="submit" id="confirm_tel" class="btn btn-primary">Confirm</button>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</fieldset>--}}
                                {{--</form>--}}
                                {{--<div class="col-lg-6 m-t-35 form_input_fields">--}}
                                {{--<h5>Phone</h5>--}}
                                {{--<div class="input-group">--}}
                                {{--<input id="phones" class="form-control" type="text" data-inputmask='"mask": "(999) 999-9999"' data-mask>--}}
                                {{--<span class="input-group-addon">(999) 999-9999</span>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="input-group">--}}
                                {{--<span class="input-group-addon"><i class="fa fa-phone text-primary"></i></span>--}}
                                {{--<input type="text" placeholder="Enter Phone Number " id="emp_phone" name="emp_phone"--}}
                                {{--class="form-control">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row">--}}
                            {{--<div class="col-lg-4 text-lg-right">--}}
                                {{--<label for="address" class="form-control-label">Address*</label>--}}
                            {{--</div>--}}
                            {{--<div class="col-xl-6 col-lg-8">--}}
                                {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>--}}
                                    {{--<input type="text" placeholder="Enter your Street Address "  id="address" name="address"  class="form-control">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row">--}}
                            {{--<div class="col-lg-4 text-lg-right">--}}
                                {{--<label for="city" class="form-control-label">City--}}
                                    {{--*</label>--}}
                            {{--</div>--}}
                            {{--<div class="col-xl-6 col-lg-8">--}}
                                {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>--}}
                                    {{--<input type="text" placeholder="Enter Your City " name="city" id="city" class="form-control">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row">--}}
                            {{--<div class="col-lg-4 text-lg-right">--}}
                                {{--<label for="pincode" class="form-control-label">Pincode--}}
                                {{--*</label>--}}
                                {{--<label for="pincode" class="form-control-label">Country *</label>--}}
                            {{--</div>--}}
                            {{--<div class="col-xl-6 col-lg-8">--}}
                                {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>--}}
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

                                    {{--<input type="text" placeholder=" " name="pincode" id="pincode"--}}
                                    {{--class="form-control">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row">--}}
                            {{--<div class="col-lg-4 text-lg-right">--}}
                                {{--<label for="pincode" class="form-control-label">Pincode--}}
                                {{--*</label>--}}
                                {{--<label for="position" class="form-control-label"><b>Father Occupation*</b></label>--}}
                            {{--</div>--}}
                            {{--<div class="col-xl-6 col-lg-8">--}}
                                {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>--}}
                                    {{--{!! Form:: text('profession',null,['placeholder'=>'enter profession','class'=>'form-control']) !!}--}}
                                    {{--<input type="text" placeholder=" " name="pincode" id="pincode"--}}
                                    {{--class="form-control">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row">--}}
                    {{--<div class="col-xs-12" style="border-top:dotted;border-bottom: dotted; border-width: thin">--}}
                        {{--<div>--}}
                            {{--<h4>Educational Details :</h4>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-6">--}}
                            {{--<div class="form-group row m-t-25">--}}
                                {{--<div class="col-lg-4 text-lg-right">--}}
                                    {{--<label for="class" class="form-control-label">Select Class*</label>--}}
                                {{--</div>--}}
                                {{--<div class="col-xl-6 col-lg-8">--}}
                                    {{--<div class="input-group">--}}
                                        {{--<span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>--}}
                                        {{--<select id="class" name="class" class="form-control">--}}
                                            {{--<option value="" disabled selected>Select Class</option>--}}
                                            {{--@foreach($data['classes'] as $class)--}}
                                                {{--<option value="{{$class->id}}">{{$class->class_name}}</option>--}}
                                            {{--@endforeach--}}
                                        {{--</select>--}}

                                        {{--<input type="text" placeholder=" " name="pincode" id="pincode"--}}
                                        {{--class="form-control">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group row m-t-25">--}}
                                {{--<div class="col-lg-4 text-lg-right">--}}
                                    {{--<label for="group" class="form-control-label">Select Group</label>--}}
                                {{--</div>--}}
                                {{--<div class="col-xl-6 col-lg-8">--}}
                                    {{--<div class="input-group">--}}
                                        {{--<span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>--}}
                                        {{--<select id="group" name="group" class="validate[required] form-control select2 chzn-select">--}}
                                            {{--<option value="" disabled selected>Select Group</option>--}}
                                            {{--<option value="Science">Science</option>--}}
                                            {{--<option value="Arts">Arts</option>--}}
                                        {{--</select>--}}

                                        {{--<input type="text" placeholder=" " name="pincode" id="pincode"--}}
                                        {{--class="form-control">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group row m-t-25">--}}
                                {{--<div class="col-lg-4 text-lg-right">--}}
                                    {{--<label for="hobbies" class="form-control-label">Student's interest & Hobbies:</label>--}}
                                {{--</div>--}}
                                {{--<div class="col-xl-6 col-lg-8">--}}
                                    {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon"> <i class="fa fa-user text-primary"></i>--}}
                                    {{--</span>--}}
                                        {{--<input type="text" placeholder="Enter Insitute Name" name="university_college" id="university_college" class="form-control">--}}
                                        {{--<textarea rows="3" cols="25" name="hobbies" id="hobbies" placeholder="Enter Interest/Hobbies"></textarea>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group row m-t-25">--}}
                                {{--<div class="col-lg-4 text-lg-right">--}}
                                    {{--<label for="previous_school" class="form-control-label">Name of Previous School:*</label>--}}
                                {{--</div>--}}
                                {{--<div class="col-xl-6 col-lg-8">--}}
                                    {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon"> <i class="fa fa-user text-primary"></i>--}}
                                    {{--</span>--}}
                                        {{--<input type="text" name="passing_year" class="form-control" id="date_range" placeholder="dd/mm/yyyy-dd/mm/yyyy">--}}
                                        {{--<textarea rows="3" cols="25" name="previous_school" id="previous_school" size="30px" placeholder="Enter name of previous school"></textarea>&nbsp;&nbsp;&nbsp;--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group row m-t-25">--}}
                            {{--<div class="col-lg-4 text-lg-right">--}}
                            {{--<label for="u-name" class="form-control-label">Experience(If any) </label>--}}
                            {{--</div>--}}
                            {{--<div class="col-xl-6 col-lg-8">--}}
                            {{--<div class="input-group">--}}
                            {{--<span class="input-group-addon"> <i class="fa fa-user text-primary"></i>--}}
                            {{--</span>--}}
                            {{--<input type="text"  name="experience" id="experience" class="form-control" placeholder="enter institute name,designation">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group row m-t-25">--}}
                            {{--<div class="col-lg-4 text-lg-right">--}}
                            {{--<label for="u-name" class="form-control-label">Duration </label>--}}
                            {{--</div>--}}
                            {{--<div class="col-xl-6 col-lg-8">--}}
                            {{--<div class="input-group">--}}
                            {{--<span class="input-group-addon"> <i class="fa fa-calendar"></i>--}}
                            {{--</span>--}}
                            {{--<input type="text" name="duration" class="form-control" id="reportrange" placeholder="dd/mm/yyyy-dd/mm/yyyy">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div class="col-xs-6">--}}
                            {{--<div class="form-group row m-t-25">--}}
                                {{--<div class="col-lg-5 text-lg-right">--}}
                                    {{--<label for="u-name" class="form-control-label">Name with classes of other Brother & sister in this School: </label>--}}
                                {{--</div>--}}
                                {{--<div class="col-xl-6 col-lg-7">--}}
                                    {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon"> <i class=" text-primary">1)</i>--}}
                                    {{--</span>--}}
                                        {{--<input type="text" placeholder="Enter 1st certification title " name="certificates_coureses1" id="certificates_coureses1" class="form-control">--}}
                                        {{--<textarea rows="3" cols="25" name="brother_sister1" id="brother_sister1" size="30px" placeholder="Enter name 1 of other brother/sister"></textarea>--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group row m-t-25">--}}
                                {{--<div class="col-lg-5 text-lg-right"></div>--}}
                                {{--<div class="col-xl-6 col-lg-7">--}}
                                    {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon"> <i class=" text-primary">2)</i>--}}
                                    {{--</span>--}}
                                        {{--<input type="text" placeholder="Enter 2nd certification title " name="certificates_coureses2" id="certificates_coureses2" class="form-control">--}}
                                        {{--<textarea rows="3" cols="25" name="brother_sister2" id="brother_sister2" size="30px" placeholder="Enter name 2 of other brother/sister"></textarea>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group row m-t-25">--}}
                                {{--<div class="col-lg-5 text-lg-right"></div>--}}
                                {{--<div class="col-xl-6 col-lg-7">--}}
                                    {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon"> <i class=" text-primary">3)</i>--}}
                                    {{--</span>--}}
                                        {{--<input type="text" placeholder="Enter 3rd certification title " name="certificates_coureses3" id="certificates_coureses3" class="form-control">--}}
                                        {{--<textarea rows="3" cols="25" name="brother_sister3" id="brother_sister3" size="30px" placeholder="Enter name 3 of other brother/sister"></textarea>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group row m-t-25">--}}
                            {{--<div class="col-lg-5 text-lg-right">--}}
                            {{--<label for="u-name" class="form-control-label">Computer/Other skils </label>--}}
                            {{--</div>--}}
                            {{--<div class="col-xl-6 col-lg-7">--}}
                            {{--<div class="input-group">--}}
                            {{--<span class="input-group-addon"> <i class=" text-primary">1)</i>--}}
                            {{--</span>--}}
                            {{--<input type="text" placeholder="Enter 1st skil " name="skil1" id="skil1" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group row m-t-25">--}}
                            {{--<div class="col-lg-5 text-lg-right"></div>--}}
                            {{--<div class="col-xl-6 col-lg-7">--}}
                            {{--<div class="input-group">--}}
                            {{--<span class="input-group-addon"> <i class=" text-primary">2)</i>--}}
                            {{--</span>--}}
                            {{--<input type="text" placeholder="Enter 2nd skil " name="skil2" id="skil2" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group row m-t-25">--}}
                            {{--<div class="col-lg-5 text-lg-right"></div>--}}
                            {{--<div class="col-xl-6 col-lg-7">--}}
                            {{--<div class="input-group">--}}
                            {{--<span class="input-group-addon"> <i class=" text-primary">3)</i>--}}
                            {{--</span>--}}
                            {{--<input type="text" placeholder="Enter 3rd skil " name="skil3" id="skil3" class="form-control">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group row">--}}

                {{--</div>--}}
                {{--<div class="form-group row">--}}
                    {{--<div class="col-lg-2"></div>--}}
                    {{--<div class=" col-lg-10 add_user_checkbox_error push-lg-3">--}}
                        {{--<div>--}}
                            {{--<label class="custom-control custom-checkbox">--}}
                                {{--<input id="checkbox1" type="checkbox" name="check_active" value="1" class="custom-control-input">--}}
                                {{--<span class="custom-control-indicator"></span>--}}
                                {{--<span class="custom-control-description">Activate User Account</span>--}}
                            {{--</label>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group row">--}}
                    {{--<div class="col-lg-4 col-xs-2"></div>--}}
                    {{--<div class="col-lg-2 col-xs-12">--}}
                        {{--<button class="btn btn-primary upload-image" type="submit">--}}
                            {{--<i class="fa fa-user"></i>--}}
                            {{--Register--}}
                        {{--</button>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-2 col-xs-12">--}}
                        {{--<button class="btn btn-warning" type="reset" id="clear">--}}
                            {{--<i class="fa fa-refresh"></i>--}}
                            {{--Reset--}}
                        {{--</button>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-4 col-xs-2"></div>--}}
                {{--</div>--}}
                {{--{!! Form::close() !!}--}}
                {{--</form>--}}
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
    $("body").on("click",".search_student",function(e){
        $(this).parents("form").ajaxForm(search_std);
    });
    var search_std = {
        complete: function(response)
        {
            if($.isEmptyObject(response.responseJSON.error)){

                var total_fee = parseInt(response.responseJSON[0].admission_fee) + parseInt(response.responseJSON[0].monthly_fee) + parseInt(response.responseJSON[0].annual_funds_others);
//                var ser_address = response.responseJSON[0].address;
//                var address = (ser_address);
//                console.log(ser_address);
//                alert(address);
//                jQuery("#new_admission").show(function () {
                $(".registration-form").html('ADMISSION FORM'+
                    '<div>'+
                    '<h4>Personal Information</h4>'+
                    '</div>'+
                    '{!! Form::open(array('url'=>'/new_registration','id'=>'new_admission','enctype'=>'multipart/form-data','method'=>'POST','class'=>'form-horizontal')) !!}' +
//                    '<div class="alert alert-danger print-reg-error-msg" style="display:none">'+
//                    '<ul></ul>'+
//                    '</div>'+
                    '<input type="hidden" value='+response.responseJSON[0].campus_id+' name="campus_id" id="campus_id" class="form-control">'+
                    '<input type="hidden" value='+response.responseJSON[0].class_id+' name="class_id" id="class_id" class="form-control">'+
                    '<div class="row">'+
                    '<div class="col-xs-6" style="border-right:dotted; border-width: thin">'+
                    '<div class="form-group row m-t-25">'+
                    '<div class="col-lg-4 text-lg-right">'+
                    '<label for="std_f_name" class="form-control-label">First Name *</label>'+
                    '</div>'+
                    '<div class="col-xl-6 col-lg-8">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"> <i class="fa fa-user text-primary"></i>'+
                    '</span>'+
                    '<input type="text" value='+response.responseJSON[0].std_f_name+' name="std_f_name" id="std_f_name" class="form-control" readonly>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="form-group row m-t-25">'+
                    '<div class="col-lg-4 text-lg-right">'+
                    '<label for="std_m_name" class="form-control-label">Middle Name</label>'+
                    '</div>'+
                    '<div class="col-xl-6 col-lg-8">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"> <i class="fa fa-user text-primary"></i>'+
                    '</span>'+
                    '<input type="text" value='+response.responseJSON[0].std_m_name+' name="std_m_name" id="std_m_name" class="form-control" readonly>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+

                    '<div class="form-group row m-t-25">'+
                    '<div class="col-lg-4 text-lg-right">'+
                    '<label for="std_l_name" class="form-control-label">Last Name *</label>'+
                    '</div>'+
                    '<div class="col-xl-6 col-lg-8">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"> <i class="fa fa-user text-primary"></i>'+
                    '</span>'+
                    '<input type="text" value='+response.responseJSON[0].std_l_name+' name="std_l_name" id="std_l_name" class="form-control" readonly>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="form-group row m-t-25">'+
                    '<div class="col-lg-4 text-lg-right">'+
                    '<label for="std_cnic" class="form-control-label">C.N.I.C or B-Form * </label>'+
                    '</div>'+
                    '<div class="col-xl-6 col-lg-8">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"> <i class="fa fa-user text-primary"></i>'+
                    '</span>'+
                    '<input type="text" value='+response.responseJSON[0].std_cnic+' name="std_cnic" id="std_cnic" class="form-control" readonly>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="form-group row m-t-25">'+
                    '<div class="col-lg-4 text-lg-right">'+
                    '<label for="father_name" class="form-control-label">Father Name *</label>'+
                    '</div>'+
                    '<div class="col-xl-6 col-lg-8">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"> <i class="fa fa-user text-primary"></i>'+
                    '</span>'+
                    '<input type="text" value='+response.responseJSON[0].father_name+' name="father_name" id="father_name" class="form-control" readonly>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="form-group row m-t-25">'+
                    '<div class="col-lg-4 text-lg-right">'+
                    '<label for="father_cnic" class="form-control-label">Father CNIC*</label>'+
                    '</div>'+
                    '<div class="col-xl-6 col-lg-8">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"> <i class="fa fa-user text-primary"></i>'+
                    '</span>'+
                    '<input type="text" value='+response.responseJSON[0].father_cnic+' name="father_cnic" id="father_cnic" class="form-control" readonly>'+
                    '</div>'+

                    '</div>'+
                    '</div>'+
                    '<div class="form-group row m-t-25">'+
                    '<div class="col-lg-4 text-lg-right">'+
                    '<label for="date_birth" class="form-control-label">Date of Birth*</label>'+
                    '</div>'+
                    '<div class="col-xl-6 col-lg-8">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"><i class="fa fa-calendar"></i></span>'+
                    '<input type="date" value='+response.responseJSON[0].date_birth+' class="form-control" name="date_birth" data-date-format="dd/mm/yyyy" id="dp2" readonly>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="form-group row m-t-25">'+
                    '<div class="col-lg-4 text-lg-right">'+
                    '<label for="gender" class="form-control-label">Gender*</label>'+
                    '</div>'+
                    '<div class="col-xl-6 col-lg-8">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"><i class="fa fa-user text-primary"></i></span>'+
                    '<input type="text" value='+response.responseJSON[0].gender+' class="form-control" name="gender" id="gender" readonly>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="form-group row m-t-25">'+
                    '<div class="col-lg-4 text-lg-right">'+
                    '<label for="u-name" class="form-control-label">Religion *</label>'+
                    '</div>'+
                    '<div class="col-xl-6 col-lg-8">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"> <i class="fa fa-user text-primary"></i>'+
                    '</span>'+
                    '<input type="text" value='+response.responseJSON[0].religion+' name="religion" id="religion" class="form-control" readonly>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="form-group row m-t-25">'+
                    '<div class="col-lg-4 text-lg-right">'+
                    '<label for="u-name" class="form-control-label">Cast *</label>'+
                    '</div>'+
                    '<div class="col-xl-6 col-lg-8">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"> <i class="fa fa-user text-primary"></i>'+
                    '</span>'+
                    '<input type="text" value='+response.responseJSON[0].cast+' name="cast" id="cast" class="form-control" readonly>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+

                    '<div class="col-xs-6">'+
                    '<div class="form-group row m-t-25">'+
                    '<div class="col-lg-4 text-xs-center text-lg-right">'+
                    '<label class="form-control-label">Student Image</label>'+
                    '</div>'+
                    '<div class="col-lg-6 text-xs-center text-lg-left">'+
                    '<div class="fileinput fileinput-new" data-provides="fileinput">'+
                    '<div class=" img-thumbnail text-xs-center">'+
                    '<img src="/images/std-images/'+response.responseJSON[0].std_image+'" width="231px" height="171px" alt="not found">'+
                    '<input type="hidden" value='+response.responseJSON[0].std_image+' id="std_image" name="std_image">'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div>'+
                    '<h4>Contact Details</h4>'+
                    '</div>'+
                    '<div class="form-group row">'+
                    '<div class="col-lg-4 text-lg-right">'+
                    '<label for="email" class="form-control-label">Email*</label>'+
                    '</div>'+
                    '<div class="col-xl-6 col-lg-8">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"><i class="fa fa-envelope text-primary"></i></span>'+
                    '<input type="text" value='+response.responseJSON[0].std_email+' id="std_email" name="std_email"class="form-control" readonly>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="form-group row">'+
                    '<div class="col-lg-4 text-lg-right">'+
                    '<label for="phone" class="form-control-label">Phone *</label>'+
                    '</div>'+
                    '<div class="col-xl-6 col-lg-8">'+
                    '<div class="form-group row">'+
                    '<div class="col-lg-8">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"><i class="fa fa-phone text-primary"></i></span>'+
                    '<input type="tel" value="'+response.responseJSON[0].std_phone+'" name="std_phone" class="form-control" id="std_phone" autocomplete="off" readonly>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="form-group row">'+
                    '<div class="col-lg-4 text-lg-right">'+
                    '<label for="address" class="form-control-label">Street Address*</label>'+
                    '</div>'+
                    '<div class="col-xl-6 col-lg-8">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>'+
                    '<textarea rows="3" cols="25" name="street" id="street" size="30px" value="'+ response.responseJSON[0].address.street +'" readonly>'+ response.responseJSON[0].address.street +'</textarea>'+
//                    '<input type="text" value="'+response.responseJSON[0].address.street+'"  id="street" name="address"  class="form-control">'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="form-group row">'+
                    '<div class="col-lg-4 text-lg-right">'+
                    '<label for="city" class="form-control-label">City *</label>'+
                    '</div>'+
                    '<div class="col-xl-6 col-lg-8">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>'+
                    '<input type="text" value='+response.responseJSON[0].address.city+' name="city" id="city" class="form-control" readonly>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="form-group row">'+
                    '<div class="col-lg-4 text-lg-right">'+
                    '<label for="pincode" class="form-control-label">Country *</label>'+
                    '</div>'+
                    '<div class="col-xl-6 col-lg-8">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>'+
                    '<input type="text" value='+response.responseJSON[0].address.country+' name="country" id="country" class="form-control" readonly>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="form-group row">'+
                    '<div class="col-lg-4 text-lg-right">'+
                    '<label for="position" class="form-control-label"><b>Father Occupation*</b></label>'+
                    '</div>'+
                    '<div class="col-xl-6 col-lg-8">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>'+
                    '<input type="text" value='+response.responseJSON[0].profession+' name="profession" id="profession" class="form-control" readonly>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="row">'+
                    '<div class="col-xs-12" style="border-top:dotted;border-bottom: dotted; border-width: thin">'+
                    '<div>'+
                    '<h4>Educational Details :</h4>'+
                    '</div>'+
                    '<div class="col-xs-6">'+
                    '<div class="form-group row m-t-25">'+
                    '<div class="col-lg-4 text-lg-right">'+
                    '<label for="class" class="form-control-label">Class*</label>'+
                    '</div>'+
                    '<div class="col-xl-6 col-lg-8">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>'+
                    '<input type="text" value='+response.responseJSON[0].class_name+' name="class" id="class" class="form-control" readonly>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="form-group row m-t-25">'+
                    '<div class="col-lg-4 text-lg-right">'+
                    '<label for="group" class="form-control-label">Group</label>'+
                    '</div>'+
                    '<div class="col-xl-6 col-lg-8">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>'+
                    '<input type="text" value='+response.responseJSON[0].group+' name="group" id="goup" class="form-control" readonly>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="form-group row m-t-25">'+
                    '<div class="col-lg-4 text-lg-right">'+
                    '<label for="hobbies" class="form-control-label">Student hobbies</label>'+
                    '</div>'+
                    '<div class="col-xl-6 col-lg-8">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"> <i class="fa fa-user text-primary"></i>'+
                    '</span>'+
                    '<textarea rows="3" cols="25" name="hobbies" id="hobbies" value='+response.responseJSON[0].hobbies+' readonly></textarea>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="form-group row m-t-25">'+
                    '<div class="col-lg-4 text-lg-right">'+
                    '<label for="previous_school" class="form-control-label">Name of Previous School:*</label>'+
                    '</div>'+
                    '<div class="col-xl-6 col-lg-8">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"> <i class="fa fa-user text-primary"></i>'+
                    '</span>'+
                    '<textarea rows="3" cols="25" name="previous_school" id="previous_school" size="30px" value='+response.responseJSON[0].previous_school+' readonly></textarea>&nbsp;&nbsp;&nbsp;'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="col-xs-6">'+
                    '<div class="form-group row m-t-25">'+
                    '<div class="col-lg-5 text-lg-right">'+
                    '<label for="u-name" class="form-control-label">Name with classes of other Brother & sister in this School: </label>'+
                    '</div>'+
                    '<div class="col-xl-6 col-lg-7">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"> <i class=" text-primary">1)</i>'+
                    '</span>'+
                    '<textarea rows="3" cols="25" name="brother_sister1" id="brother_sister1" size="30px" value='+response.responseJSON[0].brother_sister1+' readonly></textarea>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="form-group row m-t-25">'+
                    '<div class="col-lg-5 text-lg-right"></div>'+
                    '<div class="col-xl-6 col-lg-7">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"> <i class=" text-primary">2)</i>'+
                    '</span>'+
                    '<textarea rows="3" cols="25" name="brother_sister2" id="brother_sister2" size="30px" value='+response.responseJSON[0].brother_sister2+' readonly></textarea>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="form-group row m-t-25">'+
                    '<div class="col-lg-5 text-lg-right"></div>'+
                    '<div class="col-xl-6 col-lg-7">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"> <i class=" text-primary">3)</i>'+
                    '</span>'+
                    '<textarea rows="3" cols="25" name="brother_sister3" id="brother_sister3" size="30px" value='+response.responseJSON[0].brother_sister3+' readonly></textarea>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="row">'+
                    '<div class="col-xs-12" style="border-top:dotted;border-bottom: dotted; border-width: thin">'+
                    '<div>'+
                    '<h4>Fee Voucher :</h4>'+
                    '</div>'+
                    '<div class="col-xs-6">'+
                    '<div class="form-group row m-t-25">'+
                    '<div class="col-lg-4 text-lg-right">'+
                    '<label for="admission_fee" class="form-control-label">Admission Fee*</label>'+
                    '</div>'+
                    '<div class="col-xl-6 col-lg-8">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>'+
                    '<input type="text" value='+response.responseJSON[0].admission_fee+' name="admission_fee" id="admission_fee" class="form-control" readonly>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="form-group row m-t-25">'+
                    '<div class="col-lg-4 text-lg-right">'+
                    '<label for="monthly_fee" class="form-control-label">Monthly Fee</label>'+
                    '</div>'+
                    '<div class="col-xl-6 col-lg-8">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>'+
                    '<input type="text" value='+response.responseJSON[0].monthly_fee+' name="monthly_fee" id="monthly_fee" class="form-control" readonly>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="form-group row m-t-25">'+
                    '<div class="col-lg-4 text-lg-right">'+
                    '<label for="session" class="form-control-label">Select Session:</label>'+
                    '</div>'+
                    '<div class="col-xl-6 col-lg-8">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"><i class="fa fa-calendar text-primary"></i></span>'+
                    '<input type="date" name="session_from" id="session_from" class="form-control" placeholder="dd/mm/yyyy">'+
                    '</div>'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon">'+
                    '<i class="fa fa-calendar text-primary"></i>'+
                    '</span>'+
                    '<input type="date" class="form-control" id="session_to" name="session_to" placeholder="dd/mm/yyyy">'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+

                    '<div class="col-xs-6">'+
                    '<div class="form-group row m-t-25">'+
                    '<div class="col-lg-4 text-lg-right">'+
                    '<label for="annual_funds_others" class="form-control-label">Annual Funds & Others*</label>'+
                    '</div>'+
                    '<div class="col-xl-6 col-lg-8">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>'+
                    '<input type="text" value='+response.responseJSON[0].annual_funds_others+' name="annual_funds_others" id="annual_funds_others" class="form-control" readonly>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="form-group row m-t-25">'+
                    '<div class="col-lg-4 text-lg-right">'+
                    '<label for="total_fee" class="form-control-label">Total Fee:</label>'+
                    '</div>'+
                    '<div class="col-xl-6 col-lg-8">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>'+
                    '<input type="text" value='+total_fee+' name="total_fee" id="total_fee" class="form-control" readonly>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="form-group row m-t-25">'+
                    '<div class="col-lg-4 text-lg-right">'+
                    '<label for="monthly_concession" class="form-control-label">Monthly Concession:</label>'+
                    '</div>'+
                    '<div class="col-xl-6 col-lg-8">'+
                    '<div class="input-group">'+
                    '<span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>'+
                    '<input type="text" name="monthly_concession" id="monthly_concession" class="form-control">'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+

                    '</div>'+
                    '</div>'+


                    '<div class="form-group row">'+
                    '</div>'+
                    '<div class="form-group row">'+
                    '<div class="col-lg-2"></div>'+
                    '<div class=" col-lg-10 add_user_checkbox_error push-lg-3">'+
                    '<div>'+
                    '<label class="custom-control custom-checkbox">'+
                    '<input id="checkbox1" type="checkbox" name="check_active" value="1" class="custom-control-input">'+
                    '<span class="custom-control-indicator"></span>'+
                    '<span class="custom-control-description">Activate User Account</span>'+
                    '</label>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="form-group row">'+
                    '<div class="col-lg-4 col-xs-2"></div>'+
                    '<div class="col-lg-2 col-xs-12">'+
                    '<button class="btn btn-primary new_admission" type="submit">'+
                    '<i class="fa fa-user"></i>Register</button>'+
                    '</div>'+
                    '<div class="col-lg-2 col-xs-12">'+
                    '<button class="btn btn-warning" type="reset" id="clear">'+
                    '<i class="fa fa-refresh"></i>Reset</button>'+
                    '</div>'+
                    '<div class="col-lg-4 col-xs-2"></div>'+
                    '</div>'+
                    '</form>');
                {{--'{!! Form::close() !!}');--}}
                //                });

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