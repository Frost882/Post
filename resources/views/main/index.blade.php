@extends('layouts.main')
@section('content')
<!-- Blog -->

<div class="blog">
    <div class="container">
        <div class="row row-lg-eq-height">

            <!-- Blog Left -->
            <div class="col-lg-6">
                <div class="blog_left">
                    <div class="blog_title">From Our Blog</div>
                    <div class="blog_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
                    </div>
                    <div class="blog_categories">
                        <div class="row categories_row">

                            <!-- Category -->
                            <div class="col-md-4 blog_category_col">
                                <a href="blog.html">
                                    <div class="blog_category">
                                        <div class="blog_category_image"><img src="images/blog_1.jpg" alt=""></div>
                                        <div class="blog_category_title">travel</div>
                                    </div>
                                </a>
                            </div>

                            <!-- Category -->
                            <div class="col-md-4 blog_category_col">
                                <a href="blog.html">
                                    <div class="blog_category">
                                        <div class="blog_category_image"><img src="images/blog_2.jpg" alt=""></div>
                                        <div class="blog_category_title">languages</div>
                                    </div>
                                </a>
                            </div>

                            <!-- Category -->
                            <div class="col-md-4 blog_category_col">
                                <a href="blog.html">
                                    <div class="blog_category">
                                        <div class="blog_category_image"><img src="images/blog_3.jpg" alt=""></div>
                                        <div class="blog_category_title">cultures</div>
                                    </div>
                                </a>
                            </div>

                            <!-- Category -->
                            <div class="col-md-4 blog_category_col">
                                <a href="blog.html">
                                    <div class="blog_category">
                                        <div class="blog_category_image"><img src="images/blog_4.jpg" alt=""></div>
                                        <div class="blog_category_title">fashion</div>
                                    </div>
                                </a>
                            </div>

                            <!-- Category -->
                            <div class="col-md-4 blog_category_col">
                                <a href="blog.html">
                                    <div class="blog_category">
                                        <div class="blog_category_image"><img src="images/blog_5.jpg" alt=""></div>
                                        <div class="blog_category_title">cooking</div>
                                    </div>
                                </a>
                            </div>

                            <!-- Category -->
                            <div class="col-md-4 blog_category_col">
                                <a href="blog.html">
                                    <div class="blog_category">
                                        <div class="blog_category_image"><img src="images/blog_6.jpg" alt=""></div>
                                        <div class="blog_category_title">hobbies</div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Right -->

            <div class="col-lg-6">
                <div class="blog_right">
                    <div class="blog_image" style="background-image:url(images/blog_7.jpg)"></div>
                    <div class="blog_title_container">
                        <div class="blog_right_category"><a href="#">travel</a></div>
                        <div class="blog_right_title"><a href="blog_single.html">Design Better Forms</a></div>
                        <div class="blog_right_text">
                            <p>Whether it is a signup flow, a multi-view stepper, or a monotonous data entry interface, forms are one of the most important components of digital product design.</p>
                        </div>
                        <div class="read_more"><a href="blog_single.html">Read More <img src="images/right.png" alt=""></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
