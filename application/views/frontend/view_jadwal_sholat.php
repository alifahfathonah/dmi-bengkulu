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
                <h1 class="title2">Jadwal Sholat Bulan Ini</h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3">Daerah Kota Bengkulu</h2>
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
            <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- single-blog start -->
              <p style="text-align: center;"><iframe src="https://www.jadwalsholat.org/adzan/monthly.php?id=38" width="430" height="940" frameborder="0"></iframe></p>
              <p style="text-align: center;">*Jadwal Sholat diambil dari <a href="https://www.jadwalsholat.org">jadwalsholat.org</a></p>
              <!-- single-blog end -->
            </div>
          </div>
        </div>

        <?php $this->load->view('frontend/sidebar'); ?>

      </div>
    </div>
  </div>

  <?php $this->load->view('frontend/footer_2'); ?>