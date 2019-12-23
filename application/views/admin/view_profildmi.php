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
										<i class="notika-icon notika-edit"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Profil Dewan Masjid Indonesia</h2>
                                        <p>Selamat datang di <span class="bread-ntd">Website Dewan Masjid Indonesia</span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<a href="<?= base_url() ?>" target="_blank" data-toggle="tooltip" data-placement="left" title="Lihat Halaman Profil" class="btn"><i class="notika-icon notika-next"></i></a>
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

    <!-- Image Cropper area Start-->
    <div class="images-cropper-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <!-- <div class="image-cropper-wp">
                        <div class="row">
                        	<div class="col-lg-12">
                        		<h4>Gambar untuk sejarah</h4>
                        	</div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="image-crop">
                                    <img src="<?= base_url('assets/profil/'.$profil->sejarah_foto) ?>" alt="">
                                </div>
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
                    </div> -->

                    <img src="<?= base_url('assets/profil/'.$profil->sejarah_foto) ?>">
                    <form action="<?= base_url('admin/simpansejarahgambar') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-example-wrap">
                            <div class="cmp-tb-hd">
                                <h2>Gambar untuk Sejarah</h2>
                            </div>
                            <div class="form-example-int">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <input type="file" name="sejarah_foto" class="form-control input-sm" placeholder="Upload file untuk ganti gambar">
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int mg-t-15">
                                <button type="submit" class="btn btn-success notika-btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <form action="<?= base_url('admin/simpansejarahteks') ?>" method="post">
                        <div class="form-example-wrap">
                            <div class="cmp-tb-hd">
                                <h2>Teks untuk Sejarah</h2>
                            </div>
                            <div class="form-example-int">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <textarea name="sejarah_teks" class="form-control summernote4 auto-size" rows="2" ><?= $profil->sejarah_teks ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int mg-t-15">
                                <button type="submit" class="btn btn-success notika-btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Image Cropper area End-->

    <!-- Form Examples area start-->
    <div class="form-example-area mg-t-15" id="visi">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <form action="<?= base_url('admin/simpanvisimotto') ?>" method="post">
                        <div class="form-example-wrap">
                            <div class="cmp-tb-hd">
                                <h2>Visi</h2>
                            </div>
                            <div class="form-example-int">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <textarea name="visi" class="form-control auto-size" rows="3" placeholder="Ketik Visi"><?= $profil->visi ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-wrap">
                            <div class="cmp-tb-hd">
                                <h2>Motto</h2>
                            </div>
                            <div class="form-example-int">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <textarea name="motto" class="form-control auto-size" rows="3" placeholder="Ketik Motto"><?= $profil->motto ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int mg-t-15">
                                <button type="submit" class="btn btn-success notika-btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Examples area End-->

    <!-- Normal Table area Start-->
    <div class="normal-table-area" id="misi">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list mg-t-30">
                        <div class="basic-tb-hd">
                            <button class="pull-right btn btn-success notika-btn-success" data-toggle="modal" data-target="#myModaloneone">Tambah</button>
                            <h2>Misi</h2>
                            
                            <div class="modal fade" id="myModaloneone" role="dialog">
                                <div class="modal-dialog modals-default">
                                    <div class="modal-content">
                                        <form action="<?= base_url('admin/simpanmisi') ?>" method="post">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-example-wrap mg-t-30">
                                                    <div class="cmp-tb-hd cmp-int-hd">
                                                        <h2>Tambah Misi</h2>
                                                    </div>
                                                    <div class="form-example-int form-horizental">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                    <label class="hrzn-fm">Misi</label>
                                                                </div>
                                                                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
                                                                    <div class="nk-int-st">
                                                                        <textarea name="misi" class="form-control auto-size" rows="2" placeholder="Ketik Misi"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-default">Simpan</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bsc-tbl-st">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Misi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($misi->result() as $row){ ?>
                                    <tr>
                                        <td><?= $row->misi ?></td>
                                        <td><a href="<?= base_url('admin/hapusmisi/'.$row->id) ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')" data-toggle="tooltip" title="Hapus"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Normal Table area End-->

    <!-- Normal Table area Start-->
    <div class="normal-table-area" id="pengurus">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list mg-t-30">
                        <div class="basic-tb-hd">
                            <button class="pull-right btn btn-success notika-btn-success" data-toggle="modal" data-target="#myModalone">Tambah</button>
                            <h2>Data Pengurus</h2>
                            
                            <div class="modal fade" id="myModalone" role="dialog">
                                <div class="modal-dialog modals-default">
                                    <div class="modal-content">
                                        <form action="<?= base_url('admin/simpanpengurus') ?>" method="post" enctype="multipart/form-data">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
    						                    <div class="form-example-wrap mg-t-30">
    						                        <div class="cmp-tb-hd cmp-int-hd">
    						                            <h2>Tambah Pengurus</h2>
    						                        </div>
    						                        <div class="form-example-int form-horizental">
    						                            <div class="form-group">
    						                                <div class="row">
    						                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
    						                                        <label class="hrzn-fm">Nama</label>
    						                                    </div>
    						                                    <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
    						                                        <div class="nk-int-st">
    						                                            <input name="nama" type="text" class="form-control input-sm" placeholder="Ketik Nama">
    						                                        </div>
    						                                    </div>
    						                                </div>
    						                            </div>
    						                        </div>
    						                        <div class="form-example-int form-horizental mg-t-15">
    						                            <div class="form-group">
    						                                <div class="row">
    						                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
    						                                        <label class="hrzn-fm">Jabatan</label>
    						                                    </div>
    						                                    <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
    						                                        <div class="nk-int-st">
    						                                            <input name="jabatan" type="text" class="form-control input-sm" placeholder="Ketik Jabatan">
    						                                        </div>
    						                                    </div>
    						                                </div>
    						                            </div>
    						                        </div>
    						                        <div class="form-example-int form-horizental mg-t-15">
    						                            <div class="form-group">
    						                                <div class="row">
    						                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
    						                                        <label class="hrzn-fm">Foto</label>
    						                                    </div>
    						                                    <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
    						                                        <div class="nk-int-st">
    						                                            <input name="foto_pengurus" type="file" class="form-control input-sm">
    						                                        </div>
    						                                    </div>
    						                                </div>
    						                            </div>
    						                        </div>
    						                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-default">Simpan</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bsc-tbl-st">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php foreach($pengurus->result() as $row){ ?>
                                    <tr>
                                        <td><?= $row->nama ?></td>
                                        <td><?= $row->jabatan ?></td>
                                        <td><img style="height: 100px" src="<?= base_url('assets/profil/team/'.$row->foto) ?>"></td>
                                        <td><a href="<?= base_url('admin/hapuspengurus/'.$row->id) ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')" data-toggle="tooltip" title="Hapus"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                	<?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Normal Table area End-->

    <!-- Form Examples area start-->
    <div class="form-example-area mg-t-30" id="kontak">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd">
                            <h2>Kontak</h2>
                        </div>
                        <form action="<?= base_url('admin/simpankontak') ?>" method="post">
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Email</label>
                                    <div class="nk-int-st">
                                        <input name="email" type="text" class="form-control input-sm" placeholder="Ketik Email" value="<?= $profil->email ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Telpon</label>
                                    <div class="nk-int-st">
                                        <input name="telpon" type="number" class="form-control input-sm" placeholder="Ketik Telpon" value="<?= $profil->telpon ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <div class="nk-int-st">
                                        <textarea name="alamat" class="form-control auto-size" rows="2" placeholder="Tulis Alamat"><?= $profil->alamat ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Koordinat</label>
                                    <div class="row">
                                    <div class="col-lg-6">
                                    <div class="nk-int-st">
                                        <input name="lat" type="text" class="form-control input-sm" placeholder="Ketik Latitude" value="<?= $profil->lat ?>">
                                    </div>
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="nk-int-st">
                                        <input name="lng" type="text" class="form-control input-sm" placeholder="Ketik Longitude" value="<?= $profil->lng ?>">
                                    </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int">
                                <button type="submit" class="btn btn-success notika-btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <form action="<?= base_url('admin/simpanlogo') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-example-wrap">
                            <img style="height: 100px" src="<?= base_url('assets/profil/'.$profil->logo) ?>">
                            <br><br>
                            <div class="cmp-tb-hd">
                                <h2>Logo</h2>
                            </div>
                            <div class="form-example-int">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <input type="file" name="logo" class="form-control input-sm" placeholder="Upload file untuk ganti gambar">
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int mg-t-15">
                                <button type="submit" class="btn btn-success notika-btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Examples area End-->

<?php $this->load->view('admin/footer'); ?>