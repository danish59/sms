<?php
/**
 * Created by PhpStorm.
 * User: Danish Ch
 * Date: 9/27/2017
 * Time: 4:23 PM
 */?>
@extends('layouts.school_profile_layout')
@section('pageContent')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="inner bg-container">
        <div class="card">
            @if(Session::has('admission_no'))
                <div class="wrapper" style="background: #d7ffdc">
                    <p align="center"><button id="printPage">Print</button></p>
                    <div id="report">
                        <h3 align="center">Congratulation You have successfully Applied</h3><br>
                        <h2 align="center"><i> {{Session::get('admission_no')}} </i></h2>
                        <br>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
@push('scripts')
<script lang='javascript'>
    $(document).ready(function(){
        $('#printPage').click(function(){
            var data = '<input type="button" value="Print this page" onClick="window.print()">';
            data += '<div id="div_print">';
            data += $('#report').html();
            data += '</div>';

            myWindow=window.open('','','width=500,height=500');
            myWindow.innerWidth = screen.width;
            myWindow.innerHeight = screen.height;
            myWindow.screenX = 0;
            myWindow.screenY = 0;
            myWindow.document.write(data);
            myWindow.focus();
        });
    });
</script>
@endpush

