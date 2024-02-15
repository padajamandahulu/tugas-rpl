<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section_title text-center">
                    <?php
                    // Retrieve the category value from the URL
                    $tittle = $_GET['tittle'] ?? '';
                    ?>
                    <h2>Pembelajaran <?= htmlspecialchars($tittle); ?></h2>
                </div>
                <div class="section_subtitle">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non blanditiis porro corporis fugiat! Quam unde ut et, dicta repellat illo placeat alias ab sit accusantium repudiandae, dolorem voluptate. Ducimus, aliquid!</div>
            </div>
        </div>
        <!-- Featured Course -->
        <div class="row featured_row">
            <?php foreach ($data as $content) :
                // Check if the course belongs to the selected category
                if ($content['tittle'] == $tittle) :
            ?>
                    <div class="col-lg-6 featured_col">
                        <div class="featured_content">
                            <div class="featured_header d-flex flex-row align-items-center justify-content-start">
                                <div class="featured_tag"><a href="<?= base_url() ?>pages/category?category=<?= urlencode($content['categories']) ?>"><?php echo $content['categories']; ?></a></div>
                            </div>
                            <div class="featured_title">
                                <h3><a href="#"><?= $content['tittle']; ?></a></h3>
                            </div>
                            <div class="featured_text"><?= $content['description']; ?></div>
                            <div class="featured_footer d-flex align-items-center justify-content-start">
                            </div>
                        </div>
                    </div>
                <?php
                endif;
                ?>
            <?php endforeach; ?>
            <div class="col-lg-6 featured_col">
                <!-- Background image artist https://unsplash.com/@jtylernix -->
                <div class="featured_background" style="background-image:url(/assets/images/course_6.jpg)"></div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>