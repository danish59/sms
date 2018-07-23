@extends('layouts.RegisterLogin_layout')

@push('styles')
<link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/pages/login2.css')}}"/>
{{--<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/chosen/css/chosen.css')}}"/>--}}
{{--<link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/pages/form_elements.css')}}"/>--}}
@endpush
@section('content')
    <div class="container wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.0s" style="margin-top:-100px !important;">
        <div class="row">
            {{--<div class="col-xl-6 "></div>--}}
            <div class="col-xl-12 ">
                <div class="row">
                    <div  style=" background-image:url('/images/admin-images/login1_background.jpg') !important;" class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-12 login_image login_section register_section_top">
                        <div class="login_logo login_border_radius1">
                            <h3 class="text-xs-center text-white">
                                <img src="{{asset('/images/admin-images/logow2.png')}}" alt="logo" class="admire_logo">
                            </h3>
                        </div>
                        {{--<div class="row m-t-20">--}}
                            {{--<div class="col-xs-12">--}}
                                {{--<a href="login2.html" class="text-white m-r-20 font_18">LOG IN</a>--}}
                                {{--<a class="text-success font_18">SIGN UP</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="m-t-15">
                            {!! Form::open(array('class'=>'ajax,form-horizontal','url'=>'/register','enctype'=>'multipart/form-data','id'=>'register_valid','role'=>'form', 'method'=>"POST")) !!}
                            {{--<form class="form-horizontal" id="register_valid" action="http://demo.lorvent.com/admire2_compact_menu/login2.html" method="post">--}}
                             <div class="row">
                                 <div class="col-xl-6 ">
                                     <div class="form-group row">
                                         <div class="col-xs-12">
                                             {{--<label for="username" class="form-control-label text-white">School Name *</label>--}}
                                             {!! Form::label('reg_school_name', 'School Name *',['class'=>'form-control-label text-white']) !!}
                                             {!! Form::text('reg_school_name',null,['placeholder'=>'registered name of school','class'=>'form-control b_r_20']) !!}
                                             {{--<input type="text" class="form-control b_r_20" name="UserName" id="username" placeholder="Username">--}}
                                         </div>
                                     </div>
                                     <div class="form-group row">
                                         <div class="col-xs-12">
                                             {{--<label for="username" class="form-control-label text-white">School Name *</label>--}}
                                             {!! Form::label('reg_no', 'School Registration number *',['class'=>'form-control-label text-white']) !!}
                                             {!! Form::text('reg_no',null,['placeholder'=>'Enter school registration number ','class'=>'form-control b_r_20']) !!}
                                             {{--<input type="text" class="form-control b_r_20" name="UserName" id="username" placeholder="Username">--}}
                                         </div>
                                     </div>
                                     <div class="form-group row">
                                         <div class="col-xs-12">
                                             {{--<label for="email" class="form-control-label text-white">Email *</label>--}}
                                             {!! Form::label('owner_name', 'School Owner Name *',['class'=>'form-control-label text-white']) !!}
                                             {!! Form::text('owner_name',null,['placeholder'=>'Enter school owner name','class'=>'form-control b_r_20']) !!}
                                             {{--<input type="text" placeholder="Email Address" name="email" id="email" class="form-control b_r_20">--}}
                                         </div>
                                     </div>
                                     <div class="form-group row">
                                         <div class="col-xs-12">
                                             {{--<label for="password" class="form-control-label text-white">Password *</label>--}}
                                             {!! Form::label('owner_cell', 'Phone * ',['class'=>'form-control-label text-white']) !!}
                                             {!! Form::text('owner_cell',null,['placeholder'=>'Enter owner phone number','class'=>'form-control b_r_20']) !!}
                                             {{--<input type="password" placeholder="Password" id="password" name="password" class="form-control b_r_20">--}}
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-xl-6">
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
                                 </div>
                             </div>
                             <div class="form-group row">
                                <div class="col-xs-12">
                                    {!! Form::label('address', 'Complete Mailing(post) address *',['class'=>'form-control-label text-white']) !!}
                                    {{--<label class="form-control-label text-white">Gender</label>--}}
                                </div>
                                <div class="col-xl-5">
                                    {!! Form:: text('office',null,['placeholder'=>'plot no. and street','class'=>'form-control b_r_20']) !!}
                                </div>
                                 <div class="col-xl-3">
                                     {!! Form:: text('city',null,['placeholder'=>'Enter city','class'=>'form-control b_r_20']) !!}
                                 </div>
                                 <div class="col-xl-4">
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
                                    <div class="col-xs-12">
                                        <label class="custom-control custom-checkbox">
                                            {{--{!! Form::checkbox('i_agree','agree',null) !!}--}}
                                            <input type="checkbox" name="checkbox" value="agree" class="custom-control-input form-control">
                                            <span class="custom-control-indicator"></span>
                                            <a class="custom-control-description">I am agree with</a>

                                        </label>
                                        <a href="" style="color: #5bc0de; text-decoration: underline">terms and conditions</a>.
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
{{--<script type="text/javascript" src="{{asset('/js/components.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('/js/custom.js')}}"></script>--}}

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

<script type="text/javascript" src="{{asset('/js/admin-js/pages/login2.js')}}"></script>
@endpush