<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <link rel="stylesheet" href="<?= load_css('base') ?>" />
  <link rel="stylesheet" href="<?= load_css('login') ?>" />
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

<body>
  <?= $NoiDung ?>

  <?php
  // registration
  if (isset($_GET['registration']) && $_GET['registration'] == 1) {
    echo "<script>alert('Nhập mật khẩu không giống nhau')</script>";
  } elseif (isset($_GET['registration']) && $_GET['registration'] == 2) {
    echo "<script>alert('Tạo tài khoản thành công')</script>";
  } elseif (isset($_GET['registration']) && $_GET['registration'] == 2) {
    echo "<script>alert('Email đã tồn tại')</script>";
  }
  // login
  if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo "<script>alert('Tài khoản không tồn tại')</script>";
  } elseif (isset($_GET['success']) && $_GET['success'] == 3) {
    echo "<script>alert('Đăng xuất thành công')</script>";
  }
  ?>

  <script>
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn");

    function register() {
      x.style.left = "-400px";
      y.style.left = "50px";
      z.style.left = "110px";
    }

    function login() {
      x.style.left = "50px";
      y.style.left = "450px";
      z.style.left = "0px";
    }
  </script>
  <!-- <script>
        var modal= document.getElementById('login-form');
        window.onclick=function(event)
        {
            if(event.target==modal)
            {
                modal.style.display="none";
            }
        }
    </script>*/ -->
</body>

</html>