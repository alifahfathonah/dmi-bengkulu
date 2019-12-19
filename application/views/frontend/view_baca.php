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
                <h1 class="title2"><?= strtoupper($kategori) ?></h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3">Sarana Publikasi dari DMI</h2>
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
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">

            <?php foreach($baca->result() as $row){ ?>
            <!-- Start single blog -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="<?= base_url('welcome/bacafull/'.$row->id) ?>">
										<img src="<?= base_url('assets/berita/'.$row->foto) ?>" alt="">
									</a>
                </div>
                <div class="blog-meta">
                  <span class="date-type">
											<i class="fa fa-calendar"></i><?= date('d-m-Y H:i:s', strtotime($row->tgl_dibuat)) ?>
										</span>
                </div>
              <div class="blog-text">
                <h4>
                  <a href="<?= base_url('welcome/bacafull/'.$row->id) ?>"><?= $row->judul ?></a>
                </h4>
                <p>
                  <?= $row->isi."..." ?>
                </p>
              </div>
              <span>
                  <a href="<?= base_url('welcome/bacafull/'.$row->id) ?>" class="ready-btn">Selengkapnya</a>
                </span>
              </div>
              <hr>
            </div>
            <!-- End single blog -->
            <?php } ?>

            <div class="blog-pagination text-center">
              <ul class="pagination">
                <li><a class="ready-btn" href="#">First</a></li>
                <li><a class="ready-btn" href="#">&lt;</a></li>
                <li class="active"><a class="ready-btn" href="#">1</a></li>
                <li><a class="ready-btn" href="#">2</a></li>
                <li><a class="ready-btn" href="#">3</a></li>
                <li><a class="ready-btn" href="#">&gt;</a></li>
                <li><a class="ready-btn" href="#">Last</a></li>
              </ul>
            </div>
          </div>
        </div>
        
        <?php $this->load->view('frontend/sidebar'); ?>

      </div>
    </div>
  </div>
  <!-- End Blog Area -->

  <?php $this->load->view('frontend/footer_2'); ?>