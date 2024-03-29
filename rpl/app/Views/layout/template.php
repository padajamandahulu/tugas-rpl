<!DOCTYPE html>
<html lang="en">

<head>
    <title>Elearn</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Elearn project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/assets/styles/bootstrap4/bootstrap.min.css">
    <link href="/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/assets/plugins/OwlCarousel2-2.2.1/animate.css">
    <link href="/assets/plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/assets/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="/assets/styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="/assets/styles/about.css">
    <link rel="stylesheet" type="text/css" href="/assets/styles/about_responsive.css">
    <link rel="stylesheet" type="text/css" href="/assets/styles/courses.css">
    <link rel="stylesheet" type="text/css" href="/assets/styles/courses_responsive.css">
    <link rel="stylesheet" type="text/css" href="/assets/styles/news.css">
    <link rel="stylesheet" type="text/css" href="/assets/styles/news_responsive.css">

</head>

<body>
    <?= $this->include('layout/header'); ?>

    <?= $this->renderSection('content'); ?>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
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
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla eaque corporis expedita molestiae commodi exercitationem illo consequatur deleniti? Sit dolorem temporibus quas non placeat quidem aperiam maxime reprehenderit delectus sapiente?</p>
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
    <script src="/assets/plugins/greensock/TweenMax.min.js"></script>
    <script src="/assets/plugins/greensock/TimelineMax.min.js"></script>
    <script src="/assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="/assets/plugins/greensock/animation.gsap.min.js"></script>
    <script src="/assets/plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="/assets/plugins/easing/easing.js"></script>
    <script src="/assets/plugins/video-js/video.min.js"></script>
    <script src="/assets/plugins/video-js/Youtube.min.js"></script>
    <script src="/assets/plugins/parallax-js-master/parallax.min.js"></script>
    <script src="/assets/js/custom.js"></script>\
    <script src="/assets/js/courses.js"></script>
    <script src="/assets/js/about.js"></script>
    <script src="/assets/js/news.js"></script>
</body>

</html>