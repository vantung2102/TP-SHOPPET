<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Theme Styles -->
    <link href="<?= load_css('connect.min') ?>" rel="stylesheet" />
    <link href="<?= load_css('admin') ?>" rel="stylesheet" />
</head>

<body class="auth-page sign-in">
    <div class="loader">
        <div class="spinner-grow text-primary" role="status">
            <span class="sr-only"></span>
        </div>
    </div>
    <?= $NoiDung; ?>

    <div>
        <?php
    if (isset($_GET['failure']) && $_GET['failure'] == 0) {
      echo "<script>alert('Nhập Thiếu !')</script>";
    } else if (isset($_GET['failure']) && $_GET['failure'] == 1) {
      echo "<script>alert('Nhập sai mật khẩu hoặc email !')</script>";
    }

    ?>
    </div>


    <script src="<?= load_js('jquery-3.4.1.min') ?>"></script>
    <script src="<?= load_js('connect') ?>"></script>
</body>

</html>