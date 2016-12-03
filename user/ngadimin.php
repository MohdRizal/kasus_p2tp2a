<?php
define('BASEPATH', true);
include '../config/config.php';
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
            <a href="index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>DM</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Admin</b>P2TP2A</span>
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
            <li class="active"><a href=""><i class="fa fa-ambulance"></i> <span>Lihat Pegawai</span></a></li>
            <li><a href="?page=kasus"><i class="fa fa-android"></i> <span>Isi Data Kasus</span></a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-dashboard"></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Link in level 2</a></li>
                <li><a href="#">Link in level 2</a></li>
              </ul>
            </li>
          </ul><!-- /.sidebar-menu -->
          </form>
        </section>
        <!-- /.sidebar -->
      </aside>

        <!-- REQUIRED JS SCRIPTS -->

        <!-- jQuery 2.1.4 -->
        <script src="../style/js/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="../style/js/bootstrap.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../style/js/app.min.js"></script>


    </body>

</html>
<?php
switch(@$_GET['page']){
    case "kasus" : 
        include '../page/form/kasus.php';
        break;
}
?>