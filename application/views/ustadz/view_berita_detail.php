<?php $this->load->view('ustadz/header'); ?>

	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-windows"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Manajemen Khutbah</h2>
                                        <p>Selamat datang di <span class="bread-ntd">Website Dewan Masjid Indonesia</span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
                                    <a href="<?php if(isset($berita)) echo base_url('welcome/bacafull/'.$berita->id) ?>" target="_blank" data-toggle="tooltip" data-placement="left" title="Lihat Halaman Baca Berita" class="btn"><i class="notika-icon notika-next"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->

    <?php 
    $info=$this->session->flashdata('info');
    $success=$this->session->flashdata('success');
    $error=$this->session->flashdata('error');
    if(!empty($info)){ ?>
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
               notifyMe('inverse', 'Informasi!', '<?= $info ?>');
            }, false);
        </script>
    <?php } elseif(!empty($success)){ ?>
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
               notifyMe('info', 'Sukses!', '<?= $success ?>');
            }, false);
        </script>
    <?php } elseif(!empty($error)){ ?>
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
               notifyMe('danger', 'Terjadi Kesalahan!', '<?= $error ?>');
            }, false);
        </script>
    <?php } ?>

    <!-- Form Examples area start-->
    <div class="form-example-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd cmp-int-hd">
                            <h2>Data Berita</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <form action="<?= base_url('ustadz/simpanberita') ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-example-int form-horizental">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                    <label class="hrzn-fm">Judul</label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="nk-int-st">
                                                        <input type="hidden" name="id" value="<?php if(isset($berita)) echo $berita->id ?>">
                                                        <input name="judul" type="text" class="form-control input-sm" placeholder="Ketik Judul" value="<?php if(isset($berita)) echo $berita->judul ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-example-int form-horizental">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                    <label class="hrzn-fm">Kategori</label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="nk-int-st bootstrap-select">
                                                        <select name="kategori" class="selectpicker" placeholder="pilih Kategori">
                                                            <option <?php if(isset($berita) && $berita->kategori=='Berita') echo 'selected' ?> value="Berita">Berita</option>
                                                            <option <?php if(isset($berita) && $berita->kategori=='Tausiah') echo 'selected' ?> value="Tausiah">Materi Tausiah</option>
                                                            <option <?php if(isset($berita) && $berita->kategori=='Khutbah Jumat') echo 'selected' ?> value="Khutbah Jumat">Khutbah Jumat</option>
                                                            <option <?php if(isset($berita) && $berita->kategori=='Khutbah Idul Fitri') echo 'selected' ?> value="Fitri">Khutbah Idul Fitri</option>
                                                            <option <?php if(isset($berita) && $berita->kategori=='Khutbah Idul Adha') echo 'selected' ?> value="Khutbah Idul Adha">Khutbah Idul Adha</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-example-int form-horizental">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                    <label class="hrzn-fm">Deskripsi Singkat</label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="nk-int-st">
                                                        <textarea name="deskripsi_singkat" class="form-control auto-size" rows="5" placeholder="Tulis Isi"><?php if(isset($berita)) echo $berita->deskripsi_singkat ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-example-int form-horizental">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                    <label class="hrzn-fm">Isi</label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="nk-int-st">
                                                        <textarea name="isi" class="form-control summernote5 auto-size" rows="5" placeholder="Tulis Isi"><?php if(isset($berita)) echo $berita->isi ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-example-int form-horizental">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                    <label class="hrzn-fm">Foto Sampul</label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                    <div class="nk-int-st">
                                                        <input type="file" name="foto" class="form-control input-sm" placeholder="Upload file untuk ganti gambar">
                                                    </div>
                                                </div>
                                                <div class="col-lg-offset-2 col-md-offset-2 col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                    <br>
                                                    <img src="<?php if(isset($berita)) echo base_url('assets/berita/'.$berita->foto) ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-example-int mg-t-15">
                                        <div class="row">
                                            <div class="col-lg-offset-2 col-md-offset-2 col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                <br><br>
                                                <button type="sumbit" class="btn btn-lg btn-block btn-success notika-btn-success">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Examples area End-->

<?php $this->load->view('ustadz/footer'); ?>