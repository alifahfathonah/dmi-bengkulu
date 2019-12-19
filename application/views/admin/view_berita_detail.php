<?php $this->load->view('admin/header'); ?>

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
										<h2>Manajemen Berita</h2>
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
                                <form action="<?= base_url('admin/simpanberita') ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-example-int form-horizental">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                    <label class="hrzn-fm">Judul</label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="nk-int-st">
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
                                                            <option <?php if(isset($berita) && $berita->kategori=='Jumat') echo 'selected' ?> value="Jumat">Khutbah Jumat</option>
                                                            <option <?php if(isset($berita) && $berita->kategori=='Fitri') echo 'selected' ?> value="Fitri">Khutbah Idul Fitri</option>
                                                            <option <?php if(isset($berita) && $berita->kategori=='Adha') echo 'selected' ?> value="Adha">Khutbah Idul Adha</option>
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
                                                        <div class="image-crop">
                                                            <img src="<?php if(isset($berita)) echo base_url('assets/berita/'.$berita->foto) ?>" alt="">
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mg-t-15">
                                                            <div class="preview-img-pro-ad">
                                                                <div class="maincrop-img">
                                                                    <div class="image-crp-int">
                                                                        <h4>Preview image</h4>
                                                                        <div class="img-preview img-preview-custom"></div>
                                                                    </div>
                                                                    <div class="image-crp-img">
                                                                        <p>Upload gambar untuk crop baru.</p>
                                                                        <div class="btn-group images-cropper-pro">
                                                                            <label title="Upload image file" for="inputImage" class="btn btn-primary img-cropper-cp">
                                                                                    <input type="file" accept="image/*" name="file" id="inputImage" class="hide"> Upload new image
                                                                                </label>
                                                                            <label title="Save image" id="download" class="btn btn-primary">Simpan</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="cp-img-anal">
                                                                    <div class="btn-group images-action-pro">
                                                                        <button class="btn btn-white" id="zoomIn" type="button">Zoom In</button>
                                                                        <button class="btn btn-white" id="zoomOut" type="button">Zoom Out</button>
                                                                        <button class="btn btn-white" id="rotateLeft" type="button">Rotate Left</button>
                                                                        <button class="btn btn-white" id="rotateRight" type="button">Rotate Right</button>
                                                                        <button class="btn btn-warning img-cropper-cp-t" id="setDrag" type="button">New crop</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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

<?php $this->load->view('admin/footer'); ?>