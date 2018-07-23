@extends('layouts.RegisterLogin_layout')
@push('styles')
<link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/pages/login2.css')}}"/>
{{--<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/chosen/css/chosen.css')}}"/>--}}
{{--<link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/pages/form_elements.css')}}"/>--}}
@endpush

@section('content')
    <div class="container wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="row">
            <div class="col-xl-4 push-xl-4 col-lg-6 push-lg-3 col-md-8 push-md-2 col-sm-8 push-sm-2 col-xs-10 push-xs-1">
                @if(Session::has('flash_message'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h3 align="center"><i> {{Session::get('flash_message')}} </i></h3>

                    </div>
                @endif
                <div class="row">
                    <div style=" background-image:url('/images/admin-images/login1_background.jpg') !important;" class="col-lg-10 push-lg-1 col-md-10 push-md-1 col-sm-12 login_image login_section login_section_top">
                        <div class="login_logo login_border_radius1">
                            <h3 class="text-xs-center text-white">
                                <img src="{{asset('/images/admin-images/logow2.png')}}" alt="josh logo" class="admire_logo">
                            </h3>
                        </div>
                        <div class="row m-t-20">
                            <div class="col-xs-12">
                                {{--<a class="text-success m-r-20 font_18">LOG IN</a>--}}
                                <a href="{{url('/schoolReg')}}" class="text-success m-r-20 font_18">SIGN UP</a>
                            </div>
                        </div>
                        <div class="m-t-15">
                             {!! Form::open(array('class'=>'ajax,form-horizontal','url'=>'/login','enctype'=>'multipart/form-data','id'=>'login_validator','role'=>'form', 'method'=>"POST")) !!}
                                {{ csrf_field() }}
                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="form-control-label text-white">E-Mail</label>
                                    <input id="email" type="email" class="form-control b_r_20" name="email" value="{{ old('email') }}" placeholder="Enter E-mail address" required autofocus>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                </div>
                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">

                                    <label for="password" class="form-control-label text-white">Password</label>
                                    <input id="password" type="password" class="form-control b_r_20" name="password" placeholder="Password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                  <strong>{{ $errors->first('password') }}</strong>
                                              </span>
                                            @endif
                                </div>
                                <div class="row m-t-15">
                                    <div class="col-xs-12">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input form-control" name="remember" {{ old('remember') ? 'checked' : ''}}>
                                            <span class="custom-control-indicator"></span>
                                            <a class="custom-control-description text-white"> Remember Me</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="text-xs-center login_bottom">
                                    <button type="submit" class="btn btn-mint btn-block b_r_20 m-t-10 m-r-20">LOG IN</button>
                                </div>
                                <div class="m-t-15 text-xs-center">
                                    <a class="text-white" href="{{ url('/password/reset') }}">
                                        Forgot Password?
                                    </a>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')

{{--<script type="text/javascript" src="{{asset('/admin-vendor/jquery.uniform/js/jquery.uniform.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('/admin-vendor/inputlimiter/js/jquery.inputlimiter.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('/admin-vendor/chosen/js/chosen.jquery.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('/admin-vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('/admin-vendor/jquery-tagsinput/js/jquery.tagsinput.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('/admin-vendor/validval/js/jquery.validVal.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('/admin-vendor/moment/js/moment.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('/admin-vendor/daterangepicker/js/daterangepicker.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('/admin-vendor/datepicker/js/bootstrap-datepicker.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('/admin-vendor/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('/admin-vendor/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('/admin-vendor/autosize/js/jquery.autosize.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('/admin-vendor/inputmask/js/inputmask.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('/admin-vendor/inputmask/js/jquery.inputmask.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('/admin-vendor/inputmask/js/inputmask.date.extensions.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('/admin-vendor/inputmask/js/inputmask.extensions.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('/admin-vendor/fileinput/js/fileinput.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('/admin-vendor/fileinput/js/theme.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('/js/form.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('/js/admin-js/pages/form_elements.js')}}"></script>--}}
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/jquery.backstretch/js/jquery.backstretch.js')}}"/>

<script type="text/javascript" src="{{asset('/js/admin-js/pages/login2.js')}}"></script>
@endpush