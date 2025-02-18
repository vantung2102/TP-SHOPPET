<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Theme Styles -->
    <link href="<?= load_css('connect.min') ?>" rel="stylesheet" />
    <link href="<?= load_css('admin') ?>" rel="stylesheet" />
</head>

<body>
    <div class="loader">
        <div class="spinner-grow text-primary" role="status">
            <span class="sr-only"></span>
        </div>
    </div>
    <div class="connect-container align-content-stretch d-flex flex-wrap">
        <div class="page-sidebar">
            <div class="logo-box">
                <a href="#" class="logo-text">TP&SHOPPET</a>
                <a href="#" id="sidebar-close">
                    <i class="material-icons">close</i>
                </a>
                <a href="#" id="sidebar-state">
                    <i class="material-icons">adjust</i>
                    <i class="material-icons compact-sidebar-icon">panorama_fish_eye</i>
                </a>
            </div>
            <div class="page-sidebar-inner slimscroll">
                <ul class="accordion-menu">
                    <li class="sidebar-title">BẢNG ĐIỀU KHIỂN</li>
                    <li class="active-page">
                        <a href="<?= base_url('admin/index') ?>" class="active">
                            <i class="material-icons-outlined">pets</i>THÚ CƯNG
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/product') ?>"><i class="material-icons-outlined">dashboard</i>SẢN
                            PHẨM</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/user') ?>"><i class="material-icons-outlined">account_circle</i>TÀI
                            KHOẢN
                            KHÁCH</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/order') ?>"><i class="material-icons-outlined">calendar_today</i>ĐƠN
                            HÀNG</a>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons">category</i>DANH MỤC</a>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-outlined">inbox</i>HỘP THƯ</a>
                    </li>

                    <li class="sidebar-title">GIAO DIỆN NGƯỜI DÙNG</li>
                    <li>
                        <a href="#"><i class="material-icons">text_format</i>PHÔNG CÁNH<i class="material-icons has-sub-menu">add</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="styles-typography.html">Kiểu chữ</a>
                            </li>
                            <li>
                                <a href="styles-code.html">Code</a>
                            </li>
                            <li>
                                <a href="styles-tables.html">Bảng</a>
                            </li>
                            <li>
                                <a href="styles-icons.html">Icon</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="material-icons">apps</i>Các thành phần<i class="material-icons has-sub-menu">add</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="ui-alerts.html">Cảnh báo</a>
                            </li>
                            <li>
                                <a href="ui-buttons.html">Nút bấm</a>
                            </li>
                            <li>
                                <a href="ui-pagination.html">Phân trang</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-title">MỤC KHÁC</li>
                    <li>
                        <a href=""><i class="material-icons">star_border</i>Trang<i class="material-icons has-sub-menu">add</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="404.html">404</a>
                            </li>
                            <li>
                                <a href="500.html">500</a>
                            </li>
                            <li>
                                <a href="sign-in.html">Đăng ký</a>
                            </li>
                            <li>
                                <a href="sign-up.html">Đăng nhập</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div class="page-container">
            <div class="page-header">
                <nav class="navbar navbar-expand">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <ul class="navbar-nav">
                        <li class="nav-item small-screens-sidebar-link">
                            <a href="#" class="nav-link"><i class="material-icons-outlined">menu</i></a>
                        </li>
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?= load_images('icon', 'shop.png') ?>" alt="profile image" />
                                <span>Thanh Tâm</span>
                                <i class="material-icons dropdown-icon">keyboard_arrow_down</i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Công việt hôm nay
                                    <span class="badge badge-pill badge-info float-right">2</span></a>
                                <a class="dropdown-item" href="#">Cài đặt</a>
                                <div class="dropdown-divider"></div>
                                <a href="<?= base_url('admin/logout') ?>" class="dropdown-item" href="#">Đăng xuất</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="material-icons-outlined">mail</i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="material-icons-outlined">notifications</i></a>
                        </li>
                    </ul>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link">Dự án</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Nhiệm vụ</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Báo cáo</a>
                            </li>
                        </ul>
                    </div>
                    <div class="navbar-search">
                        <form>
                            <div class="form-group">
                                <input type="text" name="search" id="nav-search" placeholder="Search..." />
                            </div>
                        </form>
                    </div>
                </nav>
            </div>

            <?= $NoiDung; ?>

            <?php
            // registration
            if (isset($_GET['registration']) && $_GET['registration'] == 1) {
                echo "<script>alert('Nhập mật khẩu không giống nhau')</script>";
            } elseif (isset($_GET['registration']) && $_GET['registration'] == 2) {
                echo "<script>alert('Tạo tài khoản thành công')</script>";
            } elseif (isset($_GET['registration']) && $_GET['registration'] == 3) {
                echo "<script>alert('Email đã tồn tại')</script>";
            } elseif (isset($_GET['registration']) && $_GET['registration'] == 4) {
                echo "<script>alert('Mật khẩu ít nhất 6 ký tự')</script>";
            }
            // login
            if (isset($_GET['success']) && $_GET['success'] == 1) {
                echo "<script>alert('Tài khoản không tồn tại')</script>";
            } elseif (isset($_GET['success']) && $_GET['success'] == 3) {
                echo "<script>alert('Đăng xuất thành công')</script>";
            }
            ?>
        </div>
    </div>

    <script src="<?= load_js('jquery-3.4.1.min') ?>"></script>
    <script src="<?= load_js('bootstrap.min') ?>"></script>
    <script src="<?= load_js('jquery.slimscroll.min') ?>"></script>
    <script src="<?= load_js('connect') ?>"></script>
    <script src="<?= load_js('main') ?>"></script>
</body>

</html>