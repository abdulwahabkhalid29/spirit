@extends('layout.scaffold')
@section('content')
    <!--  Pre-Loader Start -->
    <div id="preloader">
        <div class="pre_img">
            <img src="{{asset('images/pre-loader.gif')}}" alt="">
        </div>
    </div>
    <!--  Pre-Loader End -->

    <!--  Header Part Start  -->
    <header id="header_part">
        <nav class="navbar navbar-default my_nav">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav_list" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="main_logo" href="{{route('home')}}">
                            <img src="{{asset('images/logo.png')}}" alt="LOGO">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="nav_list">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#header_part">Home</a></li>
                            <li><a href="#about_part">About</a></li>
                            <li><a href="#service_part">Service</a></li>
                            <li><a href="#work_part">Portfolio</a></li>
                            <li><a href="#testimonal_part">Testimonials</a></li>
                            <li><a href="#blog_part">Blog</a></li>
                            <li><a href="#contact_part">Contact</a></li>
                            <li>
                            @guest
                                <a href="{{route('login')}}">LOGIN</a>
                            </li>
                            <li>
                                <a href="{{route('register')}}">REGISTER</a>
                            </li>
                            @endguest
                            
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </div>
            <!-- /.container -->
        </nav>
    </header>
    <!--  Header Part End  -->

    <!--  Banner Part Start  -->
    <section id="banner_part">
    @forelse($carousels as $carousel)
    <div class="slide_active">
            <div class="banner_item" data-bg-image="{{asset('upload/carousel/'.$carousel->bgimg)}}">
                <div class="container text-center">
                    <div class="row">
                        <div class="banner_text">
                            <h3>{{$carousel->title}}</h3>
                            <p>{{$carousel->info}}</p>
                            <a href="#" class="multi_button">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="banner_arrows">
                <i class="fa fa-angle-left banner_arrow_left"></i>
                <i class="fa fa-angle-right banner_arrow_right"></i>
            </div> -->
        @empty
        <div class="mt-5 pt-5">
        <h1 class="text-center">No Carousel</h1>
        </div>
        @endforelse
    </section>
    <!--  Banner Part End  -->

    <!--  About Part Start  -->
    <section id="about_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 visible-xs">
                    <div class="about_right section_head">
                        <h2><span>Some words</span> about us</h2>
                        <p>We love building and rebuilding brands through our specific skills. Using colour, fonts, and illustration, we brand companies in a way they will never forget.We love building and rebuilding brands through our specific skills. Using colour, fonts, and illustration, we brand companies in a way they will never forget...</p>
                        <a href="#" class="multi_button">Read More</a>
                        <ul>
                            <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> <span>Mission -</span> We deliver uniqueness and quality</li>
                            <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> Skills -</span> Delivering fast and excellent results</li>
                            <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> Clients -</span> Satisfied clients thanks to our experience</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="about_left text-center">
                        <div class="about_left_inner">
                            <a class="venoboxvideo" data-vbtype="video" href="https://youtu.be/S7wCAquf9Us"><i class="fa fa-youtube-play"></i></a>
                            <h3>Spirit Video Presentation</h3>
                            <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius, qui sequitur mutationem consuetudium.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 hidden-xs">
                    <div class="about_right section_head">
                        <h2><span>Some words</span> about us</h2>
                        <p>We love building and rebuilding brands through our specific skills. Using colour, fonts, and illustration, we brand companies in a way they will never forget.We love building and rebuilding brands through our specific skills. Using colour, fonts, and illustration, we brand companies in a way they will never forget...</p>
                        <a href="#" class="multi_button">Read More</a>
                        <ul>
                            <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> <span>Mission -</span> We deliver uniqueness and quality</li>
                            <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> Skills -</span> Delivering fast and excellent results</li>
                            <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i><span> Clients -</span> Satisfied clients thanks to our experience</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  About Part End  -->

    <!--  Service Part Start  -->
    <section id="service_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="section_head service_head">
                        <h2><span>take a look at</span> our services</h2>
                        <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="service_bottom text-center">
                @forelse($services as $service)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                            <img src="{{asset('upload/service/'.$service->img)}}" >
                            <a href="#"><h3>{{$service->title}}</h3></a>
                            <p>{{$service->info}}</p>
                            <a href="#" class="ser_btn">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    @empty
                    <h3>No service found</h3>
                @endforelse
                </div>
            </div>
        </div>
    </section>
    <!--  Service Part End  -->

    <!--  Achievement Part Start  -->
    <section id="achivement_part" data-bg-image="images/counter-bg.jpg">
        <div class="container">
            <div class="row text-center">
                <div class="counter_content">
                    <div class="col-xs-12 col-sm-3">
                        <div class="counter_item">
                            <i class="fa fa-compress"></i>
                            <h3 class="counting">2400</h3>
                            <p>Project Complated</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="counter_item">
                            <i class="fa fa-handshake-o"></i>
                            <h3 class="counting">1600</h3>
                            <p>Clients Satisfaction</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="counter_item">
                            <i class="fa fa-trophy"></i>
                            <h3 class="counting">200</h3>
                            <p>Awards Wins</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="counter_item connter_last">
                            <i class="fa fa-users"></i>
                            <h3 class="counting">1000</h3>
                            <p>Users</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>
    <!--  Achivement Part End  -->

    <!--  work Part Start  -->
    <section id="work_part">
        <div class="container">
            <div class="row">

                <div class="section_head work_head text-center">
                    <h2><span>our</span> works</h2>
                    <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                </div>
                <div>
                    <ul class="simplefilter work_list">
                        <li class="active" data-filter="all">All Project</li>
                        @forelse($alsolike as $blog)
                        <li data-filter="1">{{$blog->category}}</li>
                        @empty
                        @endforelse
                    </ul>
                </div>

                <div class="filtr-container">
                    @forelse($alsolike as $blog)
                    <div class="col-xs-12 col-sm-6 col-md-4 filtr-item" data-category="2, 4">
                        <div class="work_item">
                            <div class="work_img">
                                <img src="{{asset('upload/blog/'.$blog->thumbnail)}}" alt="sample image">
                                <div class="work_img_inner">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <a class="venobox" data-gall="myGallery" href="{{asset('upload/blog/'.$blog->thumbnail)}}"><i class="fa fa-camera"></i></a>
                                </div>
                            </div>
                            <div class="item_des">
                                <a href="#"><h3>{{$blog->title}}</h3></a>
                                    <p>{{$blog->work}}</p>
                            </div>
                        </div>
                    </div>
                    @empty
                    <h3 class="text-center">No blog</h3>
                    @endforelse

                </div>

                <div class="clearfix"></div>
                <div class="work_load_btn">
                    <a href="#" class="multi_button">Load More</a>
                </div>
            </div>
        </div>
    </section>
    <!--  Work Part End  -->

    <!--  Skill Part Start  -->
    <section id="skill_part" data-bg-image="images/skill-bg.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section_head skill_head text-center">
                        <h2><span>Our </span>Skill <span>And Expertise</span></h2>
                        <p>Recusandae, quod perspiciatis, at dicta enim similique earum temporibus iusto accusamus dolore adipisci veritatis nulla distinctio quisquam, nesciunt reprehenderit itaque nihil culpa!</p>
                    </div>
                </div>
                <div class="col-sm-12 plr">
                    <div class="col-sm-5">
                        <div class="skill_left">
                            <h3>Why choose us</h3>
                            <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus</p>
                            <ul>
                                <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> We design uniqueness and quality</li>
                                <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Delivering fast and excellent results</li>
                                <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Tons of useful widgets & shortcodes</li>
                                <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Easy to use layout visual builder</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="skill_right">
                            <h3>Professionals with the relevant skills to match</h3>
                            <div class="barWrapper">
                                <span class="progressText"><b>Design</b></span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <span class="popOver" data-toggle="tooltip" data-placement="top" title="85%"> </span>
                                    </div>
                                </div>
                            </div>

                            <div class="barWrapper">
                                <span class="progressText"><b>Development</b></span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                        <span class="popOver" data-toggle="tooltip" data-placement="top" title="95%"> </span>
                                    </div>
                                </div>
                            </div>

                            <div class="barWrapper">
                                <span class="progressText"><b>PHP</b></span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        <span class="popOver" data-toggle="tooltip" data-placement="top" title="90%"> </span>
                                    </div>
                                </div>
                            </div>

                            <div class="barWrapper">
                                <span class="progressText"><b>Apps</b></span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <span class="popOver" data-toggle="tooltip" data-placement="top" title="80%"> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Skill Part End  -->

    <!--  Testimonal Part Start  -->
    <section id="testimonal_part">
        <div class="container">
            <div class="row">
                <div class="section_head text-center">
                    <h2><span>What our Clients Say ?</span></h2>
                    <p>Our beloved customer's comment on us</p>
                </div>
                <div class="testimonal_content">
                    <div class="client_testi">
                    @forelse($clients as $client)

                        <div class="client_testi_item">

                        <div class="client_testi_item">
                            <div class="col-sm-1 col-md-2"></div>
                            <div class="col-xs-5 col-sm-4 col-md-3">
                                <div class="member_img">
                                <img src="{{asset('upload/client/'.$client->image)}}" alt="Client Member">
                                </div>
                            </div>
                            <div class="col-xs-10 col-sm-7 col-md-7">
                                <div class="member_info">
                                    <h3>{{$client->name}}</h3>
                                    <h4>{{$client->company}}</h4>
                                    <p>{{$client->about}}</p>
                                    <ul>
                                        <li><a href="{{$client->facebook}}"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="{{$client->twitter}}"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="{{$client->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                   
                    </div>
                    @empty
                    <h3 class="text-center">No Client</h3>
                        @endforelse
                    <!--
                    <div class="testi_arrow">
                        <i class="fa fa-angle-left testi_prev"></i>
                        <i class="fa fa-angle-right testi_next"></i>
                    </div>
-->
                </div>
            </div>
        </div>
    </section>
    <!--  Testimonal Part End  -->

    <!--  Team Part Start  -->
    <section id="team_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="section_head team_head">
                        <h2><span>Meet Our</span> team</h2>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="team_member_content">
                    <div class="team_members">
                        @forelse($teams as $team)
                        <div class="col-sm-4 col-xs-12">
                            <div class="team_memb">
                                <img src="{{asset('upload/team/'.$team->img)}}" alt="Team Member">
                                <div class="team_memb_info">
                                    <h3>{{$team->name}}</h3>
                                    <p>{{$team->about}}</p>
                                </div>
                                <div class="team_social">
                                    <a href="{{$team->facebook}}" ><i class="fa fa-facebook"></i></a>
                                    <a href="{{$team->twitter}}"><i class="fa fa-twitter"></i></a>
                                    <a href="{{$team->skype}}"><i class="fa fa-skype"></i></a>
                                </div>
                            </div>
                        </div>
                        @empty
                        <h3></h3>
                        @endforelse
                    </div>
                    <div class="team_arrow text-right">
                        <i class="fa fa-angle-left team_prev"></i>
                        <i class="fa fa-angle-right team_next"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Team Part End  -->

    <!--  Blog Part Start  -->
    <section id="blog_part">
        <div class="container">
            <div class="row text-center">
                <div class="section_head blog_head">
                    <h2>Recent Posts.</h2>
                    <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                </div>
            </div>
            <div class="row">
                <div class="blog_content_part">
                    <!-- slick slider -->
                  
                @forelse($posts as $post)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="blog_content">
                            <div class="blog_img_part">
                                <!-- slick slide inner -->
                                <div class="img_slide">
                                    <div class="blog_img">
                                         <img src="{{asset('upload/post/'.$post->image)}}" alt="Post Member">
                                    </div>
                                </div>
                                <div class="blog_img_inner">
                                    <div class="blog_date">
                                        <h4>{{ date('d' , strtotime( $post->created_at ))}}</h4>
                                        <p>{{ date('M' , strtotime( $post->created_at ))}}</p>
                                    </div>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>

                            <div class="blog_des">
                                <h3>{{$post->name}}</h3>
                                <p>{{$post->about}}</p>
                                <a href="#" class="blog_Read">Read More<i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    <!--  Blog Part End  -->

    <!--  Contact Part Start  -->
    <section id="contact_part">
        <div class="container">
        <div class="row">

        @if(Session::has('success'))
        <div class="col-md-12 alert alert-success alert-dismissible fade show mb-5 mt-5" role="alert">
        {{Session::get('success')}}

</div>
@endif
            <div class="row">
                <div class="col-sm-12">
                    <div class="section_head contact_head text-center">
                        <h2>Contact <span>us</span></h2>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="contact_form">
                        <form class="form-group" action="{{route('contact.store')}}" method="POST">
                            @csrf
                            <div class="col-sm-6">
                                <input type="text" name="name" class="form-control c_name" placeholder="Full Name *" required="">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" name="email" class="form-control c_email" placeholder="Email *" required="">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="subject" class="form-control c_sub" placeholder="Subject *" required="">
                            </div>
                            <div class="col-sm-6">
                                <input type="number" name="mobile" class="form-control c_num" placeholder="Mobile *" required="">
                            </div>
                            <div class="col-sm-12">
                                <textarea class="form-control c_textarea" name="message" placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-sm-12 text-center">
                                <button class="btn btn-primary">Submit Now</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact_info">
                        <ul>
                            <li class="c_call">
                                <i class="fa fa-phone"></i>
                                <aside>
                                    <h3>Give us a Call</h3>
                                    <a href="callto:+88018100001">+880-(181)-00001</a>
                                </aside>
                            </li>
                            <li class="c_mail">
                                <i class="fa fa-envelope-o"></i>
                                <aside>
                                    <h3>Send a Mail</h3>
                                    <a href="/cdn-cgi/l/email-protection#741d1a121b3419151d185a171b19"><span class="__cf_email__" data-cfemail="e881868e87a88f85898184c68b8785">[email&#160;protected]</span></a>
                                </aside>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div id="map_part">
            <div id="map" class="map_part">
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <!--  Contact Part End  -->

    <!--  footer Part Start  -->
    <footer id="footer_part">
        <!--Footer Widgets start-->
        <div class="footer_widgets">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-3 col-sm-8">
                        <div class="widgets widg_1">
                            <a href="index.html">
                                <img src="{{asset('images/logo.png')}}" alt="">
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro hic saepe ipsum id, sed tempore expedita earum aperiam suscipit quis blanditiis iure et quae.</p>
                            <div class="office_des">
                                <ul>
                                    <li><i class="fa fa-map-marker"></i> 2101 Church Ave, Brooklyn, NY 11226</li>
                                    <li><i class="fa fa-clock-o"></i> Monday - Friday : 9 AM - 7 PM</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4">
                        <div class="widgets widg_2">
                            <h3>Information</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i>About Us</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i>Delivery Information</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i>Privacy Policy</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i>Terms & Conditions</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i>FAQ</a></li>
                            </ul>
                        </div>
                        <div class="clearfix visible-sm"></div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="widgets widg_3">
                            <h3>Our Twitter</h3>

                            <div class="tweets">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank">@Spirit</a> Cum soluta nobis eleifend option congue nihil imperdiet doming
                                        <span>3 mins ago</span>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">#envato</a> Mirum est notare quam littera gothica, quam nunc putamus parum
                                        <span>5 hours ago</span>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">@pirit</a> Soluta nobis option
                                        <span>7 days ago</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="widgets widg_4">
                            <h3>Subcribe Newsletter</h3>
                            <p>Join awesome subscribers and update yourself with our exclusive news.</p>
                            <form>
                                <input type="email" placeholder="Enter Your Email" required="">
                                <button>Subcribe Now</button>
                            </form>
                            <div class="bottom_social">
                                <ul class="text-center">
                                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-skype"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer Bottom start-->
        <div id="footet_bottom">
            <div class="container">
                <div class="row">
                    <div class="footer_main">
                        <div class="col-sm-5">
                            <div class="footer_left">
                                <ul>
                                    <li>Copyright © 2019 | <a href="#">SPIRIT</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="footer_right text-right">
                                <ul>
                                    <li>Design by <a href="https://themeforest.net/user/pollexe" target="_blank">Pollexe</a></li>
                                    <li>Only On <a href="#">Envato Market</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--  Footer Part End  -->

    <!--  Bact to Top button start -->
    <div id="backtotop">
        <i class="fa fa-arrow-up backtotop_btn"></i>
    </div>
    <!--  Bact to Top button End -->
@endsection