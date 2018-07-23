@extends('layouts.admin_dashboard_layout')

<!-- Push a style dynamically from a view -->
@push('styles')
<!--Plugin styles-->
<link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/select2.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/datatables/css/scroller.bootstrap.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/datatables/css/colReorder.bootstrap.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/datatables/css/dataTables.bootstrap.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/modal/css/component.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('/admin-vendor/animate/css/animate.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/pages/dataTables.bootstrap.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/pages/tables.css')}}" />

<!------->
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/inputlimiter/css/jquery.inputlimiter.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/chosen/css/chosen.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/jquery-tagsinput/css/jquery.tagsinput.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/daterangepicker/css/daterangepicker.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/datepicker/css/bootstrap-datepicker.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/bootstrap-switch/css/bootstrap-switch.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/jasny-bootstrap/css/jasny-bootstrap.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/fileinput/css/fileinput.min.css')}}"/>
<!------radio chekbox plugin start----->
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/bootstrap-switch/css/bootstrap-switch.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/switchery/css/switchery.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/radio_css/css/radiobox.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/checkbox_css/css/checkbox.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/pages/radio_checkbox.css')}}"/>
<!------radio chekbox plugin end----->

<!--validation--->
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/jquery-validation-engine/css/validationEngine.jquery.css')}}" />
{{--<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/datepicker/css/bootstrap-datepicker3.css')}}">--}}
{{--<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/datetimepicker/css/DateTimePicker.min.css')}}">--}}
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/bootstrapvalidator/css/bootstrapValidator.min.css')}}" />
<!-- end of plugin styles -->
<!--Page level styles-->
<link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/pages/tables.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/pages/portlet.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/pages/advanced_components.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/pages/form_elements.css')}}"/>
<!----validation--->
<link type="text/css" rel="stylesheet" href="{{asset('css/admin-css/pages/form_validations.css')}}" />



@endpush

@section('content')
    <header class="head">
        <div class="main-bar row">
            <div class="col-lg-6 col-sm-4">
                <h4 class="nav_top_align">
                    <i class="fa fa-user"></i>
                    Manage Orders
                </h4>
            </div>
            <div class="col-lg-6 col-sm-8 col-xs-12">
                <ol class="breadcrumb float-xs-right  nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="{{URL('/home')}}">
                            <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{URL('/manage_orders')}}">Manage Orders</a>
                    </li>
                    <li class="active breadcrumb-item">Orders</li>
                </ol>
            </div>
        </div>
    </header>
    <!-- BEGIN EXAMPLE2 TABLE PORTLET-->
    <div class="outer">
        <div class="inner bg-container">
            <div class="card m-t-35">
                <div class="card-header bg-white">
                    <i class="fa fa-table"></i>  Orders List
                </div>
                <div  class="card-block m-t-35">
                    <div class="float-md-right text-xs-center m-t-5">
                        <div class="btn-group show-hide">
                            <a class="btn btn-primary" href="#" data-toggle="dropdown">
                                Columns
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <div id="sample_4_column_toggler" class="dropdown-menu dropdown-checkboxes dropdown_checkbox_margin_left float-xs-right">
                                <label>
                                    <input type="checkbox" checked data-column="1">NO.#</label>
                                <label>
                                    <input type="checkbox" checked data-column="2">Customer Name</label>
                                <label>
                                    <input type="checkbox" checked data-column="3">Father Name</label>
                                <label>
                                    <input type="checkbox" checked data-column="4">Quantity</label>
                                <label>
                                    <input type="checkbox" checked data-column="5">Gender</label>
                                <label>
                                    <input type="checkbox" checked data-column="6">Phone#</label>
                                <label>
                                    <input type="checkbox" checked data-column="7">Address</label>

                                <label>
                                    <input type="checkbox" checked data-column="8">Brand Name</label>
                                <label>
                                    <input type="checkbox" checked data-column="9">Item Type</label>
                                <label>
                                    <input type="checkbox" checked data-column="10">Item Price</label>
                                <label>
                                    <input type="checkbox" checked data-column="11">Item Code</label>
                                <label>
                                    <input type="checkbox" checked data-column="12">Description</label>
                                <label>
                                    <input type="checkbox" checked data-column="13">Actions</label>
                                <label>
                                    <input type="checkbox" checked data-column="14">Image</label>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table_res" id="sample_4">
                        <thead>
                        <tr>
                            <th>N0.#</th>
                            <th>Customer Name</th>
                            <th class="hidden-xs">Father Name</th>
                            <th class="hidden-xs">Quantity</th>
                            <th class="hidden-xs">Gender</th>
                            <th class="hidden-xs">Phone#</th>
                            <th class="hidden-xs">Address</th>
                            <th>Brand Name</th>
                            <th class="hidden-xs">Item Type</th>
                            <th class="hidden-xs">Item Price</th>
                            <th class="hidden-xs">Item Code</th>
                            <th class="hidden-xs ">Description</th>
                            <th class="hidden-xs ">Action</th>
                            <th class="hidden-xs ">Image</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(json_decode($orders) as $order)
                            <?php
                            $address = unserialize($order->address);
                            $status = $order->status;
                            ?>

                            <tr><td>{{ $order->order_id}}</td>
                                <td>{{ $order->customer_name}}</td>
                                <td class="hidden-xs">{{ $order->customer_father}}</td>
                                <td class="hidden-xs">{{ $order->quantity}}</td>
                                <td class="hidden-xs">{{ $order->customer_gender}}</td>
                                <td class="hidden-xs">{{ $order->customer_cell}}<br>{{$order->phone_home}}</td>
                                <td class="hidden-xs"></td>

                                <td>{{ $order->item_brand}}</td>
                                <td class="hidden-xs">{{ $order->item_type}}</td>
                                <td class="hidden-xs">{{ $order->item_price}}</td>
                                <td class="hidden-xs">{{ $order->item_code}}</td>
                                <td class="hidden-xs">{{ $order->item_description}}</td>
                                <td class="hidden-xs">
                                        {!! Form::open(array('url'=>'/order_action','enctype'=>'multipart/form-data','method'=>'POST')) !!}

                                        {!! Form:: hidden('order_id',$order->order_id) !!}
                                    @if($status == 'delivered')
                                    <div class="radio">
                                            <label class="text-success">
                                                <input type="radio" name="action" value='delivered' checked >
                                                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                <b>Delivered</b>
                                            </label>
                                        </div>
                                    <div class="radio">
                                        <label class="text-danger">
                                            <input type="radio" name="action" value='processing' >
                                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                            <b>Processing</b>
                                        </label>
                                    </div>
                                          @elseif($status == 'processing')
                                    <div class="radio">
                                        <label class="text-success">
                                            <input type="radio" name="action" value='delivered' >
                                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                            <b>Delivered</b>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label class="text-danger">
                                            <input type="radio" name="action" value='processing' checked >
                                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                            <b>Processing</b>
                                        </label>
                                    </div>
                                    @else
                                        <div class="radio">
                                            <label class="text-success">
                                                <input type="radio" name="action" value='delivered' >
                                                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                <b>Delivered</b>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label class="text-danger">
                                                <input type="radio" name="action" value='processing' >
                                                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                <b>Processing</b>
                                            </label>
                                        </div>
                                    @endif

                                        <button class="btn btn-info upload-image" type="submit" data-toggle="tooltip" data-placement="top" title="Click to Ok" style="font-size: 2.5em; background-color: transparent !important;  border-color: transparent !important">
                                            <i class="fa fa-arrow-circle-right" style="color: #0a6aa1" ></i>
                                        </button>
                                        {!! Form::close() !!}
                                    </td>
                                <td class="hidden-xs"><div class=" text-lg-center ">
                                        <img src="{{ asset('images/design_images/'.$order->image)}}" width="250px" height="250px" data-src="holder.js/100%x100%" alt="not found"></div></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.inner -->
    </div>
@endsection
<!-- Push a script dynamically from a view -->
@push('scripts')
<script type="text/javascript" src="{{asset('/js/admin-js/pluginjs/jquery.form.js')}}"></script>
<script type="text/javascript">
    $("body").on("click",".upload-image",function(e){
        $(this).parents("form").ajaxForm(options);
    });

    var options = {
        complete: function(response)
        {
            if($.isEmptyObject(response.responseJSON.error)){
                alert(' Successfully.');
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

<!-- datatables plugin scripts -->
<script type="text/javascript" src="{{asset('/admin-vendor/select2/js/select2.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/admin-js/pluginjs/dataTables.tableTools.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datatables/js/dataTables.colReorder.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datatables/js/dataTables.rowReorder.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datatables/js/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datatables/js/dataTables.responsive.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datatables/js/dataTables.buttons.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datatables/js/buttons.colVis.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datatables/js/buttons.html5.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datatables/js/buttons.bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datatables/js/buttons.print.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datatables/js/dataTables.scroller.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/admin-js/pages/datatable.js')}}"></script>


<!----------->
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
    <!---------radio chekbox start------------------->
    <script type="text/javascript" src="{{asset('/admin-vendor/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin-vendor/switchery/js/switchery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/admin-js/pages/radio_checkbox.js')}}"></script>
    <!---------radio chekbox end------------------->

    <!-----validation plugin------>
<script type="text/javascript" src="{{asset('/admin-vendor/jquery-validation-engine/js/jquery.validationEngine.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/jquery-validation-engine/js/jquery.validationEngine-en.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/jquery-validation/js/jquery.validate.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('/admin-vendor/datetimepicker/js/DateTimePicker.min.js')}}"></script>--}}
<script type="text/javascript" src="{{asset('/admin-vendor/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>

<!--End of plugin scripts-->
<!--Page level scripts-->
<script type="text/javascript" src="{{asset('/js/admin-js/pages/users.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/admin-js/pages/modals.js')}}"></script>
<script type="text/javascript" src="{{asset('js/form.js')}}"></script>
<script type="text/javascript" src="{{asset('js/admin-js/pages/form_elements.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/admin-js/pages/form_validation.js')}}"></script>
<!-----validation page---->


<!-- end page level scripts -->


@endpush