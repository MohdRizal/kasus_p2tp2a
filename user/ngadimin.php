<?php
define('BASEPATH', true);
include '../config/config.php';
include '../core/insert.php';
include '../core/retrieve.php';
?>
<html>
    <head>

        <title>Sistem Pencatatan Kasus</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="../style/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../style/fa/css/font-awesome.min.css">
        <!-- Ionicons 
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../style/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link rel="stylesheet" href="../style/css/_all-skins.min.css">

    </head>
    <body class="hold-transition skin-purple sidebar-mini">

        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="#" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>DM</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>P2TP2A</b>Pekanbaru</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
            </nav>

        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Hallo, Admin!</p>
                        <!-- Status -->
                        <!--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
                    </div>
                </div>

                <!-- search form (Optional)
                <form action="#" method="get" class="sidebar-form">
                  <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                      <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                    </span>
                  </div>
                </form>
                <!-- /.search form -->
                `<form action="" method="get">
                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu">
                        <!--            <li class="header">HEADER</li>-->
                        <!-- Optionally, you can add icons to the links -->
                        <li><a href="?page=beranda"><i class="fa fa-home"></i> <span>Beranda</span></a></li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i> <span>Pegawai</span><i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="?form=pegawai">Isi data pegawai</a></li>
                                <li><a href="?page=pegawai">Lihat daftar pegawai</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i> <span>Kasus</span><i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="?form=kasus">Isi data kasus</a></li>
                                <li><a href="?view=kasus">Lihat data kasus</a></li>
                                <li><a href="?view=korban">Lihat daftar korban</a></li>
                                <li><a href="?view=pelaku">Lihat daftar pelaku</a></li>
                                <li><a href="?view=pelapor">Lihat data pelapor</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i> <span>Kasus</span><i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="?form=pegawai">Isi data kasus</a></li>
                                <li><a href="?view=kasus">Lihat data kasus</a></li>
                                <li><a href="?view=korban">Lihat daftar korban</a></li>
                                <li><a href="?view=pelaku">Lihat daftar pelaku</a></li>
                                <li><a href="?view=pelapor">Lihat data pelapor</a></li>
                            </ul>
                        </li>
                        <li><a href="?page=log-out"><i class="fa fa-android"></i> <span>Logout</span></a></li>

                    </ul><!-- /.sidebar-menu -->
                </form>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <?php
                    switch (@$_GET['page']) {
                        case "kasus" :
                            echo 'Isi data kasus';
                            break;
                        case "pegawai" :
                            echo 'Daftar pegawai';
                            break;
                    }
//                    switch (@$_GET['view']){
//                        case "pelapor" :
//                            include '../page/view/pelapor.php';
//                    }
                    switch (@$_GET['form']){
                        case "pegawai" :
                            echo 'Isi data pegawai';
                            break;
                    }
                    ?>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Examples</a></li>
                    <li class="active">Blank page</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <?php
                switch (@$_GET['page']) {
                    case "kasus" :
                        include '../page/view/jenis_kasus.php';
                        break;
                    case "pegawai" :
                        include '../page/view/pegawai.php';
                        break;
                    case "beranda" :
                        include '';
                        break;
                    case "intervensi" :
                        include '../page/form/intervensi.php';
                        break;
                    case "log-out" :
                        header("Location:../index.php");
                        break;
                }
                switch (@$_GET['view']){
                        case "pelapor" :
                            include '../page/view/pelapor.php';
                            break;
                    }
                switch (@$_GET['form']){
                        case "pegawai" :
                            include '../page/form/pegawai.php';
                            break;
                        case "kasus" :
                            include '../page/form/kasus.php';
                            break;
                    }
                ?>

            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
        <!-- REQUIRED JS SCRIPTS -->

        <!-- jQuery 2.1.4 -->
        <script src="../style/js/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="../style/js/bootstrap.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../style/js/app.min.js"></script>


    </body>

</html>
