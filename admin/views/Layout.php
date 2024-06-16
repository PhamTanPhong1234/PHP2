<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sony - Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->

    <link rel="stylesheet" href="http://localhost:3000/assets/admin/layout1/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/admin/layout1/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/admin/layout1/css/style.css">
    <link rel="stylesheet" href="../assets/admin/layout1/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../assets/admin/layout1/css/_all-skins.min.css">
    <link rel="shortcut icon" href="../assets/frontend/100/047/633/themes/517833/assets/favicon221b.png" type="image/x-icon" />
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- load file ckeditor.js vao day de hien thi editor o text area -->
    <script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header" style="background-color: black;">
            <!-- Logo -->
            <a href="index.php" class="logo" style="background-color: #000;">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini" style="background-color: #000;"><b><img src="../assets\upload\products\Mau_thiet_-ke_-logo_thuong_-hieu_sony.jpeg" width="50%" alt=""></b></span>
                <!-- logo for regular state and mobile devices -->
                <span href="index.php"  style="background-color: #000;" ><img src="../assets\upload\products\Mau_thiet_-ke_-logo_thuong_-hieu_sony.jpeg" alt="User" title="User" class="img-responsive" style="height: 60px;width: 200px;object-fit: cover;"></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" style="background-color: #000;">
     
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <!-- <span class="sr-only">Toggle navigation</span> -->
                </a>

                <div class="navbar-custom-menu" style="background-color: #000;">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu" style="list-style: none;" style="background-color: #000;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="../assets/admin/layout1/images/user2-160x160.jpg" class="user-image" alt="User Image">
                            </a>

                            <!-- Menu Footer-->

                    </ul>
                    </li>
                    </ul>
                </div>


            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar" style ="background-color:black;">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="../assets/admin/layout1/images/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Admin</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree" style="font-style: 30px;">
                    <li class="header">DANH MỤC
                    </li>
                    <li class="<?php echo $a2; ?>">
                        <a href="index.php?controller=categories">
                            <i class="fa fa-th mr-3"></i> <span>Danh mục sản phẩm</span>
                        </a>
                    </li>
                    <li class="<?php echo $a3; ?>">
                        <a href="index.php?controller=products">
                            <i class="fa fa-th mr-3"></i> <span>Sản phẩm</span>
                        </a>
                    </li>
                    <li class="<?php echo $a4; ?>">
                        <a href="index.php?controller=news">
                            <i class="fa fa-th mr-3"></i> <span>Tin tức</span>
                        </a>
                    </li>
                    <li class="<?php echo $a5; ?>">
                        <a href="index.php?controller=orders">
                            <i class="fa fa-th mr-3"></i> <span>Đơn hàng</span>
                        </a>
                    </li>
                    <li class="<?php echo $a7; ?>">
                        <a href="index.php?controller=users">
                            <i class="fa fa-code mr-3"></i> <span>Quản lý user</span>
                        </a>
                    </li>
                    <li class="<?php echo $a8; ?>">
                        <a href="index.php?controller=admins">
                            <i class="fa fa-code mr-3"></i> <span>Quản lý Admin</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?controller=login&action=logout">
                            <i class="fa fa-code mr-3"></i> <span>Đăng xuất</span>
                        </a>
                    </li>
                    <li>
                        <a href="/php2/index.php?controller=home&action=index">
                            <i class="fa fa-code mr-3"></i> <span>Quay về trang chủ</span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content">
                <?php echo $this->view; ?>

            </section>
        </div>
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="../assets/admin/layout1/js/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../assets/admin/layout1/js/jquery-ui.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../assets/admin/layout1/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../assets/admin/layout1/js/adminlte.min.js"></script>
</body>

</html>