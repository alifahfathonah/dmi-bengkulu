<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Administrator | Dewan Masjid Indonesia</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('notika/') ?>img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/owl.theme.css">
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/wave/waves.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('notika/') ?>css/notika-custom-icon.css">
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
    <!-- Login Register area Start-->
    <div class="login-content">
        <!-- Login -->
        <div class="nk-block toggled" id="l-login">
            <div class="nk-form">
                <form action="" method="post">
                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                    <div class="nk-int-st">
                        <input name="email" type="text" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                    <div class="nk-int-st">
                        <input name="password" type="password" class="form-control" placeholder="Kata kunci">
                    </div>
                </div>
                <div class="fm-checkbox">
                    <label><input type="checkbox" class="i-checks"> <i></i> Biarkan saya tetap masuk di perangkat ini</label>
                </div>
                <button type="submit" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></button>
                </form>
            </div>

            <div class="nk-navigation nk-lg-ic">
                <!-- <a href="<?= base_url() ?>" data-ma-action="nk-login-switch" data-ma-block="#l-register"><i class="notika-icon notika-plus-symbol"></i> <span>Beranda</span></a> -->
                <a href="<?= base_url() ?>" data-ma-block="#l-register"><i class="notika-icon notika-close"></i> <span>Beranda</span></a>
                <a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Lupa Kata Kunci</span></a>
            </div>
        </div>

        <!-- Register -->
        <!-- <div class="nk-block" id="l-register">
            <div class="nk-form">
                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                    <div class="nk-int-st">
                        <input type="text" class="form-control" placeholder="Nama Pengguna">
                    </div>
                </div>

                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-mail"></i></span>
                    <div class="nk-int-st">
                        <input type="text" class="form-control" placeholder="Alamat Email">
                    </div>
                </div>

                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                    <div class="nk-int-st">
                        <input type="password" class="form-control" placeholder="Kata Kunci">
                    </div>
                </div>

                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                    <div class="nk-int-st">
                        <input type="password2" class="form-control" placeholder="Ketik Ulang Kata Kunci">
                    </div>
                </div>

                <a href="<?= base_url('notika/') ?>#l-login" data-ma-action="nk-login-switch" data-ma-block="#l-login" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow"></i></a>
            </div>

            <div class="nk-navigation rg-ic-stl">
                <a href="<?= base_url('notika/') ?>#" data-ma-action="nk-login-switch" data-ma-block="#l-login"><i class="notika-icon notika-right-arrow"></i> <span>Masuk</span></a>
                <a href="<?= base_url('notika/') ?>" data-ma-action="nk-login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Lupa Kata Kunci</span></a>
            </div>
        </div> -->

        <!-- Forgot Password -->
        <div class="nk-block" id="l-forget-password">
            <div class="nk-form">
                <p class="text-left">Silahkan isi email anda yang pernah digunakan. Link pembuatan password baru akan di kirim lewat email tersebut.</p>

                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-mail"></i></span>
                    <div class="nk-int-st">
                        <input type="text" class="form-control" placeholder="Alamat Email">
                    </div>
                </div>

                <a href="<?= base_url('notika/') ?>#l-login" data-ma-action="nk-login-switch" data-ma-block="#l-login" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow"></i></a>
            </div>

            <div class="nk-navigation nk-lg-ic rg-ic-stl">
                <a href="<?= base_url('notika/') ?>" data-ma-action="nk-login-switch" data-ma-block="#l-login"><i class="notika-icon notika-right-arrow"></i> <span>Masuk</span></a>
                <!-- <a href="<?= base_url('notika/') ?>" data-ma-action="nk-login-switch" data-ma-block="#l-register"><i class="notika-icon notika-plus-symbol"></i> <span>Daftar</span></a> -->
            </div>
        </div>
    </div>
    <!-- Login Register area End-->
    <!-- jquery
		============================================ -->
    <script src="<?= base_url('notika/') ?>js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?= base_url('notika/') ?>js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?= base_url('notika/') ?>js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?= base_url('notika/') ?>js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?= base_url('notika/') ?>js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?= base_url('notika/') ?>js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?= base_url('notika/') ?>js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="<?= base_url('notika/') ?>js/counterup/jquery.counterup.min.js"></script>
    <script src="<?= base_url('notika/') ?>js/counterup/waypoints.min.js"></script>
    <script src="<?= base_url('notika/') ?>js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?= base_url('notika/') ?>js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?= base_url('notika/') ?>js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= base_url('notika/') ?>js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="<?= base_url('notika/') ?>js/flot/jquery.flot.js"></script>
    <script src="<?= base_url('notika/') ?>js/flot/jquery.flot.resize.js"></script>
    <script src="<?= base_url('notika/') ?>js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="<?= base_url('notika/') ?>js/knob/jquery.knob.js"></script>
    <script src="<?= base_url('notika/') ?>js/knob/jquery.appear.js"></script>
    <script src="<?= base_url('notika/') ?>js/knob/knob-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="<?= base_url('notika/') ?>js/chat/jquery.chat.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="<?= base_url('notika/') ?>js/wave/waves.min.js"></script>
    <script src="<?= base_url('notika/') ?>js/wave/wave-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="<?= base_url('notika/') ?>js/icheck/icheck.min.js"></script>
    <script src="<?= base_url('notika/') ?>js/icheck/icheck-active.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="<?= base_url('notika/') ?>js/todo/jquery.todo.js"></script>
    <!-- Login JS
		============================================ -->
    <script src="<?= base_url('notika/') ?>js/login/login-action.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?= base_url('notika/') ?>js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?= base_url('notika/') ?>js/main.js"></script>
</body>

</html>