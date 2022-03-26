<!doctype html>
<html lang="en-gb" class="no-js">
    <head>
        @include('includes.head')
    </head>

   <body  data-spy="scroll" data-target="#main-menu">
      <!--Start Page loader -->
      <div id="pageloader">
         <div class="loader">
            <img src="{{ asset('front_theme/images/progress.gif') }}" alt='loader' />
         </div>
      </div>
      <!--End Page loader -->
      <!--Start Slider -->
      <section id="home">
         <div class="slider-overlay"></div>
         <div class="homeslider flexslider">
            <ul class="slides">
               <li class="slide1 bg"></li>
               <li class="slide2 bg"></li>
               <li class="slide3 bg"></li>
            </ul>
         </div>
         <!--/ homeslider-->
         <!-- start text slider-->
         <div class="tb">
            <div class="tb-cell">
               <div class="slide-text">
                  <ul id="text-slider">
                     <li>
                        <h1>WE ARE CREATIVE INTERIOR DESIGN</h1>
                     </li>
                     <li>
                        <h1>EASY CUSTOMIZE</h1>
                     </li>
                     <li>
                        <h1>RESPONSIVE & CLEAN DESIGN</h1>
                     </li>
                  </ul>
                  <p>The template is suitable for  <br/>interior, undercontruction &amp; corporate.</p>
                  <div class="page-scroll scroll"><a class="btn btn-lg btn-primary btn-color-white" href="#services">What we do</a>
                     <a class="btn btn-lg btn-primary btn-color-white" href="#works">View Works</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--End Slider-->
      <!--Start Navigation-->
      <header id="header">
         @include('includes.header')
      </header>
      <!--End Navigation-->
      <div class="margin"></div>
      <!--Start Services-->
      <section id="services" class="section">
         <div class="container">
            <div class="row">
               <!--Start heading-->
               <div class="col-md-offset-2 col-md-8 wow zoomIn" data-wow-duration="700ms" data-wow-delay="300ms" >
                  <div class="section-header">
                     <h2 class="smt"><span><img src="{{ asset('front_theme/images/left.png') }}"> Services <img src="{{ asset('front_theme/images/right.png') }}"></span></h2>
                  </div>
               </div>
               <!--End heading-->   
               <!--Services Item #1-->
               <div class="col-md-4 wow zoomIn" data-wow-duration="700ms" data-wow-delay="300ms">
                  <div class="services-box">
                     <div class="services-icon"> <i class="fa fa-leaf"></i> </div>
                     <div class="services-desc">
                        <h4>Web Design</h4>
                        <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                     </div>
                  </div>
               </div>
               <!--Services Item #2-->
               <div class="col-md-4 wow zoomIn" data-wow-duration="700ms" data-wow-delay="400ms">
                  <div class="services-box">
                     <div class="services-icon"> <i class="fa fa-edit"></i> </div>
                     <div class="services-desc">
                        <h4>CMS Integration</h4>
                        <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                     </div>
                  </div>
               </div>
               <!--Services Item #3-->
               <div class="col-md-4 wow zoomIn" data-wow-duration="700ms" data-wow-delay="500ms">
                  <div class="services-box">
                     <div class="services-icon"> <i class="fa fa-leaf"></i> </div>
                     <div class="services-desc">
                        <h4>SEO</h4>
                        <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                     </div>
                  </div>
               </div>
               <!--Services Item #4-->
               <div class="col-md-4 wow zoomIn" data-wow-duration="700ms" data-wow-delay="600ms">
                  <div class="services-box">
                     <div class="services-icon"> <i class="fa fa-rocket"></i> </div>
                     <div class="services-desc">
                        <h4>Graphic Design</h4>
                        <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                     </div>
                  </div>
               </div>
               <!--Services Item #5-->
               <div class="col-md-4 wow zoomIn" data-wow-duration="700ms" data-wow-delay="700ms">
                  <div class="services-box">
                     <div class="services-icon"> <i class="fa fa-film"></i> </div>
                     <div class="services-desc">
                        <h4>Responsive Design	</h4>
                        <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                     </div>
                  </div>
               </div>
               <!--Services Item #6-->
               <div class="col-md-4 wow zoomIn" data-wow-duration="700ms" data-wow-delay="800ms">
                  <div class="services-box">
                     <div class="services-icon"> <i class="fa fa-codepen"></i> </div>
                     <div class="services-desc">
                        <h4>Corporate Design</h4>
                        <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                     </div>
                  </div>
               </div>
            </div>
            <!--/.row-->
         </div>
         <!--/.container-->
      </section>
      <!--End Services-->
      <!--Start facts-->
      <section id="facts" class="section parallax">
         <div class="container">
            <div class="row">
               <!--Start facts info #1-->
               <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                  <div class="facts-detail">
                     <i class="fa fa-group"></i>
                     <span>250</span>
                     <p>Clients</p>
                  </div>
               </div>
               <!--Start facts info #2-->
               <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                  <div class="facts-detail">
                     <i class="fa fa-coffee "></i>
                     <span>370</span>
                     <p>Coffee Cups</p>
                  </div>
               </div>
               <!--Start facts info #3-->
               <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                  <div class="facts-detail">
                     <i class="fa fa-gift"></i>
                     <span>300</span>
                     <p>Completed Projects</p>
                  </div>
               </div>
               <!--Start facts info #4-->
               <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="600ms">
                  <div class="facts-detail">
                     <i class="fa fa-trophy"></i>
                     <span>53</span>
                     <p>Award Won</p>
                  </div>
               </div>
            </div>
            <!--/row-->
         </div>
         <!--/container-->
      </section>
      <!--End facts-->
      <!--Start portfolio-->
      <section id="works" class="section">
         <!-- Filtering -->
         <div class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
            <!--Start heading-->
            <div class="col-md-offset-2 col-md-8">
               <div class="section-header">
                  <h2 class="smt"><span><img src="{{ asset('front_theme/images/left.png') }}"> Works <img src="{{ asset('front_theme/images/right.png') }}"></span></h2>
               </div>
            </div>
            <!--End heading-->   
            <div class=" col-md-12">
               <!-- Filtering -->
               <ul class="filtering">
                  <li class="filter" data-filter="all">All</li>
                  <li class="filter" data-filter="graphic">Color Design</li>
                  <li class="filter" data-filter="illustration">Interior</li>
                  <li class="filter" data-filter="branding">Room Design</li>
                  <li class="filter" data-filter="Web-design">Renovation</li>
               </ul>
            </div>
         </div>
         <div class="full-width wow fadeInUp" data-wow-duration="700ms" data-wow-delay="700ms">
            <!-- Work Grid -->
            <ul class="work-grid">
               <!-- Work Block -->
               <li class="work-item thumbnail-img mix Web-design">
                  <a href="{{ asset('front_theme/images/works/img1.jpg') }}" class="popup-image">
                  <img src="{{ asset('front_theme/images/works/img1.jpg') }}" alt="thumbnail"></a>
                  <div class="work-info">
                     <div class="work-info-detail display-table">
                        <div class="display-table-cell">
                           <h4>Project Title</h4>
                           <p>Web Design</p>
                           <a href="single-work.html" class="btn btn-primary btn-sm btn-color-white">View More</a>
                        </div>
                     </div>
                  </div>
               </li>
               <!-- Work Block -->
               <li class="work-item thumbnail-img mix graphic">
                  <a href="{{ asset('front_theme/images/works/img2.jpg') }}" class="popup-image">
                  <img src="{{ asset('front_theme/images/works/img2.jpg') }}" alt="thumbnail"></a>
                  <div class="work-info">
                     <div class="work-info-detail display-table">
                        <div class="display-table-cell">
                           <h4>Project Title</h4>
                           <p>Web Design</p>
                           <a href="single-work.html" class="btn btn-primary btn-sm btn-color-white">View More</a>
                        </div>
                     </div>
                  </div>
               </li>
               <!-- Work Block -->
               <li class="work-item thumbnail-img mix illustration">
                  <a href="{{ asset('front_theme/images/works/img3.jpg') }}" class="popup-image">
                  <img src="{{ asset('front_theme/images/works/img3.jpg') }}" alt="thumbnail"></a>
                  <div class="work-info">
                     <div class="work-info-detail display-table">
                        <div class="display-table-cell">
                           <h4>Project Title</h4>
                           <p>Illustrations</p>
                           <a href="single-work.html" class="btn btn-primary btn-sm btn-color-white">View More</a>
                        </div>
                     </div>
                  </div>
               </li>
               <!-- Work Block -->
               <li class="work-item thumbnail-img mix branding">
                  <a href="{{ asset('front_theme/images/works/img4.jpg') }}" class="popup-image">
                  <img src="{{ asset('front_theme/images/works/img4.jpg') }}" alt="thumbnail"></a>
                  <div class="work-info">
                     <div class="work-info-detail display-table">
                        <div class="display-table-cell">
                           <h4>Project Title</h4>
                           <p>Branding</p>
                           <a href="single-work.html" class="btn btn-primary btn-sm btn-color-white">View More</a>
                        </div>
                     </div>
                  </div>
               </li>
               <!-- Work Block -->
               <li class="work-item thumbnail-img mix Web-design">
                  <a href="{{ asset('front_theme/images/works/img5.jpg') }}" class="popup-image">
                  <img src="{{ asset('front_theme/images/works/img5.jpg') }}" alt="thumbnail"></a>
                  <div class="work-info">
                     <div class="work-info-detail display-table">
                        <div class="display-table-cell">
                           <h4>Project Title</h4>
                           <p>Web Design</p>
                           <a href="single-work.html" class="btn btn-primary btn-sm btn-color-white">View More</a>
                        </div>
                     </div>
                  </div>
               </li>
               <!-- Work Block -->
               <li class="work-item thumbnail-img mix graphic">
                  <a href="{{ asset('front_theme/images/works/img6.jpg') }}" class="popup-image">
                  <img src="{{ asset('front_theme/images/works/img6.jpg') }}" alt="thumbnail"></a>
                  <div class="work-info">
                     <div class="work-info-detail display-table">
                        <div class="display-table-cell">
                           <h4>Project Title</h4>
                           <p>Web Design</p>
                           <a href="single-work.html" class="btn btn-primary btn-sm btn-color-white">View More</a>
                        </div>
                     </div>
                  </div>
               </li>
               <!-- Work Block -->
               <li class="work-item thumbnail-img mix illustration">
                  <a href="{{ asset('front_theme/images/works/img7.jpg') }}" class="popup-image">
                  <img src="{{ asset('front_theme/images/works/img7.jpg') }}" alt="thumbnail"></a>
                  <div class="work-info">
                     <div class="work-info-detail display-table">
                        <div class="display-table-cell">
                           <h4>Project Title</h4>
                           <p>Illustrations</p>
                           <a href="single-work.html" class="btn btn-primary btn-sm btn-color-white">View More</a>
                        </div>
                     </div>
                  </div>
               </li>
               <!-- Work Block -->
               <li class="work-item thumbnail-img mix branding">
                  <a href="{{ asset('front_theme/images/works/img8.jpg') }}" class="popup-image">
                  <img src="{{ asset('front_theme/images/works/img8.jpg') }}" alt="thumbnail"></a>
                  <div class="work-info">
                     <div class="work-info-detail display-table">
                        <div class="display-table-cell">
                           <h4>Project Title</h4>
                           <p>Branding</p>
                           <a href="single-work.html" class="btn btn-primary btn-sm btn-color-white">View More</a>
                        </div>
                     </div>
                  </div>
               </li>
               <!-- Work Block -->
               <li class="work-item thumbnail-img mix graphic">
                  <a href="{{ asset('front_theme/images/works/img9.jpg') }}" class="popup-image">
                  <img src="{{ asset('front_theme/images/works/img9.jpg') }}" alt="thumbnail"></a>
                  <div class="work-info">
                     <div class="work-info-detail display-table">
                        <div class="display-table-cell">
                           <h4>Project Title</h4>
                           <p>Web Design</p>
                           <a href="single-work.html" class="btn btn-primary btn-sm btn-color-white">View More</a>
                        </div>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
         <div class="clear"></div>
         <div class="work-all wow fadeInUp"  data-wow-duration="700ms" data-wow-delay="800ms"> <a href="#"  class="btn btn-primary btn-lg">View All Portfolio</a> </div>
      </section>
      <!--End portfolio-->
      <!--Start Call to Action-->
      <section class="section parallax" id="cta">
         <div class="container wow zoomIn" data-wow-duration="700ms" data-wow-delay="500ms">
            <div class="row">
               <div class="col-md-12 call-to-action">
                  <h3>Want to work with us? </h3>
                  <p>Lorem ipsum dolor consectetur adipisicing incididunt <br/>laboredolore Lorem consectetur</p>
                  <a href="#contact" class="btn btn-primary btn-lg btn-scroll btn-color-brown">Get in Touch</a>
                  <a href="#contact" class="btn btn-primary btn-lg btn-scroll btn-color-brown">Get in Touch</a>
               </div>
            </div>
         </div>
      </section>
      <!--End Call to Action-->
      <!-- Start Team-->
      <section id="team" class="section">
         <div class="overlaym"></div>
         <div class="container">
            <div class="row">
               <!--Start heading-->
               <div class="col-md-offset-2 col-md-8 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                  <div class="section-header">
                    <h2 class="smt"><span><img src="{{ asset('front_theme/images/leftw.png') }}"> Team <img src="{{ asset('front_theme/images/rightw.png') }}"></span></h2>
                  </div>
               </div>
               <!--End heading-->   
               <!--Start Team item #1-->
               <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                  <div class="team-member">
                     <img src="{{ asset('front_theme/images/team/1.jpg') }}" class="image" alt="" />
                     <div class="team-info">
                        <h4>Amanda Doe</h4>
                        <p>Manager</p>
                        <ul class="socials">
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!--Start Team item #2-->
               <div class="col-lg-4 col-md-6 col-sm-6  wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                  <div class="team-member">
                     <img src="{{ asset('front_theme/images/team/2.jpg') }}" class="image" alt="" />
                     <div class="team-info">
                        <h4>John Doe</h4>
                        <p>Designer</p>
                        <ul class="socials">
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!--Start Team item #3-->
               <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                  <div class="team-member">
                     <img src="{{ asset('front_theme/images/team/3.jpg') }}" class="image" alt="" />
                     <div class="team-info">
                        <h4>John Doe</h4>
                        <p>Programmer</p>
                        <ul class="socials">
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <!--/row-->
         </div>
         <!--/container-->
      </section>
      <!-- End Team-->
      <!--  Start Features-->
      <section id="features" class="section">
         <div class="container">
            <div class="row">
               <!--Start heading-->
               <div class="col-md-offset-2 col-md-8 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                  <div class="section-header">
                     <h2 class="smt"><span><img src="{{ asset('front_theme/images/left.png') }}"> Features <img src="{{ asset('front_theme/images/right.png') }}"></span></h2>
                  </div>
               </div>
               <!--End heading-->   
               <div class="col-md-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                  <div class="features-intro">
                     <h3>Passionate about crafting modern and usable design!</h3>
                     <p>We want to make word beautiful. You can use our love & passion!</p>
                  </div>
               </div>
               <div class="features-main">
                  <!--Start Features Left-->
                  <div class="col-md-4 wow zoomIn" data-wow-duration="700ms" data-wow-delay="800ms">
                     <div class="features-left">
                        <!--Features Item #1-->
                        <div class="features-item">
                           <div class="features-icon"> <i class="fa fa-pagelines"></i> </div>
                           <div class="features-info">
                              <h4>Strategy</h4>
                              <p>Quis autem velis reprehenderit et quis voluptate velit esse quam nihil et illum consequatur.</p>
                           </div>
                        </div>
                        <!--Features Item #2-->
                        <div class="features-item">
                           <div class="features-icon"> <i class="fa fa-trophy"></i> </div>
                           <div class="features-info">
                              <h4>Consulting</h4>
                              <p>Quis autem velis reprehenderit et quis voluptate velit esse quam nihil et illum consequatur.</p>
                           </div>
                        </div>
                        <!--Features Item #3-->
                        <div class="features-item">
                           <div class="features-icon"> <i class="fa fa-tag"></i> </div>
                           <div class="features-info">
                              <h4>Marketing</h4>
                              <p>Quis autem velis reprehenderit et quis voluptate velit esse quam nihil et illum consequatur.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--End Features Left--> 
                  <!--Start Features Image-->
                  <div class="col-md-4 hidden-xs  wow zoomIn"  data-wow-duration="700ms" data-wow-delay="800ms">
                     <img src="images/device.png" alt="Features Image" />
                  </div>
                  <!--End Features Image-->
                  <!--Start Features Right-->
                  <div class="col-md-4 wow zoomIn" data-wow-duration="700ms" data-wow-delay="800ms">
                     <div class="features-right">
                        <!--Features Item #1-->
                        <div class="features-item">
                           <div class="features-icon"> <i class="fa fa-cog"></i> </div>
                           <div class="features-info">
                              <h4>Development</h4>
                              <p>Quis autem velis reprehenderit et quis voluptate velit esse quam nihil et illum consequatur.</p>
                           </div>
                        </div>
                        <!--Features Item #2-->
                        <div class="features-item">
                           <div class="features-icon"> <i class="fa fa-home"></i> </div>
                           <div class="features-info">
                              <h4>App Design</h4>
                              <p>Quis autem velis reprehenderit et quis voluptate velit esse quam nihil et illum consequatur.</p>
                           </div>
                        </div>
                        <!--Features Item #3-->
                        <div class="features-item">
                           <div class="features-icon"> <i class="fa fa-film"></i> </div>
                           <div class="features-info">
                              <h4>Our mission</h4>
                              <p>Quis autem velis reprehenderit et quis voluptate velit esse quam nihil et illum consequatur.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--End Features Right -->
               </div>
               <!--/.features-main-->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container -->
      </section>
      <!--  End Features-->
      
      <!--Start Testimonial-->
      <section id="testimonials" class="section parallax">
         <div class="container">
            <div class="row wow zoomIn" data-wow-duration="700ms" data-wow-delay="300ms">
               <!--Start heading-->
               <div class="col-md-offset-2 col-md-8">
                  <div class="section-header">
                    <h2 class="smt"><span><img src="{{ asset('front_theme/images/left.png') }}"> Testimonial <img src="{{ asset('front_theme/images/right.png') }}"></span></h2>
                  </div>
               </div>
               <!--End heading-->   
               <div class="col-md-8 col-md-offset-2">
                  <div class="testimonials-carousel">
                     <!--Start Testimonial item #1-->
                     <div class="items">
                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac vehicula tortor, vitae lacinia nisi. Mauris ac urna in dolor mollis tincidunt.</div>
                        <div class="name">JONATHAN DOE</div>
                     </div>
                     <!--Start Testimonial item #2-->
                     <div class="items">
                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac vehicula tortor, vitae lacinia nisi. Mauris ac urna in dolor mollis tincidunt.</div>
                        <div class="name">JONATHAN DOE</div>
                     </div>
                     <!--Start Testimonial item #3-->
                     <div class="items">
                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac vehicula tortor, vitae lacinia nisi. Mauris ac urna in dolor mollis tincidunt.</div>
                        <div class="name">JONATHAN DOE</div>
                     </div>
                  </div>
               </div>
            </div>
            <!--/.row-->
         </div>
         <!--/.container-->
      </section>
      <!--End Testimonial-->
      <!--Start clients-->
      <section id="clients" class="section">
         <div class="overlayk"></div>
         <div class="container wow fadeInUp" data-wow-duration="700ms" data-wow-delay="600ms">
            <div class="row">
               <div class="clients-carousel">
                  <div class="col-md-3 col-xs-6">
                     <a href="#">
                        <figure>
                           <img src="{{ asset('front_theme/images/clients-logo/clients-logo1.png') }}" alt="" />
                        </figure>
                     </a>
                  </div>
                  <!-- End clients item-->
                  <!-- Start clients item-->
                  <div class="col-md-3 col-xs-6">
                     <a href="#">
                        <figure>
                           <img src="{{ asset('front_theme/images/clients-logo/clients-logo2.png') }}" alt="" />
                        </figure>
                     </a>
                  </div>
                  <!-- End clients item-->
                  <!-- Start clients item-->
                  <div class="col-md-3 col-xs-6">
                     <a href="#">
                        <figure>
                           <img src="{{ asset('front_theme/images/clients-logo/clients-logo3.png') }}" alt="" />
                        </figure>
                     </a>
                  </div>
                  <!-- End clients item-->
                  <!-- Start clients item-->
                  <div class="col-md-3 col-xs-6">
                     <a href="#">
                        <figure>
                           <img src="{{ asset('front_theme/images/clients-logo/clients-logo4.png') }}" alt="" />
                        </figure>
                     </a>
                  </div>
                  <!-- End clients item-->
                  <!-- Start clients item-->
                  <div class="col-md-3 col-xs-6">
                     <a href="#">
                        <figure>
                           <img src="{{ asset('front_theme/images/clients-logo/clients-logo5.png') }}" alt="" />
                        </figure>
                     </a>
                  </div>
                  <!-- End clients item-->
                  <!-- Start clients item-->
                  <div class="col-md-3 col-xs-6">
                     <a href="#">
                        <figure>
                           <img src="{{ asset('front_theme/images/clients-logo/clients-logo6.png') }}" alt="" />
                        </figure>
                     </a>
                  </div>
                  <!-- End clients item-->
                  <!-- Start clients item-->
                  <div class="col-md-3 col-xs-6">
                     <a href="#">
                        <figure>
                           <img src="{{ asset('front_theme/images/clients-logo/clients-logo7.png') }}" alt="" />
                        </figure>
                     </a>
                  </div>
                  <!-- End clients item-->
                  <!-- Start clients item-->
                  <div class="col-md-3 col-xs-6">
                     <a href="#">
                        <figure>
                           <img src="{{ asset('front_theme/images/clients-logo/clients-logo8.png') }}" alt="" />
                        </figure>
                     </a>
                  </div>
                  <!-- End clients item-->
               </div>
            </div>
            <!--/row-->
         </div>
         <!--/container-->
      </section>
      <!--End clients-->
      <!--Start blog-->
      <section id="blog" class="section">
         <div class="container">
            <div class="row">
               <!--Start heading-->
               <div class="col-md-offset-2 col-md-8 wow zoomIn" data-wow-duration="700ms" data-wow-delay="300ms">
                  <div class="section-header">
                    <h2 class="smt"><span><img src="{{ asset('front_theme/images/left.png') }}"> Blog <img src="{{ asset('front_theme/images/right.png') }}"></span></h2>
                  </div>
               </div>
               <!--End heading-->   
               <!-- Start Blog item #1-->
               <div class="col-md-4 wow zoomIn" data-wow-duration="700ms" data-wow-delay="300ms">
                  <div class="blog-post">
                     <div class="post-media">
                        <img src="images/blog/blog1.jpg" alt="">
                     </div>
                     <!--/.post-media -->
                     <div class="post-desc">
                        <h4>Example of Blog post</h4>
                        <ul class="entry-meta">
                           <li>April 10, 2015</li>
                           <li>
                              <a href="#">12 Comments</a>
                           </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, dolorum, fugiat, eligendi magni quibusdam iure cupiditate ex voluptas unde</p>
                        <a href="blog.html" class="btn btn-primary btn-rounded">Read More</a>
                     </div>
                  </div>
               </div>
               <!-- Start Blog item #2-->
               <div class="col-md-4 wow zoomIn" data-wow-duration="700ms" data-wow-delay="400ms">
                  <div class="blog-post">
                     <div class="post-media">
                        <img src="images/blog/blog2.jpg" alt="">
                     </div>
                     <!--/.post-media -->
                     <div class="post-desc">
                        <h4>This is a image post</h4>
                        <ul class="entry-meta">
                           <li>April 10, 2015</li>
                           <li>
                              <a href="#">12 Comments</a>
                           </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, dolorum, fugiat, eligendi magni quibusdam iure cupiditate ex voluptas unde</p>
                        <a href="blog.html" class="btn btn-primary btn-rounded">Read More</a>
                     </div>
                  </div>
               </div>
               <!-- Start Blog item #3-->
               <div class="col-md-4 wow zoomIn" data-wow-duration="700ms" data-wow-delay="500ms">
                  <div class="blog-post">
                     <div class="post-media">
                        <img src="images/blog/blog3.jpg" alt="">
                     </div>
                     <!--/.post-media -->
                     <div class="post-desc">
                        <h4>Example of video post</h4>
                        <ul class="entry-meta">
                           <li>April 10, 2015</li>
                           <li>
                              <a href="#">12 Comments</a>
                           </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, dolorum, fugiat, eligendi magni quibusdam iure cupiditate ex voluptas unde</p>
                        <a href="blog.html" class="btn btn-primary btn-rounded">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
            <!--/.row-->
         </div>
         <!--/.container-->
      </section>
      <!--End blog-->
      <!--Start Contact-->
      <section id="contact" class="section parallax section-white">
         <div class="overlayc"></div>
         <div class="container">
            <div class="row">
               <!--Start heading-->
               <div class="col-md-offset-2 col-md-8  wow zoomIn" data-wow-duration="700ms" data-wow-delay="300ms">
                  <div class="section-header">
                    <h2 class="smt"><span><img src="{{ asset('front_theme/images/leftw.png') }}"> Contact <img src="{{ asset('front_theme/images/rightw.png') }}"></span></h2>
                  </div>
               </div>
               <!--End heading-->   
               <!--Start contact form-->
               <div class="col-md-7 contact-form wow zoomIn" data-wow-duration="700ms" data-wow-delay="300ms">
                  <div class="contact-form" >
                     <form method="post" action="">
                        <div class="row">
                           <div class="col-md-6">
                              <input class="form-control" name="name" id="name" placeholder="Full Name" type="text">
                           </div>
                           <div class="col-md-6">
                              <input class="form-control" name="email" placeholder="Your Email" type="email">
                           </div>
                           <div class="col-md-12">
                              <input class="form-control" name="subject" placeholder="Subject" type="text">
                           </div>
                           <div class="col-md-12">
                              <textarea class="form-control" name="message" rows="5" placeholder="Your Message"></textarea>
                           </div>
                           <div class="col-md-12 text-right">
                              <button type="submit"  name="submit" class="btn btn-default btn-lg">Send Message</button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <!--/.contact-form-->
               </div>
               <!--contact form-->
               <!--Start contact information -->
               <div class="col-md-4 contact-address wow zoomIn" data-wow-duration="700ms" data-wow-delay="400ms">
                  <p> <i class="fa fa-map-marker"></i>  <span>123, Lorem ipsum dolor sit amet</span></p>
                  <p> <i class="fa fa-envelope"></i> <span>support@domain.net</span></p>
                  <p> <i class="fa fa-phone"></i> <span>(000) 000 0000 </span></p>
                  <p> <i class="fa fa-clock-o"></i> <span>Monday - Friday: <strong>9:00 am - 10:00 pm</strong></span></p>
                  <p> <i class="fa fa-clock-o"></i> <span>Saturday - Sunday: <strong>Closed</strong></span></p>
               </div>
               <!--End contact information -->
            </div>
            <!--/.row-->
         </div>
         <!--/.container-->
      </section>
      <!--End Contact-->
      <!--Start footer-->
      <footer>
         <div class="container wow zoomIn"  data-wow-duration="700ms" data-wow-delay="500ms">
            <div class="row">
               <div class="col-md-12 text-center">
                  <!--Start footer social-->
                  <ul class="list-inline footer-social">
                     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                     <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                     <li><a href="#"><i class="fa fa-behance"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  </ul>
                  <!-- End footer social --> 
                  <!-- footer copyright text -->
                  <p>Copyright &copy; <a href="https://gridgum.com">Gridgum</a> 2018 All reserved</p>
                  <!-- end of the footer copyright text -->
               </div>
            </div>
            <!--/.row-->
         </div>
         <!--/.container-->
      </footer>
      <!--End footer-->
      <a href="#" class="scrollup"> <i class="fa fa-chevron-up"> </i> </a>
      <!--Plugins-->

      @include('includes.scripts')
      
   </body>
</html>