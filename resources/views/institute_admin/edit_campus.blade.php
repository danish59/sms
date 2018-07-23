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
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <header class="head">
        <div class="main-bar row">
            <div class="col-lg-6">
                <h4 class="nav_top_align skin_txt">
                    <i class="fa fa-user"></i>
                    Update Campus
                </h4>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb float-xs-right nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="{{url('/home')}}">
                            <i class="fa fa-home" data-pack="default" data-tags=""></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{url('/campuses')}}">Campuses</a>
                    </li>
                    <li class="breadcrumb-item active">Update Campus</li>
                </ol>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">

                <div class="card-block m-t-35">
                    {!! Form::open(array('class'=>'ajax','url'=>'/update_campus','enctype'=>'multipart/form-data','id'=>'add_campus')) !!}
                    <!---row 1 start---->
                        <!-- CSRF Token -->
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <div class="alert alert-danger print-error-msg" style="display:none">
                            <ul></ul>
                        </div>
                        {!! Form::hidden('campus_id',$campus->id) !!}
                        {!! Form::hidden('school_id',$campus->school_id) !!}

                        <div class="form-group row">
                            <div class="col-xl-3 text-xl-right">
                                {!! Form::label('campus_name', 'Campus Name: ',['class'=>'form-control-label']) !!}
                            </div>
                            <div class="col-xl-5">
                                {!! Form:: text('campus_name',$campus->campus_name,['placeholder'=>'enter campus name','class'=>'form-control']) !!}
                            </div>
                        </div>
                        <?php
                        $address = $campus->address;
                        $add = unserialize($address);
                        ?>
                        <div class="form-group row">
                            <div class="col-xl-3 text-xl-right">
                                {!! Form::label('address', 'Address:',['class'=>'form-control-label']) !!}
                            </div>
                            <div class="col-xl-5">
                                {!! Form:: text('street',$add['street'],['placeholder'=>'enter address','class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xl-3 text-xl-right">
                                {!! Form::label('city', 'City:',['class'=>'form-control-label']) !!}
                            </div>
                            <div class="col-xl-5">
                                {!! Form:: text('city',$add['city'],['placeholder'=>'enter city','class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xl-3 text-xl-right">
                                {!! Form::label('country', 'Country:',['class'=>'form-control-label']) !!}
                            </div>
                            <div class="col-xl-5">
                                <select id="country" name="country" class="validate[required] form-control select2 chzn-select">
                                    <option value="" disabled selected>Select Country</option>
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                    </option>
                                    <option value="Botswana">Boorm-control-sm"tswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean
                                        Territory
                                    </option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic
                                    </option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands
                                    </option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo, The Democratic Republic of The">Congo, The
                                        Democratic Republic of The
                                    </option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)">Falkland Islands
                                        (Malvinas)
                                    </option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern
                                        Territories
                                    </option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard Island and Mcdonald Islands">Heard Island and
                                        Mcdonald Islands
                                    </option>
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City
                                        State)
                                    </option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic
                                        of
                                    </option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of">Korea,
                                        Democratic People's Republic of
                                    </option>
                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic">Lao People's
                                        Democratic Republic
                                    </option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya
                                    </option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <!--<option value="Macedonia, The Former Yugoslav Republic of">-->
                                    <!--Macedonia, The Former Yugoslav Republic of-->
                                    <!--</option>-->
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of">Micronesia,
                                        Federated States of
                                    </option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands
                                    </option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian Territory, Occupied">Palestinian
                                        Territory, Occupied
                                    </option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Helena">Saint Helena</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Pierre and Miquelon">Saint Pierre and
                                        Miquelon
                                    </option>
                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and
                                        The Grenadines
                                    </option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Sudan">South Sudan</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen
                                    </option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan, Republic of China">Taiwan, Republic of
                                        China
                                    </option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of">Tanzania, United
                                        Republic of
                                    </option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-leste">Timor-leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands
                                    </option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States
                                        Minor Outlying Islands
                                    </option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British">Virgin Islands, British
                                    </option>
                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xl-3 text-xl-right">
                                {!! Form::label('phone_office', 'Phone Office: ',['class'=>'form-control-label']) !!}
                            </div>
                            <div class="col-xl-5">
                                {!! Form:: text('phone_office',$campus->phone_office,['placeholder'=>'enter office phone number','id'=>'phone_office','class'=>'form-control']) !!}
                            </div>
                        </div><div class="form-group row">
                            <div class="col-xl-3 text-xl-right">
                                {!! Form::label('email', 'Email: ',['class'=>'form-control-label']) !!}
                            </div>
                            <div class="col-xl-5">
                                {!! Form:: email('email',$campus->email,['placeholder'=>'enter campus email address','id'=>'email','class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xl-3 text-xl-right">
                                {!! Form::label('principle', 'Principle:',['class'=>'form-control-label']) !!}
                            </div>
                            <div class="col-xl-5">
                                <select id="principle" name="principle" class="validate[required] form-control select2 chzn-select">
                                    <option value="" disabled selected>Select Principle</option>
                                    @foreach($principles as $princ)
                                        <option value="{{$princ->id}}">{{$princ->emp_f_name." ".$princ->emp_m_name." ".$princ->emp_l_name." (".$princ->father_name.")"}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-actions form-group row">
                            <div class="col-xl-8 push-xl-4">
                                <input type="submit" value="Add" class="btn btn-primary update-campus">
                            </div>
                        </div>
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

    {{--<div class="well">--}}

    {{--<div align="center">--}}
    {{--<form name="f1" action="" method="post" enctype="multipart/form-data">--}}
    {{--<br />--}}
    {{--<div class="row">--}}
    {{--<div class="col-lg-4">--}}

    {{--</div>--}}

    {{--<div class="col-lg-4">--}}
    {{--<h3><b>PARADISE</b><br> CREATIVE SCHOOL SYSTEM<div class="badge">TEACHER APPOINTMENT FORM</div></h3>--}}
    {{--</div>--}}

    {{--<div class="col-lg-4">--}}

    {{--</div>--}}
    {{--</div>--}}

    {{--<br>--}}

    {{--<div class="row" >      <!---row 1 start-->--}}

    {{--<div class="col-lg-2">--}}
    {{--<label for="student_name">Name(in english):</label>--}}
    {{--</div>--}}
    {{--<div class="col-lg-2">--}}
    {{--<input type="text" name="teacher_name" placeholder="Enter  name" pattern="[a-ZA-Z]{30}" title="Please Enter Characters not Numbers" required>--}}
    {{--</div>--}}
    {{--<div class="col-lg-2">--}}
    {{--<label for="b_form_no">N.I.C No:</label>--}}
    {{--</div>--}}
    {{--<div class="col-lg-2">--}}
    {{--<input type="text" name="n_i_c_no" placeholder="Enter N.I.C No" pattern="[0-9]{15}" title="Please Enter Numbers not Characters" required>--}}
    {{--</div>--}}
    {{--<div class="col-lg-2">--}}
    {{--<label for="father_name">Name of Father:</label>--}}
    {{--</div>--}}
    {{--<div class="col-lg-2">--}}
    {{--<input type="text" name="father_name" placeholder="Enter father name" required>--}}
    {{--</div>--}}
    {{--</div>              <!--row 1 closed--->--}}

    {{--<br>--}}

    {{--<div class="row">    <!--row 2 start-->--}}
    {{--<div class="col-lg-2">--}}
    {{--<label for="fatherNIC">Father N.I.C:</label>--}}
    {{--</div>--}}
    {{--<div class="col-lg-2">--}}
    {{--<input type="text" name="father_n_i_c" placeholder="Enter Father N.I.C" required>--}}
    {{--</div>--}}
    {{--<div class="col-lg-2">--}}
    {{--<label for="dathofbirth">Date of birth:</label>--}}
    {{--</div>--}}
    {{--<div class="col-lg-2">--}}
    {{--<input type="date" name="date_birth" placeholder="Enter date of birth" required>--}}
    {{--</div>--}}
    {{--<div class="col-lg-2">--}}
    {{--<label for="religion">Religion:</label>--}}
    {{--</div>--}}
    {{--<div class="col-lg-2">--}}
    {{--<input type="text" name="religion" placeholder="Enter religion" required>--}}
    {{--</div>--}}
    {{--</div>            <!--row 2 closed-->--}}

    {{--<br>--}}
    {{--<div class="row">  <!--row 3 start-->--}}
    {{--<div class="col-lg-2">--}}
    {{--<label for="cast">Cast:</label>--}}
    {{--</div>--}}
    {{--<div class="col-lg-2">--}}
    {{--<input type="text" name="cast" placeholder="Enter Cast" required>--}}
    {{--</div>--}}
    {{--<div class="col-lg-2">--}}
    {{--<label for="addresshome">Address(Permenent):</label>--}}
    {{--</div>--}}
    {{--<div class="col-lg-2">--}}
    {{--<input type="text" name="address_permenent" placeholder="Enter permenent address" required>--}}
    {{--</div>--}}
    {{--<div class="col-lg-2">--}}
    {{--<label for="Phonehome">Phone/Cell:</label>--}}
    {{--</div>--}}
    {{--<div class="col-lg-2">--}}
    {{--<input type="text" name="phone" placeholder="Enter Phone/Cell number" required>--}}
    {{--</div>--}}
    {{--</div>        <!--row 3 closed-->--}}

    {{--<br>--}}

    {{--<div class="row">   <!--row 4 start-->--}}

    {{--<div class="col-lg-2">--}}
    {{--<label for="degree_certificate">Last Degree/Certificate:</label>--}}
    {{--</div>--}}
    {{--<div class="col-lg-2">--}}
    {{--<input type="text" name="degree_certificate" placeholder="Enter name of degree" required>--}}
    {{--</div>--}}

    {{--<div class="col-lg-2">--}}
    {{--<label for="cgpa_percentage">CGPA/Percentage:</label>--}}
    {{--</div>--}}
    {{--<div class="col-lg-2">--}}
    {{--<input type="text" name="cgpa_percentage" placeholder="Enter CGPA/Percentage">--}}
    {{--</div>--}}
    {{--<div class="col-lg-2">--}}
    {{--<label for="university_college">University/college:</label>--}}
    {{--</div>--}}
    {{--<div class="col-lg-2">--}}
    {{--<input type="text" name="university_college" placeholder="Enter University/College name">--}}
    {{--</div>--}}
    {{--</div>         <!--row 4 closed-->--}}

    {{--<br>--}}

    {{--<div class="row">        <!---row 5 start-->--}}
    {{--<div class="col-lg-2">--}}
    {{--<label for="passing_year">select Passing Year with Month:</label>--}}
    {{--</div>--}}
    {{--<div class="col-lg-2">--}}
    {{--<input type="month" name="passing_year">--}}
    {{--</div>--}}

    {{--<div class="col-lg-2">--}}

    {{--<label for="experience">Any Experience:</label>--}}
    {{--</div>--}}

    {{--<div class="col-lg-2">--}}
    {{--<textarea rows="3" cols="25" name="experience" placeholder="Enter Experience"></textarea>--}}
    {{--</div>--}}
    {{--<div class="col-lg-2">--}}
    {{--<label for="sertype">Upload Picture</label>--}}
    {{--</div>--}}
    {{--<div class="col-lg-2">--}}
    {{--<input type="file" name="image" required>--}}
    {{--</div>--}}
    {{--</div>           <!--row 5 closed-->--}}

    {{--<br>--}}

    {{--<div class="row">            <!--row 6 start-->--}}
    {{--<div class="col-lg-3">--}}
    {{--<label for="certificates_coureses">Other Certificates/coureses:</label>--}}
    {{--</div>--}}
    {{--<div class="col-lg-3">--}}
    {{--(1). <input type="text" name="certificates_coureses1" size="30px" placeholder="Enter name of certifaction 1">--}}
    {{--</div>--}}
    {{--<div class="col-lg-3">--}}
    {{--(2). <input type="text" name="certificates_coureses2" size="30px" placeholder="Enter name of certifaction 2">--}}
    {{--</div>--}}
    {{--<div class="col-lg-3">--}}
    {{--(3).<input type="text" name="certificates_coureses3" size="30px" placeholder="Enter name of certifaction 3">--}}
    {{--</div>--}}
    {{--</div>                   <!--row 6 closed-->--}}

    {{--<br>--}}

    {{--<div class="row">		<!--row 7 start-->--}}

    {{--<div class="col-lg-3">--}}

    {{--<label for="skils">Computer/Other skils:</label>--}}
    {{--</div>--}}
    {{--<div class="col-lg-3">--}}
    {{--<input type="text" name="skil1" placeholder="Enter skill 1">--}}
    {{--</div>--}}
    {{--<div class="col-lg-3">--}}
    {{--<input type="text" name="skil2" placeholder="Enter skill 2">--}}
    {{--</div>--}}
    {{--<div class="col-lg-3">--}}
    {{--<input type="text" name="skil3" placeholder="Enter skill 3">&nbsp;&nbsp;&nbsp;--}}
    {{--</div>--}}
    {{--</div>                     <!--row 7 closed-->--}}
    {{--<br />--}}
    {{--<div class="row">--}}
    {{--<div class="col-lg-12">--}}
    {{--<label for="teacher_first_name">Teacher First Name</label>--}}
    {{--<input type="text" name="teacher_email_id" placeholder="enter teacher first name" required>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--<br>--}}
    {{--<button type="submit" class="btn btn-success btn-lg" name="appointment_form" value="appointment">Approved</button>--}}
    {{--<button type="submit" class="btn btn-success btn-lg" name="btn1_class_incharg" value="class_incharg">Class Incharg</button>--}}

    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}
@endsection
@push('scripts')
<script type="text/javascript" src="{{asset('/js/admin-js/pluginjs/jquery.form.js')}}"></script>
<script type="text/javascript">
    $("body").on("click",".update-campus",function(e){
        $(this).parents("form").ajaxForm(options);
    });

    var options = {
        complete: function(response)
        {
            if($.isEmptyObject(response.responseJSON.error)){
//                alert('Item deleted Successfully.');
                swal({
                    title: "Success.",
                    text: "Campus Successfully Updated",
                    type: "success",
                    allowOutsideClick: false
                }).then(function() {
                    location.assign('/campuses');
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
<script type="text/javascript" src="{{'/js/form.js'}}"></script>
<script type="text/javascript" src="{{asset('/js/admin-js/pages/datetime_piker.js')}}"></script>
<!--end of datetime picker plugin scripts-->

<!--  validation scripts start-->
<script type="text/javascript" src="{{asset('/admin-vendor/jquery-validation-engine/js/jquery.validationEngine.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/jquery-validation-engine/js/jquery.validationEngine-en.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/jquery-validation/js/jquery.validate.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('/admin-vendor/datetimepicker/js/DateTimePicker.min.js')}}"></script>--}}
<script type="text/javascript" src="{{asset('/admin-vendor/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/admin-js/pages/form_validation.js')}}"></script>

{{--<script type="text/javascript" src="{{asset('/js/admin-js/pages/validation.js')}}"></script>--}}

<!--form layout scripts start-->
<script type="text/javascript" src="{{asset('/admin-vendor/intl-tel-input/js/intlTelInput.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('/admin-vendor/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>--}}
<script type="text/javascript" src="{{asset('/admin-vendor/sweetalert/js/sweetalert2.min.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('/js/admin-js/pages/form_layouts.js')}}"></script>--}}
<!--End of form layout Plugin scripts-->
@endpush