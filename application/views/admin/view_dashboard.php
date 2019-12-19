<?php $this->load->view('admin/header'); ?>

    <!-- Breadcomb area Start-->
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Hi <?= $this->session->userdata('nama_user') ?></h2>
                                        <p>Selamat datang di <span class="bread-ntd">Website Dewan Masjid Indonesia</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcomb area End-->

    <?php 
    $info=$this->session->flashdata('info');
    $success=$this->session->flashdata('success');
    $error=$this->session->flashdata('error');
    if(!empty($info)){ ?>
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
               notifyMe('inverse', 'Informasi!', '<?= $info ?>');
            }, false);
        </script>
    <?php } elseif(!empty($success)){ ?>
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
               notifyMe('info', 'Sukses!', '<?= $success ?>');
            }, false);
        </script>
    <?php } elseif(!empty($error)){ ?>
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
               notifyMe('danger', 'Terjadi Kesalahan!', '<?= $error ?>');
            }, false);
        </script>
    <?php } ?>
    
    <!-- Start Status area -->
    <div class="notika-status-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?= $profil->total_web_dikunjungi ?></span></h2>
                            <p>Total Website Dikunjungi</p>
                        </div>
                        <div class="sparkline-bar-stats1">9,4,8,6,5,6,4,8,3,5,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?= $total_khutbah_berita ?></span></h2>
                            <p>Total Khutbah & Berita</p>
                        </div>
                        <div class="sparkline-bar-stats1">9,4,8,6,5,6,4,8,3,5,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?= $total_masjid ?></span></h2>
                            <p>Total Masjid Terdaftar</p>
                        </div>
                        <div class="sparkline-bar-stats1">9,4,8,6,5,6,4,8,3,5,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?= $total_mushola ?></span></h2>
                            <p>Total Mushola Terdaftar</p>
                        </div>
                        <div class="sparkline-bar-stats1">9,4,8,6,5,6,4,8,3,5,9,5</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Status area-->

    <!-- Start Email Statistic area-->
    <div class="notika-email-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="realtime-wrap notika-shadow mg-t-30">
                        <div class="realtime-ctn">
                            <div class="realtime-title">
                                <h2>Peta Masjid Kota Bengkulu</h2>
                            </div>
                        </div>
                        <div class="realtime-map">
                            <!-- Map -->
                            <div id="map" style="height: 500px; "></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="realtime-wrap notika-shadow mg-t-30">
                        <div class="recent-post-ctn">
                            <div class="recent-post-title">
                                <h2>Posting Terbaru</h2>
                            </div>
                        </div>
                        <div class="recent-post-items">
                            <?php foreach($post_terbaru->result() as $row){ ?>
                            <div class="recent-post-signle">
                                <a target="_blank" href="<?= base_url('welcome/bacafull/'.$row->id) ?>">
                                    <div class="recent-post-flex rct-pt-mg">
                                        <div class="recent-post-img">
                                            <img style="height: 40px; width: 160px;" src="<?= base_url('assets/berita/'.$row->foto) ?>" alt="" />
                                        </div>
                                        <div class="recent-post-it-ctn">
                                            <h2><?= $row->judul ?></h2>
                                            <p><?= $row->isi ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php } ?>
                            <div class="recent-post-signle">
                                <a href="#">
                                    <div class="recent-post-flex rc-ps-vw">
                                        <div class="recent-post-line rct-pt-mg">
                                            <p><a target="_blank" href="<?= base_url('welcome/baca/berita') ?>">Lihat Semua</a></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Email Statistic area-->

    <!-- Google Maps -->
    <script type="text/javascript">
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoomControl:!0,
                zoom:10,
                maxZoom:20,
                minZoom:5,
                scrollwheel:!1,
                mapMaker:!0,
                center: new google.maps.LatLng(<?php echo $profil->lat.', '.$profil->lng; ?>),
                mapTypeId: 'roadmap'
            });

            var icon="<?php echo base_url() ?>assets/mosque-pin.png";

            <?php if($masjid->num_rows()>0){ ?>

            var features = [
                <?php foreach($masjid->result() as $baris){?>
                {
                    position: new google.maps.LatLng(<?php echo $baris->lat ?>, <?php echo $baris->lng ?>),
                    animation:google.maps.Animation.DROP,
                    id_masjid:"<?php echo $baris->id_masjid ?>",
                    nama:"<?php echo $baris->nama ?>"
                },
                <?php } ?>
            ];

            // Create markers.
            features.forEach(function(feature) {
                var contentString =
                        '<div class="card" style="width:250px">'+
                            '<div class="card-header bg-default">'+
                                '<strong class="card-title text-light"><a href="<?php echo base_url() ?>welcome/detailmasjid/'+feature.id_masjid+'" target="_blank">'+feature.nama+
                                '</a></strong>'+
                            '</div>'+
                        '</div>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                var marker = new google.maps.Marker({
                    position: feature.position,
                    icon: icon,
                    map: map
                });

                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });
            });

            <?php } ?>
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLtVi0H4w9mVTJbrShUo8P0AIsIRzOZ6c&language=en&callback=initMap" async defer></script>

<?php $this->load->view('admin/footer'); ?>