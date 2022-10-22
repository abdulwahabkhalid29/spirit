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
                        <a class="main_logo" href="{{route('index')}}">
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
                            <li><a href="{{route('home')}}">Login</a></li>
                            <li><a href="{{route('register')}}">Register</a></li>
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
        <div class="slide_active">

            <div class="banner_item" data-bg-image="images/banner-3.jpg">
                <div class="container text-center">
                    <div class="row">
                        <div class="banner_text">
                            <h3>WELCOME on <span>spirit</span></h3>
                            <h4><span>SPIRIT</span> UNIQUE DESIGN WE LOVE IT.</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet porro eaque assumenda consequatur asperiores laboriosam debitis, explicabo.</p>
                            <a href="#" class="multi_button">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner_arrows">
            <i class="fa fa-angle-left banner_arrow_left"></i>
            <i class="fa fa-angle-right banner_arrow_right"></i>
        </div>
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
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                            <i class="fa fa-code"></i>
                            <a href="#"><h3>Web Design</h3></a>
                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim.</p>
                            <a href="#" class="ser_btn">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                            <i class="fa fa-laptop"></i>
                            <a href="#"><h3>Web Development</h3></a>
                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim.</p>
                            <a href="#" class="ser_btn">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                            <i class="fa fa-deviantart"></i>
                            <a href="#"><h3>PHP</h3></a>
                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim.</p>
                            <a href="#" class="ser_btn">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                            <i class="fa fa-apple"></i>
                            <a href="#"><h3>APPS</h3></a>
                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim.</p>
                            <a href="#" class="ser_btn">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                            <i class="fa fa-leaf"></i>
                            <a href="#"><h3>Branding</h3></a>
                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim.</p>
                            <a href="#" class="ser_btn">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                            <i class="fa fa-support"></i>
                            <a href="#"><h3>24/7 Support</h3></a>
                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim.</p>
                            <a href="#" class="ser_btn">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
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
                        <li data-filter="1">Latest</li>
                        <li data-filter="2">Design</li>
                        <li data-filter="3">Development</li>
                        <li data-filter="4">PHP</li>
                        <li data-filter="5">Apps</li>
                    </ul>
                </div>

                <div class="filtr-container">
                    <div class="col-xs-12 col-sm-6 col-md-4 filtr-item" data-category="1, 5">
                        <div class="work_item">
                            <div class="work_img">
                                <img src="{{asset('images/work-1.jpg')}}" alt="sample image">
                                <div class="work_img_inner">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <a class="venobox" data-gall="myGallery" href="{{asset('images/work-1.jpg')}}"><i class="fa fa-camera"></i></a>
                                </div>
                            </div>
                            <div class="item_des">
                                <a href="#"><h3>Claritas Etia Processus</h3></a>
                                <p>Web Design</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 filtr-item" data-category="2, 5">
                        <div class="work_item">
                            <div class="work_img">
                                <img src="{{asset('images/work-2.jpg')}}" alt="sample image">
                                <div class="work_img_inner">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <a class="venobox" data-gall="myGallery" href="{{asset('images/work-2.jpg')}}"><i class="fa fa-camera"></i></a>
                                </div>
                            </div>
                            <div class="item_des">
                                <a href="#"><h3>Quam Nutamus Farum</h3></a>
                                <p>Graphic Design, Mock-Up</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 filtr-item" data-category="1, 4">
                        <div class="work_item">
                            <div class="work_img">
                                <img src="{{asset('images/work-3.jpg')}}" alt="sample image">
                                <div class="work_img_inner">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <a class="venobox" data-gall="myGallery" href="{{asset('images/work-3.jpg')}}"><i class="fa fa-camera"></i></a>
                                </div>
                            </div>
                            <div class="item_des">
                                <a href="#"><h3>Usus Legentis Videntur</h3></a>
                                <p>Photography, Holiday</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 filtr-item" data-category="1, 3">
                        <div class="work_item">
                            <div class="work_img">
                                <img src="{{asset('images/work-4.jpg')}}" alt="sample image">
                                <div class="work_img_inner">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <a class="venobox" data-gall="myGallery" href="{{asset('images/work-4.jpg')}}"><i class="fa fa-camera"></i></a>
                                </div>
                            </div>
                            <div class="item_des">
                                <a href="#"><h3>Quam Nutamus Farum</h3></a>
                                <p>Graphic Design, Mock-Up</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 filtr-item" data-category="3, 4">
                        <div class="work_item">
                            <div class="work_img">
                                <img src="{{asset('images/work-5.jpg')}}" alt="sample image">
                                <div class="work_img_inner">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <a class="venobox" data-gall="myGallery" href="{{asset('images/work-5.jpg')}}"><i class="fa fa-camera"></i></a>
                                </div>
                            </div>
                            <div class="item_des">
                                <a href="#"><h3>Claritas Etia Processus</h3></a>
                                <p>Web Design</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 filtr-item" data-category="2, 4">
                        <div class="work_item">
                            <div class="work_img">
                                <img src="{{asset('images/work-6.jpg')}}" alt="sample image">
                                <div class="work_img_inner">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <a class="venobox" data-gall="myGallery" href="{{asset('images/work-6.jpg')}}"><i class="fa fa-camera"></i></a>
                                </div>
                            </div>
                            <div class="item_des">
                                <a href="#"><h3>Quam Nutamus Farum</h3></a>
                                <p>Graphic Design, Mock-Up</p>
                            </div>
                        </div>
                    </div>
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
                        <div class="client_testi_item">
                            <div class="col-sm-1 col-md-2"></div>
                            <div class="col-xs-5 col-sm-4 col-md-3">
                                <div class="member_img">
                                    <img src="{{asset('images/clint-1.jpg')}}" alt="Clint Images">
                                </div>
                            </div>
                            <div class="col-xs-10 col-sm-7 col-md-7">
                                <div class="member_info">
                                    <h3>NIKKA OKAFA</h3>
                                    <h4>CEO at Super Duper Company</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam blanditiis voluptas, laudantium, facere sunt deleniti assumenda accusantium nesciunt nemo quo pariatur</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="client_testi_item">
                            <div class="col-sm-1 col-md-2"></div>
                            <div class="col-xs-5 col-sm-4 col-md-3">
                                <div class="member_img">
                                    <img src="{{asset('images/clint-2.jpg')}}" alt="Clint Images">
                                </div>
                            </div>
                            <div class="col-xs-10 col-sm-7 col-md-7">
                                <div class="member_info">
                                    <h3>STEVE JOBS</h3>
                                    <h4>CEO at Iphone INC.</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam blanditiis voluptas, laudantium, facere sunt deleniti assumenda accusantium nesciunt nemo quo pariatur</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="client_testi_item">
                            <div class="col-sm-1 col-md-2"></div>
                            <div class="col-xs-5 col-sm-4 col-md-3">
                                <div class="member_img">
                                    <img src="{{asset('images/clint-3.jpg')}}" alt="Clint Images">
                                </div>
                            </div>
                            <div class="col-xs-10 col-sm-7 col-md-7">
                                <div class="member_info">
                                    <h3>LATHEM JOHNS</h3>
                                    <h4>CEO at Entrepreneur Company</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam blanditiis voluptas, laudantium, facere sunt deleniti assumenda accusantium nesciunt nemo quo pariatur</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <div class="col-sm-4 col-xs-12">
                            <div class="team_memb">
                                <img src="{{asset('images/team-1.jpg')}}" alt="Team Member">
                                <div class="team_memb_info">
                                    <h3>Robin Topper</h3>
                                    <p>Creative Director</p>
                                </div>
                                <div class="team_social">
                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-skype"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="team_memb">
                                <img src="{{asset('images/team-2.jpg')}}" alt="Team Member">
                                <div class="team_memb_info">
                                    <h3>Alex Roren</h3>
                                    <p>Creative Director</p>
                                </div>
                                <div class="team_social">
                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-skype"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="team_memb">
                                <img src="{{asset('images/team-3.jpg')}}" alt="Team Member">
                                <div class="team_memb_info">
                                    <h3>Steve Jobs</h3>
                                    <p>Creative Director</p>
                                </div>
                                <div class="team_social">
                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-skype"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="team_memb">
                                <img src="{{asset('images/team-2.jpg')}}" alt="Team Member">
                                <div class="team_memb_info">
                                    <h3>Jammy JR</h3>
                                    <p>Creative Director</p>
                                </div>
                                <div class="team_social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-skype"></i></a>
                                </div>
                            </div>
                        </div>
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
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="blog_content">
                            <div class="blog_img_part">
                                <!-- slick slide inner -->
                                <div class="img_slide">
                                    <div class="blog_img">
                                        <img src="{{asset('images/work-1.jpg')}}" alt="img">
                                    </div>
                                </div>
                                <div class="blog_img_inner">
                                    <div class="blog_date">
                                        <h4>30</h4>
                                        <p>Sep.</p>
                                    </div>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>

                            <div class="blog_des">
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                                <a href="#" class="blog_Read">Read More<i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="blog_content">
                            <div class="blog_img_part">
                                <!-- slick slide inner -->
                                <div class="img_slide">
                                    <div class="blog_img">
                                        <img src="{{asset('images/work-2.jpg')}}" alt="img">
                                    </div>
                                </div>
                                <div class="blog_img_inner">
                                    <div class="blog_date">
                                        <h4>31</h4>
                                        <p>sep.</p>
                                    </div>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>

                            <div class="blog_des">
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                                <a href="#" class="blog_Read">Read More<i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="blog_content">
                            <div class="blog_img_part">
                                <!-- slick slide inner -->
                                <div class="img_slide">
                                    <div class="blog_img">
                                        <img src="{{asset('images/work-3.jpg')}}" alt="img">
                                    </div>
                                </div>
                                <div class="blog_img_inner">
                                    <div class="blog_date">
                                        <h4>13</h4>
                                        <p>Oct.</p>
                                    </div>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>

                            <div class="blog_des">
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                                <a href="#" class="blog_Read">Read More<i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="blog_content">
                            <div class="blog_img_part">
                                <!-- slick slide inner -->
                                <div class="img_slide">
                                    <div class="blog_img">
                                        <img src="{{asset('images/work-3.jpg')}}" alt="img">
                                    </div>
                                </div>
                                <div class="blog_img_inner">
                                    <div class="blog_date">
                                        <h4>23</h4>
                                        <p>Nov</p>
                                    </div>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>

                            <div class="blog_des">
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                                <a href="#" class="blog_Read">Read More<i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Blog Part End  -->

    <!--  Contact Part Start  -->
    <section id="contact_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section_head contact_head text-center">
                        <h2>Contact <span>us</span></h2>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="contact_form">
                        <form class="form-group">
                            <div class="col-sm-6">
                                <input type="text" class="form-control c_name" placeholder="Full Name *" required="">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" class="form-control c_email" placeholder="Email *" required="">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control c_sub" placeholder="Subject *" required="">
                            </div>
                            <div class="col-sm-6">
                                <input type="number" class="form-control c_num" placeholder="Mobile *" required="">
                            </div>
                            <div class="col-sm-12">
                                <textarea class="form-control c_textarea" placeholder="Your Message"></textarea>
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