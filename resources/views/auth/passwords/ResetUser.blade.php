@extends('layouts.RegisterLogin_layout')

@push('styles')
<link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/pages/login2.css')}}"/>
@endpush
@section('content')
    <div class="container wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="row">
            <div class="col-xl-6 push-xl-3 col-lg-6 push-lg-3 col-md-8 push-md-2 col-sm-8 push-sm-2 col-xs-10 push-xs-1">
                <div class="row">
                    <div class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-12 login_image login_section register_section_top">
                        <div class="login_logo login_border_radius1">
                            <h3 class="text-xs-center text-white">
                            <img src="{{asset('/images/admin-images/logow2.png')}}" alt="logo" class="admire_logo">
                            </h3>
                        </div>
                        <div class="m-t-15">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {!! Form::open(array('class'=>'ajax,form-horizontal','url'=>'//password/reset','enctype'=>'multipart/form-data','id'=>'register_valid','role'=>'form', 'method'=>"POST")) !!}
                            {{ csrf_field() }}
                                    <div class="form-group row">
                                        <div class="col-xs-12">
                                            <label for="name" class="form-control-label text-white">Username *</label>
                                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                {{--<input id="username" type="text" class="form-control b_r_20" name="name" value="{{ old('name') }}" required autofocus>--}}
                                                {!! Form::text('name',old('name'),['placeholder'=>'Enter user name','class'=>'form-control b_r_20','required'=>'required','autofocus']) !!}
                                                @if ($errors->has('name'))
                                                    <span class="help-block">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                         </span>
                                                @endif

                                            </div>
                                            {{--<input type="text" class="form-control b_r_20" name="UserName" id="username" placeholder="Username">--}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xs-12">
                                            <label for="email" class="form-control-label text-white">Email *</label>
                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <input id="email" type="email" class="form-control b_r_20" placeholder='Enter email address' name="email" value="{{ old('email') }}" required>
                                                {{--{!! Form::email('email',old('email'),['placeholder'=>'Enter email address','class'=>'form-control b_r_20'])!!}--}}
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                          <strong>{{ $errors->first('email') }}</strong>
                                                         </span>
                                                @endif
                                            </div>

                                            {{--<input type="text" placeholder="Email Address" name="email" id="email" class="form-control b_r_20">--}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xs-12">
                                            <label for="password" class="form-control-label text-white">Password *</label>
                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                {{--<input id="password" type="password" class="form-control b_r_20" placeholder="Enter Password" name="password">--}}
                                                <input id="password" type="password" class="form-control b_r_20" name="password" placeholder="Password" required>
                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                             <strong>{{ $errors->first('password') }}</strong>
                                                         </span>
                                                @endif
                                            </div>
                                            {{--<input type="password" placeholder="Password" id="password" name="password" class="form-control b_r_20">--}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xs-12">
                                            <label for="confirmpassword" class="form-control-label text-white">Confirm Password *</label>
                                            {{--<input id="confirmpassword" type="password" placeholder="Confirm Password" class="form-control b_r_20" name="password_confirmation">--}}
                                            {{--<input type="password" placeholder="Confirm Password" name="password_confirmation" id="password_confirm" class="form-control b_r_20">--}}
                                            <input id="password-confirm" type="password" class="form-control b_r_20" name="password_confirmation" placeholder="Confirm Password"  required>
                                        </div>
                                    </div>
                                   <div class="form-group row">
                                     <div class="col-xs-6">
                                        <button type="submit" class="btn btn-block btn-primary login_button b_r_20">Submit</button>
                                     </div>
                                     <div class="col-xs-6">
                                        <button type="reset" class="btn btn-block btn-danger b_r_20">Reset</button>
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
<script type="text/javascript" src="{{asset('/js/admin-js/pages/login2.js')}}"></script>
@endpush