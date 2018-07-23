@extends('layouts.admin_dashboard_layout')
@push('styles')
<!------radio chekbox plugin start----->
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/bootstrap-switch/css/bootstrap-switch.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/switchery/css/switchery.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/radio_css/css/radiobox.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/checkbox_css/css/checkbox.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/pages/radio_checkbox.css')}}"/>
<!------radio chekbox plugin end----->

<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/inputlimiter/css/jquery.inputlimiter.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/chosen/css/chosen.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/jquery-tagsinput/css/jquery.tagsinput.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/daterangepicker/css/daterangepicker.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/datepicker/css/bootstrap-datepicker.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/bootstrap-switch/css/bootstrap-switch.min.css')}}"/>
{{--<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/jasny-bootstrap/css/jasny-bootstrap.min.css')}}"/>--}}
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/fileinput/css/fileinput.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/pages/form_elements.css')}}"/>
<!----form elements end--->
<!--validation Plugin styles-->
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/bootstrapvalidator/css/bootstrapValidator.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/jasny-bootstrap/css/jasny-bootstrap.min.css')}}"/>
@endpush
@section('content')


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <header class="head">
        <div class="main-bar row">
            <div class="col-lg-6">
                <h4 class="nav_top_align skin_txt">
                    <i class="fa fa-user"></i>
                    Manage Profile
                </h4>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb float-xs-right nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="index1.html">
                            <i class="fa fa-home" data-pack="default" data-tags=""></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/manage_profile">Manage Profile</a>
                    </li>
                    <li class="breadcrumb-item active">Profile Details</li>
                </ol>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">

                <div class="card-block m-t-35">
                    <div>
                        <h4>Profile Details</h4>
                        <h5>Fields with ** will be show publically on your website page and * fields dont show publically and will be secure as your priveate info. </h5>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        {{--<img src="images/{{ Session::get('image') }}">--}}
                    @endif
                    {!! Form::open(array('url'=>'/edit_profile','enctype'=>'multipart/form-data','method'=>'POST')) !!}
                    {{--{!! Form::open(array('class'=>'ajax','url'=>'/add_newitem','enctype'=>'multipart/form-data','id'=>'item_form', 'files' => true)) !!}--}}

                <!-- CSRF Token -->
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    {{--@if($errors->any())--}}
                    {{--<div class="alert alert-danger">--}}
                    {{--@foreach($errors->all() as $error)--}}
                    {{--<p>{{$error}}</p>--}}
                    {{--@endforeach--}}
                    {{--</div>--}}
                    {{--@endif--}}
                    <div class="alert alert-danger print-error-msg" style="display:none">
                        <ul></ul>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group row m-t-25">
                                <div class="col-lg-4 text-xs-center text-lg-right">
                                    <label class="form-control-label">Logo Pic **</label>
                                </div>
                                {{--<img src="{{ asset('/public/images/design_images/'.$editable_item->image)}}" data-src="holder.js/100%x100%"  alt="not found">--}}
                                {{--{{dd(asset('/images/design_images/'.$editable_item->image))}}--}}
                                <div class="col-lg-4 text-xs-center text-lg-left">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new img-thumbnail text-xs-center">
                                            {{--<img src="{{ asset('images/design_images/'.$editable_item->image)}}" width="250px" height="250px">--}}
                                            <img src="#" data-src="holder.js/100%x100%"  alt="not found"></div>
                                        <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
                                        <div class="m-t-20 text-xs-center">
                                                        <span class="btn btn-primary btn-file">
                                                            <span class="fileinput-new">Select New Image</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            <input type="file" name="logo_image" id="logo_image"></span>
                                            <a href="#" class="btn btn-warning fileinput-exists"
                                               data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-xs-center text-lg-left">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class=" img-thumbnail text-xs-center">
                                            <img src="{{ asset('images/admin-images/profile_images/'.$editable_profile->image)}}" width="231px" height="171px" alt="not found">
                                            {!! Form:: hidden('previous_image',$editable_profile->image) !!}
                                            <div class="m-t-20 text-xs-center">
                                                            <span>Previous Image</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="school_name" class="form-control-label">Institute Name **</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    {!! Form:: hidden('id',$editable_profile->id) !!}

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-long-arrow-up text-primary"></i></span>
                                        {!! Form:: text('school_name',$editable_profile->school_name,['placeholder'=>'Enter Institute name','class'=>'form-control','id'=>'school_name']) !!}
                                        {{--<input type="text" placeholder="Enter brand name " id="brand_name" name="brand_name"--}}
                                        {{--class="form-control">--}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="abrevation" class="form-control-label">Institute Abrevation **</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-digg text-primary"></i></span>
                                        {!! Form:: text('abrevation',$editable_profile->school_abrevation,['placeholder'=>'Enter institute abrevation','class'=>'form-control','id'=>'abrevation']) !!}
                                        {{--<input type="text" placeholder="Enter Code/volume number" id="item_code" name="item_code" class="form-control">--}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="address" class="form-control-label">Reg Institute Name *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                        {!! Form:: text('reg_school_name',$editable_profile->reg_school_name,['placeholder'=>'Enter register school name','class'=>'form-control','id'=>'reg_school_name']) !!}
                                        {{--<input type="text" placeholder="Enter price"  id="item_price" name="item_price"  class="form-control">--}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="address" class="form-control-label">Reg No# *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                        {!! Form:: text('reg_no',$editable_profile->reg_no,['placeholder'=>'Enter registeration Number','class'=>'form-control','id'=>'reg_no']) !!}
                                        {{--<input type="text" placeholder="Enter price"  id="item_price" name="item_price"  class="form-control">--}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="address" class="form-control-label">Affiliation **</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                        {!! Form:: text('board_name',$editable_profile->affiliation,['placeholder'=>'Enter board name','class'=>'form-control','id'=>'board_name']) !!}
                                        {{--<input type="text" placeholder="Enter price"  id="item_price" name="item_price"  class="form-control">--}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="no_students" class="form-control-label">Total Students **</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                        {!! Form:: text('no_students',$editable_profile->total_students ,['placeholder'=>'Enter total students ','class'=>'form-control','id'=>'no_students']) !!}
                                        {{--<input type="text" placeholder="Enter price"  id="item_price" name="item_price"  class="form-control">--}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="no_teachers" class="form-control-label">Total Teachers **</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                        {!! Form:: text('no_teachers',$editable_profile->total_teachers ,['placeholder'=>'Enter total teachers','class'=>'form-control','id'=>'no_teachers']) !!}
                                        {{--<input type="text" placeholder="Enter price"  id="item_price" name="item_price"  class="form-control">--}}
                                    </div>
                                </div>
                            </div>
                            <?php
                            $address = $editable_profile['address'];
                            $add = unserialize($address);
                            ?>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="address" class="form-control-label">Address **</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                        {!! Form:: text('office',$add['office'] ,['placeholder'=>'Enter street address ','class'=>'form-control','id'=>'office']) !!}
                                        {{--<input type="text" placeholder="Enter price"  id="item_price" name="item_price"  class="form-control">--}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="city" class="form-control-label"> **</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                        {!! Form:: text('city',$add['city'] ,['placeholder'=>'Enter city name','class'=>'form-control','id'=>'city']) !!}
                                        {{--<input type="text" placeholder="Enter price"  id="item_price" name="item_price"  class="form-control">--}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="country" class="form-control-label"> **</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                        {!! Form:: text('country',$add['country'],['placeholder'=>'Enter country name','class'=>'form-control','id'=>'country']) !!}
                                        {{--<input type="text" placeholder="Enter price"  id="item_price" name="item_price"  class="form-control">--}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="phone_office" class="form-control-label">Phone Office **</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                        {!! Form:: text('phone_office',$editable_profile->phone_office ,['placeholder'=>'Enter phone office ','class'=>'form-control','id'=>'phone_office']) !!}
                                        {{--<input type="text" placeholder="Enter price"  id="item_price" name="item_price"  class="form-control">--}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="phone_home" class="form-control-label">Phone Home *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                        {!! Form:: text('phone_home',$editable_profile->phone_home,['placeholder'=>'Enter phone home','class'=>'form-control','id'=>'phone_home']) !!}
                                        {{--<input type="text" placeholder="Enter price"  id="item_price" name="item_price"  class="form-control">--}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="email" class="form-control-label">Email **</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                        {!! Form:: text('email',$editable_profile->email ,['placeholder'=>'Enter email address','class'=>'form-control','id'=>'email']) !!}
                                        {{--<input type="text" placeholder="Enter price"  id="item_price" name="item_price"  class="form-control">--}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="owner_name" class="form-control-label">Owner Name **</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                        {!! Form:: text('owner_name',$editable_profile->owner_name,['placeholder'=>'Enter owner name ','class'=>'form-control','id'=>'owner_name']) !!}
                                        {{--<input type="text" placeholder="Enter price"  id="item_price" name="item_price"  class="form-control">--}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="owner_father" class="form-control-label">Owner Father Name *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                        {!! Form:: text('owner_father',$editable_profile->owner_father_name ,['placeholder'=>'Enter owner father ','class'=>'form-control','id'=>'owner_father']) !!}
                                        {{--<input type="text" placeholder="Enter price"  id="item_price" name="item_price"  class="form-control">--}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="owner_gender" class="form-control-label">Owner Gender *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        {{--<span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>--}}
                                        {!! Form::select('owner_gender',array(''=>'---select---','Male'=>'Male','Female'=>'Female'),['class'=>'form-control','id'=>'owner_gender']) !!}
                                        {{--{!! Form:: text('owner_gender',$editable_item->owner_gender ,['placeholder'=>'Enter ','class'=>'form-control','id'=>'']) !!}--}}
                                        {{--<input type="text" placeholder="Enter price"  id="item_price" name="item_price"  class="form-control">--}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="owner_cnic" class="form-control-label">Owner Cnic *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                        {!! Form:: text('owner_cnic',$editable_profile->owner_cnic ,['placeholder'=>'Enter owner cnic ','class'=>'form-control','id'=>'owner_cnic']) !!}
                                        {{--<input type="text" placeholder="Enter price"  id="item_price" name="item_price"  class="form-control">--}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="owner_cell" class="form-control-label">Owner Cell *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                        {!! Form:: text('owner_cell',$editable_profile->owner_cell ,['placeholder'=>'Enter ','class'=>'form-control','id'=>'owner_cell']) !!}
                                        {{--<input type="text" placeholder="Enter price"  id="item_price" name="item_price"  class="form-control">--}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="principle_name" class="form-control-label">Principle Name **</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                        {!! Form:: text('principle_name',$editable_profile->principle_name ,['placeholder'=>'Enter principle name','class'=>'form-control','id'=>'principle_name']) !!}
                                        {{--<input type="text" placeholder="Enter price"  id="item_price" name="item_price"  class="form-control">--}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="principle_father" class="form-control-label">Principle Father Name *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                        {!! Form:: text('principle_father',$editable_profile->principle_father_name ,['placeholder'=>'Enter principle father name','class'=>'form-control','id'=>'principle_father']) !!}
                                        {{--<input type="text" placeholder="Enter price"  id="item_price" name="item_price"  class="form-control">--}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="principle_gender" class="form-control-label">Principle Gender *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        {{--<span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>--}}
                                        {!! Form::select('principle_gender',array(''=>'---select---','Male'=>'Male','Female'=>'Female'),['class'=>'form-control','id'=>'principle_gender']) !!}
                                        {{--{!! Form:: text('principle_gender',$editable_item->principle_gender ,['placeholder'=>'Enter principle gender','class'=>'form-control','id'=>'principle_gender']) !!}--}}
                                        {{--<input type="text" placeholder="Enter price"  id="item_price" name="item_price"  class="form-control">--}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="principle_cnic" class="form-control-label">Principle Cnic *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                        {!! Form:: text('principle_cnic',$editable_profile->principle_cnic ,['placeholder'=>'Enter ','class'=>'form-control','id'=>'principle_cnic']) !!}
                                        {{--<input type="text" placeholder="Enter price"  id="item_price" name="item_price"  class="form-control">--}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="principle_cell" class="form-control-label">Principle Cell *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                        {!! Form:: text('principle_cell',$editable_profile->principle_cell ,['placeholder'=>'Enter ','class'=>'form-control','id'=>'principle_cell']) !!}
                                        {{--<input type="text" placeholder="Enter price"  id="item_price" name="item_price"  class="form-control">--}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="school_level" class="form-control-label">Institute Level *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        {{--<span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>--}}
                                        {!! Form::select('school_level',array(''=>'---select---','International'=>'International','National'=>'National','Provisional'=>'Provisional','Distric'=>'Distric','Tehsil'=>'Tehsil'),['class'=>'form-control','id'=>'school_level']) !!}
                                        {{--{!! Form:: text('item_price',$editable_item-> ,['placeholder'=>'Enter ','class'=>'form-control','id'=>'']) !!}--}}
                                        {{--<input type="text" placeholder="Enter price"  id="item_price" name="item_price"  class="form-control">--}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    {!! Form::label('location', 'Location * :  ') !!}
                                </div>
                                <div class="col-xl-2 col-lg-4 col-xs-12" >
                                    <div class="radio disabled">
                                        <label class="text-success">
                                            <input type="radio" name="location" value="Urban" >
                                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                            <b>Urban</b>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-1 col-lg-3 col-xs-12" >
                                    <div class="radio">
                                        <label class="text-info">
                                            <input type="radio" name="location" value="Rural" >
                                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                            <b>Rural</b>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    {!! Form::label('build_status', 'Building Status * :  ') !!}
                                </div>
                                <div class="col-xl-2 col-lg-4 col-xs-12" >
                                    <div class="radio disabled">
                                        <label class="text-success">
                                            <input type="radio" name="build_status" value="Owned" >
                                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                            <b>Owned</b>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-xs-12" >
                                    <div class="radio">
                                        <label class="text-info">
                                            <input type="radio" name="build_status" value="Rented" >
                                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                            <b>Rented</b>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    {!! Form::label('level_education[]', 'Level Education * :  ') !!}
                                </div>
                                <div class="col-xl-2 col-xs-12" >
                                    <div class="form-group custom-controls-stacked">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="level_education[]" value="Primary">
                                            <span class="custom-control-indicator custom_checkbox_primary"></span>
                                            <span class="custom-control-description text-primary">Primary</span>
                                        </label>
                                    </div>
                                    {{--<div class="radio disabled">--}}
                                        {{--<label class="text-success">--}}
                                            {{--<input type="chekbox" name="level_education[]" value="Primary" >--}}
                                            {{--<span class="cr"><i class="cr-icon fa fa-circle"></i></span>--}}
                                            {{--<b>Primary</b>--}}
                                        {{--</label>--}}
                                    {{--</div>--}}
                                </div>
                                <div class="col-xl-2 col-xs-12" >
                                    <div class="form-group custom-controls-stacked">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="level_education[]" value="Middle/elementry">
                                            <span class="custom-control-indicator custom_checkbox_success"></span>
                                            <span class="custom-control-description text-success">Middle/elementry</span>
                                        </label>
                                    </div>
                                    {{--<div class="radio">--}}
                                        {{--<label class="text-info">--}}
                                            {{--<input type="chekbox" name="level_education[]" value="Middle/elementry" >--}}
                                            {{--<span class="cr"><i class="cr-icon fa fa-circle"></i></span>--}}
                                            {{--<b>Middle/elementry</b>--}}
                                        {{--</label>--}}
                                    {{--</div>--}}
                                </div>
                                <div class="col-xl-2  col-xs-12" >
                                    <div class="form-group custom-controls-stacked">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="level_education[]" value="High/Secondary">
                                            <span class="custom-control-indicator custom_checkbox_default"></span>
                                            <span class="custom-control-description text-default">High/Secondary</span>
                                        </label>
                                    </div>
                                    {{--<div class="radio disabled">--}}
                                        {{--<label class="text-success">--}}
                                            {{--<input type="chekbox" name="level_education[]" value="High/Secondary" >--}}
                                            {{--<span class="cr"><i class="cr-icon fa fa-circle"></i></span>--}}
                                            {{--<b>High/Secondary</b>--}}
                                        {{--</label>--}}
                                    {{--</div>--}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="description" class="form-control-label">Director Messege **</label>
                                </div>
                                <div class="col-xl-6 col-lg-8 col-xs-12 input_field_sections" style="margin-top: 0px !important;">
                                    {!! Form:: textarea('director_message',$editable_profile->director_message,['placeholder'=>'Leave a message for your visitors','class'=>'form-control','cols'=>'50' ,'rows'=>'3','id'=>'limiter']) !!}
                                    {{--<textarea name="limiter" id="limiter" class="form-control" cols="50" rows="3"--}}
                                    {{--placeholder="Describe your item here"></textarea>--}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    {!! Form::label('availability', 'Availability :  ') !!}
                                </div>
                                <div class="col-xl-1 col-lg-3 col-xs-12" >
                                <div class="radio disabled">
                                    <label class="text-success">
                                        <input type="radio" name="availability" value=1 >
                                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                        <b>ON</b>
                                    </label>
                                </div>
                                </div>
                                <div class="col-xl-1 col-lg-3 col-xs-12" >
                                <div class="radio">
                                    <label class="text-danger">
                                        <input type="radio" name="availability" value=0 >
                                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                        <b>OFF</b>
                                    </label>
                                </div>
                            {{--{!! Form::radio('availability',true) !!}--}}
                                    {{--{!! Form::label('on', 'ON') !!}&nbsp;&nbsp;&nbsp;&nbsp;--}}
                                    {{--{!! Form::radio('availability',false) !!}--}}
                                    {{--{!! Form::label('off', 'OFF') !!}--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4 col-xs-2"></div>
                        <div class="col-lg-2 col-xs-12">
                            {{--<input type="submit" value="Upload" class="btn btn-primary upload-image">--}}
                            <button class="btn btn-primary upload-image" type="submit">
                            <i class="fa fa-user"></i>
                            Save
                            </button>
                        </div>
                        <div class="col-lg-2 col-xs-12">
                            <button class="btn btn-warning" type="reset" id="clear">
                                <i class="fa fa-refresh"></i>
                                Reset
                            </button>
                        </div>
                        <div class="col-lg-4 col-xs-2"></div>
                    </div>
                    {{--</form>--}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        <!-- /.inner -->
    </div>
    <!-- Modal -->
    <div class="modal fade" id="search_modal" tabindex="-1" role="dialog"
         aria-hidden="true">
        <form>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="input-group search_bar_small">
                        <input type="text" class="form-control" placeholder="Search..." name="search">
                        <span class="input-group-btn">
        <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
      </span>
                    </div>
                </div>
            </div>
        </form>
    </div>


@endsection
@push('scripts')
<!---------radio chekbox start------------------->
<script type="text/javascript" src="{{asset('/admin-vendor/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/switchery/js/switchery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/admin-js/pages/radio_checkbox.js')}}"></script>
<!---------radio chekbox end------------------->

<script type="text/javascript" src="{{asset('/js/admin-js/pluginjs/jquery.form.js')}}"></script>
<script type="text/javascript">
    $("body").on("click",".upload-image",function(e){
        $(this).parents("form").ajaxForm(options);
    });

    var options = {
        complete: function(response)
        {
            if($.isEmptyObject(response.responseJSON.error)){
                $("input[name='brand_name']").val('');
                alert('Function performed Successfully.');
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
<!---------form elements start-->
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
<!---------form elements end------------------>

<!-- validation  plugin scripts -->
<script type="text/javascript" src="{{asset('/admin-vendor/holderjs/js/holder.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/wow/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/admin-js/pluginjs/jasny-bootstrap.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('/js/admin-js/pages/validation.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('/js/admin-js/pages/validation.js')}}"></script>--}}
<script type="text/javascript" src="{{asset('/js/admin-js/pages/item.js')}}"></script>
@endpush