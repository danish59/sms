<?php
/**
 * Created by PhpStorm.
 * User: Danish
 * Date: 6/13/2017
 * Time: 12:32 AM
 */
?>
<!DOCTYPE html>
 <html lang="en">
<head>
    <title>Educational Theory</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="{{asset('/css/school-profile-css/styles/layout.css')}}" type="text/css" />
@stack('styles')
</head>
<body id="top" style="margin-left: 10%;margin-right: 10%">
<div class="wrapper ">
    <nav class="nav navbar navbar-static-top">
    <div id="topnav">
        <ul>
            <li class="active"><a href="{{'/school_home/'.$data['campus']->id}}"><strong>Home</strong></a></li>
            {{--<li><a href="pages/style-demo.html"><strong>Style Demo</strong></a></li>--}}
            {{--<li><a href="pages/full-width.html"><strong>Full Width</strong></a></li>--}}
            {{--<li><a href="pages/3-columns.html"><strong>3 Columns</strong></a></li>--}}
            {{--<li><a href="pages/portfolio.html"><strong>Portfolio</strong></a></li>--}}
            <li><a href={{'/profile_gallery/'.$data['campus']->id}}><strong>Gallery</strong></a></li>
            <li><a href="#aboutus"><strong>About Us</strong></a></li>
            <li class="last"><a href="#contactus"><strong>Contact Us</strong></a></li>
        </ul>
    </div>
    </nav>
</div>
{{--{{ print_r($data['my_school'])}}--}}
{{--<!-- ####################################################################################################### -->--}}
<div class="wrapper row2">
    <div id="header" class="clear">
            <div class="col-lg-1">
                <div class="fl_left">
                    <img src="{{asset('/images/admin-images/profile_images/'.$data['my_school']->image)}}" alt="not found" style="width:60px; height:80px;margin-top: 7%" />
                </div>
            </div>
            <div class="col-lg-8">
                 <div class="fl_left">
                    <h1 style="margin-left: 5%"><a href="{{'/school_home/'.$data['campus']->id}}">{{ $data['my_school']->school_name }} <p><?php echo $data['campus']->campus_name ?></p></a></h1>
                 </div>
            </div>
            <div class="col-lg-2">
                <div class="fl_right">
                    <form action="#" method="post" id="sitesearch">
                        <fieldset>
                            <legend>Site Search</legend>
                            <input type="text" />
                            <input type="image" src="{{asset('/images/school-profile-images/images/search.gif')}}" id="search" alt="Search" />
                        </fieldset>
                    </form>
                    <p><a href="#">A - Z Index</a> | <a href='{{url('/login')}}'>Student Login</a> | <a href='{{url('/login')}}'>Staff Login</a></p>
                </div>
            </div>
    </div>
</div>
<!-- ####################################################################################################### -->
@yield('pageContent')
<!-- ####################################################################################################### -->
<div class="wrapper"  id="aboutus">
    <div id="academiclinks" class="clear">
        <h1><b><i>About Us</i></b></h1>
        <div class="linkbox">
            <h2>Link Category Heading</h2>
            <ul>
                <li><a href="#">&raquo; Academic Advisory</a></li>
                <li><a href="#">&raquo; Academic Assistance</a></li>
                <li><a href="#">&raquo; Academic Calendars</a></li>
                <li><a href="#">&raquo; Academics Office</a></li>
                <li><a href="#">&raquo; Administration</a></li>
                <li><a href="#">&raquo; Adult Learners</a></li>
                <li><a href="#">&raquo; Alumni Chapters</a></li>
                <li><a href="#">&raquo; Alumni Events</a></li>
                <li><a href="#">&raquo; Athletics</a></li>
                <li><a href="#">&raquo; Campus Life At a Glance</a></li>
                <li><a href="#">&raquo; Campus Recreation</a></li>
                <li><a href="#">&raquo; Campus Safety &amp; Security</a></li>
            </ul>
        </div>
        <div class="linkbox">
            <h2>Link Category Heading</h2>
            <ul>
                <li><a href="#">&raquo; Class Schedules</a></li>
                <li><a href="#">&raquo; Counselling Center</a></li>
                <li><a href="#">&raquo; Course Descriptions and Catalogue</a></li>
                <li><a href="#">&raquo; Department Directory</a></li>
                <li><a href="#">&raquo; Departments &amp; Programs</a></li>
                <li><a href="#">&raquo; Fellowships</a></li>
                <li><a href="#">&raquo; Finals Schedules</a></li>
                <li><a href="#">&raquo; Financial Aid</a></li>
                <li><a href="#">&raquo; Fitness and Recreation Facilities</a></li>
                <li><a href="#">&raquo; Global Learning</a></li>
                <li><a href="#">&raquo; Graduate</a></li>
                <li><a href="#">&raquo; Graduate Admissions</a></li>
            </ul>
        </div>
        <div class="linkbox">
            <h2>Link Category Heading</h2>
            <ul>
                <li><a href="#">&raquo; Graduate Health Services</a></li>
                <li><a href="#">&raquo; Graduate Housing</a></li>
                <li><a href="#">&raquo; Graduate Programs</a></li>
                <li><a href="#">&raquo; Graduate Student Association</a></li>
                <li><a href="#">&raquo; Graduate Studies</a></li>
                <li><a href="#">&raquo; Honours Program</a></li>
                <li><a href="#">&raquo; Interactive Schedule</a></li>
                <li><a href="#">&raquo; International Programs</a></li>
                <li><a href="#">&raquo; International Students</a></li>
                <li><a href="#">&raquo; Intramural Sports</a></li>
                <li><a href="#">&raquo; Language Resources</a></li>
                <li><a href="#">&raquo; Maps and Directions</a></li>
            </ul>
        </div>
        <div class="linkbox last">
            <h2>Link Category Heading</h2>
            <ul>
                <li><a href="#">&raquo; Office of the Registrar</a></li>
                <li><a href="#">&raquo; Online Learning</a></li>
                <li><a href="#">&raquo; Parent Information</a></li>
                <li><a href="#">&raquo; Residence Life</a></li>
                <li><a href="#">&raquo; Residential Colleges</a></li>
                <li><a href="#">&raquo; Schools and Colleges</a></li>
                <li><a href="#">&raquo; Student Activities</a></li>
                <li><a href="#">&raquo; Student Affairs</a></li>
                <li><a href="#">&raquo; Student Development</a></li>
                <li><a href="#">&raquo; Student Financial Services</a></li>
                <li><a href="#">&raquo; Student Group Directory</a></li>
                <li><a href="#">&raquo; Student Life</a></li>
            </ul>
        </div>
    </div>
</div>
{{--<div class="row">--}}

    {{--<aside class="col-md-3 col-sm-4">--}}
        {{--<h3></h3>--}}

        {{--<ul class="nav nav-pills nav-stacked">--}}
            {{--<li class="active"><a class="btn btn-primary" role="button" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseExample" href="#principle_message"><b><i>Principle Message</i></b></a></li>--}}
            {{--<li class="active"><a class="btn btn-primary" role="button" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseExample" href="#school_events"><b><i>School Events</i></b></a></li>--}}
            {{--<li class="active"><a class="btn btn-primary" role="button" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseExample" href="#students_life"><b><i>Students life</i></b></a></li>--}}
            {{--<li class="active"><a class="btn btn-primary" role="button" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseExample" href="#facilities"><b><i>facilities</i></b></a></li>--}}
            {{--<li class="active"><a class="btn btn-primary" role="button" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseExample" href="#technology"><b><i>Technology</i></b></a></li>--}}


        {{--</ul>--}}

    {{--</aside>--}}

    {{--<!--------------------------------------------2nd column start-------------------------------------->--}}
    {{--<section class="col-md-6 col-sm-4">--}}
        {{--<h1></h1>--}}
        {{--<p class="justified"></p>--}}
        {{--<!-------------------------------------------------------------------------------------------------------->--}}
        {{--<div class="collapse" id="principle_message">--}}
            {{--<div class="well">--}}
                {{--<b>--}}

                    {{--As the Principal, pc school, I am excited about this educational opportunity for Pakistani childrens in pakistan.--}}

                    {{--Our system is based upon knowledge of the basics coupled with creative thinking, exploration, and problem solving.  Our aim is to create well-rounded citizens of our world. Using traditional, as well as proven methods of creative instruction, we will provide for an individual educational opportunity for each student.--}}
                    {{--Our curriculum is based on an American international model but also includes those beneficial elements of the Pakistani National Curriculum.--}}

                    {{--We have talented teachers  from within Pakistan. While our focus is on academics, we also emphasize those co-curricular activities which help to make the most of the talents of each child.--}}

                    {{--We are in the process of creating a world class educational opportunity for the children of Pakistan. After many years in the American System, I am personally proud to be a part of this process. We welcome you to join us.--}}
                    {{--<br />--}}
                    {{--Principle:_______________--}}
                {{--</b>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!-------------------------------------------------------------------------------------------------------->--}}
        {{--<div class="collapse" id="school_events">--}}
            {{--<div class="well">--}}
                {{--<b>--}}
                    {{--Students from PCS took part in World Math Challenge in March. M.danish Lower 6 was awarded medals & certificates.--}}
                    {{--you may also visit Age 14-18 World Education Games--}}
                {{--</b>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<!-------------------------------------------------------------------------------------------------------->--}}
        {{--<div class="collapse" id="students_life">--}}
            {{--<div class="well">--}}
                {{--<b>--}}
                    {{--Food & Drinks<br />--}}
                    {{--PCS is famous for its exotic cuisine. There are restaurants in big number in PCS offering a vast variety of sumptuous food. Popular local dishes, continental, Chinese, Thai, Japanese and fast food are offered at a wide variety of eating places. You can eat and drink somewhere different every day.--}}

                    {{--Places to Visit<BR />--}}
                    {{--PCS has a lot of tourist attractions and places of interest..--}}
                    {{--offering everything for fun sports and recreational services. You can also get absorbed in the scenic natural beauty of Golf and Country Club. The variety of parks and recreational places ensure that the city offers something for everyone. It is a place where you can relax, socialize, or develop new interests.--}}

                    {{--People & Culture--}}
                    {{--The people of Lahore are very social and polite. They are very open and cordial to the visitors and guests. Eating is the favorite pass time.--}}
                {{--</b>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<!-------------------------------------------------------------------------------------------------------->--}}
        {{--<div class="collapse" id="facilities">--}}
            {{--<div class="well">--}}
                {{--<b>--}}
                    {{--Pc schools provide a range of co-curricular facilities as part of the timetable, suited to the ages of the students. As a matter of policy PC School provides the following infrastructural facilities in most of its branches--}}


                    {{--In-house swimming pools are an integral part of all pc campuses which run junior classes. For Upper School children swimming is arranged at standard swimming pools in quality clubs and hotels. Swimming is part of the regular sports curriculum during the summers.--}}


                    {{--In order to achieve high productivity, a conducive working environment is a must; thus all branches of PCS are air-conditioned including class rooms, libraries, halls, laboratories and offices.--}}


                {{--</b>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<!-------------------------------------------------------------------------------------------------------->--}}
        {{--<div class="collapse" id="technology">--}}
            {{--<div class="well">--}}
                {{--<B>--}}
                    {{--PCS provides online services to students,teachers,parents.--}}
                    {{--IT monitoring of all branches is conducted by this wing on a regular basis. The monitoring team looks at various aspects some of which are:--}}

                    {{--Quality of notebook marking--}}
                    {{--Lesson planning--}}
                    {{--Syllabus coverage--}}
                    {{--Quality of class conduct (through classroom observations)--}}
                    {{--Standard of Monthly Tests/Exam Papers--}}
                    {{--Regular upkeep of--}}
                    {{--Work Registers--}}
                    {{--Grade Registers--}}

                    {{--PCS has its own IT programme.which are conduct every year.--}}

                {{--</B>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!---------------------------------------------------------------------------------------------------------->--}}


        {{--<p></p>--}}
        {{--<div><!----row closed----->--}}
            {{--<h1></h1>--}}
            {{--<div class="row">--}}
                {{--<div class="col-xs-6">--}}
                    {{--<div class="thumbnail">--}}
                        {{--<img src="img/school/s12.jpg" alt="" class="img-responsive">--}}

                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-xs-6">--}}
                    {{--<div class="thumbnail">--}}
                        {{--<img src="img/school/s13.jpg" alt="" class="img-responsive">--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-xs-6">--}}
                    {{--<div class="thumbnail">--}}
                        {{--<img src="img/school/s8.jpg" alt="" class="img-responsive">--}}

                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-xs-6">--}}
                    {{--<div class="thumbnail">--}}
                        {{--<img src="img/school/s20.jpg" alt="" class="img-responsive">--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}

    {{--</section>--}}

    {{--<article class="col-md-3 col-sm-4">--}}
        {{--<h3></h3>--}}



        {{--<div class="collapse" id="history_facilities">--}}
            {{--<div class="well">--}}
                {{--<b>--}}
                    {{--HISTORY:<BR />--}}
                    {{--The PCS group has around 4,000 fulltime<br/> students in pakistan and is possibly <br />the largest school network of its <br />kind in the world. Established in November<br /> 1975 as the Les Anges Montessori Academy<br /> with 19 toddlers, PCS has since grown <br />into an international network of private schools<br />, imparting distinctive and meaningful <br />learning to students all the way from <br />birth – through its partnership in Pakistan <br />with Gymboree Play & Music in Lahore.--}}

                    {{--<BR />--}}
                    {{--FACILITIES:<BR />--}}
                    {{--PCS is one of the major educational<br /> institutions in Pakistan. It was established <br />in 1984 by educationists from <br />the UK and Pakistan. The aim of<br /> the project was to provide British style <br />education leading ultimately to<br /> British qualifications. Pupils of PCS <br />are prepared for the GCE ’O’ and ’A’<br /> level examinations <br />of the PK examining bodies.--}}



                {{--</b></div></div>--}}


        {{--<div class="collapse" id="mission_vision">--}}
            {{--<div class="well">--}}
                {{--<b>--}}
                    {{--Mission:--}}
                    {{--PCS recognizes the importance of mutual respect and sharing ideas. PCS accomplishes this by cultivating values of respect, compassion and integrity in each student. Through innovative technology and state-of-the-art facilities, AISS allows students to complete their studies with intellectual, physical, social, and emotional strength, able to engage in the global community.--}}

                    {{--We also build connections between Pakistani children in order to foster a mutually beneficial environment of global learning.--}}

                    {{--Vision--}}
                    {{--We at PCS are committed to providing the highest quality education for the children of Pakistan. This program promotes the growth of all students, and will inspire, challenge, and nurture our students, their families, and our staff.--}}




                {{--</b></div></div>--}}

        {{--<div>--}}
            {{--<b>--}}
                {{--Contact Us:<br />--}}
                {{--Branch#1 Boys Campus<br />--}}
                {{--496-15-B1,Near aslam chowk<br />--}}
                {{--college road township<br />--}}
                {{--03324839240--}}
            {{--</b>--}}
        {{--</div>--}}

    {{--</article>--}}

{{--</div>--}}

<!-- ####################################################################################################### -->
<div class="wrapper" id="contactus">
    <div id="footer" class="clear">
        <h6><b><i>Contact Us</i></b></h6>
        <!-- ####################################################################################################### -->
        <div class="fl_left clear">
            <div class="fl_left center"><img src="{{asset('/images/school-profile-images/images/demo/worldmap.gif')}}" alt="" /><br />
                <a href="#">Find Us With Google Maps &raquo;</a></div>
            <address>
                <?php
                $address = $data['campus']->address;
                $add = unserialize($address);
                ?>
                {{$add['office']}}<br />
                {{--Address Line 2<br />--}}
                    {{$add['city']}}<br />
                    {{$add['country']}}<br />
                <br />
                Phone: {{$data['campus']->phone_office}}<br />
                Email: <a href="#">{{$data['campus']->email}}</a>
            </address>
        </div>
        <div class="fl_right">
            <div id="social" class="clear">
                <p>Stay Up to Date With Whats Happening</p>
                <ul>
                    <li><a style="background-position:0 0;" href="#">Twitter</a></li>
                    <li><a style="background-position:-72px 0;" href="#">LinkedIn</a></li>
                    <li><a style="background-position:-142px 0;" href="#">Facebook</a></li>
                    <li><a style="background-position:-212px 0;" href="#">Flickr</a></li>
                    <li><a style="background-position:-282px 0;" href="#">RSS</a></li>
                </ul>
            </div>
            <div id="newsletter">
                <form action="#" method="post">
                    <fieldset>
                        <legend>Subscribe To Our Newsletter:</legend>
                        <input type="text" value="Enter Email Here&hellip;" onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
                        <input type="text" id="subscribe" value="Submit" />
                    </fieldset>
                </form>
            </div>
        </div>
        <div id="copyright" class="clear">
            <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
            <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
        </div>
        <!-- ####################################################################################################### -->
    </div>
</div>
</body>
<script type="text/javascript" src="{{asset('/js/school-profile-js/scripts/jquery.min.js')}}"></script>
@stack('scripts')
</html>