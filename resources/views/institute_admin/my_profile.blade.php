@extends('layouts.admin_dashboard_layout')
@push('styles')
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
                    Add Item
                </h4>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb float-xs-right nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="{{URL('/home')}}">
                            <i class="fa fa-home" data-pack="default" data-tags=""></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{URL('/manage_items')}}">Designs</a>
                    </li>
                    <li class="breadcrumb-item active">Add New Design</li>
                </ol>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">

                <div class="card-block m-t-35">
                    <div>
                        <h4>Design Details</h4>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        {{--<img src="images/{{ Session::get('image') }}">--}}
                    @endif
                    {!! Form::open(array('url'=>'/add_newitem','enctype'=>'multipart/form-data','method'=>'POST')) !!}
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
                                        <label class="form-control-label">Design Pic</label>
                                    </div>
                                    <div class="col-lg-6 text-xs-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new img-thumbnail text-xs-center">
                                                <img src="#" data-src="holder.js/100%x100%"  alt="not found"></div>
                                            <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
                                            <div class="m-t-20 text-xs-center">
                                                        <span class="btn btn-primary btn-file">
                                                            <span class="fileinput-new">Select image</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            <input type="file" name="design_image" id="design_image"></span>
                                                <a href="#" class="btn btn-warning fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="item_type" class="form-control-label">Brand Name *</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-long-arrow-up text-primary"></i></span>
                                            {!! Form:: text('brand_name',null,['placeholder'=>'Enter brand name','class'=>'form-control']) !!}
                                            {{--<input type="text" placeholder="Enter brand name " id="brand_name" name="brand_name"--}}
                                                   {{--class="form-control">--}}
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="item_type" class="form-control-label">Item Type *</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-newspaper-o text-primary"></i></span>
                                            {!! Form:: text('item_type',null,['placeholder'=>'Enter item type','class'=>'form-control']) !!}
                                            {{--<input type="text" placeholder="Enter item type " id="item_type" name="item_type" class="form-control">--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="phone" class="form-control-label">Item Code
                                            *</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-digg text-primary"></i></span>
                                            {!! Form:: text('item_code',null,['placeholder'=>'Enter Code/volume number','class'=>'form-control']) !!}
                                            {{--<input type="text" placeholder="Enter Code/volume number" id="item_code" name="item_code" class="form-control">--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="address" class="form-control-label">Item Price/meter *</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                            {!! Form:: text('item_price',null,['placeholder'=>'Enter price','class'=>'form-control']) !!}
                                            {{--<input type="text" placeholder="Enter price"  id="item_price" name="item_price"  class="form-control">--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4 text-lg-right">
                                        <label for="description" class="form-control-label">Description *</label>
                                    </div>
                                     <div class="col-xl-6 col-lg-8 col-xs-12 input_field_sections" style="margin-top: 0px !important;margin-bottom:25px !important;">
                                         {!! Form:: textarea('limiter',null,['placeholder'=>'Describe your item here','class'=>'form-control','cols'=>'50' ,'rows'=>'3']) !!}
                                             {{--<textarea name="limiter" id="limiter" class="form-control" cols="50" rows="3"--}}
                                              {{--placeholder="Describe your item here"></textarea>--}}
                                     </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4 col-xs-2"></div>
                            <div class="col-lg-2 col-xs-12">
                                <input type="submit" value="Upload" class="btn btn-primary upload-image">
                                {{--<button class="btn btn-primary" type="submit">--}}
                                    {{--<i class="fa fa-user"></i>--}}
                                    {{--Upload Now--}}
                                {{--</button>--}}
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
<script type="text/javascript" src="{{asset('/js/admin-js/pluginjs/jquery.form.js')}}"></script>
{{--<script src="http://malsup.github.com/jquery.form.js"></script>--}}
<script type="text/javascript">
    $("body").on("click",".upload-image",function(e){
        $(this).parents("form").ajaxForm(options);
    });

    var options = {
        complete: function(response)
        {
            if($.isEmptyObject(response.responseJSON.error)){
                $("input[name='brand_name']").val('');
                alert('Image Upload Successfully.');
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
<!---------form elements end-->
<!-- validation  plugin scripts -->
<script type="text/javascript" src="{{asset('/admin-vendor/holderjs/js/holder.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/wow/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/admin-js/pluginjs/jasny-bootstrap.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('/js/admin-js/pages/validation.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('/js/admin-js/pages/validation.js')}}"></script>--}}
<script type="text/javascript" src="{{asset('/js/admin-js/pages/item.js')}}"></script>
@endpush