  <?php $this->load->view('frontend/header_2'); ?>

  <!-- Start Bottom Header -->
  <div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2">Jadwal Kegiatan yang Akan Datang</h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3">Masjid Daerah Kota Bengkulu</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- END Header -->
  <div class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <!-- Start single blog -->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">

            <?php foreach($kegiatan->result() as $row){ ?>
            <!-- Start Left Blog -->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="#">
                    <img src="<?= base_url('assets/masjid/kegiatan/'.$row->foto) ?>" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="date-type">
                    <i class="fa fa-calendar"></i><?= date('d-M-Y H:i:s', strtotime($row->tgl_kegiatan)) ?>
                  </span><br>
                  <span class="date-type">
                    <i class="fa fa-map-marker"></i><?= $row->nama ?>
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="#"><?= $row->judul_kegiatan ?></a>
                  </h4>
                  <p><?= $row->keterangan ?></p>
                </div>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <?php } ?>

          </div>
        </div>

        <?php $this->load->view('frontend/sidebar'); ?>

      </div>
    </div>
  </div>

  <?php $this->load->view('frontend/footer_2'); ?>