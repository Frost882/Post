<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('styles/blog.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/blog_responsive.css')}}">
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

    </div>

    <!-- Blog -->

    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="welcome_title">Welcome to our blog!</div>
                </div>
            </div>
            <div class="row categories_row">

                <!-- Category -->
                <div class="col-xl-2 col-lg-4 col-md-6 blog_category_col">
                    <a href="blog.html">
                        <div class="blog_category">
                            <div class="blog_category_image"><img src="{{asset('images/blog_1.jpg')}}" alt=""></div>
                            <div class="blog_category_title">travel</div>
                        </div>
                    </a>
                </div>

                <!-- Category -->
                <div class="col-xl-2 col-lg-4 col-md-6 blog_category_col">
                    <a href="blog.html">
                        <div class="blog_category">
                            <div class="blog_category_image"><img src="{{asset('images/blog_2.jpg')}}" alt=""></div>
                            <div class="blog_category_title">languages</div>
                        </div>
                    </a>
                </div>

                <!-- Category -->
                <div class="col-xl-2 col-lg-4 col-md-6 blog_category_col">
                    <a href="blog.html">
                        <div class="blog_category">
                            <div class="blog_category_image"><img src="{{asset('images/blog_3.jpg')}}" alt=""></div>
                            <div class="blog_category_title">cultures</div>
                        </div>
                    </a>
                </div>

                <!-- Category -->
                <div class="col-xl-2 col-lg-4 col-md-6 blog_category_col">
                    <a href="blog.html">
                        <div class="blog_category">
                            <div class="blog_category_image"><img src="{{asset('images/blog_4.jpg')}}" alt=""></div>
                            <div class="blog_category_title">fashion</div>
                        </div>
                    </a>
                </div>

                <!-- Category -->
                <div class="col-xl-2 col-lg-4 col-md-6 blog_category_col">
                    <a href="blog.html">
                        <div class="blog_category">
                            <div class="blog_category_image"><img src="{{asset('images/blog_5.jpg')}}" alt=""></div>
                            <div class="blog_category_title">cooking</div>
                        </div>
                    </a>
                </div>

                <!-- Category -->
                <div class="col-xl-2 col-lg-4 col-md-6 blog_category_col">
                    <a href="blog.html">
                        <div class="blog_category">
                            <div class="blog_category_image"><img src="{{asset('images/blog_6.jpg')}}" alt=""></div>
                            <div class="blog_category_title">hobbies</div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Blog Posts -->

            <div class="row blog_row">

                <!-- Blog Post -->
                <div class="col-lg-6">
                    <div class="blog_post">
                        <div class="blog_image" style="background-image:url({{asset('images/blog_7.jpg')}})"></div>
                        <div class="blog_title_container">
                            <div class="blog_post_category"><a href="#">travel</a></div>
                            <div class="blog_post_title"><a href="blog_single.html">Design Better Forms</a></div>
                            <div class="blog_post_text">
                                <p>Whether it is a signup flow, a multi-view stepper, or a monotonous data entry interface, forms are one of the most important components of digital product design.</p>
                            </div>
                            <div class="read_more"><a href="blog_single.html">Read More <img src="{{asset('images/right.png')}}" alt=""></a></div>
                        </div>
                    </div>
                </div>

                <!-- Blog Post -->
                <div class="col-lg-6">
                    <div class="blog_post">
                        <div class="blog_image" style="background-image:url({{asset('images/blog_8.jpg')}})"></div>
                        <div class="blog_title_container">
                            <div class="blog_post_category"><a href="#">travel</a></div>
                            <div class="blog_post_title"><a href="blog_single.html">Art Helps Healing</a></div>
                            <div class="blog_post_text">
                                <p>Whether it is a signup flow, a multi-view stepper, or a monotonous data entry interface, forms are one of the most important components of digital product design.</p>
                            </div>
                            <div class="read_more"><a href="blog_single.html">Read More <img src="{{asset('images/right.png')}}" alt=""></a></div>
                        </div>
                    </div>
                </div>

                <!-- Blog Post -->
                <div class="col-lg-6">
                    <div class="blog_post">
                        <div class="blog_image" style="background-image:url({{asset('images/blog_9.jpg')}})"></div>
                        <div class="blog_title_container">
                            <div class="blog_post_category"><a href="#">travel</a></div>
                            <div class="blog_post_title"><a href="blog_single.html">Art Helps Healing</a></div>
                            <div class="blog_post_text">
                                <p>Whether it is a signup flow, a multi-view stepper, or a monotonous data entry interface, forms are one of the most important components of digital product design.</p>
                            </div>
                            <div class="read_more"><a href="blog_single.html">Read More <img src="{{asset('images/right.png')}}" alt=""></a></div>
                        </div>
                    </div>
                </div>

                <!-- Blog Post -->
                <div class="col-lg-6">
                    <div class="blog_post">
                        <div class="blog_image" style="background-image:url({{asset('images/blog_10.jpg')}})"></div>
                        <div class="blog_title_container">
                            <div class="blog_post_category"><a href="#">travel</a></div>
                            <div class="blog_post_title"><a href="blog_single.html">Art Helps Healing</a></div>
                            <div class="blog_post_text">
                                <p>Whether it is a signup flow, a multi-view stepper, or a monotonous data entry interface, forms are one of the most important components of digital product design.</p>
                            </div>
                            <div class="read_more"><a href="blog_single.html">Read More <img src="{{asset('images/right.png')}}" alt=""></a></div>
                        </div>
                    </div>
                </div>

                <!-- Blog Post -->
                <div class="col-lg-6">
                    <div class="blog_post">
                        <div class="blog_image" style="background-image:url({{asset('images/blog_11.jpg')}})"></div>
                        <div class="blog_title_container">
                            <div class="blog_post_category"><a href="#">travel</a></div>
                            <div class="blog_post_title"><a href="blog_single.html">Art Helps Healing</a></div>
                            <div class="blog_post_text">
                                <p>Whether it is a signup flow, a multi-view stepper, or a monotonous data entry interface, forms are one of the most important components of digital product design.</p>
                            </div>
                            <div class="read_more"><a href="blog_single.html">Read More <img src="{{asset('images/right.png')}}" alt=""></a></div>
                        </div>
                    </div>
                </div>

                <!-- Blog Post -->
                <div class="col-lg-6">
                    <div class="blog_post">
                        <div class="blog_image" style="background-image:url({{asset('images/blog_12.jpg')}})"></div>
                        <div class="blog_title_container">
                            <div class="blog_post_category"><a href="#">travel</a></div>
                            <div class="blog_post_title"><a href="blog_single.html">Art Helps Healing</a></div>
                            <div class="blog_post_text">
                                <p>Whether it is a signup flow, a multi-view stepper, or a monotonous data entry interface, forms are one of the most important components of digital product design.</p>
                            </div>
                            <div class="read_more"><a href="blog_single.html">Read More <img src="{{asset('images/right.png')}}" alt=""></a></div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Load More -->
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
<script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{assert('js/blog.js')}}"></script>
</body>
</html>
