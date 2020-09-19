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
                <h1 class="title2"><?= $baca->judul ?></h1>
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
        <!-- Start single blog -->
        <div class="col-md-8 col-sm-8 col-xs-12"  id="printableArea">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- single-blog start -->
              <article class="blog-post-wrapper">
                <div class="post-thumbnail">
                  <img src="<?= base_url('assets/berita/'.$baca->foto) ?>" alt="" />
                </div>
                <div class="post-information">
                  <h2><?= $baca->judul ?></h2>
                  <div class="entry-meta">
                    <span class="author-meta"><i class="fa fa-user"></i> <a href="#"><?= $baca->nama_penulis ?></a></span>
                    <span><i class="fa fa-clock-o"></i> <?= date('d-m-Y H:i:s', strtotime($baca->tgl_dibuat)) ?></span>
                    <a  href="#" onclick="printDiv('printableArea')" class="pull-right btn btn-default"><i class="fa fa-print"></i> Cetak</a>
                  </div>
                  <div class="entry-content">
                    <?= $baca->isi ?>
                  </div>
                </div>
              </article>
              <!-- single-blog end -->

            </div>
          </div>
        </div>

        <script type="text/javascript">
          function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
          }
        </script>

        <?php $this->load->view('frontend/sidebar'); ?>

      </div>
    </div>
  </div>

  <?php $this->load->view('frontend/footer_2'); ?>