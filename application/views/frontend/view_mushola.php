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
                <h1 class="title2">DAFTAR MUSHOLA</h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="1.5s" data-wow-delay="1s">
                <!-- <h2 class="title3">PROVINSI BENGKULU</h2> -->
                <div class="subs-feilds">
                  <div class="suscribe-input">
                    <input type="email" class="email form-control width-90" id="sus_email" placeholder="NAMA MUSHOLA">
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
          <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tahun Berdiri</th>
                    <th>Jamaah</th>
                    <th>Pengurus</th>
                    <th>Fasilitas</th>
                    <th>Kegiatan</th>
                    <th>Lihat di peta</th>
                </tr>
            </thead>
            <tbody>
              <?php for($i=0; $i<10; $i++){ ?>
              <tr>
                  <td><a href="<?= base_url('welcome/detailmasjid/') ?>">Tiger Nixon</a></td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>61</td>
                  <td>2011/04/25</td>
                  <td>$320,800</td>
                  <td>2011/04/25</td>
                  <td>$320,800</td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->

  <?php $this->load->view('frontend/footer_2'); ?>