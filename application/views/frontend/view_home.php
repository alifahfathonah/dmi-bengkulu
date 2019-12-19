  <?php $this->load->view('frontend/header'); ?>

  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <?php $i=1; foreach($slider->result() as $row){ ?>
        <img src="<?= base_url('assets/berita/'.$row->foto) ?>" alt="" title="#slider-direction-<?= $i++ ?>" />
        <?php } ?>
      </div>

      <?php $i=1; foreach($slider->result() as $row){ ?>
      <!-- direction 1 -->
      <div id="slider-direction-<?= $i++ ?>" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1"><?= $row->kategori ?> </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2"><?= $row->judul ?></h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="<?= base_url('welcome/bacafull/'.$row->id) ?>">Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>

    </div>
  </div>
  <!-- End Slider Area -->

  <!-- Start About area -->
  <div id="sejarah" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Sejarah</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
								  <img src="<?= base_url('assets/profil/'.$profil->sejarah_foto) ?>" alt="">
								</a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <?= $profil->sejarah_teks; ?>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->

  <!-- start pricing area -->
  <div id="visimisi" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Visi</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <div class="pri_table_list">
            <h3><span><?= $profil->visi ?></span></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End pricing table area -->

  <!-- Start Service area -->
  <div class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2>Misi</h2>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <div class="services-contents">

          <?php $i=1; foreach($misi->result() as $row){ ?>
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <h4><?= $i++ ?></h4>
                  <p><?= $row->misi ?></p>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
          
        </div>
      </div>
    </div>
  </div>
  <!-- End Service area -->

  <!-- start pricing area -->
  <div id="motto" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Motto</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <div class="pri_table_list">
            <h3><span><?= $profil->motto ?></span></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End pricing table area -->

  <!-- Start team Area -->
  <div id="kepengurusan" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Susunan Pengurus</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="team-top">

          <?php foreach($profil_pengurus->result() as $pengurus){ ?>

          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
									<img src="<?= base_url('assets/profil/team/'.$pengurus->foto) ?>" alt="">
								</a>
              </div>
              <div class="team-content text-center">
                <h4><?= $pengurus->nama ?></h4>
                <p><?= $pengurus->jabatan ?></p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <?php } ?>

        </div>
      </div>
    </div>
  </div>
  <!-- End Team Area -->

  <!-- Start Blog Area -->
  <div id="berita" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Berita Terbaru</h2>
            </div>
          </div>
        </div>
        <div class="row">

          <?php foreach($berita->result() as $row){ ?>
          <!-- Start Left Blog -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="berita-details.html">
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
                  <a href=""><?= $row->judul ?></a>
								</h4>
                <p>
                  <?= $row->isi."..." ?>
                </p>
              </div>
              <span>
									<a href="<?= base_url('welcome/bacafull/'.$row->id) ?>" class="ready-btn">Selengkapnya</a>
								</span>
            </div>
            <!-- Start single blog -->
          </div>
          <!-- End Left Blog-->
          <?php } ?>

        </div>
      </div>
    </div>
  </div>
  <!-- End Blog -->

  <!-- Start Suscrive Area -->
  <div class="suscribe-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
          <div class="suscribe-text text-center">
            <h3>Baca berita seputar dewan masjid indonesia</h3>
            <a class="sus-btn" href="<?= base_url('welcome/baca/berita') ?>">Lihat semua berita</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Suscrive Area -->

  <!-- Start contact Area -->
  <div id="hubungikami" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Hubungi Kami</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>
                  Telp: <?= $profil->telpon ?>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                  Alamat: <?= $profil->alamat ?>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                  Email: <?= $profil->email ?>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- Start Google Map -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- Start Map -->
            <div id="map" style="height: 500px; width: 100%"></div>
            <!-- End Map -->
          </div>
          <!-- End Google Map -->

          <!-- Start  contact -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form contact-form">
              <div id="sendmessage">Pesan anda telah terkirim. Terima Kasih!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Tuliskan email yang valid" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" data-rule="minlen:4" data-msg="Tuliskan subjek pesan" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Tuliskan pesan anda" placeholder="Pesan"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Kirim Pesan</button></div>
              </form>
            </div>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->

  <!-- Google Maps -->
  <script type="text/javascript">
      function initMap() {
          var map = new google.maps.Map(document.getElementById('map'), {
              zoom:10,
              maxZoom:20,
              minZoom:5,
              center: new google.maps.LatLng(<?php echo $profil->lat.', '.$profil->lng; ?>),
              mapTypeId: 'roadmap'
          });

          var icon="<?php echo base_url() ?>assets/mosque-pin.png";
          var myLatLng = new google.maps.LatLng(<?php echo $profil->lat.', '.$profil->lng; ?>);

          var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Sekretariat Dewan Masjid Indonesia (DMI) Kota Bengkulu',
            icon: icon
          });
      }
  </script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLtVi0H4w9mVTJbrShUo8P0AIsIRzOZ6c&language=en&callback=initMap" async defer></script>

  <?php $this->load->view('frontend/footer'); ?>