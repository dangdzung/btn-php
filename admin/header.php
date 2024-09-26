<?php 
ob_start();
session_start();
include'../connect.php';
if(empty($_SESSION['admin_login'])){
    header('location: login.php');
}

$admin = $_SESSION['admin_login'];

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Blank Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="plugins/summernote/summernote.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <script src="https://kit.fontawesome.com/533aad8d01.js" crossorigin="anonymous"></script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header header-h">
            <!-- Logo -->
            <div class="header-img"><img src="./dist/img/logo-btl.jpg" alt=""></div>
            <div class="header-input">
                <i class="fa-solid fa-magnifying-glass"></i><input type="text" name="" placeholder="Tìm kiếm">
            </div>
            <div class="header-icon">
                <ul>
                    <li><i class="fa-solid fa-comments"></i></li>
                    <li><i class="fa-regular fa-envelope"></i></li>
                    <li><i class="fa-regular fa-bell"></i></li>
                </ul>
            </div>

        </header>
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->

                <hr>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li>
                        <a href="index.php">
                            <i class="fa fa-home"></i> <span>Quản lý nội dung</span> <i
                                class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="subject.php"><i class="fa fa-circle-o"></i>Khóa học</a></li>
                            <li><a href="teacher.php"><i class="fa fa-circle-o"></i>Giảng viên</a></li>
                            <li><a href="category-create.php"><i class="fa fa-circle-o"></i>Ngành</a></li>
                            <li><a href="category-create.php"><i class="fa fa-circle-o"></i>Thư viện</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-th"></i> <span>Quản lý tài khoản</span> <i
                                class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="account.php"><i class="fa fa-circle-o"></i>Tài khoản</a></li>
                            <li><a href="account-group.php"><i class="fa fa-circle-o"></i>Nhóm tài khoản</a></li>
                            <li><a href="role-decentralization.php"><i class="fa fa-circle-o"></i>Vai trò và phân
                                    quyền</a>
                            </li>
                            <li><a href="manager-notifi.php"><i class="fa fa-circle-o"></i>Quản lý thông báo</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-th"></i> <span>Quản lý đơn hàng</span> <i
                                class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="list-account.php"><i class="fa fa-circle-o"></i> Danh sách đơn hàng</a></li>
                            <li><a href="manager-cod.php"><i class="fa fa-circle-o"></i>Quản lý COD</a></li>
                            <li><a href="edit-cod.php"><i class="fa fa-circle-o"></i>Xử lý COD</a></li>
                            <li><a href="call-customer.php"><i class="fa fa-circle-o"></i>Liên hệ khách hàng</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user"></i> <span>Thống kê</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="statistics.php"><i class="fa fa-circle-o"></i>Thống kê chung</a></li>
                            <li><a href="course.php"><i class="fa fa-circle-o"></i>Khóa học</a></li>
                        </ul>
                    </li>
                    <?php $queryCountOd = $conn->query("SELECT id from orders where status = 0");
                    $countId = $queryCountOd->num_rows;
                    ?>
                    <hr>
                    <button class="btn btn-success mt-3">Đăng xuất</button>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>