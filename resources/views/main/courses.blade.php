<!DOCTYPE html>
<html lang="en">
<head>
    <title>Courses</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Lingua project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/courses.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/courses_responsive.css')}}">
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

    <div class="home">
        <div class="breadcrumbs_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="breadcrumbs_list d-flex flex-row align-items-center justify-content-start">
                            <li><a href="index.html">home</a></li>
                            <li><a href="courses.html">courses</a></li>
                            <li>english</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Language -->

    <div class="language">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="language_title">Learn Languages Easily</div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="language_slider_container">

                        <!-- Language Slider -->

                        <div class="owl-carousel owl-theme language_slider">

                            <!-- Flag -->
                            <div class="owl-item language_item">
                                <a href="#">
                                    <div class="flag"><img src="{{asset('images/Ukrainian.svg')}}" alt=""></div>
                                    <div class="lang_name">Ukrainian</div>
                                </a>
                            </div>

                            <!-- Flag -->
                            <div class="owl-item language_item">
                                <a href="#">
                                    <div class="flag"><img src="{{asset('images/Japanese.svg')}}" alt=""></div>
                                    <div class="lang_name">Japanese</div>
                                </a>
                            </div>

                            <!-- Flag -->
                            <div class="owl-item language_item">
                                <a href="#">
                                    <div class="flag"><img src="{{asset('images/Lithuanian.svg')}}" alt=""></div>
                                    <div class="lang_name">Lithuanian</div>
                                </a>
                            </div>

                            <!-- Flag -->
                            <div class="owl-item language_item">
                                <a href="#">
                                    <div class="flag"><img src="{{asset('images/Swedish.svg')}}" alt=""></div>
                                    <div class="lang_name">Swedish</div>
                                </a>
                            </div>

                            <!-- Flag -->
                            <div class="owl-item language_item">
                                <a href="#">
                                    <div class="flag"><img src="{{asset('images/English.svg')}}" alt=""></div>
                                    <div class="lang_name">English</div>
                                </a>
                            </div>

                            <!-- Flag -->
                            <div class="owl-item language_item">
                                <a href="#">
                                    <div class="flag"><img src="{{asset('images/Italian.svg')}}" alt=""></div>
                                    <div class="lang_name">Italian</div>
                                </a>
                            </div>

                            <!-- Flag -->
                            <div class="owl-item language_item">
                                <a href="#">
                                    <div class="flag"><img src="{{asset('images/Chinese.svg')}}" alt=""></div>
                                    <div class="lang_name">Chinese</div>
                                </a>
                            </div>

                            <!-- Flag -->
                            <div class="owl-item language_item">
                                <a href="#">
                                    <div class="flag"><img src="{{asset('images/French.svg')}}" alt=""></div>
                                    <div class="lang_name">French</div>
                                </a>
                            </div>

                            <!-- Flag -->
                            <div class="owl-item language_item">
                                <a href="#">
                                    <div class="flag"><img src="{{asset('images/German.svg')}}" alt=""></div>
                                    <div class="lang_name">German</div>
                                </a>
                            </div>

                        </div>

                        <div class="lang_nav lang_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                        <div class="lang_nav lang_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Courses -->

    <div class="courses">
        <div class="container">
            <div class="row courses_row">

                <!-- Course -->
                <div class="col-lg-4 course_col">
                    <div class="course">
                        <div class="course_image"><img src="{{asset('images/course_4.jpg')}}" alt=""></div>
                        <div class="course_body">
                            <div class="course_title"><a href="course.html">Vocabulary</a></div>
                            <div class="course_info">
                                <ul>
                                    <li><a href="instructors.html">Sarah Parker</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="course_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</p>
                            </div>
                        </div>
                        <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                            <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
                            <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
                            <div class="course_mark course_free trans_200"><a href="#">Free</a></div>
                        </div>
                    </div>
                </div>

                <!-- Course -->
                <div class="col-lg-4 course_col">
                    <div class="course">
                        <div class="course_image"><img src="{{asset('images/course_5.jpg')}}" alt=""></div>
                        <div class="course_body">
                            <div class="course_title"><a href="course.html">Vocabulary</a></div>
                            <div class="course_info">
                                <ul>
                                    <li><a href="instructors.html">Sarah Parker</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </div>
                            <div class="course_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</p>
                            </div>
                        </div>
                        <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                            <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
                            <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
                            <div class="course_mark course_free trans_200"><a href="#">Free</a></div>
                        </div>
                    </div>
                </div>

                <!-- Course -->
                <div class="col-lg-4 course_col">
                    <div class="course">
                        <div class="course_image"><img src="{{asset('images/course_6.jpg')}}" alt=""></div>
                        <div class="course_body">
                            <div class="course_title"><a href="course.html">Vocabulary</a></div>
                            <div class="course_info">
                                <ul>
                                    <li><a href="instructors.html">Sarah Parker</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="course_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</p>
                            </div>
                        </div>
                        <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                            <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
                            <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
                            <div class="course_mark trans_200"><a href="#">$45</a></div>
                        </div>
                    </div>
                </div>

                <!-- Course -->
                <div class="col-lg-4 course_col">
                    <div class="course">
                        <div class="course_image"><img src="{{asset('images/course_7.jpg')}}" alt=""></div>
                        <div class="course_body">
                            <div class="course_title"><a href="course.html">Vocabulary</a></div>
                            <div class="course_info">
                                <ul>
                                    <li><a href="instructors.html">Sarah Parker</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="course_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</p>
                            </div>
                        </div>
                        <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                            <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
                            <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
                            <div class="course_mark course_free trans_200"><a href="#">Free</a></div>
                        </div>
                    </div>
                </div>

                <!-- Course -->
                <div class="col-lg-4 course_col">
                    <div class="course">
                        <div class="course_image"><img src="{{asset('images/course_8.jpg')}}" alt=""></div>
                        <div class="course_body">
                            <div class="course_title"><a href="course.html">Vocabulary</a></div>
                            <div class="course_info">
                                <ul>
                                    <li><a href="instructors.html">Sarah Parker</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </div>
                            <div class="course_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</p>
                            </div>
                        </div>
                        <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                            <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
                            <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
                            <div class="course_mark course_free trans_200"><a href="#">Free</a></div>
                        </div>
                    </div>
                </div>

                <!-- Course -->
                <div class="col-lg-4 course_col">
                    <div class="course">
                        <div class="course_image"><img src="{{asset('images/course_9.jpg')}}" alt=""></div>
                        <div class="course_body">
                            <div class="course_title"><a href="course.html">Vocabulary</a></div>
                            <div class="course_info">
                                <ul>
                                    <li><a href="instructors.html">Sarah Parker</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="course_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</p>
                            </div>
                        </div>
                        <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                            <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
                            <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
                            <div class="course_mark trans_200"><a href="#">$45</a></div>
                        </div>
                    </div>
                </div>

                <!-- Course -->
                <div class="col-lg-4 course_col">
                    <div class="course">
                        <div class="course_image"><img src="{{asset('images/course_10.jpg')}}" alt=""></div>
                        <div class="course_body">
                            <div class="course_title"><a href="course.html">Vocabulary</a></div>
                            <div class="course_info">
                                <ul>
                                    <li><a href="instructors.html">Sarah Parker</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="course_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</p>
                            </div>
                        </div>
                        <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                            <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
                            <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
                            <div class="course_mark course_free trans_200"><a href="#">Free</a></div>
                        </div>
                    </div>
                </div>

                <!-- Course -->
                <div class="col-lg-4 course_col">
                    <div class="course">
                        <div class="course_image"><img src="{{asset('images/course_11.jpg')}}" alt=""></div>
                        <div class="course_body">
                            <div class="course_title"><a href="course.html">Vocabulary</a></div>
                            <div class="course_info">
                                <ul>
                                    <li><a href="instructors.html">Sarah Parker</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </div>
                            <div class="course_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</p>
                            </div>
                        </div>
                        <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                            <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
                            <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
                            <div class="course_mark course_free trans_200"><a href="#">Free</a></div>
                        </div>
                    </div>
                </div>

                <!-- Course -->
                <div class="col-lg-4 course_col">
                    <div class="course">
                        <div class="course_image"><img src="{{asset('images/course_12.jpg')}}" alt=""></div>
                        <div class="course_body">
                            <div class="course_title"><a href="course.html">Vocabulary</a></div>
                            <div class="course_info">
                                <ul>
                                    <li><a href="instructors.html">Sarah Parker</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="course_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla.</p>
                            </div>
                        </div>
                        <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                            <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
                            <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
                            <div class="course_mark trans_200"><a href="#">$45</a></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <div class="load_more_button"><a href="#">load more</a></div>
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
<script src="{{asset('js/courses.js')}}"></script>
</body>
</html>
