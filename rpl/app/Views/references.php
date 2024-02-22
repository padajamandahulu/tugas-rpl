<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Referensi</title>
    <style>
        /* Add custom styles here */
        .container {
            margin-top: 50px;
        }

        .form-check-input {
            transform: scale(1.5);
            margin-right: 10px;
        }

        .form-check-label {
            font-size: 1.2em;
        }

        .submit-btn {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-8">
                <h1 class="text-center">Pilih Konten yang Anda Sukai</h1>
                <?php if (isset($_SESSION['success'])) : ?>
                    <div class="alert alert-success">
                        <?= $_SESSION['success'] ?>
                    </div>
                <?php elseif (isset($_SESSION['error'])) : ?>
                    <div class="alert alert-danger">
                        <?= $_SESSION['error'] ?>
                    </div>
                <?php endif; ?>

                <form action="<?= base_url('preferences/store') ?>" method="post">

                    <div class="row">
                        <?php foreach ($data as $content) : ?>
                            <div class="col-lg-4 col-md-6 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="preferences[]" id="content<?= $content['id']; ?>" value="<?= $content['categories']; ?>">
                                    <label class="form-check-label" for="content<?= $content['id']; ?>"> <?= $content['categories']; ?> </label>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Tambahkan input hidden untuk menyimpan email -->
                    <input type="hidden" name="email" value="<?= $email ?>">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary submit-btn">Simpan</button>
                        <a href="<?= base_url() ?>home" class="btn btn-secondary ml-2 submit-btn">Lain kali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>