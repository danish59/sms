@extends('layouts.RegisterLogin_layout')
@push('styles')
<link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/pages/login2.css')}}"/>
@endpush

@section('content')
    <div class="container wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="row">
            <div class="col-xl-4 push-xl-4 col-lg-6 push-lg-3 col-md-8 push-md-2 col-sm-8 push-sm-2 col-xs-10 push-xs-1">
                <div class="row">
                    <div style=" background-image:url('/images/admin-images/login1_background.jpg') !important;" class="col-lg-10 push-lg-1 col-md-10 push-md-1 col-sm-12 login_image login_section forgot_section_top">
                        <div class="login_logo login_border_radius1">
                            <div class="text-xs-center text-white font_18">
                                <img src="{{asset('/images/admin-images/logow2.png')}}" alt="logo" class="admire_logo"><br/>
                                <span class="m-t-15">FORGOT PASSWORD</span>
                            </div>
                        </div>
                        <div class="m-t-15">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                           {!! Form::open(array('class'=>'ajax,form-horizontal','url'=>'/password/email','enctype'=>'multipart/form-data','id'=>'login_validator1','role'=>'form', 'method'=>"POST")) !!}
                                    {{ csrf_field() }}
                                <div class="login_content login_border_radius">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email_modal" class="text-white">E-Mail Address</label>
                                                <input id="email_modal" type="email" class="form-control email_forgot b_r_20" name="email" placeholder="E-mail" value="{{ old('email') }}" required>

                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                     <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                    </div>
                                    <div class="form-group text-xs-center">
                                        <button type="submit" onclick="window.location.href='login1.html'" class="btn btn-mint submit_email b_r_20 login_button m-t-10">Submit
                                        </button>
                                    </div>
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
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/jquery.backstretch/js/jquery.backstretch.js')}}"/>
<script type="text/javascript" src="{{asset('/js/admin-js/pages/login2.js')}}"></script>
@endpush