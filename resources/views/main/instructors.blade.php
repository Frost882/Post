<!DOCTYPE html>
<html lang="en">
<head>
    <title>Instructors</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Lingua project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link href="{{asset('plugins/video-js/video-js.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/instructors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/instructors_responsive.css')}}">
</head>
<body>

<div class="super_container">

    @include('layouts.header');

                                <!-- Hamburger -->

                                <div class="user"><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></div>
                                <div class="hamburger menu_mm">
                                    <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <!-- Menu -->

    <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
        <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
        <div class="search">
            <form action="#" class="header_search_form menu_mm">
                <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
                <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                    <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <nav class="menu_nav">
            <ul class="menu_mm">
                <li class="menu_mm"><a href="index.html">Home</a></li>
                <li class="menu_mm"><a href="courses.html">Courses</a></li>
                <li class="menu_mm"><a href="instructors.html">Instructors</a></li>
                <li class="menu_mm"><a href="#">Events</a></li>
                <li class="menu_mm"><a href="blog.html">Blog</a></li>
                <li class="menu_mm"><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
        <div class="menu_extra">
            <div class="menu_phone"><span class="menu_title">phone:</span>+44 300 303 0266</div>
            <div class="menu_social">
                <span class="menu_title">follow us</span>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Home -->

    <div class="home"></div>

    <!-- Video -->

    <div class="video">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="video_content">
                        <div class="video_container_outer">
                            <div class="video_overlay d-flex flex-column align-items-start justify-content-center">
                                <div>Be</div><div>The Best</div><div>Teacher</div>
                            </div>
                            <div class="video_container">
                                <video id="vid1" class="video-js vjs-default-skin" controls width="100%" height="100%" data-setup='{ "poster": "images/video.jpg", "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://youtu.be/IV3ueyrp5M4"}], "youtube": { "iv_load_policy": 1 } }'>
                                </video>
                            </div>
                        </div>
                        <div class="register_button"><a href="#">register</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Instructors -->

    <div class="instructors">
        <div class="instructors_background" style="background-image:url({{asset('images/instructors_background.png')}})"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="section_title text-center">The Best Tutors in Town</h2>
                </div>
            </div>
            <div class="row instructors_row">

                <!-- Instructor -->
                <div class="col-lg-4 instructor_col">
                    <div class="instructor text-center">
                        <div class="instructor_image_container">
                            <div class="instructor_image"><img src="{{asset('images/instructor_1.jpg')}}" alt=""></div>
                        </div>
                        <div class="instructor_name"><a href="instructors.html">Sarah Parker</a></div>
                        <div class="instructor_title">Teacher</div>
                        <div class="instructor_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
                        </div>
                        <div class="instructor_social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Instructor -->
                <div class="col-lg-4 instructor_col">
                    <div class="instructor text-center">
                        <div class="instructor_image_container">
                            <div class="instructor_image"><img src="{{asset('images/instructor_2.jpg')}}" alt=""></div>
                        </div>
                        <div class="instructor_name"><a href="instructors.html">Sarah Parker</a></div>
                        <div class="instructor_title">Teacher</div>
                        <div class="instructor_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
                        </div>
                        <div class="instructor_social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Instructor -->
                <div class="col-lg-4 instructor_col">
                    <div class="instructor text-center">
                        <div class="instructor_image_container">
                            <div class="instructor_image"><img src="{{asset('images/instructor_3.jpg')}}" alt=""></div>
                        </div>
                        <div class="instructor_name"><a href="instructors.html">Sarah Parker</a></div>
                        <div class="instructor_title">Teacher</div>
                        <div class="instructor_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
                        </div>
                        <div class="instructor_social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Top Teachers -->

    <div class="teachers">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="section_title text-center">Top Teachers in Every Field</h2>
                </div>
            </div>
            <div class="row teachers_row">

                <!-- Instructor -->
                <div class="col-lg-4 col-md-6">
                    <div class="teacher d-flex flex-row align-items-center justify-content-start">
                        <div class="teacher_image"><div><img src="{{asset('images/instructor_4.jpg')}}" alt=""></div></div>
                        <div class="teacher_content">
                            <div class="teacher_name"><a href="instructors.html">Sarah Parker</a></div>
                            <div class="teacher_title">Teacher</div>
                        </div>
                    </div>
                </div>

                <!-- Instructor -->
                <div class="col-lg-4 col-md-6">
                    <div class="teacher d-flex flex-row align-items-center justify-content-start">
                        <div class="teacher_image"><div><img src="{{asset('images/instructor_5.jpg')}}" alt=""></div></div>
                        <div class="teacher_content">
                            <div class="teacher_name"><a href="instructors.html">Sarah Parker</a></div>
                            <div class="teacher_title">Teacher</div>
                        </div>
                    </div>
                </div>

                <!-- Instructor -->
                <div class="col-lg-4 col-md-6">
                    <div class="teacher d-flex flex-row align-items-center justify-content-start">
                        <div class="teacher_image"><div><img src="{{asset('images/instructor_6.jpg')}}" alt=""></div></div>
                        <div class="teacher_content">
                            <div class="teacher_name"><a href="instructors.html">Sarah Parker</a></div>
                            <div class="teacher_title">Teacher</div>
                        </div>
                    </div>
                </div>

                <!-- Instructor -->
                <div class="col-lg-4 col-md-6">
                    <div class="teacher d-flex flex-row align-items-center justify-content-start">
                        <div class="teacher_image"><div><img src="{{asset('images/instructor_7.jpg')}}" alt=""></div></div>
                        <div class="teacher_content">
                            <div class="teacher_name"><a href="instructors.html">Sarah Parker</a></div>
                            <div class="teacher_title">Teacher</div>
                        </div>
                    </div>
                </div>

                <!-- Instructor -->
                <div class="col-lg-4 col-md-6">
                    <div class="teacher d-flex flex-row align-items-center justify-content-start">
                        <div class="teacher_image"><div><img src="{{asset('images/instructor_8.jpg')}}" alt=""></div></div>
                        <div class="teacher_content">
                            <div class="teacher_name"><a href="instructors.html">Sarah Parker</a></div>
                            <div class="teacher_title">Teacher</div>
                        </div>
                    </div>
                </div>

                <!-- Instructor -->
                <div class="col-lg-4 col-md-6">
                    <div class="teacher d-flex flex-row align-items-center justify-content-start">
                        <div class="teacher_image"><div><img src="{{asset('images/instructor_9.jpg')}}" alt=""></div></div>
                        <div class="teacher_content">
                            <div class="teacher_name"><a href="instructors.html">Sarah Parker</a></div>
                            <div class="teacher_title">Teacher</div>
                        </div>
                    </div>
                </div>

                <!-- Instructor -->
                <div class="col-lg-4 col-md-6">
                    <div class="teacher d-flex flex-row align-items-center justify-content-start">
                        <div class="teacher_image"><div><img src="{{asset('images/instructor_10.jpg')}}" alt=""></div></div>
                        <div class="teacher_content">
                            <div class="teacher_name"><a href="instructors.html">Sarah Parker</a></div>
                            <div class="teacher_title">Teacher</div>
                        </div>
                    </div>
                </div>

                <!-- Instructor -->
                <div class="col-lg-4 col-md-6">
                    <div class="teacher d-flex flex-row align-items-center justify-content-start">
                        <div class="teacher_image"><div><img src="{{asset('images/instructor_11.jpg')}}" alt=""></div></div>
                        <div class="teacher_content">
                            <div class="teacher_name"><a href="instructors.html">Sarah Parker</a></div>
                            <div class="teacher_title">Teacher</div>
                        </div>
                    </div>
                </div>

                <!-- Instructor -->
                <div class="col-lg-4 col-md-6">
                    <div class="teacher d-flex flex-row align-items-center justify-content-start">
                        <div class="teacher_image"><div><img src="{{asset('images/instructor_12.jpg')}}" alt=""></div></div>
                        <div class="teacher_content">
                            <div class="teacher_name"><a href="instructors.html">Sarah Parker</a></div>
                            <div class="teacher_title">Teacher</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@include('layouts.footer');

<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('plugins/progressbar/progressbar.min.js')}}"></script>
<script src="{{asset('plugins/video-js/video.min.js')}}"></script>
<script src="{{asset('plugins/video-js/Youtube.min.js')}}"></script>
<script src="{{asset('js/instructors.js')}}"></script>
</body>
</html>
