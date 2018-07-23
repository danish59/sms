<?php
/**
 * Created by PhpStorm.
 * User: Danish
 * Date: 6/15/2017
 * Time: 11:47 PM
 */
?>
@extends('layouts.school_profile_layout')
@push('styles')
<!-- prettyPhoto -->
<link rel="stylesheet" href="{{asset('/css/school-profile-css/prettyphoto/prettyPhoto.css')}}" type="text/css" />
<!-- / prettyPhoto -->
@endpush
@section('pageContent')
    <!-- ####################################################################################################### -->
    <div class="wrapper row4">
        <div id="quicknav" class="clear">
            <ul>
                <li><a href="#">Current Students</a>
                    <ul>
                        <li><a href="#">Academic advice</a></li>
                        <li><a href="#">Career Advice Centre</a></li>
                        <li><a href="#">Help With Learning</a></li>
                        <li><a href="#">Student Accommodation</a></li>
                        <li><a href="#">Student Communities</a></li>
                        <li><a href="#">Student Directory</a></li>
                        <li><a href="#">Student Facilities</a></li>
                        <li class="last"><a href="#">Students Union</a></li>
                    </ul>
                </li>
                <li><a href="#">Prospective Students</a>
                    <ul>
                        <li><a href="#">&raquo; University Life</a></li>
                        <li><a href="#">&raquo; Academic Courses</a></li>
                        <li><a href="#">&raquo; Where To Apply</a></li>
                        <li><a href="#">&raquo; Cost And Fees</a></li>
                        <li><a href="#">&raquo; Student Accommodation</a></li>
                        <li><a href="#">&raquo; Schools And Colleges</a></li>
                        <li><a href="#">&raquo; Open Days</a></li>
                        <li class="last"><a href="#">&raquo; Visit The University</a></li>
                    </ul>
                </li>
                <li><a href="#">International Students</a>
                    <ul>
                        <li><a href="#">&raquo; Why Our College</a></li>
                        <li><a href="#">&raquo; Arrival Information</a></li>
                        <li><a href="#">&raquo; Studying Abroad</a></li>
                        <li><a href="#">&raquo; How To Apply</a></li>
                        <li><a href="#">&raquo; Student Accommodation</a></li>
                        <li class="last"><a href="#">&raquo; Cost &amp; Finances</a></li>
                    </ul>
                </li>
                <li class="last"><a href="#">Departments &amp; Programs</a>
                    <ul>
                        <li><a href="#">&raquo; Art and Design</a></li>
                        <li><a href="#">&raquo; Business Management</a></li>
                        <li><a href="#">&raquo; Communications</a></li>
                        <li><a href="#">&raquo; Geosciences</a></li>
                        <li><a href="#">&raquo; Mathematics</a></li>
                        <li><a href="#">&raquo; Philosophy</a></li>
                        <li><a href="#">&raquo; Political Science</a></li>
                        <li class="last"><a href="#">&raquo; Secondary Education</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- ####################################################################################################### -->
    <div class="wrapper row5">
        <div id="container" class="clear">
            <!-- ####################################################################################################### -->
            <div id="gallery">
                <!-- ########### -->
                <div class="gallerycontainer clear">
                    <div class="fl_left">
                        <h2>Staff &amp; Students</h2>
                        <p>This is a W3C compliant free website template from <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>.</p>
                        <p>You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p>
                    </div>
                    <div class="fl_right">
                        <ul>
                            <li><a href="{{asset('/images/admin-images/profile_gallery/'.$data['profile_gallery']->gallery_image1)}}" rel="prettyPhoto[gallery1]" title="{{$data['profile_gallery']->title_gallery_image1}}"><img src="{{asset('/images/admin-images/profile_gallery/'.$data['profile_gallery']->gallery_image1)}}" alt="{{$data['profile_gallery']->title_gallery_image1}}" style="width:150px; height:150px" /></a></li>
                            <li><a href="{{asset('/images/admin-images/profile_gallery/'.$data['profile_gallery']->gallery_image2)}}" rel="prettyPhoto[gallery1]" title="{{$data['profile_gallery']->title_gallery_image2}}"><img src="{{asset('/images/admin-images/profile_gallery/'.$data['profile_gallery']->gallery_image2)}}" alt="{{$data['profile_gallery']->title_gallery_image2}}" style="width:150px; height:150px" /></a></li>
                            <li><a href="{{asset('/images/admin-images/profile_gallery/'.$data['profile_gallery']->gallery_image3)}}" rel="prettyPhoto[gallery1]" title="{{$data['profile_gallery']->title_gallery_image3}}"><img src="{{asset('/images/admin-images/profile_gallery/'.$data['profile_gallery']->gallery_image3)}}" alt="{{$data['profile_gallery']->title_gallery_image3}}" style="width:150px; height:150px" /></a></li>
                            <li class="last"><a href="{{asset('/images/admin-images/profile_gallery/'.$data['profile_gallery']->gallery_image4)}}" rel="prettyPhoto[gallery1]" title="{{$data['profile_gallery']->title_gallery_image4}}"><img src="{{asset('/images/admin-images/profile_gallery/'.$data['profile_gallery']->gallery_image4)}}" alt="{{$data['profile_gallery']->title_gallery_image4}}" style="width:150px; height:150px" /></a></li>
                            <li><a href="{{asset('/images/admin-images/profile_gallery/'.$data['profile_gallery']->gallery_image5)}}" rel="prettyPhoto[gallery1]" title="{{$data['profile_gallery']->title_gallery_image5}}"><img src="{{asset('/images/admin-images/profile_gallery/'.$data['profile_gallery']->gallery_image5)}}" alt="{{$data['profile_gallery']->title_gallery_image5}}" style="width:150px; height:150px" /></a></li>
                            <li><a href="{{asset('/images/admin-images/profile_gallery/'.$data['profile_gallery']->gallery_image6)}}" rel="prettyPhoto[gallery1]" title="{{$data['profile_gallery']->title_gallery_image6}}"><img src="{{asset('/images/admin-images/profile_gallery/'.$data['profile_gallery']->gallery_image6)}}" alt="{{$data['profile_gallery']->title_gallery_image6}}" style="width:150px; height:150px" /></a></li>
                            <li><a href="{{asset('/images/admin-images/profile_gallery/'.$data['profile_gallery']->gallery_image7)}}" rel="prettyPhoto[gallery1]" title="{{$data['profile_gallery']->title_gallery_image7}}"><img src="{{asset('/images/admin-images/profile_gallery/'.$data['profile_gallery']->gallery_image7)}}" alt="{{$data['profile_gallery']->title_gallery_image7}}" style="width:150px; height:150px" /></a></li>
                            <li class="last"><a href="{{asset('/images/admin-images/profile_gallery/'.$data['profile_gallery']->gallery_image8)}}" rel="prettyPhoto[gallery1]" title="{{$data['profile_gallery']->title_gallery_image8}}"><img src="{{asset('/images/admin-images/profile_gallery/'.$data['profile_gallery']->gallery_image8)}}" alt="{{$data['profile_gallery']->title_gallery_image8}}" style="width:150px; height:150px" /></a></li>
                        </ul>
                    </div>
                </div>
                <!-- ########### -->
            </div>
            <!-- ####################################################################################################### -->
            <div class="pagination">
                <ul>
                    <li class="prev"><a href="#">&laquo; Previous</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="splitter">&hellip;</li>
                    <li><a href="#">6</a></li>
                    <li class="current">7</li>
                    <li><a href="#">8</a></li>
                    <li><a href="#">9</a></li>
                    <li class="splitter">&hellip;</li>
                    <li><a href="#">14</a></li>
                    <li><a href="#">15</a></li>
                    <li class="next"><a href="#">Next &raquo;</a></li>
                </ul>
            </div>
            <!-- ####################################################################################################### -->
        </div>
    </div>
    <!-- ####################################################################################################### -->
@endsection
@push('scripts')
<script type="text/javascript" src="{{asset('/js/school-profile-js/prettyphoto/jquery.prettyPhoto.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("a[rel^='prettyPhoto']").prettyPhoto({
            theme: 'dark_rounded',
            overlay_gallery: false,
            social_tools: false
        });
    });
</script>
@endpush

