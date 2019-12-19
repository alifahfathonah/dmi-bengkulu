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
        <div class="col-md-8 col-sm-8 col-xs-12">
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
                    <a href="<?= base_url('welcome/downloadpdf/'.$baca->id) ?>" class="pull-right btn btn-default"><i class="fa fa-print"></i> Download PDF</a>
                  </div>
                  <div class="entry-content">
                    <?= $baca->isi ?>
                  </div>
                </div>
              </article>
              <div class="clear"></div>
              <div id="comments" class="single-post-comments">
                <div class="comments-area">
                  <div class="comments-heading">
                    <h3>6 comments</h3>
                  </div>
                  <div class="comments-list">
                    <ul>
                      <li>
                        <div class="comments-details">
                          <div class="comments-list-img">
                            <img src="<?= base_url('ebusiness/') ?>img/blog/b02.jpg" alt="post-author">
                          </div>
                          <div class="comments-content-wrap">
                            <span>
																<b><a href="#">demo</a></b>
																Post author
																<span class="post-time">October 6, 2014 at 4:25 pm</span>
                            <a href="#">Reply</a>
                            </span>
                            <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="comments-details">
                          <div class="comments-list-img">
                            <img src="<?= base_url('ebusiness/') ?>img/blog/b02.jpg" alt="post-author">
                          </div>
                          <div class="comments-content-wrap">
                            <span>
																<b><a href="#">admin</a></b>
																Post author
																<span class="post-time">October 6, 2014 at 6:18 pm </span>
                            <a href="#">Reply</a>
                            </span>
                            <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at justo dolor. Fusce ac sapien bibendum, scelerisque libero nec</p>
                          </div>
                        </div>
                      </li>
                      <li class="threaded-comments">
                        <div class="comments-details">
                          <div class="comments-list-img">
                            <img src="<?= base_url('ebusiness/') ?>img/blog/b02.jpg" alt="post-author">
                          </div>
                          <div class="comments-content-wrap">
                            <span>
																<b><a href="#">demo</a></b>
																Post author
																<span class="post-time">October 6, 2014 at 7:25 pm</span>
                            <a href="#">Reply</a>
                            </span>
                            <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="comment-respond">
                  <h3 class="comment-reply-title">Leave a Reply </h3>
                  <span class="email-notes">Your email address will not be published. Required fields are marked *</span>
                  <form action="#">
                    <div class="row">
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <p>Name *</p>
                        <input type="text" />
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <p>Email *</p>
                        <input type="email" />
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <p>Website</p>
                        <input type="text" />
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                        <p>Website</p>
                        <textarea id="message-box" cols="30" rows="10"></textarea>
                        <input type="submit" value="Post Comment" />
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- single-blog end -->

            </div>
          </div>
        </div>

        <?php $this->load->view('frontend/sidebar'); ?>

      </div>
    </div>
  </div>

  <?php $this->load->view('frontend/footer_2'); ?>