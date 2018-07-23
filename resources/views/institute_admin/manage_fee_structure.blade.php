<?php
/**
 * Created by PhpStorm.
 * User: Danish
 * Date: 7/7/2017
 * Time: 8:17 PM
 */
?>
@extends('layouts.admin_dashboard_layout')
<!-- Push a style dynamically from a view -->
@push('styles')
<!--Plugin styles-->
<link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/select2.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('/css/admin-css/pages/dataTables.bootstrap.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/modal/css/component.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('/admin-vendor/animate/css/animate.min.css')}}" />
<!----form elements start--->
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
<!----form elements end--->
<!--validation--->
<link type="text/css" rel="stylesheet" href="{{asset('/admin-vendor/jquery-validation-engine/css/validationEngine.jquery.css')}}" />
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
                    Fee
                </h4>
            </div>
            <div class="col-lg-6 col-sm-8 col-xs-12">
                <ol class="breadcrumb float-xs-right  nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="{{url('/home')}}">
                            <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Fee</a>
                    </li>
                    <li class="active breadcrumb-item">Manage Fee Structure</li>
                </ol>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                <div class="card-header bg-white">
                    Manage Fee Structure
                </div>
                <div class="card-block m-t-35" id="user_body">
                    <div class="table-toolbar">
                        <div class="btn-group">
                            <button class="btn btn-raised btn-info adv_cust_mod_btn lightspeedin"
                                    data-toggle="modal" data-target="#modal-lightspeedin"><i class="fa fa-plus"></i> Add New Fee Structure
                            </button>
                            {{--<a href="add_user.html" id="editable_table_new" class=" btn btn-default">--}}
                            {{--Add User  <i class="fa fa-plus"></i>--}}
                            {{--</a>--}}
                        </div>
                        <div class="btn-group float-xs-right users_grid_tools">
                            <div class="tools"></div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <table class="table  table-striped table-bordered table-hover no-footer dataTable" id="editable_table" role="grid">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">No#</th>
                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">Class Name</th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Actions On Fee Structure</th>
                                </tr>
                                </thead>
                                <tbody id="editable">
                                <div>
                                    <?php $i = 1;?>
                                    @foreach($fee_structure as $fee_str)
                                        <tr role="row" class="even">
                                            <td class="sorting_1">{{$i}}</td>
                                            <td>{{$fee_str->class_name}}</td>
                                            <td>
                                                <a href="#{{"class".$i}}" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample" title="View"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;
                                                {{--<a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" href="{{url('edit_class/'.$class->id)}}"><i class="fa fa-pencil text-warning"></i></a>&nbsp; &nbsp;--}}
                                                <a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" onclick="edit_fee_structure( {{$fee_str->id}})" href="javascript:;"><i class="fa fa-pencil text-warning"></i></a>&nbsp; &nbsp;
                                                <a class="delete" onclick="delete_fee_structure( {{$fee_str->id}})" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash text-danger"></i></a>

                                                <div class="collapse" id="{{"class".$i}}">
                                                    <div class="well">
                                                        <table>
                                                            <tr>
                                                                <td><b>Class Name</b></td><td>{{$fee_str->class_name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Admission Fee</b></td><td>{{$fee_str->admission_fee}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Monthly Fee</b></td><td>{{$fee_str->monthly_fee}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Annual Funds & Others</b></td><td>{{$fee_str->annual_funds_others}}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    @endforeach
                                </div>
                                </tbody>
                            </table>

                            {{--@include('institute_admin.table_file')--}}
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
        </div>
        <!-- /.inner -->
    </div>

    <div class="modal" tabindex="-1" id="modal-zoomin" role="dialog"
         aria-labelledby="modalLabelzoom" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h4 class="modal-title text-white" id="modalLabelzoom">Update Fee Structure</h4>
                </div>
                <div class="modal-body print-clsss">
                    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

                </div>
                <div class="modal-footer">
                    <button class="btn  btn-success" data-dismiss="modal" onclick="model_dismiss()">Close me!</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal" tabindex="-1" id="modal-lightspeedin" role="dialog"
         aria-labelledby="modalLabellightspeedin" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h4 class="modal-title text-white" id="modalLabellightspeedin">Add New Fee Structure</h4>
                </div>
                <div class="modal-body">
                {!! Form::open(array('class'=>'ajax','id'=>'add_fee_structure','url'=>'/add_fee_structure','enctype'=>'multipart/form-data')) !!}
                <!---row 1 start---->
                    <!-- CSRF Token -->
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    <div class="alert alert-danger print-error-msg" style="display:none">
                        <ul></ul>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-3 text-xl-right">
                            {!! Form::label('class_name', 'Class Name: ',['class'=>'form-control-label']) !!}
                        </div>
                        <div class="col-xl-5">
                            <select id="class_name" name="class_name" class=" form-control select2 chzn-select">
                                <option value="" disabled selected>Select Class name</option>
                                @foreach($allClasses as $class)
                                    <option value="{{$class->id}}">{{$class->class_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-3 text-xl-right">
                            {!! Form::label('admission_fee', 'Admission Fee: ',['class'=>'form-control-label']) !!}
                        </div>
                        <div class="col-xl-5">
                            {!! Form:: text('admission_fee',null,['placeholder'=>'enter admission fee','class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-3 text-xl-right">
                            {!! Form::label('monthly_fee', 'Monthly Fee: ',['class'=>'form-control-label']) !!}
                        </div>
                        <div class="col-xl-5">
                            {!! Form:: text('monthly_fee',null,['placeholder'=>'enter monthly fee','class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-3 text-xl-right">
                            {!! Form::label('annual_fund_others', 'Annual Funds &amp; Others: ',['class'=>'form-control-label']) !!}
                        </div>
                        <div class="col-xl-5">
                            {!! Form:: text('annual_funds_others',null,['placeholder'=>'enter anual fund & others','class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-actions form-group row">
                        <div class="col-xl-8 push-xl-4">
                            <input type="submit" value="Add" class="btn btn-primary add_fee_structure">
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

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
<!-- Push a script dynamically from a view -->
@push('scripts')
<script type="text/javascript" src="{{asset('/js/admin-js/pluginjs/jquery.form.js')}}"></script>

<!--  plugin scripts -->
<script type="text/javascript" src="{{asset('/admin-vendor/select2/js/select2.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datatables/js/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datatables/js/dataTables.responsive.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datatables/js/dataTables.buttons.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datatables/js/buttons.colVis.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datatables/js/buttons.html5.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datatables/js/buttons.bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-vendor/datatables/js/buttons.print.min.js')}}"></script>
<!-----form elements start------>
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
<!-----form elements end------>

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
<!-----validation page---->
<script type="text/javascript" src="{{asset('/js/admin-js/pages/form_validation.js')}}"></script>

<!-- end page level scripts -->

<script type="text/javascript">
    $("body").on("click",".add_fee_structure",function(e){
        $(this).parents("form").ajaxForm(options);
    });

    var options = {
        complete: function(response)
        {
            $('#editable_table').DataTable().clear().destroy();

            if($.isEmptyObject(response.responseJSON.error)){
                swal({
                    title: "Success.",
                    text: "New Fee Structure Successfully Added",
                    type: "success",
                    allowOutsideClick: false
                }).then(function(res) {
                    var fee_structure = response.responseJSON;
                    var i =1;
                    $.each( fee_structure, function( key, value ) {
                        $("#editable").append(
                            '<tr role="row" class="even">' +
                            '<td class="sorting_1">'+i+'</td>' +
                            '<td>'+value.class_name+'</td>' +
                            '<td><a href="#class'+i+'" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample" title="View">' +
                            '<i class="fa fa-eye text-success"></i>' +
                            '</a>&nbsp; &nbsp;' +
                            '<a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" onclick="edit_fee_structure('+value.id+')" href="javascript:;">' +
                            '<i class="fa fa-pencil text-warning"></i>' +
                            '</a>&nbsp; &nbsp; ' +
                            '<a class="delete" onclick="delete_fee_structure('+value.id+')" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Delete">' +
                            '<i class="fa fa-trash text-danger"></i>' +
                            '</a>'+
                            '<div class="collapse" id="class'+i+'">' +
                            '<div class="well">'+
                            '<table>'+
                            '<tr>'+
                            '<td><b>Class Name</b></td><td>'+value.class_name+'</td>'+
                            '</tr>'+
                            '<tr>'+
                            '<td><b>Admission Fee</b></td><td>'+value.admission_fee+'</td>'+
                            '</tr>'+
                            '<tr>'+
                            '<td><b>Monthly Fee</b></td><td>'+value.monthly_fee+'</td>'+
                            '</tr>'+
                            '<tr>'+
                            '<td><b>Annual Funds & Others</b></td><td>'+value.annual_funds_others+'</td>'+
                            '</tr>'+
                            '</table>'+
                            '</div>'+
                            '</div>'+
                            '</td></tr>');
                        i++;
                    });
                    var table = $('#editable_table');
                    table.DataTable({
                        dom: '<"text-xs-right"B><f>lr<"table-responsive"t>ip',
                        buttons: [
                            'copy', 'csv', 'print'
                        ]
                    });
                    var tableWrapper = $("#editable_table_wrapper");
                    tableWrapper.find(".dataTables_length select").select2({
                        showSearchInput: false //hide search box with special css class
                    }); // initialize select2 dropdown
                    $("#editable_table_wrapper .dt-buttons .btn").addClass('btn-secondary').removeClass('btn-default');
//                    location.reload('url()');
                });
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

    function delete_fee_structure(fee_str_id) {
        $.ajaxSetup({
            header: $('meta[name="csrf-token"]').attr('content')
        });
        swal({
            title: 'Are you sure?',
            text: 'You won\'t be able to revert this!',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#4fb7fe',
            cancelButtonColor: '#EF6F6C',
            confirmButtonText: 'Yes, delete it!'
        }).then(function () {
            $.ajax({
                type: 'get',
                url: '/delete_fee_structure/'+fee_str_id,
                datatype:'json',
                success: function (response) {
                    swal({
                        title: 'Deleted!',
                        text: 'Your Class has been removed!',
                        type: 'success',
                        confirmButtonColor: '#ff9933',
                        allowOutsideClick: false
                    }).then(function () {
                        $('#editable_table').DataTable().clear().destroy();
                        var classes = response;
                        var i =1;
                        $.each( classes, function( key, value ) {
                            $("#editable").append(
                                '<tr role="row" class="even">' +
                                '<td class="sorting_1">'+i+'</td>' +
                                '<td>'+value.class_name+'</td>' +
                                '<td><a href="#class'+i+'" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample" title="View">' +
                                '<i class="fa fa-eye text-success"></i>' +
                                '</a>&nbsp; &nbsp;' +
                                '<a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" onclick="edit_fee_structure('+value.id+')" href="javascript:;">' +
                                '<i class="fa fa-pencil text-warning"></i>' +
                                '</a>&nbsp; &nbsp; ' +
                                '<a class="delete" onclick="delete_fee_structure('+value.id+')" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Delete">' +
                                '<i class="fa fa-trash text-danger"></i>' +
                                '</a>'+
                                '<div class="collapse" id="class'+i+'">' +
                                '<div class="well">'+
                                '<table>'+
                                '<tr>'+
                                '<td><b>Class Name</b></td><td>'+value.class_name+'</td>'+
                                '</tr>'+
                                '<tr>'+
                                '<td><b>Admission Fee</b></td><td>'+value.admission_fee+'</td>'+
                                '</tr>'+
                                '<tr>'+
                                '<td><b>Monthly Fee</b></td><td>'+value.monthly_fee+'</td>'+
                                '</tr>'+
                                '<tr>'+
                                '<td><b>Annual Funds & Others</b></td><td>'+value.annual_funds_others+'</td>'+
                                '</tr>'+
                                '</table>'+
                                '</div>'+
                                '</div>'+
                                '</td></tr>');
                            i++;
                        });
                        var table = $('#editable_table');
                        table.DataTable({
                            dom: '<"text-xs-right"B><f>lr<"table-responsive"t>ip',
                            buttons: [
                                'copy', 'csv', 'print'
                            ]
                        });
                        var tableWrapper = $("#editable_table_wrapper");
                        tableWrapper.find(".dataTables_length select").select2({
                            showSearchInput: false //hide search box with special css class
                        }); // initialize select2 dropdown
                        $("#editable_table_wrapper .dt-buttons .btn").addClass('btn-secondary').removeClass('btn-default');

                        //location.reload()
                    });
                    //}
                },
                error: function () {
                    alert("something went wrong");
                }
            });

        });
    }

    function edit_fee_structure(fee_str_id) {
        $.ajaxSetup({
            header: $('meta[name="csrf-token"]').attr('content')
        });
        $.ajax({
            type: 'get',
            url: '/edit_fee_structure/'+fee_str_id,
            datatype:'json',
            success: function (response) {
                jQuery("#modal-zoomin").show(function () {
                    $(".print-clsss").html(' {!! Form::open(array('class'=>'ajax','id'=>'add_fee_structure','url'=>'/update_fee_structure','enctype'=>'multipart/form-data')) !!}' +
                        '<div class="alert alert-danger print-error-msg" style="display:none">'+
                        '<ul></ul>'+
                        '</div>'+
                        '<input type="hidden" value='+response[0].id+' name="fee_str_id">'+
                        '<input type="hidden" value='+response[0].class_id+' name="class_id">'+
                        '<div class="form-group row">'+
                        '<div class="col-xl-3 text-xl-right">'+
                        '<?php echo Form::label('class_name', 'Class Name: ',['class'=>'form-control-label'])?>'+
                        '</div>'+
                        '<div class="col-xl-5">'+
                        '<input type="text" name="class_name" value='+response[0].class_name+' placeholder="enter new class name" class="form-control" readonly>'+
                        '</div>'+
                        '</div>'+
                        '<div class="form-group row">'+
                        '<div class="col-xl-3 text-xl-right">'+
                        '<?php echo Form::label('admission_fee', 'Admission Fee: ',['class'=>'form-control-label'])?>'+
                        '</div>'+
                        '<div class="col-xl-5">'+
                        '<input type="text" name="admission_fee" id="admission_fee" value='+response[0].admission_fee+' placeholder="enter new admission fee" class="form-control">'+
                        '</div>'+
                        '</div>'+
                        '<div class="form-group row">'+
                        '<div class="col-xl-3 text-xl-right">'+
                        '<?php echo Form::label('monthly_fee', 'Monthly Fee: ',['class'=>'form-control-label'])?>'+
                        '</div>'+
                        '<div class="col-xl-5">'+
                        '<input type="text" name="monthly_fee" id="monthly_fee" value='+response[0].monthly_fee+' placeholder="enter new monthly fee" class="form-control">'+
                        '</div>'+
                        '</div>'+
                        '<div class="form-group row">'+
                        '<div class="col-xl-3 text-xl-right">'+
                        '<?php echo Form::label('annual_funds_others', 'Annual Funds & Others: ',['class'=>'form-control-label'])?>'+
                        '</div>'+
                        '<div class="col-xl-5">'+
                        '<input type="text" name="annual_funds_others" id="annual_funds_others" value='+response[0].annual_funds_others+' placeholder="enter new annual funds & others" class="form-control">'+
                        '</div>'+
                        '</div>'+
                        '<div class="form-actions form-group row">'+
                        '<div class="col-xl-8 push-xl-4">'+
                        '<input type="submit" value="Conform Update" class="btn btn-primary update_fee_structure">'+
                        '</div>'+
                        '</div>'+
                        '{!! Form::close() !!}');
                });

            }
        });

    }

    $("body").on("click",".update_fee_structure",function(e){
        $(this).parents("form").ajaxForm(update_fee_structure);
    });
    var update_fee_structure = {
        complete: function(response)
        {
            if($.isEmptyObject(response.responseJSON.error)){
                swal({
                    title: "Success.",
                    text: "Fee Structure Successfully Updated",
                    type: "success",
                    allowOutsideClick: false
                }).then(function() {
                    $('#editable_table').DataTable().clear().destroy();
                    var update_fee_structure = response.responseJSON;
                    var i =1;
                    $.each( update_fee_structure, function( key, value ) {
                        $("#editable").append(
                            '<tr role="row" class="even">' +
                            '<td class="sorting_1">'+i+'</td>' +
                            '<td>'+value.class_name+'</td>' +
                            '<td><a href="#class'+i+'" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample" title="View">' +
                            '<i class="fa fa-eye text-success"></i>' +
                            '</a>&nbsp; &nbsp;' +
                            '<a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" onclick="edit_fee_structure('+value.id+')" href="javascript:;">' +
                            '<i class="fa fa-pencil text-warning"></i>' +
                            '</a>&nbsp; &nbsp; ' +
                            '<a class="delete" onclick="delete_fee_structure('+value.id+')" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Delete">' +
                            '<i class="fa fa-trash text-danger"></i>' +
                            '</a>'+
                            '<div class="collapse" id="class'+i+'">' +
                            '<div class="well">'+
                            '<table>'+
                            '<tr>'+
                            '<td><b>Class Name</b></td><td>'+value.class_name+'</td>'+
                            '</tr>'+
                            '<tr>'+
                            '<td><b>Admission Fee</b></td><td>'+value.admission_fee+'</td>'+
                            '</tr>'+
                            '<tr>'+
                            '<td><b>Monthly Fee</b></td><td>'+value.monthly_fee+'</td>'+
                            '</tr>'+
                            '<tr>'+
                            '<td><b>Annual Funds & Others</b></td><td>'+value.annual_funds_others+'</td>'+
                            '</tr>'+
                            '</table>'+
                            '</div>'+
                            '</div>'+
                            '</td></tr>');
                        i++;
                    });
                    var table = $('#editable_table');
                    table.DataTable({
                        dom: '<"text-xs-right"B><f>lr<"table-responsive"t>ip',
                        buttons: [
                            'copy', 'csv', 'print'
                        ]
                    });
                    var tableWrapper = $("#editable_table_wrapper");
                    tableWrapper.find(".dataTables_length select").select2({
                        showSearchInput: false //hide search box with special css class
                    }); // initialize select2 dropdown
                    $("#editable_table_wrapper .dt-buttons .btn").addClass('btn-secondary').removeClass('btn-default');
                    //location.reload('url()');
                });
            }else{
                printErrorMsg(response.responseJSON.error);
            }
        }
    };

    function model_dismiss() {
        jQuery("#modal-zoomin").hide();
    }

</script>
@endpush
