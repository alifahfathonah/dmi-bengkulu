<?php $this->load->view('pengurus/header'); ?>

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
										<h2>Manajemen Masjid</h2>
                                        <p>Selamat datang di <span class="bread-ntd">Website Dewan Masjid Indonesia</span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
                                    <a href="<?php if(isset($masjid)) echo base_url('welcome/detailmasjid/'.$masjid->id_masjid) ?>" target="_blank" data-toggle="tooltip" data-placement="left" title="Lihat Halaman Detail Masjid" class="btn"><i class="notika-icon notika-next"></i></a>
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
                <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd cmp-int-hd">
                            <h2>Data Masjid</h2>
                        </div>
                        <div class="row">
                            <form action="<?= base_url('pengurus/simpanmasjid') ?>" method="post" enctype="multipart/form-data">
                                <div class="col-lg-6">
                                    <div class="form-example-int form-horizental">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                    <label class="hrzn-fm">Nama</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="nk-int-st">
                                                        <input name="id_masjid" type="hidden" value="<?php if(isset($masjid)) echo $masjid->id_masjid; ?>"/>
                                                        <input name="nama" type="text" class="form-control input-sm" placeholder="Ketik Nama" value="<?php if(isset($masjid)) echo $masjid->nama ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-example-int form-horizental">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                    <label class="hrzn-fm">Tipologi</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="nk-int-st bootstrap-select">
                                                        <select name="tipologi" class="selectpicker" placeholder="Pilih Tipologi">
                                                            <option <?php if(isset($masjid) && $masjid->tipologi=='Raya') echo 'selected' ?> value="Raya">Masjid Raya</option>
                                                            <option <?php if(isset($masjid) && $masjid->tipologi=='Agung') echo 'selected' ?> value="Agung">Masjid Agung</option>
                                                            <option <?php if(isset($masjid) && $masjid->tipologi=='Besar') echo 'selected' ?> value="Besar">Masjid Besar</option>
                                                            <option <?php if(isset($masjid) && $masjid->tipologi=='Jami') echo 'selected' ?> value="Jami">Masjid Jami</option>
                                                            <option <?php if(isset($masjid) && $masjid->tipologi=='Bersejarah') echo 'selected' ?> value="Bersejarah">Masjid Bersejarah</option>
                                                            <option <?php if(isset($masjid) && $masjid->tipologi=='Publik') echo 'selected' ?> value="Publik">Masjid di Tempat Publik</option>
                                                            <option <?php if(isset($masjid) && $masjid->tipologi=='Mushola') echo 'selected' ?> value="Mushola">Mushola</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-example-int form-horizental">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                    <label class="hrzn-fm">Tahun Berdiri</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="nk-int-st">
                                                        <input name="tahun_berdiri" type="number" class="form-control input-sm" placeholder="Ketik Tahun Berdiri" value="<?php if(isset($masjid)) echo $masjid->tahun_berdiri ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-example-int form-horizental">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                    <label class="hrzn-fm">Kecamatan</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="nk-int-st bootstrap-select">
                                                        <select name="kecamatan" class="selectpicker" placeholder="Pilih Kecamatan">
                                                            <option <?php if(isset($masjid) && $masjid->kecamatan=='Gading Cempaka') echo 'selected' ?> value="Gading Cempaka">Gading Cempaka</option>
                                                            <option <?php if(isset($masjid) && $masjid->kecamatan=='Kampung Melayu') echo 'selected' ?> value="Kampung Melayu">Kampung Melayu</option>
                                                            <option <?php if(isset($masjid) && $masjid->kecamatan=='Muara Bangka Hulu') echo 'selected' ?> value="Muara Bangka Hulu">Muara Bangka Hulu</option>
                                                            <option <?php if(isset($masjid) && $masjid->kecamatan=='Ratu Agung') echo 'selected' ?> value="Ratu Agung">Ratu Agung</option>
                                                            <option <?php if(isset($masjid) && $masjid->kecamatan=='Ratu Samban') echo 'selected' ?> value="Ratu Samban">Ratu Samban</option>
                                                            <option <?php if(isset($masjid) && $masjid->kecamatan=='Selebar') echo 'selected' ?> value="Selebar">Selebar</option>
                                                            <option <?php if(isset($masjid) && $masjid->kecamatan=='Singaran Pati') echo 'selected' ?> value="Singaran Pati">Singaran Pati</option>
                                                            <option <?php if(isset($masjid) && $masjid->kecamatan=='Sungai Serut') echo 'selected' ?> value="Sungai Serut">Sungai Serut</option>
                                                            <option <?php if(isset($masjid) && $masjid->kecamatan=='Teluk Segara') echo 'selected' ?> value="Teluk Segara">Teluk Segara</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-example-int form-horizental">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                    <label class="hrzn-fm">Alamat</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="nk-int-st">
                                                        <textarea name="alamat" class="form-control auto-size" rows="2" placeholder="Tulis Alamat"><?php if(isset($masjid)) echo $masjid->alamat ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-example-int form-horizental">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                    <label class="hrzn-fm">Luas Tanah (m<sup>2</sup>)</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="nk-int-st">
                                                        <input name="luas_tanah" step="0.1" type="number" class="form-control input-sm" placeholder="Ketik Luas Tanah" value="<?php if(isset($masjid)) echo $masjid->luas_tanah ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-example-int form-horizental">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                    <label class="hrzn-fm">Luas Bangunan (m<sup>2</sup>)</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="nk-int-st">
                                                        <input name="luas_bangunan" step="0.1" type="number" class="form-control input-sm" placeholder="Ketik Luas Bangunan" value="<?php if(isset($masjid)) echo $masjid->luas_bangunan ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-example-int form-horizental">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                    <label class="hrzn-fm">Daya Tampung Jamaah</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="nk-int-st">
                                                        <input name="daya_tampung_jamaah" type="number" class="form-control input-sm" placeholder="Ketik Daya Tampung Jamaah" value="<?php if(isset($masjid)) echo $masjid->daya_tampung_jamaah ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-example-int form-horizental">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                    <label class="hrzn-fm">Jumlah Pengurus</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="nk-int-st">
                                                        <input name="jumlah_pengurus" type="number" class="form-control input-sm" placeholder="Ketik Jumlah Pengurus" value="<?php if(isset($masjid)) echo $masjid->jumlah_pengurus ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-example-int form-horizental">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                    <label class="hrzn-fm">Koordinat</label>
                                                </div>
                                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                                    <div class="nk-int-st">
                                                        <input name="lat" type="text" class="form-control input-sm" placeholder="Ketik Latitude -3.xxxx" value="<?php if(isset($masjid)) echo $masjid->lat ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                                    <div class="nk-int-st">
                                                        <input name="lng" type="text" class="form-control input-sm" placeholder="Ketik Longitude 102.xxxx" value="<?php if(isset($masjid)) echo $masjid->lng ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-example-int form-horizental">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                    <label class="hrzn-fm">Foto Sampul</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="nk-int-st">
                                                        <input name="foto_sampul" type="file" class="form-control input-sm" placeholder="Upload Foto Sampul Masjid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="<?php if(isset($masjid)) echo base_url('assets/masjid/'.$masjid->foto) ?>">
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-example-int form-horizental">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                    <label class="hrzn-fm">Fasilitas</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="nk-int-st">
                                                        <textarea name="fasilitas" class="form-control auto-size" rows="3" placeholder="Tulis Fasilitas"><?php if(isset($masjid)) echo $masjid->fasilitas ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-example-int form-horizental">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                    <label class="hrzn-fm">Kegiatan</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="nk-int-st">
                                                        <textarea name="kegiatan" class="form-control auto-size" rows="5" placeholder="Tulis Kegiatan"><?php if(isset($masjid)) echo $masjid->kegiatan ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-example-int form-horizental">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                    <label class="hrzn-fm">Deskripsi</label>
                                                </div>
                                            </div>
                                            <div class="row mg-t-15">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="nk-int-st">
                                                        <textarea name="deskripsi" class="form-control summernote4 auto-size" rows="2" placeholder="Tulis Deskripsi"><?php if(isset($masjid)) echo $masjid->deskripsi ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-example-int mg-t-15">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            </div>
                                                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                                                <button type="submit" class="btn btn-success notika-btn-success">Submit</button>
                                            </div>
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
    <!-- Form Examples area End-->

    <?php if(isset($masjid)){ ?>

    <!-- Color area Start-->
    <div class="colr-area mg-t-30" id="galeri">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="color-wrap">
                        <div class="color-hd">
                            <a href="#" class="pull-right btn btn-lg btn-success notika-btn-success" data-toggle="modal" data-target="#myModalone">Tambah Data</a>
                            <h2>Galeri Masjid</h2>
                            <p>These colors are inspired by bold color statements juxtaposed with muted environments.</p>
                        </div>
                        <div class="row">
                            <?php foreach($galeri->result() as $row){ ?>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <img src="<?= base_url('assets/masjid/galeri/'.$row->foto) ?>" alt="">
                                <br><br>
                                <a href="<?= base_url('pengurus/hapusgalerimasjid/'.$row->id) ?>" class="pull-right btn btn-danger notika-btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus <i class="fa fa-trash"></i></a>
                                <h5><?= $row->keterangan ?></h5>
                                <p><?= $row->tag ?></p>
                                <br>
                            </div>
                            <?php } ?>


                            <div class="modal fade" id="myModalone" role="dialog">
                                <div class="modal-dialog modals-default">
                                    <div class="modal-content">
                                        <form action="<?= base_url('pengurus/simpangalerimasjid') ?>" method="post" enctype="multipart/form-data">  
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-example-wrap mg-t-30">
                                                    <div class="cmp-tb-hd cmp-int-hd">
                                                        <h2>Tambah Galeri</h2>
                                                    </div>
                                                    <div class="form-example-int form-horizental mg-t-15">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                    <label class="hrzn-fm">Foto</label>
                                                                </div>
                                                                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
                                                                    <div class="nk-int-st">
                                                                        <input type="hidden" name="id_masjid" value="<?= $masjid->id_masjid ?>">
                                                                        <input name="foto_galeri" type="file" class="form-control input-sm" placeholder="Foto">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-example-int form-horizental">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                    <label class="hrzn-fm">Keterangan</label>
                                                                </div>
                                                                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
                                                                    <div class="nk-int-st">
                                                                        <textarea name="keterangan" class="form-control auto-size" rows="2" placeholder="Tulis Keterangan"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-example-int form-horizental">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                    <label class="hrzn-fm">Tag</label>
                                                                </div>
                                                                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
                                                                    <div class="nk-int-st bootstrap-select">
                                                                        <select name="tag" class="selectpicker" placeholder="Ketik Tipologi">
                                                                            <option value="Depan">Tampak Depan</option>
                                                                            <option value="Dalam">Tampak Dalam</option>
                                                                            <option value="Wudhu">Tempat Wudhu</option>
                                                                            <option value="Lainnya">Lainnya</option>
                                                                        </select>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Color area End-->

    <!-- Data Table area Start-->
    <div class="data-table-area mg-t-30" id="kegiatan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <a href="#" class="pull-right btn btn-lg btn-success notika-btn-success" data-toggle="modal" data-target="#myModaltwo">Tambah Data</a>
                            <h2>Kegiatan Masjid</h2>
                            <p>*Pemasukan dan Pengeluaran</p>
                            <div class="modal fade" id="myModaltwo" role="dialog">
                                <div class="modal-dialog modals-default">
                                    <div class="modal-content">
                                        <form action="<?= base_url('pengurus/simpankegiatanmasjid') ?>" method="post" enctype="multipart/form-data">  
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-example-wrap mg-t-30">
                                                    <div class="cmp-tb-hd cmp-int-hd">
                                                        <h2>Tambah Kegiatan</h2>
                                                    </div>
                                                    <div class="form-example-int form-horizental">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                    <label class="hrzn-fm">Judul Kegiatan</label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                    <div class="nk-int-st">
                                                                        <input type="hidden" name="id_masjid" value="<?= $masjid->id_masjid ?>">
                                                                        <input name="judul_kegiatan" type="text" class="form-control input-sm" placeholder="Ketik Judul">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-example-int form-horizental" >
                                                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                    <label class="hrzn-fm">Tanggal Kegiatan</label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12" >
                                                                    <div class="input-group date nk-int-st">
                                                                        <span class="input-group-addon"></span>
                                                                        <input name="tgl_kegiatan" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="form-example-int form-horizental">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                    <label class="hrzn-fm">Keterangan</label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                    <div class="nk-int-st">
                                                                        <textarea name="keterangan" class="form-control auto-size" rows="2" placeholder="Tulis Keterangan"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-example-int form-horizental mg-t-15">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                    <label class="hrzn-fm">Foto Kegiatan</label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                    <div class="nk-int-st">
                                                                        <input name="foto_kegiatan" type="file" class="form-control input-sm" placeholder="Dokumentasi">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-default">Save changes</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Judul Kegiatan</th>
                                        <th>Tanggal</th>
                                        <th>Keterangan</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($kegiatan->result() as $row){ ?>
                                    <tr>
                                        <td><?= $row->judul_kegiatan ?></td>
                                        <td><?= date('d-M-Y', strtotime($row->tgl_kegiatan)) ?></td>
                                        <td><?= $row->keterangan ?></td>
                                        <td><img style="height: 100px" src="<?= base_url('assets/masjid/kegiatan/'.$row->foto) ?>"></td>
                                        <td>
                                            <a href="<?= base_url('pengurus/hapuskegiatanmasjid/'.$row->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')" data-toggle="tooltip" title="Hapus"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Judul Kegiatan</th>
                                        <th>Tanggal</th>
                                        <th>Keterangan</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->

    <!-- Data Table area Start-->
    <div class="data-table-area mg-t-30" id="keuangan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <a href="#" class="pull-right btn btn-lg btn-success notika-btn-success" data-toggle="modal" data-target="#myModalthree">Tambah Data</a>
                            <h2>Keuangan Masjid</h2>
                            <p>*Pemasukan dan Pengeluaran</p>
                            <div class="modal fade" id="myModalthree" role="dialog">
                                <div class="modal-dialog modals-default">
                                    <div class="modal-content">
                                        <form action="<?= base_url('pengurus/simpankeuanganmasjid') ?>" method="post">  
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-example-wrap mg-t-30">
                                                    <div class="cmp-tb-hd cmp-int-hd">
                                                        <h2>Tambah Laporan Keuangan</h2>
                                                    </div>
                                                    <div class="form-example-int form-horizental" >
                                                                        <input type="hidden" name="id_masjid" value="<?= $masjid->id_masjid ?>">
                                                        <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                                                    <label class="hrzn-fm">Tanggal</label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12" >
                                                                    <div class="input-group date nk-int-st">
                                                                        <span class="input-group-addon"></span>
                                                                        <input name="tanggal" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="form-example-int form-horizental">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                                                    <label class="hrzn-fm">Jenis</label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                                                                    <div class="nk-int-st bootstrap-select">
                                                                        <select name="jenis" class="selectpicker" placeholder="Ketik Tipologi">
                                                                            <option value="Pemasukan">Pemasukan</option>
                                                                            <option value="Pengeluaran">Pengeluaran</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-example-int form-horizental">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                                                    <label class="hrzn-fm">Jumlah Uang</label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                                                                    <div class="nk-int-st">
                                                                        <input name="jumlah_uang" type="number" class="form-control input-sm" placeholder="Tulis Jumlah Uang">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-example-int form-horizental">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                                                    <label class="hrzn-fm">Keterangan</label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                                                                    <div class="nk-int-st">
                                                                        <textarea name="keterangan" class="form-control auto-size" rows="2" placeholder="Tulis Keterangan"></textarea>
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
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Jenis</th>
                                        <th>Jumlah Uang</th>
                                        <th>Keterangan</th>
                                        <th>Saldo</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $saldo=0; foreach($keuangan->result() as $row){ ?>
                                    <tr>
                                        <td><?= date('d-M-Y', strtotime($row->tanggal)) ?></td>
                                        <td><?= $row->jenis ?></td>
                                        <td><?= $row->jumlah_uang ?></td>
                                        <td><?= $row->keterangan ?></td>
                                        <td><?php   if($row->jenis=="Pemasukan"){ $saldo+=$row->jumlah_uang; }
                                                    else{ $saldo-=$row->jumlah_uang; }
                                                    echo $saldo; ?></td>
                                        <td>
                                            <a href="<?= base_url('pengurus/hapuskeuanganmasjid/'.$row->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')" data-toggle="tooltip" title="Hapus"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Jenis</th>
                                        <th>Jumlah Uang</th>
                                        <th>Keterangan</th>
                                        <th>Saldo</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->

    <?php } ?>

<?php $this->load->view('pengurus/footer'); ?>