
        <!-- left sidebar -->

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="page-head-blog">
            <div class="single-blog-page">
              <!-- search option start -->
              <form action="#">
                <div class="search-option">
                  <input type="text" placeholder="Search...">
                  <button class="button" type="submit">
                      <i class="fa fa-search"></i>
                  </button>
                </div>
              </form>
              <!-- search option end -->
            </div>
            <div class="single-blog-page">
              <div class="left-blog">
                <h4>Jadwal Sholat Hari Ini</h4>
                <!--start code Widget Jadwal Shalat wilayah (KOTA BENGKULU/BENGKULU) -->
                <p style="text-align: center;">
                  <iframe src="https://www.jadwalsholat.org/adzan/ajax.row.php?id=38" frameborder="0" width="220" height="220"></iframe>
                </p>
                <!--end code Widget Jadwal Shalat -->
              </div>
            </div>
            <div class="single-blog-page">
              <!-- recent start -->
              <div class="left-blog">
                <h4>post terbaru</h4>
                <div class="recent-post">

                  <!-- start single post -->
                  <?php foreach($post_terbaru->result() as $row){ ?>
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="<?= base_url('welcome/bacafull/'.$row->id) ?>">
                           <img src="<?= base_url('assets/berita/'.$row->foto) ?>" alt="">
                        </a>
                    </div>
                    <div class="pst-content">
                      <p><a href="<?= base_url('welcome/bacafull/'.$row->id) ?>"> <?= $row->judul ?>.</a></p>
                    </div>
                  </div>
                  <?php } ?>
                  <!-- End single post -->

                </div>
              </div>
              <!-- recent end -->
            </div>
            <div class="single-blog-page">
              <div class="left-blog">
                <h4>ARSIP</h4>
                <ul>
                  <?php foreach($arsip->result() as $row){ ?>
                  <li>
                    <a href="#"><?= $row->bulan ?></a>
                  </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- End left sidebar -->