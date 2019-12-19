
  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2>Website <span>DMI</span></h2>
                </div>
                <p>Ini adalah website resmi Dewan Masjid Indonesia dengan template dan desain baru. Anda dapat menemukan informasi lebih lanjut tentang Dewan Masjid Indonesia di website ini.<br>
                Kami akan selalu memperbarui website kami, termasuk informasi-informasinya dan kami terus berusaha mengembangkan website kami agar menjadi lebih baik.</p>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Kontak</h4>
                <p><?= $profil->alamat ?>.</p>
                <div class="footer-contacts">
                  <p><span>Telp:</span> <?= $profil->telpon ?></p>
                  <p><span>Email:</span> <?= $profil->email ?></p>
                </div>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Kerjasama</h4>
                <div class="flicker-img">
                  <a href="#"><img style="height: 100px" src="<?= base_url('ebusiness/') ?>img/partner/kemenag.png" alt=""></a>
                  <a href="#"><img style="height: 100px" src="<?= base_url('ebusiness/') ?>img/partner/unib.png" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; <?= date("Y") ?> Hak Cipta <strong>Dewan Masjid Indonesia - DMI</strong>.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?= base_url('ebusiness/') ?>lib/jquery/jquery.min.js"></script>
  <script src="<?= base_url('ebusiness/') ?>lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url('ebusiness/') ?>lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?= base_url('ebusiness/') ?>lib/venobox/venobox.min.js"></script>
  <script src="<?= base_url('ebusiness/') ?>lib/knob/jquery.knob.js"></script>
  <script src="<?= base_url('ebusiness/') ?>lib/wow/wow.min.js"></script>
  <script src="<?= base_url('ebusiness/') ?>lib/parallax/parallax.js"></script>
  <script src="<?= base_url('ebusiness/') ?>lib/easing/easing.min.js"></script>
  <script src="<?= base_url('ebusiness/') ?>lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="<?= base_url('ebusiness/') ?>lib/appear/jquery.appear.js"></script>
  <script src="<?= base_url('ebusiness/') ?>lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="<?= base_url('ebusiness/') ?>contactform/contactform.js"></script>

  <script src="<?= base_url('ebusiness/') ?>js/main.js"></script>
  
  <!-- DataTables -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
  
  <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
  </script>
  
</body>

</html>
