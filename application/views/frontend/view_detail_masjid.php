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
                <h1 class="title2"><?= strtoupper($masjid->nama) ?></h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="1.5s" data-wow-delay="1s">
                <h2 class="title3">Tipologi : Masjid <?= ucfirst($masjid->tipologi) ?></h2>
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
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="single-blog">
            <div class="blog-text">
              <h4>
                <a href="#"><?= strtoupper($masjid->nama) ?></a>
              </h4>
              <p><?= strtoupper($masjid->alamat) ?></p>
            </div>
          </div>
          <table>
            <tbody>
            
              <tr>
                <th style="width:30%;">Luas Tanah</th>
                <th style="width: 1%;">:</th>
                <td><?= $masjid->luas_tanah ?> m<sup>2</sup></td>
              </tr>
                        
              <tr>
                <th>Luas Bangunan</th>
                <th>:</th>
                <td><?= $masjid->luas_bangunan ?> m<sup>2</sup></td>
              </tr>
                        
              <tr>
                <th>Tahun Berdiri</th>
                <th>:</th>
                <td><?= $masjid->tahun_berdiri ?></td>
              </tr>
                        
              <tr>
                <th>Daya Tampung Jamaah</th>
                <th>:</th>
                <td><?= $masjid->daya_tampung_jamaah ?></td>
              </tr>
                        
              <tr>
                <th valign="top">Fasilitas</th>
                <th valign="top">:</th>
                <td valign="top"><?= $masjid->fasilitas ?></td>
              </tr>
                        
              <tr>
                <th valign="top">Kegiatan</th>
                <th valign="top">:</th>
                <td valign="top"><?= $masjid->kegiatan ?></td>
              </tr>
                        
              <tr>
                <th>Jumlah Pengurus</th>
                <th>:</th>
                <td><?= $masjid->jumlah_pengurus ?></td>
              </tr>
                        
            </tbody>
          </table>
        </div>

        <!-- sidebar -->
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <!-- Start Map -->
            <div id="map" style="height: 500px; width: 100%"></div>
            <!-- End Map -->
        </div>
        <!-- End left sidebar -->
      </div>
    </div>
  </div>
  <!-- End Blog Area -->

  <!-- Start portfolio Area -->
  <div id="portfolio" class="about-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Galeri Masjid</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Start Portfolio -page -->
        <div class="awesome-project-1 fix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="awesome-menu ">
              <ul class="project-menu">
                <li>
                  <a href="#" class="active" data-filter="*">All</a>
                </li>
                <li>
                  <a href="#" data-filter=".Sampul">Foto Sampul</a>
                </li>
                <li>
                  <a href="#" data-filter=".Depan">Tampak Depan</a>
                </li>
                <li>
                  <a href="#" data-filter=".Dalam">Tampak Dalam</a>
                </li>
                <li>
                  <a href="#" data-filter=".Wudhu">Tempat Wudhu</a>
                </li>
                <li>
                  <a href="#" data-filter=".Lainnya">Lainnya</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="awesome-project-content">
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design Sampul">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?= base_url('assets/masjid/'.$masjid->foto) ?>" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?= base_url('ebusiness/img/portfolio/'.$masjid->foto) ?>">
                      <h4><?= "Foto Sampul" ?></h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php foreach($galeri->result() as $row){ ?>
          <div class="col-md-4 col-sm-4 col-xs-12 design <?= $row->tag ?>">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?= base_url('assets/masjid/'.$row->foto) ?>" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?= base_url('assets/masjid/'.$row->foto) ?>">
                      <h4><?= $row->keterangan ?></h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
          <!-- single-awesome-project end -->
        </div>
      </div>
    </div>
  </div>
  <!-- awesome-portfolio end -->

  <!-- Start Blog Area -->
  <div id="berita" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Kegiatan Masjid</h2>
            </div>
          </div>
        </div>
        <div class="row">

          <?php foreach($kegiatan->result() as $row){ ?>
          <!-- Start Left Blog -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="#">
                  <img src="<?= base_url('assets/masjid/kegiatan/'.$row->foto) ?>" alt="">
                </a>
              </div>
              <div class="blog-meta">
                <span class="date-type">
                  <i class="fa fa-calendar"></i><?= date('d-m-Y H:i:s', strtotime($row->tgl_kegiatan)) ?>
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
    </div>
  </div>
  <!-- End Blog -->

  <!-- Start Blog Area -->
  <div id="berita" class="about-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Keuangan Masjid</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Bulan</th>
                    <th>Pemasukan</th>
                    <th>Pengeluaran</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
              <?php $total_pemasukan=0; $total_pengeluaran=0; $i=0; $saldo[0] = 0;
              foreach($keuangan->result() as $row){ ?>
              <tr>
                  <td><a href="#"><?= $row->bulan; $i++; ?></a></td>
                  <td>Rp <?php echo $row->pemasukan; $total_pemasukan+=$row->pemasukan; ?></td>
                  <td>Rp <?php echo $row->pengeluaran; $total_pengeluaran+=$row->pengeluaran; ?></td>
                  <td>Rp <?php $sld=$row->pemasukan-$row->pengeluaran; echo $saldo[$i]=$saldo[$i-1]+$sld;?></td>
              </tr>
              <?php } ?>
              <tr>
                  <td><b>Total Saldo</b></td>
                  <td><b>Rp <?= $total_pemasukan ?></b></td>
                  <td><b>Rp <?= $total_pengeluaran ?></b></td>
                  <td><b>Rp <?= $total_pemasukan-$total_pengeluaran ?></b></td>
              </tr>
            </tbody>
          </table>
          <hr>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog -->

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

  <?php $this->load->view('frontend/footer_2'); ?>