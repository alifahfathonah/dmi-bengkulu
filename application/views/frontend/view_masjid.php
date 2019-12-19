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
                <h1 class="title2">DAFTAR MASJID <?= strtoupper($tipologi) ?></h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="1.5s" data-wow-delay="1s">
                <!-- <h2 class="title3">PROVINSI BENGKULU</h2> -->
                <div class="subs-feilds">
                  <div class="suscribe-input">
                    <input type="email" class="email form-control width-90" id="sus_email" placeholder="NAMA MASJID">
                    <button type="submit" id="sus_submit" class="add-btn width-10">Cari</button>
                    <div id="msg_Submit" class="h3 text-center hidden"></div>
                  </div>
                </div>
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
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="row">
            
            <?php foreach($masjid->result() as $row){ ?>
            <!-- Start single blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="#">
                      <img src="<?= base_url('assets/masjid/'.$row->foto) ?>" alt="">
                    </a>
                </div>
                <div class="blog-meta">
                </div>
                <div class="blog-text">
                  <h4>
                      <a href="#"><?= $row->nama ?></a>
                    </h4>
                  <p>
                    <b>Alamat :</b> <?= $row->alamat ?>.
                  </p>
                </div>
                <span>
                    <a href="<?= base_url('welcome/detailmasjid/'.$row->id_masjid) ?>" class="ready-btn">Selengkapnya</a>
                  </span>
              </div>
            </div>
            <!-- End single blog -->
            <?php } ?>

          </div>
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
    </div>
  </div>

  <?php $this->load->view('frontend/footer_2'); ?>