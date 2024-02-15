<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="home">
    <!-- Background image artist https://unsplash.com/@thepootphotographer -->
    <div class="home_background parallax_background parallax-window" data-parallax="scroll" data-image-src="/assets/images/courses.jpg" data-speed="0.8"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <div class="home_title">Pembelajaran</div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="<?= base_url() ?>home">Home</a></li>
                                <li>Pembelajaran</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section_title text-center">
                    <h2>Choose your course</h2>
                </div>
                <div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut</div>
            </div>
        </div>



        <!-- Featured Course -->
        <div class="row featured_row">
            <div class="col-lg-6 featured_col">
                <div class="featured_content">
                    <div class="featured_header d-flex flex-row align-items-center justify-content-start">
                        <div class="featured_tag"><a href="#">Featured</a></div>
                    </div>
                    <div class="featured_title">
                        <h3><a href="courses.html">Online Literature Course</a></h3>
                    </div>
                    <div class="featured_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, ratione dolorum. Explicabo illum facilis culpa voluptatem quo reprehenderit necessitatibus, repellat odit, earum, rem libero natus doloribus iure repellendus? Repellat, ipsa.</div>
                    <div class="featured_footer d-flex align-items-center justify-content-start">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 featured_col">
                <!-- Background image artist https://unsplash.com/@jtylernix -->
                <div class="featured_background" style="background-image:url(/assets/images/featured.jpg)"></div>
            </div>
        </div>
        <div class="row courses_row">
            <?php
            foreach ($data as $content) :
            ?>
                <!-- Course -->
                <div class="col-lg-4 col-md-6">
                    <div class="course">
                        <div class="course_image"><img src="/assets/images/<?= $content['thumbnail'] ?> " alt=""></div>
                        <div class="course_body">
                            <div class="course_header d-flex flex-row align-items-center justify-content-start">
                                <div class="course_tag"><a href="<?= base_url() ?>pages/category?category=<?= urlencode($content['categories']) ?>"><?php echo $content['categories'] ?></a></div>

                            </div>
                            <div class="course_title">
                                <h3><a href="<?= base_url() ?>pages/courses_detail?tittle=<?= urlencode($content['tittle']) ?>"><?= $content['tittle'] ?></a></h3>
                            </div>
                            <div class="course_text"><?php echo $content['description'] ?></div>
                            <div class="course_footer d-flex align-items-center justify-content-start">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- Course -->


            <!-- Course -->


            <!-- Course -->


        </div>


        <!-- Pagination -->
        <div class="row">
            <div class="col">
                <div class="courses_paginations">
                    <ul>
                        <li class="active"><a href="#">Not active</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#">04</a></li>
                        <li><a href="#">05</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>