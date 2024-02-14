<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>User Preferences</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <h2>User Preferences</h2>
                <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif; ?>
                <form action="<?php echo base_url(); ?>preferences" method="post">

                    <div class="row">
                        <div class="col">
                            <?php
                            foreach ($data as $content) :
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="<?= $content['categories']; ?>">
                                    <label class="form-check-label" for="inlineCheckbox1"><?= $content['categories']; ?></label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <hr>


                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="<?php echo base_url(); ?>signup" type="button" class="btn btn-primary">Masuk halaman Utama</a>
                        </div>
                    </div>
                    <div class="col">
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>

</html>