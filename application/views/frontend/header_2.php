<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Dewan Masjid Indonesia - DMI</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?= base_url('ebusiness/img/'.$profil->logo) ?>" rel="icon">
  <link href="<?= base_url('ebusiness/') ?>img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?= base_url('ebusiness/') ?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?= base_url('ebusiness/') ?>lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="<?= base_url('ebusiness/') ?>lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="<?= base_url('ebusiness/') ?>lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="<?= base_url('ebusiness/') ?>lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url('ebusiness/') ?>lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?= base_url('ebusiness/') ?>lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="<?= base_url('ebusiness/') ?>css/nivo-slider-theme.css" rel="stylesheet">
  
  <!-- DataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">

  <!-- Main Stylesheet File -->
  <link href="<?= base_url('ebusiness/') ?>css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="<?= base_url('ebusiness/') ?>css/responsive.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="<?= base_url() ?>">
                  <h1 class="visible-lg">Dewan Masjid Indonesia</h1>
                  <h1 class="hidden-lg">DMI</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a href="<?= base_url() ?>">Profil DMI</a>
                  </li>
                  <li class="dropdown <?php if($menu=="masjid") echo 'active' ?>"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Masjid<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="<?= base_url('welcome/masjid/raya') ?>" >Masjid Raya</a></li>
                      <li><a href="<?= base_url('welcome/masjid/agung') ?>" >Masjid Agung</a></li>
                      <li><a href="<?= base_url('welcome/masjid/besar') ?>" >Masjid Besar</a></li>
                      <li><a href="<?= base_url('welcome/masjid/jami') ?>" >Masjid Jami</a></li>
                      <li><a href="<?= base_url('welcome/masjid/bersejarah') ?>" >Masjid Bersejarah</a></li>
                      <li><a href="<?= base_url('welcome/masjid/publik') ?>" >Masjid di Tempat Publik</a></li>
                      <li><a href="<?= base_url('welcome/mushola') ?>" >Mushola</a></li>
                    </ul> 
                  </li>
                  <li class="dropdown <?php if($menu=="berita") echo 'active' ?>"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Khutbah<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="<?= base_url('welcome/baca/berita') ?>" >Berita</a></li>
                      <li><a href="<?= base_url('welcome/baca/tausiah') ?>" >Tausiah</a></li>
                      <li><a href="<?= base_url('welcome/baca/jumat') ?>" >Khutbah Jumat</a></li>
                      <li><a href="<?= base_url('welcome/baca/fitri') ?>" >Khutbah Idul Fitri</a></li>
                      <li><a href="<?= base_url('welcome/baca/adha') ?>" >Khutbah Idul Adha</a></li>
                    </ul> 
                  </li>
                  <li class="<?php if($menu=="jadwalsholat") echo 'active' ?>">
                    <a href="<?= base_url('welcome/jadwalsholat') ?>">Jadwal Sholat</a>
                  </li>
                  <li>
                    <a href="<?= base_url('auth') ?>">Login</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->