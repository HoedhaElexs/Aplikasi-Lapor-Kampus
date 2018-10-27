<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LAPEKAM</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/plugins/datatables.bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/plugins/animate.min.css"/>
  <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/logomi.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <!--<div class="opener-left-menu is-open">-->
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="" class="navbar-brand"> 
                 <b>LAPEKAM</b>
                </a>

              <ul class="nav navbar-nav search-nav">
                <li>
                   <div class="search">
                    <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                    <div class="form-group form-animate-text">
                      <input type="text" class="form-text" required>
                      <span class="bar"></span>
                      <label class="label-search">Type anywhere to <b>Search</b> </label>
                    </div>
                  </div>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span>Admin</span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="<?php echo base_url()?>assets/images/poltek.png" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="<?php echo site_url('login'); ?>"><span class="fa fa-power-off"></span> Log Out</a></li>
                     </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
  
          <!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="<?php echo base_url()?>left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>
                    <li class="ripple"><a href="<?php echo site_url('pengaduan'); ?>"><span class="fa fa-calendar-o"></span>Dashboard</a></li>
                    <li class="ripple"><a href="<?php echo site_url('home/datatable'); ?>"><span class="fa fa-calendar-o"></span>Pengaduan Masuk</a></li>
                    <li class="ripple"><a href="<?php echo site_url('home/cetak'); ?>"><span class="fa fa-calendar-o"></span>Cetak</a></li>
                    <li class="ripple"><a href="<?php echo site_url('pengaduan/tambah_user'); ?>"><span class="fa fa-envelope-o"></span>Tambah Pengguna</a></li>
                    <li class="ripple"><a href="<?php echo site_url('pengaduan/tambah'); ?>"><span class="fa fa-envelope-o"></span>Tambah Tujuan</a></li>
                    <li class="ripple"><a href="<?php echo site_url('home/datatable_user'); ?>"><span class="fa fa-envelope-o"></span>Data Pengguna</a></li>
                    <li class="ripple"><a href="<?php echo site_url('home/datatable_tujuan'); ?>"><span class="fa fa-envelope-o"></span>Data Tujuan</a></li>
                    
                    <!--<li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-file-code-o"></span> Tambah  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="forgotpass.html">Tambah Pengguna</a></li>
                        </ul>
                    </li>-->
                    
                </div>
            </div>
          <!-- end: Left Menu -->