<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="home">
    <!-- Background image artist https://unsplash.com/@thepootphotographer -->
    <div class="home_background parallax_background parallax-window" data-parallax="scroll" data-image-src="/assets/images/about.jpg" data-speed="0.8"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <div class="home_title">About us</div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="<?= base_url() ?>">Home</a></li>
                                <li>About us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about">
    <div class="container">
        <div class="row about_row row-lg-eq-height">
            <div class="col-lg-6">
                <div class="about_content">
                    <div class="about_title">Our Platform's main goal</div>
                    <div class="about_text">
                        <p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut. Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar. Praesent vel nisl fermentum, gravida augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id convallis libero, sed blandit nibh. Nam ultricies tristique nibh, consequat ornare nibh. Quisque vitae odio ligula.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about_image"><img src="/assets/images/about_1.jpg" alt="https://unsplash.com/@jtylernix"></div>
            </div>
        </div>
        <div class="row about_row row-lg-eq-height">
            <div class="col-lg-6 order-lg-1 order-2">
                <div class="about_image"><img src="/assets/images/about_1.jpg" alt=""></div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1">
                <div class="about_content">
                    <div class="about_title">eLearn's Vision</div>
                    <div class="about_text">
                        <p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut. Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar. Praesent vel nisl fermentum, gravida augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id convallis libero, sed blandit nibh. Nam ultricies tristique nibh.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Milestones -->

<div class="milestones">
    <!-- Background image artis https://unsplash.com/@thepootphotographer -->
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/assets/images/milestones.jpg" data-speed="0.8"></div>
    <div class="container">
        <div class="row milestones_container">

            <!-- Milestone -->
            <div class="col-lg-3 milestone_col">
                <div class="milestone text-center">
                    <div class="milestone_icon"><img src="/assets/images/milestone_1.svg" alt=""></div>
                    <div class="milestone_counter" data-end-value="1548">0</div>
                    <div class="milestone_text">Online Courses</div>
                </div>
            </div>

            <!-- Milestone -->
            <div class="col-lg-3 milestone_col">
                <div class="milestone text-center">
                    <div class="milestone_icon"><img src="/assets/images/milestone_2.svg" alt=""></div>
                    <div class="milestone_counter" data-end-value="7286">0</div>
                    <div class="milestone_text">Students</div>
                </div>
            </div>

            <!-- Milestone -->
            <div class="col-lg-3 milestone_col">
                <div class="milestone text-center">
                    <div class="milestone_icon"><img src="/assets/images/milestone_3.svg" alt=""></div>
                    <div class="milestone_counter" data-end-value="257">0</div>
                    <div class="milestone_text">Teachers</div>
                </div>
            </div>

            <!-- Milestone -->
            <div class="col-lg-3 milestone_col">
                <div class="milestone text-center">
                    <div class="milestone_icon"><img src="/assets/images/milestone_4.svg" alt=""></div>
                    <div class="milestone_counter" data-end-value="39">0</div>
                    <div class="milestone_text">Countries</div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Teachers -->



<?= $this->endSection('content'); ?>