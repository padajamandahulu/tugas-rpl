<!-- references.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Preferences</title>
</head>

<body>
    <h2>User Preferences</h2>
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
        <?php foreach ($data as $content) : ?>
            <input type="checkbox" name="preferences[]" value="<?= $content['categories']; ?>"> <?= $content['categories']; ?> <br>
        <?php endforeach; ?>
        <!-- Tambahkan input hidden untuk menyimpan email -->
        <input type="hidden" name="email" value="<?= $email ?>">
        <button type="submit">Save Preferences</button>
        <a href="<?= base_url() ?>/home" type="button">Menu Utama</a>
    </form>
</body>

</html>