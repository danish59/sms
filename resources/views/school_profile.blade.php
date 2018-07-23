@extends('layouts.school_profile_layout')
@section('pageContent')
<div class="wrapper row3">
    <div id="featured_slide_">
        <ul id="featured_slide_Content">
            <li class="featured_slide_Image"><a href="#"><img src="{{asset('/images/admin-images/profile_gallery/'.$data['profile_gallery']->slider_image1)}}" alt="" style="width:940px; height:340px" /></a>
                <div class="introtext">
                    <h2>Template Details</h2>
                    <p>{{$data['profile_gallery']->discription_slider1}}</p>
                </div>
            </li>
            <li class="featured_slide_Image"><a href="#"><img src="{{asset('/images/admin-images/profile_gallery/'.$data['profile_gallery']->slider_image2)}}" alt="" style="width:940px; height:340px" /></a>
                <div class="introtext">
                    <h2>Catchy Title 2</h2>
                    <p>{{$data['profile_gallery']->discription_slider2}}</p>
                </div>
            </li>
            <li class="featured_slide_Image"><a href="#"><img src="{{asset('/images/admin-images/profile_gallery/'.$data['profile_gallery']->slider_image3)}}" alt="" style="width:940px; height:340px" /></a>
                <div class="introtext">
                    <h2>Catchy Title 3</h2>
                    <p>{{$data['profile_gallery']->discription_slider3}}</p>
                </div>
            </li>
            <li class="clear featured_slide_Image"><!-- Important - Leave This Empty --></li>
        </ul>
    </div>
    <div id="hpage_featured_info" class="clear">
        <ul>
            <li><a href="#"><img src="{{asset('/images/school-profile-images/images/demo/140x120.gif')}}" alt="" /> <strong>Make An Application</strong></a></li>
            <li><a href="{{url('/apply_online/'.$data['campus']->id)}}"><img src="{{asset('/images/school-profile-images/images/demo/140x120.gif')}}" alt="" /> <strong>Admissions Oppen <br>Apply Online</strong></a></li>
            <li class="last"><a href="#"><img src="{{asset('/images/school-profile-images/images/demo/140x120.gif')}}" alt="" /> <strong>Fees &amp; Funding</strong></a></li>
        </ul>
    </div>
</div>
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
        <div id="homepage" class="clear">
            <div class="fl_left">
                <ul id="hpage_latestnews">
                    <li class="odd clear">
                        <div class="imgholder"><img src="{{asset('/images/admin-images/profile_gallery/'.$data['profile_gallery']->gallery_image1)}}" alt="" style="width:80px; height:80px" /></div>
                        <a href="#">Nequatdui laorem</a>
                        <p>Morbit incidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anter dumnullam.</p>
                    </li>
                    <li class="even clear">
                        <div class="imgholder"><img src="{{asset('/images/admin-images/profile_gallery/'.$data['profile_gallery']->gallery_image2)}}" alt="" style="width:80px; height:80px" /></div>
                        <a href="#">Nequatdui laorem</a>
                        <p>Morbit incidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anter dumnullam.</p>
                    </li>
                    <li class="odd clear">
                        <div class="imgholder"><img src="{{asset('/images/admin-images/profile_gallery/'.$data['profile_gallery']->gallery_image3)}}" alt="" style="width:80px; height:80px" /></div>
                        <a href="#">Nequatdui laorem</a>
                        <p>Morbit incidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anter dumnullam.</p>
                    </li>
                    <li class="even clear">
                        <div class="imgholder"><img src="{{asset('/images/admin-images/profile_gallery/'.$data['profile_gallery']->gallery_image4)}}" alt="" style="width:80px; height:80px" /></div>
                        <a href="#">Nequatdui laorem</a>
                        <p>Morbit incidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anter dumnullam.</p>
                    </li>
                    <li class="odd clear">
                        <div class="imgholder"><img src="{{asset('/images/admin-images/profile_gallery/'.$data['profile_gallery']->gallery_image5)}}" alt="" style="width:80px; height:80px" /></div>
                        <a href="#">Nequatdui laorem</a>
                        <p>Morbit incidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anter dumnullam.</p>
                    </li>
                    <li class="even clear">
                        <div class="imgholder"><img src="{{asset('/images/admin-images/profile_gallery/'.$data['profile_gallery']->gallery_image6)}}" alt="" style="width:80px; height:80px" /></div>
                        <a href="#">Nequatdui laorem</a>
                        <p>Morbit incidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anter dumnullam.</p>
                    </li>
                </ul>
            </div>
            <div class="fl_right">
                <h2>Sentumquisque Morbi</h2>
                <img src="{{asset('/images/admin-images/profile_gallery/'.$data['profile_gallery']->gallery_image7)}}" alt="" style="width:300px; height:120px" />
                <p>Morbit incidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anter dumnullam interdum eros dui urna consequam ac nisl nullam ligula vestassa.</p>
                <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
            </div>
        </div>
        <!-- ####################################################################################################### -->
    </div>
</div>
<!-- ####################################################################################################### -->
{{--<div class="wrapper row5">--}}
    {{--<div id="container" class="clear">--}}
        {{--<!-- ####################################################################################################### -->--}}
        {{--<div id="gallery">--}}
            {{--<!-- ########### -->--}}
            {{--<div class="gallerycontainer clear">--}}
                {{--<div class="fl_left">--}}
                    {{--<h2>Staff &amp; Students</h2>--}}
                    {{--<p>This is a W3C compliant free website template from <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>.</p>--}}
                    {{--<p>You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p>--}}
                {{--</div>--}}
                {{--<div class="fl_right">--}}
                    {{--<ul>--}}
                        {{--<li><a href="{{asset('/images/school-profile-images/images/demo/940x340.gif')}}" rel="prettyPhoto[gallery1]" title="Image 1"><img src="{{asset('/images/school-profile-images/images/demo/150x150.gif')}}" alt="Title Here" /></a></li>--}}
                        {{--<li><a href="{{asset('/images/school-profile-images/images/demo/940x340.gif')}}" rel="prettyPhoto[gallery1]" title="Image 2"><img src="{{asset('/images/school-profile-images/images/demo/150x150.gif')}}" alt="Title Here" /></a></li>--}}
                        {{--<li><a href="{{asset('/images/school-profile-images/images/demo/940x340.gif')}}" rel="prettyPhoto[gallery1]" title="Image 3"><img src="{{asset('/images/school-profile-images/images/demo/150x150.gif')}}" alt="Title Here" /></a></li>--}}
                        {{--<li class="last"><a href="{{asset('/images/school-profile-images/images/demo/940x340.gif')}}" rel="prettyPhoto[gallery1]" title="Image 4"><img src="{{asset('/images/school-profile-images/images/demo/150x150.gif')}}" alt="Title Here" /></a></li>--}}
                        {{--<li><a href="{{asset('/images/school-profile-images/images/demo/940x340.gif')}}" rel="prettyPhoto[gallery1]" title="Image 5"><img src="{{asset('/images/school-profile-images/images/demo/150x150.gif')}}" alt="Title Here" /></a></li>--}}
                        {{--<li><a href="{{asset('/images/school-profile-images/images/demo/940x340.gif')}}" rel="prettyPhoto[gallery1]" title="Image 6"><img src="{{asset('/images/school-profile-images/images/demo/150x150.gif')}}" alt="Title Here" /></a></li>--}}
                        {{--<li><a href="{{asset('/images/school-profile-images/images/demo/940x340.gif')}}" rel="prettyPhoto[gallery1]" title="Image 7"><img src="{{asset('/images/school-profile-images/images/demo/150x150.gif')}}" alt="Title Here" /></a></li>--}}
                        {{--<li class="last"><a href="{{asset('/images/school-profile-images/images/demo/940x340.gif')}}" rel="prettyPhoto[gallery1]" title="Image 8"><img src="{{asset('/images/school-profile-images/images/demo/150x150.gif')}}" alt="Title Here" /></a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- ########### -->--}}
        {{--</div>--}}
        {{--<!-- ####################################################################################################### -->--}}
        {{--<div class="pagination">--}}
            {{--<ul>--}}
                {{--<li class="prev"><a href="#">&laquo; Previous</a></li>--}}
                {{--<li><a href="#">1</a></li>--}}
                {{--<li><a href="#">2</a></li>--}}
                {{--<li class="splitter">&hellip;</li>--}}
                {{--<li><a href="#">6</a></li>--}}
                {{--<li class="current">7</li>--}}
                {{--<li><a href="#">8</a></li>--}}
                {{--<li><a href="#">9</a></li>--}}
                {{--<li class="splitter">&hellip;</li>--}}
                {{--<li><a href="#">14</a></li>--}}
                {{--<li><a href="#">15</a></li>--}}
                {{--<li class="next"><a href="#">Next &raquo;</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
        {{--<!-- ####################################################################################################### -->--}}
    {{--</div>--}}
{{--</div>--}}
<!-- ####################################################################################################### -->
@endsection
@push('scripts')
<!-- Featured Slider  -->
<script type="text/javascript" src="{{asset('/js/school-profile-js/scripts/jquery-s3slider.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#featured_slide_").s3Slider({
            timeOut:10000
        });
    });
</script>
<!-- / Featured Slider -->
@endpush
