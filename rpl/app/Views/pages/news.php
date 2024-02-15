<!DOCTYPE html>
<html lang="en">

<head>
    <title>News</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Elearn project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/assets/styles/bootstrap4/bootstrap.min.css">
    <link href="/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/assets/styles/news.css">
    <link rel="stylesheet" type="text/css" href="/assets/styles/news_responsive.css">
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header">


            <!-- Header Content -->
            <div class="header_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <div class="logo_container">
                                    <a href="#">
                                        <div class="logo_content d-flex flex-row align-items-end justify-content-start">
                                            <div class="logo_img"><img src="/assets/images/logo.png" alt=""></div>
                                            <div class="logo_text">learn</div>
                                        </div>
                                    </a>
                                </div>
                                <nav class="main_nav_contaner ml-auto">
                                    <ul class="main_nav">
                                        <li><a href="<?= base_url() ?>home">home</a></li>
                                        <li><a href="<?= base_url() ?>pages/courses">pembelajaran</a></li>
                                        <li><a href="<?= base_url() ?>pages/news">artikel</a></li>
                                        <li><a href="<?= base_url() ?>logout">Logout</a></li>
                                    </ul>

                                    <!-- Hamburger -->

                                    <div class="hamburger menu_mm">
                                        <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                                    </div>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Search Panel -->
            <div class="header_search_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
                                <form action="#" class="header_search_form">
                                    <input type="search" class="search_input" placeholder="Search" required="required">
                                    <button class="header_search_button d-flex flex-column align-items-center justify-content-center">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Menu -->

        <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
            <div class="menu_close_container">
                <div class="menu_close">
                    <div></div>
                    <div></div>
                </div>
            </div>
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
                    <li class="menu_mm"><a href="<?= base_url() ?>home">home</a></li>
                    <li class="menu_mm"><a href="<?= base_url() ?>pages/courses">courses</a></li>
                    <li class="menu_mm"><a href="<?= base_url() ?>pages/news">news</a></li>

                </ul>
            </nav>
            <div class="menu_extra">
                <div class="menu_phone"><span class="menu_title">phone:</span>(009) 35475 6688933 32</div>
                <div class="menu_social">
                    <span class="menu_title">follow us</span>
                    <ul>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Home -->

        <div class="home">
            <!-- Background image artist https://unsplash.com/@thepootphotographer -->
            <div class="home_background parallax_background parallax-window" data-parallax="scroll" data-image-src="/assets/images/news.jpg" data-speed="0.8"></div>
            <div class="home_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content text-center">
                                <div class="home_title">News</div>
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="<?= base_url() ?>home">Home</a></li>
                                        <li>News</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- News -->

        <div class="news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="news_posts">
                            <?php
                            foreach ($data as $blog) :
                            ?>
                                <div class="news_post">
                                    <div class="news_post_image"><img src="/assets/images/<?= $blog['img'] ?>" alt=""></div>
                                    <div class="news_post_body">
                                        <div class="news_post_date"><a href="#"><?= $blog['date'] ?></a></div>
                                        <div class="news_post_title"><a href="#"><?= $blog['tittle'] ?></a></div>
                                        <div class="news_post_meta d-flex flex-row align-items-start justify-content-start">
                                        </div>
                                        <div class="news_post_text">
                                            <p><?= $blog['description'] ?></p>
                                        </div>
                                        <div class="news_post_link"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar_search">
                                <form action="#" id="sidebar_search_form" class="sidebar_search_form">
                                    <input type="text" class="sidebar_search_input" placeholder="Search" required="required">
                                    <button class="sidebar_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                            <div class="sidebar_categories">
                                <div class="sidebar_title">Categories</div>
                                <div class="sidebar_links">
                                    <ul>
                                        <?php
                                        foreach ($categories as $content) :
                                        ?>
                                            <li><a href="<?= base_url() ?>pages/category?category=<?= urlencode($content['categories']) ?>">
                                                    <?php echo $content['categories'] ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar_latest_posts">
                                <div class="sidebar_title">Latest Posts</div>
                                <div class="latest_posts">

                                    <!-- News Post -->
                                    <div class="latest_post d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div class="latest_post_image"><img src="/assets/images/news_1.jpg" alt="https://unsplash.com/@beccatapert"></div>
                                        </div>
                                        <div class="latest_post_body">
                                            <div class="latest_post_date">April 02, 2018</div>
                                            <div class="latest_post_title"><a href="news.html">Why Choose online education?</a></div>
                                            <div class="latest_post_author">By <a href="#">William Smith</a></div>
                                        </div>
                                    </div>

                                    <!-- News Post -->
                                    <div class="latest_post d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div class="latest_post_image"><img src="/assets/images/news_2.jpg" alt="https://unsplash.com/@nbb_photos"></div>
                                        </div>
                                        <div class="latest_post_body">
                                            <div class="latest_post_date">April 02, 2018</div>
                                            <div class="latest_post_title"><a href="news.html">Books, Kindle or tablet?</a></div>
                                            <div class="latest_post_author">By <a href="#">William Smith</a></div>
                                        </div>
                                    </div>

                                    <!-- News Post -->
                                    <div class="latest_post d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div class="latest_post_image"><img src="/assets/images/news_3.jpg" alt="https://unsplash.com/@rawpixel"></div>
                                        </div>
                                        <div class="latest_post_body">
                                            <div class="latest_post_date">April 02, 2018</div>
                                            <div class="latest_post_title"><a href="news.html">Why Choose online education?</a></div>
                                            <div class="latest_post_author">By <a href="#">William Smith</a></div>
                                        </div>
                                    </div>

                                    <!-- News Post -->
                                    <div class="latest_post d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div class="latest_post_image"><img src="/assets/images/news_4.jpg" alt="https://unsplash.com/@jtylernix"></div>
                                        </div>
                                        <div class="latest_post_body">
                                            <div class="latest_post_date">April 02, 2018</div>
                                            <div class="latest_post_title"><a href="news.html">Books, Kindle or tablet?</a></div>
                                            <div class="latest_post_author">By <a href="#">William Smith</a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="sidebar_elearn">
                                <div class="elearn">
                                    <div class="elearn_background" style="background-image:url(/assets/images/elearn.jpg)"></div>
                                    <div class="elearn_content d-flex flex-column align-items-center justify-content-end">
                                        <div class="elearn_line">Get a 20% Discount</div>
                                        <div class="elearn_link"><a href="#">Register now</a></div>
                                        <div class="dcount">
                                            <div class="dcount_content d-flex flex-column align-items-center justify-content-center">
                                                <div class="dcount_value">20%</div>
                                                <div class="dcount_text">off</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="row">
                    <div class="col">
                        <div class="news_pagination">
                            <ul>
                                <li><a href="#">01</a></li>
                                <li class="active"><a href="#">02</a></li>
                                <li><a href="#">03</a></li>
                                <li><a href="#">04</a></li>
                                <li><a href="#">05</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer -->

        <footer class="footer">
            <div class="container">
                <div class="row">

                    <!-- About -->
                    <div class="col-lg-3 footer_col">
                        <div class="footer_about">
                            <div class="logo_container">
                                <a href="#">
                                    <div class="logo_content d-flex flex-row align-items-end justify-content-start">
                                        <div class="logo_img"><img src="/assets/images/logo.png" alt=""></div>
                                        <div class="logo_text">learn</div>
                                    </div>
                                </a>
                            </div>
                            <div class="footer_about_text">
                                <p>Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar.</p>
                            </div>
                            <div class="footer_social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="copyright">
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 footer_col">
                        <div class="footer_links">
                            <div class="footer_title">Quick menu</div>
                            <ul class="footer_list">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Facts</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 footer_col">
                        <div class="footer_links">
                            <div class="footer_title">Useful Links</div>
                            <ul class="footer_list">
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Teachers</a></li>
                                <li><a href="#">Links</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-lg-3 footer_col">
                        <div class="footer_contact">
                            <div class="footer_title">Contact Us</div>
                            <div class="footer_contact_info">
                                <div class="footer_contact_item">
                                    <div class="footer_contact_title">Address:</div>
                                    <div class="footer_contact_line">Jl.dipatiukur no.138 coblong, kota bandung</div>
                                </div>
                                <div class="footer_contact_item">
                                    <div class="footer_contact_title">Phone:</div>
                                    <div class="footer_contact_line">+53 345 7953 32453</div>
                                </div>
                                <div class="footer_contact_item">
                                    <div class="footer_contact_title">Email:</div>
                                    <div class="footer_contact_line">ElearnHealth@gmail.com </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="/assets/js/jquery-3.2.1.min.js"></script>
    <script src="/assets/styles/bootstrap4/popper.js"></script>
    <script src="/assets/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="/assets/plugins/easing/easing.js"></script>
    <script src="/assets/plugins/parallax-js-master/parallax.min.js"></script>
    <script src="/assets/js/news.js"></script>
</body>

</html>