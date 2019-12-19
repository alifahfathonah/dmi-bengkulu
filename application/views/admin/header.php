<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard Admin | Dewan Masjid Indonesia</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <?php $logo=$this->db->select('logo')->get('tb_profil_dmi')->row()->logo; ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/profil/'.$logo) ?>">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/owl.theme.css">
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/animate.css">
    <!-- summernote CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/summernote/summernote.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/notika-custom-icon.css">
    <!-- bootstrap select CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/bootstrap-select/bootstrap-select.css">
    <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/datapicker/datepicker3.css">
    <!-- Data Table JS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/jquery.dataTables.min.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/wave/waves.min.css">
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/wave/button.css">
    <!-- notification CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/notification/notification.css">
    <!-- cropper CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/cropper/cropper.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('notika/') ?>style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?= base_url('notika/') ?>js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?= base_url('notika/') ?>http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <div class="logo-area">
                        <h1 class="visible-lg">Dewan Masjid Indonesia</h1>
                        <h1 class="hidden-lg">DMI</h1>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">

                            <!-- <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-mail"></i></span></a>
                                <div role="menu" class="dropdown-menu message-dd task-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>Pesan Masuk</h2>
                                    </div>
                                    <div class="hd-message-info">
                                        <?php for($i=0; $i<3; $i++){ ?>
                                        <a href="<?= base_url('notika/') ?>#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="<?= base_url('notika/') ?>img/post/1.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>David Belle</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <?php } ?>
                                    </div>
                                    <div class="hd-mg-va">
                                        <a href="<?= base_url('admin/pesan') ?>">Lihat Semua</a>
                                    </div>
                                </div>
                            </li>
 -->                            <li class="nav-item">
                                <a href="<?= base_url() ?>" target="_blank" class="nav-link"><span><i class="notika-icon notika-app"></i></span></a>
                                </li>
                                <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-menus"></i></span></a>
                                <div role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">
                                    <div class="hd-message-info">
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="<?= base_url('assets/user/'.$this->session->userdata('foto_user')) ?>" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3><?= $this->session->userdata('nama_user') ?></h3>
                                                    <p><?= $this->session->userdata('level') ?></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="hd-mg-va">
                                        <a href="<?= base_url('auth/logout') ?>">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                                <li><a href="<?= base_url('admin/profildmi') ?>">Profil DMI</a></li>
                                <li><a href="<?= base_url('admin/masjid') ?>">Manajemen Masjid</a></li>
                                <li><a href="<?= base_url('admin/berita') ?>">Manajemen Berita</a></li>
                                <li><a href="<?= base_url('admin/pengguna') ?>">Manajemen Pengguna</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li <?php if($menu=="dashboard") echo 'class="active"' ?>><a href="<?= base_url('admin') ?>"><i class="notika-icon notika-house"></i> Dashboard</a>
                        </li>
                        <li <?php if($menu=="profildmi") echo 'class="active"' ?>><a href="<?= base_url('admin/profildmi') ?>"><i class="notika-icon notika-edit"></i> Profil DMI</a>
                        </li>
                        <li <?php if($menu=="masjid") echo 'class="active"' ?>><a href="<?= base_url('admin/masjid') ?>"><i class="notika-icon notika-windows"></i> Manajemen Masjid</a>
                        </li>
                        <li <?php if($menu=="berita") echo 'class="active"' ?>><a href="<?= base_url('admin/berita') ?>"><i class="notika-icon notika-form"></i> Manajemen Berita</a>
                        </li>
                        <li <?php if($menu=="pengguna") echo 'class="active"' ?>><a href="<?= base_url('admin/pengguna') ?>"><i class="notika-icon notika-support"></i> Manajemen Pengguna</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->