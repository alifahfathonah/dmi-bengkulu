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
                                        <a href="<?= base_url('ustadz/pesan') ?>">Lihat Semua</a>
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
                                                    <?php $foto = $this->session->userdata('foto_user');
                                                    if(empty($foto)){ ?>
                                                    <img src="<?= base_url('assets/user/user.jpg') ?>" alt="" />
                                                    <?php }else{ ?>
                                                    <img src="<?= base_url('assets/user/'.$foto) ?>" alt="" />
                                                    <?php } ?>
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3><?= $this->session->userdata('nama_user') ?></h3>
                                                    <p><?= $this->session->userdata('level') ?></p>
                                                    <i class="fa fa-cog pull-right" data-toggle="modal" data-target="#myModalubahpassword"></i>
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
                                <li><a href="<?= base_url('ustadz') ?>">Manajemen Khutbah</a></li>
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
                        <li <?php if($menu=="berita") echo 'class="active"' ?>><a href="<?= base_url('ustadz') ?>"><i class="notika-icon notika-form"></i> Manajemen Khutbah</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->

    <div class="modal fade" id="myModalubahpassword" role="dialog">
        <div class="modal-dialog modals-default">
            <div class="modal-content">
                <form action="<?= base_url('ustadz/ubahpassword') ?>" method="post">  
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-example-wrap mg-t-30">
                            <div class="cmp-tb-hd cmp-int-hd">
                                <h2>Ubah Password</h2>
                            </div>
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="hrzn-fm">Nama</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <div class="nk-int-st">
                                                <input type="hidden" name="id_user" value="<?= $this->session->userdata('id_user') ?>">
                                                <input name="nama" type="text" class="form-control input-sm" placeholder="Ketik Nama" readonly="readonly" value="<?= $this->session->userdata('nama_user') ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int form-horizental">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="hrzn-fm">Password Baru</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <div class="nk-int-st">
                                                <input name="password" type="password" class="form-control input-sm" placeholder="password">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default">Simpan</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
