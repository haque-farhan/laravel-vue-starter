<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Home</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/png" href="./img/slack.png"/>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
      <img src="./img/logo.png" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">Home</span>
    </a>
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./img/user.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
          </a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
            <router-link to="/profile" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt text-danger"></i>
                <p>
                Dashboard
                </p>
            </router-link>
            </li>
            <li class="nav-item">
            <a href="/logout" class="nav-link">
                <i class="nav-icon fa fa-power-off text-danger"></i>
                <p>
                Logout
                </p>
            </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
       <mainapp></mainapp>
</div>



  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Developed &copy; By <a href="">The bats</a>.</strong> All rights reserved.
  </footer>


<!-- ./wrapper -->

<script src="/js/app.js"></script>
</body>
</html>
