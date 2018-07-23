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
                    Manage Profile Gallery
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
                        <a href="/manage_profile">Manage Profile Gallery</a>
                    </li>
                    <li class="breadcrumb-item active">Profile Gallery</li>
                </ol>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">

                <div class="card-block m-t-35">
                    <div>
                        <h4>Profile Gallery</h4>
                        <h5>Fields with ** will be show publically on your website page and * fields dont show publically and will be secure as your priveate info. </h5>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        {{--<img src="images/{{ Session::get('image') }}">--}}
                    @endif

                    @if ($profile_gallery)
                    {!! Form::open(array('url'=>'/update_profile_gallery','enctype'=>'multipart/form-data','method'=>'POST')) !!}
                    <!-- CSRF Token -->
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    <div class="alert alert-danger print-error-msg" style="display:none">
                        <ul></ul>
                    </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group row m-t-25">
                                    <div class="col-lg-4 text-xs-center text-lg-right">
                                        <label class="form-control-label">Slider Image 1 **</label>
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
                                                            <input type="file" name="slider_image1" id="slider_image1"></span>
                                                <a href="#" class="btn btn-warning fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-xs-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class=" img-thumbnail text-xs-center">
                                                <img src="{{ asset('images/admin-images/profile_gallery/'.$profile_gallery->slider_image1)}}" width="231px" height="171px" alt="not found">
                                                {!! Form:: hidden('previous_slider_image1',$profile_gallery->slider_image1) !!}
                                                <div class="m-t-20 text-xs-center">
                                                    <span>Previous Image</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="description_slider1" class="form-control-label">Description 1 **</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-xs-12 input_field_sections" style="margin-top: 0px !important;">
                                        {!! Form:: textarea('description_slider1',$profile_gallery->discription_slider1,['placeholder'=>'Describe about image 1 for your visitors','class'=>'form-control','cols'=>'50' ,'rows'=>'3','id'=>'limiter']) !!}
                                        {{--<textarea name="limiter" id="limiter" class="form-control" cols="50" rows="3"--}}
                                        {{--placeholder="Describe your item here"></textarea>--}}
                                    </div>
                                </div>

                                <div class="form-group row m-t-25">
                                    <div class="col-lg-4 text-xs-center text-lg-right">
                                        <label class="form-control-label">Slider Image 2 **</label>
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
                                                            <input type="file" name="slider_image2" id="slider_image2"></span>
                                                <a href="#" class="btn btn-warning fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-xs-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class=" img-thumbnail text-xs-center">
                                                <img src="{{ asset('images/admin-images/profile_gallery/'.$profile_gallery->slider_image2)}}" width="231px" height="171px" alt="not found">
                                                {!! Form:: hidden('previous_slider_image2',$profile_gallery->slider_image2) !!}
                                                <div class="m-t-20 text-xs-center">
                                                    <span>Previous Image</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="description_2" class="form-control-label">Description 2 **</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-xs-12 input_field_sections" style="margin-top: 0px !important;">
                                        {!! Form:: textarea('description_slider2',$profile_gallery->discription_slider2,['placeholder'=>'Describe about image 2 for your visitors','class'=>'form-control','cols'=>'50' ,'rows'=>'3','id'=>'limiter']) !!}
                                        {{--<textarea name="limiter" id="limiter" class="form-control" cols="50" rows="3"--}}
                                        {{--placeholder="Describe your item here"></textarea>--}}
                                    </div>
                                </div>

                                <div class="form-group row m-t-25">
                                    <div class="col-lg-4 text-xs-center text-lg-right">
                                        <label class="form-control-label">Slider Image 3 **</label>
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
                                                            <input type="file" name="slider_image3" id="slider_image3"></span>
                                                <a href="#" class="btn btn-warning fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-xs-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class=" img-thumbnail text-xs-center">
                                                <img src="{{ asset('images/admin-images/profile_gallery/'.$profile_gallery->slider_image3)}}" width="231px" height="171px" alt="not found">
                                                {!! Form:: hidden('previous_slider_image3',$profile_gallery->slider_image3) !!}
                                                <div class="m-t-20 text-xs-center">
                                                    <span>Previous Image</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="description_3" class="form-control-label">description 3 **</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-xs-12 input_field_sections" style="margin-top: 0px !important;">
                                        {!! Form:: textarea('description_slider3',$profile_gallery->discription_slider3,['placeholder'=>'Describe about image 3 for your visitors','class'=>'form-control','cols'=>'50' ,'rows'=>'3','id'=>'limiter']) !!}
                                        {{--<textarea name="limiter" id="limiter" class="form-control" cols="50" rows="3"--}}
                                        {{--placeholder="Describe your item here"></textarea>--}}
                                    </div>
                                </div>

                                <div class="form-group row m-t-25">
                                    <div class="col-lg-4 text-xs-center text-lg-right">
                                        <label class="form-control-label">Gallery Image 1 **</label>
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
                                                            <input type="file" name="gallery_image1" id="gallery_image1"></span>
                                                <a href="#" class="btn btn-warning fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-xs-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class=" img-thumbnail text-xs-center">
                                                <img src="{{ asset('images/admin-images/profile_gallery/'.$profile_gallery->gallery_image1)}}" width="231px" height="171px" alt="not found">
                                                {!! Form:: hidden('previous_gallery_image1',$profile_gallery->gallery_image1) !!}
                                                <div class="m-t-20 text-xs-center">
                                                    <span>Previous Image</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="title_1" class="form-control-label">Title 1 **</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-xs-12 input_field_sections" style="margin-top: 0px !important;">
                                        {!! Form:: text('title_gallery_image1',$profile_gallery->title_gallery_image1,['placeholder'=>'enter image title','class'=>'form-control']) !!}
                                        {{--<textarea name="limiter" id="limiter" class="form-control" cols="50" rows="3"--}}
                                        {{--placeholder="Describe your item here"></textarea>--}}
                                    </div>
                                </div>

                                <div class="form-group row m-t-25">
                                    <div class="col-lg-4 text-xs-center text-lg-right">
                                        <label class="form-control-label">Gallery Image 2 **</label>
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
                                                            <input type="file" name="gallery_image2" id="gallery_image2"></span>
                                                <a href="#" class="btn btn-warning fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-xs-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class=" img-thumbnail text-xs-center">
                                                <img src="{{ asset('images/admin-images/profile_gallery/'.$profile_gallery->gallery_image2)}}" width="231px" height="171px" alt="not found">
                                                {!! Form:: hidden('previous_gallery_image2',$profile_gallery->gallery_image2) !!}
                                                <div class="m-t-20 text-xs-center">
                                                    <span>Previous Image</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="title_2" class="form-control-label">Title 2 **</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-xs-12 input_field_sections" style="margin-top: 0px !important;">
                                        {!! Form:: text('title_gallery_image2',$profile_gallery->title_gallery_image2,['placeholder'=>'enter image title','class'=>'form-control']) !!}
                                        {{--<textarea name="limiter" id="limiter" class="form-control" cols="50" rows="3"--}}
                                        {{--placeholder="Describe your item here"></textarea>--}}
                                    </div>
                                </div>

                                <div class="form-group row m-t-25">
                                    <div class="col-lg-4 text-xs-center text-lg-right">
                                        <label class="form-control-label">Gallery Image 3 **</label>
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
                                                            <input type="file" name="gallery_image3" id="gallery_image3"></span>
                                                <a href="#" class="btn btn-warning fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-xs-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class=" img-thumbnail text-xs-center">
                                                <img src="{{ asset('images/admin-images/profile_gallery/'.$profile_gallery->gallery_image3)}}" width="231px" height="171px" alt="not found">
                                                {!! Form:: hidden('previous_gallery_image3',$profile_gallery->gallery_image3) !!}
                                                <div class="m-t-20 text-xs-center">
                                                    <span>Previous Image</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="title_3" class="form-control-label">Title 3 **</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-xs-12 input_field_sections" style="margin-top: 0px !important;">
                                        {!! Form:: text('title_gallery_image3',$profile_gallery->title_gallery_image3,['placeholder'=>'enter image title','class'=>'form-control']) !!}
                                        {{--<textarea name="limiter" id="limiter" class="form-control" cols="50" rows="3"--}}
                                        {{--placeholder="Describe your item here"></textarea>--}}
                                    </div>
                                </div>

                                <div class="form-group row m-t-25">
                                    <div class="col-lg-4 text-xs-center text-lg-right">
                                        <label class="form-control-label">Gallery Image 4 **</label>
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
                                                            <input type="file" name="gallery_image4" id="gallery_image4"></span>
                                                <a href="#" class="btn btn-warning fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-xs-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class=" img-thumbnail text-xs-center">
                                                <img src="{{ asset('images/admin-images/profile_gallery/'.$profile_gallery->gallery_image4)}}" width="231px" height="171px" alt="not found">
                                                {!! Form:: hidden('previous_gallery_image4',$profile_gallery->gallery_image4) !!}
                                                <div class="m-t-20 text-xs-center">
                                                    <span>Previous Image</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="title_4" class="form-control-label">Title 4 **</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-xs-12 input_field_sections" style="margin-top: 0px !important;">
                                        {!! Form:: text('title_gallery_image4',$profile_gallery->title_gallery_image4,['placeholder'=>'enter image title','class'=>'form-control']) !!}
                                        {{--<textarea name="limiter" id="limiter" class="form-control" cols="50" rows="3"--}}
                                        {{--placeholder="Describe your item here"></textarea>--}}
                                    </div>
                                </div>

                                <div class="form-group row m-t-25">
                                    <div class="col-lg-4 text-xs-center text-lg-right">
                                        <label class="form-control-label">Gallery Image 5 **</label>
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
                                                            <input type="file" name="gallery_image5" id="gallery_image5"></span>
                                                <a href="#" class="btn btn-warning fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-xs-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class=" img-thumbnail text-xs-center">
                                                <img src="{{ asset('images/admin-images/profile_gallery/'.$profile_gallery->gallery_image5)}}" width="231px" height="171px" alt="not found">
                                                {!! Form:: hidden('previous_gallery_image5',$profile_gallery->gallery_image5) !!}
                                                <div class="m-t-20 text-xs-center">
                                                    <span>Previous Image</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="title_5" class="form-control-label">Title 5 **</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-xs-12 input_field_sections" style="margin-top: 0px !important;">
                                        {!! Form:: text('title_gallery_image5',$profile_gallery->title_gallery_image5,['placeholder'=>'enter image title','class'=>'form-control']) !!}
                                        {{--<textarea name="limiter" id="limiter" class="form-control" cols="50" rows="3"--}}
                                        {{--placeholder="Describe your item here"></textarea>--}}
                                    </div>
                                </div>

                                <div class="form-group row m-t-25">
                                    <div class="col-lg-4 text-xs-center text-lg-right">
                                        <label class="form-control-label">Gallery Image 6 **</label>
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
                                                            <input type="file" name="gallery_image6" id="gallery_image6"></span>
                                                <a href="#" class="btn btn-warning fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-xs-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class=" img-thumbnail text-xs-center">
                                                <img src="{{ asset('images/admin-images/profile_gallery/'.$profile_gallery->gallery_image6)}}" width="231px" height="171px" alt="not found">
                                                {!! Form:: hidden('previous_gallery_image6',$profile_gallery->gallery_image6) !!}
                                                <div class="m-t-20 text-xs-center">
                                                    <span>Previous Image</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="title_6" class="form-control-label">Title 6 **</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-xs-12 input_field_sections" style="margin-top: 0px !important;">
                                        {!! Form:: text('title_gallery_image6',$profile_gallery->title_gallery_image6,['placeholder'=>'enter image tilte','class'=>'form-control']) !!}
                                        {{--<textarea name="limiter" id="limiter" class="form-control" cols="50" rows="3"--}}
                                        {{--placeholder="Describe your item here"></textarea>--}}
                                    </div>
                                </div>

                                <div class="form-group row m-t-25">
                                    <div class="col-lg-4 text-xs-center text-lg-right">
                                        <label class="form-control-label">Gallery Image 7 **</label>
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
                                                            <input type="file" name="gallery_image7" id="gallery_image7"></span>
                                                <a href="#" class="btn btn-warning fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-xs-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class=" img-thumbnail text-xs-center">
                                                <img src="{{ asset('images/admin-images/profile_gallery/'.$profile_gallery->gallery_image7)}}" width="231px" height="171px" alt="not found">
                                                {!! Form:: hidden('previous_gallery_image7',$profile_gallery->gallery_image7) !!}
                                                <div class="m-t-20 text-xs-center">
                                                    <span>Previous Image</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="title_7" class="form-control-label">Title 7 **</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-xs-12 input_field_sections" style="margin-top: 0px !important;">
                                        {!! Form:: text('title_gallery_image7',$profile_gallery->title_gallery_image7,['placeholder'=>'enter image tilte','class'=>'form-control']) !!}
                                        {{--<textarea name="limiter" id="limiter" class="form-control" cols="50" rows="3"--}}
                                        {{--placeholder="Describe your item here"></textarea>--}}
                                    </div>
                                </div>

                                <div class="form-group row m-t-25">
                                    <div class="col-lg-4 text-xs-center text-lg-right">
                                        <label class="form-control-label">Gallery Image 8 **</label>
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
                                                            <input type="file" name="gallery_image8" id="gallery_image8"></span>
                                                <a href="#" class="btn btn-warning fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-xs-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class=" img-thumbnail text-xs-center">
                                                <img src="{{ asset('images/admin-images/profile_gallery/'.$profile_gallery->gallery_image8)}}" width="231px" height="171px" alt="not found">
                                                {!! Form:: hidden('previous_gallery_image8',$profile_gallery->gallery_image8) !!}
                                                <div class="m-t-20 text-xs-center">
                                                    <span>Previous Image</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="title_8" class="form-control-label">Title 8 **</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-xs-12 input_field_sections" style="margin-top: 0px !important;">
                                        {!! Form:: text('title_gallery_image8',$profile_gallery->title_gallery_image8,['placeholder'=>'enter image title','class'=>'form-control']) !!}
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
                    @else
                        {!! Form::open(array('url'=>'/add_profile_gallery','enctype'=>'multipart/form-data','method'=>'POST')) !!}
                    <!-- CSRF Token -->
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <div class="alert alert-danger print-error-msg" style="display:none">
                            <ul></ul>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group row m-t-25">
                                    <div class="col-lg-4 text-xs-center text-lg-right">
                                        <label class="form-control-label">Slider Image 1 **</label>
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
                                                            <input type="file" name="slider_image1" id="slider_image1"></span>
                                                <a href="#" class="btn btn-warning fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-xs-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class=" img-thumbnail text-xs-center">
                                                <img src="{{ asset('images/admin-images/profile_gallery/')}}" width="231px" height="171px" alt="not found">
                                                {!! Form:: hidden('previous_slider_image1',null) !!}
                                                <div class="m-t-20 text-xs-center">
                                                    <span>Previous Image</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="description_slider1" class="form-control-label">Description 1 **</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-xs-12 input_field_sections" style="margin-top: 0px !important;">
                                        {!! Form:: textarea('description_slider1',null,['placeholder'=>'Describe about image 1 for your visitors','class'=>'form-control','cols'=>'50' ,'rows'=>'3','id'=>'limiter']) !!}
                                        {{--<textarea name="limiter" id="limiter" class="form-control" cols="50" rows="3"--}}
                                        {{--placeholder="Describe your item here"></textarea>--}}
                                    </div>
                                </div>

                                <div class="form-group row m-t-25">
                                    <div class="col-lg-4 text-xs-center text-lg-right">
                                        <label class="form-control-label">Slider Image 2 **</label>
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
                                                            <input type="file" name="slider_image2" id="slider_image2"></span>
                                                <a href="#" class="btn btn-warning fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-xs-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class=" img-thumbnail text-xs-center">
                                                <img src="{{ asset('images/admin-images/profile_gallery/')}}" width="231px" height="171px" alt="not found">
                                                {!! Form:: hidden('previous_slider_image2',null) !!}
                                                <div class="m-t-20 text-xs-center">
                                                    <span>Previous Image</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="description_slider2" class="form-control-label">Description 2 **</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-xs-12 input_field_sections" style="margin-top: 0px !important;">
                                        {!! Form:: textarea('description_slider2',null,['placeholder'=>'Describe about image 2 for your visitors','class'=>'form-control','cols'=>'50' ,'rows'=>'3','id'=>'limiter']) !!}
                                        {{--<textarea name="limiter" id="limiter" class="form-control" cols="50" rows="3"--}}
                                        {{--placeholder="Describe your item here"></textarea>--}}
                                    </div>
                                </div>

                                <div class="form-group row m-t-25">
                                    <div class="col-lg-4 text-xs-center text-lg-right">
                                        <label class="form-control-label">Slider Image 3 **</label>
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
                                                            <input type="file" name="slider_image3" id="slider_image3"></span>
                                                <a href="#" class="btn btn-warning fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-xs-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class=" img-thumbnail text-xs-center">
                                                <img src="{{ asset('images/admin-images/profile_gallery/')}}" width="231px" height="171px" alt="not found">
                                                {!! Form:: hidden('previous_slider_image3',null) !!}
                                                <div class="m-t-20 text-xs-center">
                                                    <span>Previous Image</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="description_slider3" class="form-control-label">description 3 **</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-xs-12 input_field_sections" style="margin-top: 0px !important;">
                                        {!! Form:: textarea('description_slider3',null,['placeholder'=>'Describe about image 3 for your visitors','class'=>'form-control','cols'=>'50' ,'rows'=>'3','id'=>'limiter']) !!}
                                        {{--<textarea name="limiter" id="limiter" class="form-control" cols="50" rows="3"--}}
                                        {{--placeholder="Describe your item here"></textarea>--}}
                                    </div>
                                </div>

                                <div class="form-group row m-t-25">
                                    <div class="col-lg-4 text-xs-center text-lg-right">
                                        <label class="form-control-label">Gallery Image 1 **</label>
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
                                                            <input type="file" name="gallery_image1" id="gallery_image1"></span>
                                                <a href="#" class="btn btn-warning fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-xs-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class=" img-thumbnail text-xs-center">
                                                <img src="{{ asset('images/admin-images/profile_gallery/')}}" width="231px" height="171px" alt="not found">
                                                {!! Form:: hidden('previous_gallery_image1',null) !!}
                                                <div class="m-t-20 text-xs-center">
                                                    <span>Previous Image</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="title_gallery_image1" class="form-control-label">Title 1 **</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-xs-12 input_field_sections" style="margin-top: 0px !important;">
                                        {!! Form:: text('title_gallery_image1',null,['placeholder'=>'enter image title','class'=>'form-control']) !!}
                                        {{--<textarea name="limiter" id="limiter" class="form-control" cols="50" rows="3"--}}
                                        {{--placeholder="Describe your item here"></textarea>--}}
                                    </div>
                                </div>

                                <div class="form-group row m-t-25">
                                    <div class="col-lg-4 text-xs-center text-lg-right">
                                        <label class="form-control-label">Gallery Image 2 **</label>
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
                                                            <input type="file" name="gallery_image2" id="gallery_image2"></span>
                                                <a href="#" class="btn btn-warning fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-xs-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class=" img-thumbnail text-xs-center">
                                                <img src="{{ asset('images/admin-images/profile_gallery/')}}" width="231px" height="171px" alt="not found">
                                                {!! Form:: hidden('previous_gallery_image2',null) !!}
                                                <div class="m-t-20 text-xs-center">
                                                    <span>Previous Image</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="title_gallery_image2" class="form-control-label">Title 2 **</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-xs-12 input_field_sections" style="margin-top: 0px !important;">
                                        {!! Form:: text('title_gallery_image2',null,['placeholder'=>'enter image title','class'=>'form-control']) !!}
                                        {{--<textarea name="limiter" id="limiter" class="form-control" cols="50" rows="3"--}}
                                        {{--placeholder="Describe your item here"></textarea>--}}
                                    </div>
                                </div>

                                <div class="form-group row m-t-25">
                                    <div class="col-lg-4 text-xs-center text-lg-right">
                                        <label class="form-control-label">Gallery Image 3 **</label>
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
                                                            <input type="file" name="gallery_image3" id="gallery_image3"></span>
                                                <a href="#" class="btn btn-warning fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-xs-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class=" img-thumbnail text-xs-center">
                                                <img src="{{ asset('images/admin-images/profile_gallery/')}}" width="231px" height="171px" alt="not found">
                                                {!! Form:: hidden('previous_gallery_image3',null) !!}
                                                <div class="m-t-20 text-xs-center">
                                                    <span>Previous Image</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="title_gallery_image3" class="form-control-label">Title 3 **</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-xs-12 input_field_sections" style="margin-top: 0px !important;">
                                        {!! Form:: text('title_gallery_image3',null,['placeholder'=>'enter image title','class'=>'form-control']) !!}
                                        {{--<textarea name="limiter" id="limiter" class="form-control" cols="50" rows="3"--}}
                                        {{--placeholder="Describe your item here"></textarea>--}}
                                    </div>
                                </div>

                                <div class="form-group row m-t-25">
                                    <div class="col-lg-4 text-xs-center text-lg-right">
                                        <label class="form-control-label">Gallery Image 4 **</label>
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
                                                            <input type="file" name="gallery_image4" id="gallery_image4"></span>
                                                <a href="#" class="btn btn-warning fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-xs-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class=" img-thumbnail text-xs-center">
                                                <img src="{{ asset('images/admin-images/profile_gallery/')}}" width="231px" height="171px" alt="not found">
                                                {!! Form:: hidden('previous_gallery_image4',null) !!}
                                                <div class="m-t-20 text-xs-center">
                                                    <span>Previous Image</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="title_gallery_image4" class="form-control-label">Title 4 **</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-xs-12 input_field_sections" style="margin-top: 0px !important;">
                                        {!! Form:: text('title_gallery_image4',null,['placeholder'=>'enter image title','class'=>'form-control']) !!}
                                        {{--<textarea name="limiter" id="limiter" class="form-control" cols="50" rows="3"--}}
                                        {{--placeholder="Describe your item here"></textarea>--}}
                                    </div>
                                </div>

                                <div class="form-group row m-t-25">
                                    <div class="col-lg-4 text-xs-center text-lg-right">
                                        <label class="form-control-label">Gallery Image 5 **</label>
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
                                                            <input type="file" name="gallery_image5" id="gallery_image5"></span>
                                                <a href="#" class="btn btn-warning fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-xs-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class=" img-thumbnail text-xs-center">
                                                <img src="{{ asset('images/admin-images/profile_gallery/')}}" width="231px" height="171px" alt="not found">
                                                {!! Form:: hidden('previous_gallery_image5',null) !!}
                                                <div class="m-t-20 text-xs-center">
                                                    <span>Previous Image</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="title_gallery_image5" class="form-control-label">Title 5 **</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-xs-12 input_field_sections" style="margin-top: 0px !important;">
                                        {!! Form:: text('title_gallery_image5',null,['placeholder'=>'enter image title','class'=>'form-control']) !!}
                                        {{--<textarea name="limiter" id="limiter" class="form-control" cols="50" rows="3"--}}
                                        {{--placeholder="Describe your item here"></textarea>--}}
                                    </div>
                                </div>

                                <div class="form-group row m-t-25">
                                    <div class="col-lg-4 text-xs-center text-lg-right">
                                        <label class="form-control-label">Gallery Image 6 **</label>
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
                                                            <input type="file" name="gallery_image6" id="gallery_image6"></span>
                                                <a href="#" class="btn btn-warning fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-xs-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class=" img-thumbnail text-xs-center">
                                                <img src="{{ asset('images/admin-images/profile_gallery/')}}" width="231px" height="171px" alt="not found">
                                                {!! Form:: hidden('previous_gallery_image6',null) !!}
                                                <div class="m-t-20 text-xs-center">
                                                    <span>Previous Image</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="title_gallery_image6" class="form-control-label">Title 6 **</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-xs-12 input_field_sections" style="margin-top: 0px !important;">
                                        {!! Form:: text('title_gallery_image6',null,['placeholder'=>'enter image tilte','class'=>'form-control']) !!}
                                        {{--<textarea name="limiter" id="limiter" class="form-control" cols="50" rows="3"--}}
                                        {{--placeholder="Describe your item here"></textarea>--}}
                                    </div>
                                </div>

                                <div class="form-group row m-t-25">
                                    <div class="col-lg-4 text-xs-center text-lg-right">
                                        <label class="form-control-label">Gallery Image 7 **</label>
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
                                                            <input type="file" name="gallery_image7" id="gallery_image7"></span>
                                                <a href="#" class="btn btn-warning fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-xs-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class=" img-thumbnail text-xs-center">
                                                <img src="{{ asset('images/admin-images/profile_gallery/')}}" width="231px" height="171px" alt="not found">
                                                {!! Form:: hidden('previous_gallery_image7',null) !!}
                                                <div class="m-t-20 text-xs-center">
                                                    <span>Previous Image</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="title_gallery_image7" class="form-control-label">Title 7 **</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-xs-12 input_field_sections" style="margin-top: 0px !important;">
                                        {!! Form:: text('title_gallery_image7',null,['placeholder'=>'enter image tilte','class'=>'form-control']) !!}
                                        {{--<textarea name="limiter" id="limiter" class="form-control" cols="50" rows="3"--}}
                                        {{--placeholder="Describe your item here"></textarea>--}}
                                    </div>
                                </div>

                                <div class="form-group row m-t-25">
                                    <div class="col-lg-4 text-xs-center text-lg-right">
                                        <label class="form-control-label">Gallery Image 8 **</label>
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
                                                            <input type="file" name="gallery_image8" id="gallery_image8"></span>
                                                <a href="#" class="btn btn-warning fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-xs-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class=" img-thumbnail text-xs-center">
                                                <img src="{{ asset('images/admin-images/profile_gallery/')}}" width="231px" height="171px" alt="not found">
                                                {!! Form:: hidden('previous_gallery_image8',null) !!}
                                                <div class="m-t-20 text-xs-center">
                                                    <span>Previous Image</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="title_gallery_image8" class="form-control-label">Title 8 **</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-xs-12 input_field_sections" style="margin-top: 0px !important;">
                                        {!! Form:: text('title_gallery_image8',null,['placeholder'=>'enter image title','class'=>'form-control']) !!}
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

                    @endif

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