@extends('layouts.app')

@section('content')
<div class="container">
    {{--<div id="request">--}}
    {{--{!! Form::open(array('class'=>'ajax','url'=>'/schoolRegistration','enctype'=>'multipart/form-data','id'=>'school_reg_form')) !!}--}}
    {{--<!---row 1 start---->--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form::text('school_name',null,['placeholder'=>'Enter school name','class'=>'form-control','id'=>'school_name']) !!}--}}
                    {{--{!! $errors->first('school_name', '<p class="alert alert-danger">:message</p>') !!}--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form:: text('reg_status',null,['placeholder'=>'school registration status','class'=>'form-control']) !!}--}}
                    {{--{!! $errors->first('reg_status', '<p class="alert alert-danger">:message</p>') !!}--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form:: text('reg_no',null,['placeholder'=>'school registration number','class'=>'form-control']) !!}--}}
                    {{--{!! $errors->first('reg_no', '<p class="alert alert-danger">:message</p>') !!}--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form:: text('abrevation',null,['placeholder'=>'school abrevation name','class'=>'form-control']) !!}--}}
                    {{--{!! $errors->first('abrevation', '<p class="alert alert-danger">:message</p>') !!}--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div><!--row 1 closed--->--}}
        {{--<!---row 2 start---->--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form::text('reg_school_name',null,['placeholder'=>'registered name of school','class'=>'form-control']) !!}--}}
                    {{--{!! $errors->first('reg_school_name', '<p class="alert alert-danger">:message</p>') !!}--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form:: text('board_name',null,['placeholder'=>'name of board','class'=>'form-control']) !!}--}}
                    {{--{!! $errors->first('board_name', '<p class="alert alert-danger">:message</p>') !!}--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form:: text('no_students',null,['placeholder'=>'total number of students','class'=>'form-control']) !!}--}}
                    {{--{!! $errors->first('no_students', '<p class="alert alert-danger">:message</p>') !!}--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form:: text('no_teachers',null,['placeholder'=>'total number of teachers','class'=>'form-control']) !!}--}}
                    {{--{!! $errors->first('no_teachers', '<p class="alert alert-danger">:message</p>') !!}--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div><!--row 2 closed--->--}}
        {{--<!---row 3 start---->--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form::label('address', 'Complete Mailing(post) address : ') !!}--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form:: text('office',null,['placeholder'=>'plot no. and street','class'=>'form-control']) !!}--}}
                    {{--{!! $errors->first('office', '<p class="alert alert-danger">:message</p>') !!}--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-2">--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form:: text('tehsil',null,['placeholder'=>'tehsil','class'=>'form-control']) !!}--}}
                    {{--{!! $errors->first('tehsil', '<p class="alert alert-danger">:message</p>') !!}--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-2">--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form:: text('distric',null,['placeholder'=>'Distric','class'=>'form-control']) !!}--}}
                    {{--{!! $errors->first('distric', '<p class="alert alert-danger">:message</p>') !!}--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-2">--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form:: text('country',null,['placeholder'=>'Country','class'=>'form-control']) !!}--}}
                    {{--{!! $errors->first('country', '<p class="alert alert-danger">:message</p>') !!}--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div><!--row 3 closed--->--}}
        {{--<!---row 4 start---->--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group">--}}

                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form::text('phone_office',null,['placeholder'=>'Phone office','class'=>'form-control']) !!}--}}
                    {{--{!! $errors->first('phone_office', '<p class="alert alert-danger">:message</p>') !!}--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form::text('phone_home',null,['placeholder'=>'phone home','class'=>'form-control']) !!}--}}
                    {{--{!! $errors->first('phone_home', '<p class="alert alert-danger">:message</p>') !!}--}}

                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form:: email('email',null,['placeholder'=>'enter email address','class'=>'form-control']) !!}--}}
                    {{--{!! $errors->first('email', '<p class="alert alert-danger">:message</p>') !!}--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div><!--row 4 closed--->--}}
        {{--<!---row 5 start---->--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form::label('owner_gender', 'School owner info. : ') !!}--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form::text('owner_name',null,['placeholder'=>'Enter school owner name','class'=>'form-control']) !!}--}}
                    {{--{!! $errors->first('owner_name', '<p class="alert alert-danger">:message</p>') !!}--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form:: text('owner_father',null,['placeholder'=>'father name of owner','class'=>'form-control']) !!}--}}
                    {{--{!! $errors->first('owner_father', '<p class="alert alert-danger">:message</p>') !!}--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group">--}}
                   {{--<span style="font-size: small">--}}
                  {{--{!! Form::label('owner_gender', 'Gender : ') !!}--}}
                       {{--{!! Form::select('owner_gender',array(''=>'---select---','Male'=>'Male','Female'=>'Female')) !!}--}}
                       {{--{!! $errors->first('owner_gender', '<p class="alert alert-danger">:message</p>') !!}--}}
                   {{--</span>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div><!--row 5 closed--->--}}
        {{--<!---row 6 start---->--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group">--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group form-inline">--}}
                   {{--<span style="font-size: small">--}}
                  {{--{!! Form::label('owner_cnic', 'CNIC : ') !!}--}}
                       {{--{!! Form:: text('owner_cnic',null,['placeholder'=>'CNIC without dashes','class'=>'form-control']) !!}--}}
                       {{--{!! $errors->first('owner_cnic', '<p class="alert alert-danger">:message</p>') !!}--}}
                   {{--</span>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group form-inline">--}}
                   {{--<span style="font-size: small">--}}
                  {{--{!! Form::label('owner_cell', 'Cell# : ') !!}--}}
                       {{--{!! Form::text('owner_cell',null,['placeholder'=>'owner cell no.','class'=>'form-control']) !!}--}}
                       {{--{!! $errors->first('owner_cell', '<p class="alert alert-danger">:message</p>') !!}--}}
                     {{--</span>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div><!--row 6 closed--->--}}
        {{--<!---row 7 start---->--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form::label('principle_gender', 'School principle info. : ') !!}--}}
                    {{--{!! $errors->first('principle_gender', '<p class="alert alert-danger">:message</p>') !!}--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form::text('principle_name',null,['placeholder'=>'Enter school principle name','class'=>'form-control']) !!}--}}
                    {{--{!! $errors->first('principle_name', '<p class="alert alert-danger">:message</p>') !!}--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form:: text('principle_father',null,['placeholder'=>'father name of principle','class'=>'form-control']) !!}--}}
                    {{--{!! $errors->first('principle_father', '<p class="alert alert-danger">:message</p>') !!}--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group ">--}}
                   {{--<span style="font-size: small">--}}
                  {{--{!! Form::label('principle_gender', 'Gender : ') !!}--}}
                       {{--{!! Form::select('principle_gender',array(''=>'---select---','Male'=>'Male','Female'=>'Female')) !!}--}}
                       {{--{!! $errors->first('principle_gender', '<p class="alert alert-danger">:message</p>') !!}--}}
                   {{--</span>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div><!--row 7 closed--->--}}
        {{--<!---row 8 start---->--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group">--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group form-inline">--}}
                   {{--<span style="font-size: small">--}}
                  {{--{!! Form::label('principle_cnic', 'CNIC : ') !!}--}}
                       {{--{!! Form:: text('principle_cnic',null,['placeholder'=>'CNIC without dashes','class'=>'form-control']) !!}--}}
                       {{--{!! $errors->first('principle_cnic', '<p class="alert alert-danger">:message</p>') !!}--}}
                   {{--</span>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group form-inline">--}}
                   {{--<span style="font-size: small">--}}
                  {{--{!! Form::label('principle_cell', 'Cell# : ') !!}--}}
                       {{--{!! Form:: text('principle_cell',null,['placeholder'=>'principle cell no.','class'=>'form-control']) !!}--}}
                       {{--{!! $errors->first('principle_cell', '<p class="alert alert-danger">:message</p>') !!}--}}
                   {{--</span>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div><!--row 8 closed--->--}}

        {{--<!---row 9 start---->--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form::label('school_level', 'School level : ') !!}--}}
                    {{--{!! Form::select('school_level',array(''=>'---select---','International'=>'International','National'=>'National','Provisional'=>'Provisional','Distric'=>'Distric','Tehsil'=>'Tehsil',)) !!}--}}
                    {{--{!! $errors->first('school_level', '<p class="alert alert-danger">:message</p>') !!}--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3">--}}
                {{--<div class="form-inline">--}}
                    {{--{!! Form::label('location', 'Location :  ') !!}&nbsp;&nbsp;&nbsp;&nbsp;--}}
                    {{--<span style="font-size: small">--}}
                  {{--{!! Form::radio('location','Urban') !!}--}}
                        {{--{!! Form::label('location', 'Urban') !!}&nbsp;&nbsp;&nbsp;&nbsp;--}}
                        {{--{!! Form::radio('location','Rural') !!}--}}
                        {{--{!! Form::label('location', 'Rural') !!}--}}
                        {{--{!! $errors->first('location', '<p class="alert alert-danger">:message</p>') !!}--}}
                  {{--</span>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-6">--}}
                {{--<div class="form-inline">--}}
                    {{--{!! Form::label('building_status', 'Building status :  ') !!}&nbsp;&nbsp;&nbsp;&nbsp;--}}
                    {{--<span style="font-size: small">--}}
                  {{--{!! Form::radio('build_status','Owned') !!}--}}
                        {{--{!! Form::label('owned', 'Owned') !!}&nbsp;&nbsp;&nbsp;&nbsp;--}}
                        {{--{!! Form::radio('build_status','Rented') !!}--}}
                        {{--{!! Form::label('rented', 'Rented') !!}--}}
                        {{--{!! $errors->first('build_status', '<p class="alert alert-danger">:message</p>') !!}--}}
                  {{--</span>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div><!--row 9 closed--->--}}
        {{--<!---row 10 start---->--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-3">--}}
            {{--</div>--}}
            {{--<div class="col-lg-9">--}}
                {{--<div class="form-inline">--}}
                    {{--{!! Form::label('level_education', 'level of Education :  ') !!}&nbsp;&nbsp;&nbsp;--}}
                    {{--<span style="font-size: small">--}}
                  {{--{!! Form::checkbox('level_education[]','Primary',null) !!}--}}
                        {{--{!! Form::label('primary', 'Primary') !!}&nbsp;&nbsp;&nbsp;--}}
                        {{--{!! Form::checkbox('level_education[]','Middle/elementry',null) !!}--}}
                        {{--{!! Form::label('middle', 'Middle/elementry') !!}&nbsp;&nbsp;&nbsp;--}}
                        {{--{!! Form::checkbox('level_education[]','High/Secondary',null) !!}--}}
                        {{--{!! Form::label('high', 'High School/Secondary') !!}--}}
                        {{--{!! $errors->first('level_education[]', '<p class="alert alert-danger">:message</p>') !!}--}}
                  {{--</span>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div><!--row 10 closed--->--}}
        {{--<!--row 11 start--->--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-6">--}}
                {{--<div class="form-inline">--}}
                    {{--{!! Form::checkbox('i_agree','agree',null) !!}--}}
                    {{--{!! $errors->first('i_agree', '<p class="alert alert-danger">:message</p>') !!}--}}

                    {{--<label>--}}
                        {{--<i class="fa">--}}
                {{--<span>&nbsp;--}}
                  {{--I am agree with <a href="" style="color: #5bc0de; text-decoration: underline">terms and conditions</a>.--}}
                {{--</span>--}}
                        {{--</i>--}}
                    {{--</label>&nbsp;--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-6">--}}
                {{--<div class="form-inline">--}}
                    {{--<button class="btn bg-primary" type="submit" id="submit"><span class="glyphicon glyphicon-send">&nbsp;SIGN UP </span></button>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div><!--row 11 closed--->--}}
        {{--<div class="modal-footer footer-box">--}}
        {{--</div>--}}
        {{--{!! Form::close() !!}--}}
    {{--</div>--}}
    {{--<div id="responsing" data-dismiss="request" hidden><h3><i class="fa fa-check-circle"></i>you have successfully registered</h3>--}}
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register Admin</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin_register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    {{--</div>--}}
</div>
@endsection
