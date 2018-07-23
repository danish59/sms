@extends('layouts.myhome_layout')

@section('content')
  
  <!-- Start login modal window -->
  <div aria-hidden="false" role="dialog"  tabindex="-1" id="signup-form" class="modal leread-modal fade in">
    <div class="modal-dialog">
      <!-- Start login section -->
      <div id="login-content" class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title"><i class="fa fa-lock"></i>Registration Step 1 of 2</h4>
        </div>
        <div class="modal-body">

        </div>
      </div>
    </div>
  </div>
  <!-- End login modal window -->

  <!---show session messages--->
  @if(Session::has('success_message'))
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
      <h3 align="center"><i> {{Session::get('success_message')}} </i></h3>
    </div>
    {{--@else--}}
    {{--<div class="alert alert-danger alert-dismissible" role="alert" style="display: inline-block;">--}}
      {{--<button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
        {{--<span aria-hidden="true">&times;</span></button>--}}
      {{--<h3 align="center"><i> {{Session::get('cancel_message')}} </i></h3>--}}
    {{--</div>--}}
  @endif
  <!-- Start slider -->
  <section id="slider">
    <div class="main-slider">
      <div class="single-slide">
        <img src="/images/slider-1.jpg" alt="img">
        <div class="slide-content">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="slide-article">
                  <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">Creative Design & Best Feature</h1>
                  <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                  <a class="read-more-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" href="#">Read More</a>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="slider-img wow fadeInUp">
                  <img src="/images/person1.png" alt="business man">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="single-slide">
        <img src="/images/slider-3.jpg" alt="img">
        <div class="slide-content">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="slide-article">
                  <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">We are Best Team & Support you always</h1>
                  <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                  <a class="read-more-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" href="#">Read More</a>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="slider-img wow fadeInUp">
                  <img src="/images/person2.png" alt="business man">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>          
    </div>
  </section>
  <!-- End slider -->

  <!-- Start Feature -->
  <section id="feature">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Features</h2>
            <span class="line"></span>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="feature-content">
            <div class="row">
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <i class="fa fa-leaf feature-icon"></i>
                  <h4 class="feat-title">Creative Design</h4>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <i class="fa fa-mobile feature-icon"></i>
                  <h4 class="feat-title">Responsive Layouts</h4>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <i class="fa fa-thumbs-o-up feature-icon"></i>
                  <h4 class="feat-title">Great Features</h4>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <i class="fa fa-gears feature-icon"></i>
                  <h4 class="feat-title">Multiple Options</h4>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <i class="fa fa-code feature-icon"></i>
                  <h4 class="feat-title">Quality Code</h4>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <i class="fa fa-smile-o feature-icon"></i>
                  <h4 class="feat-title">Awesome Support</h4>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Feature -->

  <!-- Start about  -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">About us</h2>
            <span class="line"></span>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="about-content">
            <div class="row">
              <div class="col-md-6">
                <div class="our-skill">
                  <h3>Our Skills</h3>                  
                  <div class="our-skill-content">
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    <div class="progress">
                      <div class="progress-bar six-sec-ease-in-out" role="progressbar" data-transitiongoal="100">
                        <span class="progress-title">Html5</span>
                      </div>
                  </div>
                  <div class="progress">
                      <div class="progress-bar six-sec-ease-in-out" role="progressbar" data-transitiongoal="85">
                        <span class="progress-title">Css3</span>
                      </div>
                  </div>
                  <div class="progress">
                      <div class="progress-bar six-sec-ease-in-out" role="progressbar" data-transitiongoal="70">
                        <span class="progress-title">JQuery</span>
                      </div>
                  </div>
                  <div class="progress">
                      <div class="progress-bar six-sec-ease-in-out" role="progressbar" data-transitiongoal="60">
                        <span class="progress-title">wordPress</span>
                      </div>
                  </div>
                  <div class="progress">
                      <div class="progress-bar six-sec-ease-in-out" role="progressbar" data-transitiongoal="40">
                        <span class="progress-title">Php</span>
                      </div>
                  </div>
                   <div class="progress">
                      <div class="progress-bar six-sec-ease-in-out" role="progressbar" data-transitiongoal="25">
                        <span class="progress-title">Java</span>
                      </div>
                  </div>
                  </div>                  
                </div>
              </div>
              <div class="col-md-6">
                <div class="why-choose-us">
                  <h3>Why Choose Us?</h3>
                  <div class="panel-group why-choose-group" id="accordion">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            Awesome Design Layout <span class="fa fa-minus-square"></span>
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                        <img class="why-choose-img" src="images/testi1.jpg" alt="img">
                         <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default ">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            Quality Coding <span class="fa fa-plus-square"></span>
                          </a>
                        </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                         <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            Great Support <span class="fa fa-plus-square"></span>
                          </a>
                        </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                          <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end about -->

  <!-- Start counter -->
  <section id="counter">
    <div class="counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="counter-area">
              <div class="row">
                <!-- Start single counter -->
                <div class="col-md-3 col-sm-6">
                  <div class="single-counter">
                    <div class="counter-icon">
                      <i class="fa fa-suitcase"></i>
                    </div>
                    <div class="counter-no counter">
                      1275
                    </div>
                    <div class="counter-label">
                      Projects
                    </div>
                  </div>
                </div>
                <!-- End single counter -->
                <!-- Start single counter -->
                <div class="col-md-3 col-sm-6">
                  <div class="single-counter">
                    <div class="counter-icon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                    <div class="counter-no counter">
                      5275
                    </div>
                    <div class="counter-label">
                      Hours Work
                    </div>
                  </div>
                </div>
                <!-- End single counter -->
                <!-- Start single counter -->
                <div class="col-md-3 col-sm-6">
                 <div class="single-counter">
                    <div class="counter-icon">
                      <i class="fa fa-trophy"></i>
                    </div>
                    <div class="counter-no counter">
                      350
                    </div>
                    <div class="counter-label">
                      Awards
                    </div>
                  </div>
                </div>
                <!-- End single counter -->
                <!-- Start single counter -->
                <div class="col-md-3 col-sm-6">
                  <div class="single-counter">
                    <div class="counter-icon">
                      <i class="fa fa-users"></i>
                    </div>
                    <div class="counter-no counter">
                      875
                    </div>
                    <div class="counter-label">
                      Clients
                    </div>
                  </div>
                </div>
                <!-- End single counter -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End counter -->


  <!-- Start Service -->
  <section id="service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Our Services</h2>
            <span class="line"></span>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="service-content">
            <div class="row">
              <!-- Start single service -->
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn">
                  <i class="fa fa-desktop service-icon"></i>
                  <h4 class="service-title">Web Development</h4>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn">
                  <i class="fa fa-paw service-icon"></i>
                  <h4 class="service-title">Digital Design</h4>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn">
                  <i class="fa fa-magic service-icon"></i>
                  <h4 class="service-title">Marketing</h4>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn">
                  <i class="fa fa-shopping-cart service-icon"></i>
                  <h4 class="service-title">E-commerce</h4>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn">
                  <i class="fa fa-mobile service-icon"></i>
                  <h4 class="service-title">App Development</h4>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
              </div>
              <!-- End single service -->
              <!-- Start single service -->
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn">
                  <i class="fa fa-rocket service-icon"></i>
                  <h4 class="service-title">S.E.O</h4>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
              </div>
              <!-- End single service -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service -->

  <!-- Start Pricing table -->
  <section id="pricing-table">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Our Pricing Tables</h2>
            <span class="line"></span>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="pricing-table-content">
            <div class="row">
              {!! Form::open(array('url' => 'checkout')) !!}
              {!! Form::hidden('type','basic') !!}
              {!! Form::hidden('fee',30) !!}
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-table-price wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                  <div class="price-header">
                    <span class="price-title">Basic</span>
                    <div class="price">
                      <sup class="price-up">$</sup>
                      25
                      <span class="price-down">/mo</span>
                    </div>
                  </div>
                  <div class="price-article">
                    <ul>
                      {{--<li>2GB Space</li>--}}
                      {{--<li>10GB Bandwidth</li>--}}
                      {{--<li>Free Domain</li>--}}
                      {{--<li>Free Email</li>--}}
                      {{--<li>Unlimited Support</li>--}}
                    </ul>
                  </div>
                  <div class="price-footer">
        <!---  <a class="login modal-form purchase-btn" data-target="#login-form" data-toggle="modal" href="#">Register Now</a>--->
               {{--<a class="purchase-btn"  href="{{URL('/schoolReg')}}">Register Now</a>--}}
                    <div class="links">
                      {{--<a class="purchase-btn"  href="{{URL('checkout/'.'5')}}">CheckOut Now</a>--}}
                      <button class="btn db-button-color-square btn-lg">CheckOut Now</button>
                    </div>

                  </div>
                </div>
              </div>
              {!! Form::close() !!}

              {!! Form::open(array('url' => 'checkout')) !!}
              {!! Form::hidden('type','Advanced') !!}
              {!! Form::hidden('fee',50) !!}

              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-table-price wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.75s">
                  <div class="price-header">
                    <span class="price-title">Advanced</span>
                    <div class="price">
                      <sup class="price-up">$</sup>
                      50
                      <span class="price-down">/mo</span>
                    </div>
                  </div>
                  <div class="price-article">
                    <ul>
                      {{--<li>2GB Space</li>--}}
                      {{--<li>10GB Bandwidth</li>--}}
                      {{--<li>Free Domain</li>--}}
                      {{--<li>Free Email</li>--}}
                      {{--<li>Unlimited Support</li>--}}
                    </ul>
                  </div>
                  <div class="price-footer">
                    <button class="btn db-button-color-square btn-lg">CheckOut Now</button>                  </div>
                </div>
              </div>
              {!! Form::close() !!}

              {!! Form::open(array('url' => 'checkout')) !!}
              {!! Form::hidden('type','Professional') !!}
              {!! Form::hidden('fee',100) !!}

              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-table-price featured-price wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                  <div class="price-header">
                    <span class="price-title">Professional</span>
                    <div class="price">
                      <sup class="price-up">$</sup>
                      100
                      <span class="price-down">/mo</span>
                    </div>
                  </div>
                  <div class="price-article">
                    <ul>
                      {{--<li>2GB Space</li>--}}
                      {{--<li>10GB Bandwidth</li>--}}
                      {{--<li>Free Domain</li>--}}
                      {{--<li>Free Email</li>--}}
                      {{--<li>Unlimited Support</li>--}}
                    </ul>
                  </div>
                  <div class="price-footer">
                    <button class="btn db-button-color-square btn-lg">CheckOut Now</button>                  </div>
                </div>
              </div>
              {!! Form::close() !!}

              {!! Form::open(array('url' => 'checkout')) !!}
              {!! Form::hidden('type','Exclusive') !!}
              {!! Form::hidden('fee',125) !!}

              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-table-price wow fadeInUp" data-wow-duration="1.15s" data-wow-delay="1.15s">
                  <div class="price-header">
                    <span class="price-title">Exclusive</span>
                    <div class="price">
                      <sup class="price-up">$</sup>
                      125
                      <span class="price-down">/mo</span>
                    </div>
                  </div>
                  <div class="price-article">
                    <ul>
                      {{--<li>2GB Space</li>--}}
                      {{--<li>10GB Bandwidth</li>--}}
                      {{--<li>Free Domain</li>--}}
                      {{--<li>Free Email</li>--}}
                      {{--<li>Unlimited Support</li>--}}
                    </ul>
                  </div>
                  <div class="price-footer">
                    <button class="btn db-button-color-square btn-lg">CheckOut Now</button>                  </div>
                </div>
              </div>
              {!! Form::close() !!}

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Pricing table -->  

  <!-- Start Pricing table -->
  <section id="our-team">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Our Team</h2>
            <span class="line"></span>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="our-team-content">
            <div class="row">
              <!-- Start single team member -->
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-team-member">
                 <div class="team-member-img">
                   <img src="/images/team-member-2.png" alt="team member img">
                 </div>
                 <div class="team-member-name">
                   <p>John Doe</p>
                   <span>CEO</span>
                 </div>
                 <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                 <div class="team-member-link">
                   <a href="#"><i class="fa fa-facebook"></i></a>
                   <a href="#"><i class="fa fa-twitter"></i></a>
                   <a href="#"><i class="fa fa-linkedin"></i></a>
                 </div>
                </div>
              </div>
              <!-- Start single team member -->
              <!-- Start single team member -->
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-team-member">
                 <div class="team-member-img">
                   <img src="/images/team-member-1.png" alt="team member img">
                 </div>
                 <div class="team-member-name">
                   <p>Bernice Neumann</p>
                   <span>Designer</span>
                 </div>
                 <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                 <div class="team-member-link">
                   <a href="#"><i class="fa fa-facebook"></i></a>
                   <a href="#"><i class="fa fa-twitter"></i></a>
                   <a href="#"><i class="fa fa-linkedin"></i></a>
                 </div>
                </div>
              </div>
              <!-- Start single team member -->
              <!-- Start single team member -->
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-team-member">
                 <div class="team-member-img">
                   <img src="/images/team-member-3.png" alt="team member img">
                 </div>
                 <div class="team-member-name">
                   <p>Dvid Cameron</p>
                   <span>Developer</span>
                 </div>
                 <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                 <div class="team-member-link">
                   <a href="#"><i class="fa fa-facebook"></i></a>
                   <a href="#"><i class="fa fa-twitter"></i></a>
                   <a href="#"><i class="fa fa-linkedin"></i></a>
                 </div>
                </div>
              </div>
              <!-- Start single team member -->
              <!-- Start single team member -->
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-team-member">
                 <div class="team-member-img">
                   <img src="/images/team-member-1.png" alt="team member img">
                 </div>
                 <div class="team-member-name">
                   <p>Bernice Neumann</p>
                   <span>Designer</span>
                 </div>
                 <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                 <div class="team-member-link">
                   <a href="#"><i class="fa fa-facebook"></i></a>
                   <a href="#"><i class="fa fa-twitter"></i></a>
                   <a href="#"><i class="fa fa-linkedin"></i></a>
                 </div>
                </div>
              </div>
              <!-- Start single team member -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Pricing table -->
  
  <!-- Start Testimonial section -->
  <section id="testimonial">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <div class="title-area">
                <h2 class="title">Whats Client Say</h2>
                <span class="line"></span>           
              </div>
            </div>
            <div class="col-md-12">
              <!-- Start testimonial slider -->
              <div class="testimonial-slider">
                <!-- Start single slider -->
                <div class="single-slider">
                  <div class="testimonial-img">
                    <img src="/images/testi1.jpg" alt="testimonial image">
                  </div>
                  <div class="testimonial-content">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    <h6>Bernice Neumann, <span>Designer</span></h6>
                  </div>
                </div>
                <!-- Start single slider -->
                <div class="single-slider">
                  <div class="testimonial-img">
                    <img src="/images/testi3.jpg" alt="testimonial image">
                  </div>
                  <div class="testimonial-content">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    <h6>John Dow, <span>CEO</span></h6>
                  </div>
                </div>
                <!-- Start single slider -->
                <div class="single-slider">
                  <div class="testimonial-img">
                    <img src="/images/testi2.jpg" alt="testimonial image">
                  </div>
                  <div class="testimonial-content">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    <h6>Michel, <span>Developer</span></h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6"></div>        
      </div>
    </div>
  </section>
  <!-- End Testimonial section -->

  <!-- Start Clients brand -->
  <section id="clients-brand">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="clients-brand-area">
            <ul class="clients-brand-slide">
              <li class="col-md-3">
                <div class="single-brand">
                  <img src="/images/amazon.png" alt="img">
                </div>
              </li>
              <li class="col-md-3">
                <div class="single-brand">
                  <img src="/images/discovery.png" alt="img">
                </div>
              </li>
              <li class="col-md-3">
                <div class="single-brand">
                  <img src="/images/envato.png" alt="img">
                </div>
              </li>
              <li class="col-md-3">
                <div class="single-brand">
                  <img src="/images/tuenti.png" alt="img">
                </div>
              </li>
               <li class="col-md-3">
                <div class="single-brand">
                  <img src="/images/amazon.png" alt="img">
                </div>
              </li>
              <li class="col-md-3">
                <div class="single-brand">
                  <img src="/images/discovery.png" alt="img">
                </div>
              </li>
              <li class="col-md-3">
                <div class="single-brand">
                  <img src="/images/envato.png" alt="img">
                </div>
              </li>
              <li class="col-md-3">
                <div class="single-brand">
                  <img src="/images/tuenti.png" alt="img">
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Clients brand -->

  <!-- Start latest news -->
  <section id="latest-news">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Latest News</h2>
            <span class="line"></span>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="latest-news-content">
            <div class="row">
              <!-- start single latest news -->
              <div class="col-md-4">
                <article class="blog-news-single">
                  <div class="blog-news-img">
                    <a href="blog-single-with-right-sidebar.html"><img src="/images/blog-img-1.jpg" alt="image"></a>
                  </div>
                  <div class="blog-news-title">
                    <h2><a href="blog-single-with-right-sidebar.html">All about writing story</a></h2>
                    <p>By <a class="blog-author" href="#">John Powell</a> <span class="blog-date">|18 October 2015</span></p>
                  </div>
                  <div class="blog-news-details">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                    <a class="blog-more-btn" href="blog-single-with-right-sidebar.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                  </div>
                </article>
              </div>
              <!-- start single latest news -->
              <div class="col-md-4">
                <article class="blog-news-single">
                  <div class="blog-news-img">
                    <a href="blog-single-with-right-sidebar.html"><img src="/images/blog-img-2.jpg" alt="image"></a>
                  </div>
                  <div class="blog-news-title">
                    <h2><a href="blog-single-with-right-sidebar.html">Best Mobile Device</a></h2>
                    <p>By <a class="blog-author" href="#">John Powell</a> <span class="blog-date">|18 October 2015</span></p>
                  </div>
                  <div class="blog-news-details">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                    <a class="blog-more-btn" href="blog-single-with-right-sidebar.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                  </div>
                </article>
              </div>
              <!-- start single latest news -->
              <div class="col-md-4">
                <article class="blog-news-single">
                  <div class="blog-news-img">
                    <a href="blog-single-with-right-sidebar.html"><img src="/images/blog-img-3.jpg" alt="image"></a>
                  </div>
                  <div class="blog-news-title">
                    <h2><a href="blog-single-with-right-sidebar.html">Personal Note Details</a></h2>
                    <p>By <a class="blog-author" href="#">John Powell</a> <span class="blog-date">|18 October 2015</span></p>
                  </div>
                  <div class="blog-news-details">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                    <a class="blog-more-btn" href="blog-single-with-right-sidebar.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End latest news -->

  <!-- Start subscribe us -->
  <section id="subscribe">
    <div class="subscribe-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="subscribe-area">
              <h2 class="wow fadeInUp">Subscribe Newsletter</h2>
              <form action="" class="subscrib-form wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <input type="text" placeholder="Enter Your E-mail..">
                <button class="subscribe-btn" type="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End subscribe us -->

  <!-- Start footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="footer-left">
            <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="footer-right">
            <a href="myhome.blade.php"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End footer -->
@endsection