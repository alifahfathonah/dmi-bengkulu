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
										<h2>Manajemen Masjid</h2>
                                        <p>Selamat datang di <span class="bread-ntd">Website Dewan Masjid Indonesia</span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
                                    <a href="<?= base_url('welcome/masjid') ?>" target="_blank" data-toggle="tooltip" data-placement="left" title="Lihat Halaman Masjid" class="btn"><i class="notika-icon notika-next"></i></a>
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
    
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <a href="<?= base_url('admin/detailmasjid') ?>" class="pull-right btn btn-lg btn-success notika-btn-success">Tambah Data</a>
                            <h2>Daftar Masjid dan Mushala di Kota Bengkulu</h2>
                            <p>*Data dari Kementrian Agama</p>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Tipologi</th>
                                        <th>Tahun Berdiri</th>
                                        <th>Kecamatan</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($masjid->result() as $row){ ?>
                                    <tr>
                                        <td><?= $row->nama ?></td>
                                        <td><?= $row->tipologi ?></td>
                                        <td><?= $row->tahun_berdiri ?></td>
                                        <td><?= $row->kecamatan ?></td>
                                        <td><?= $row->alamat ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/detailmasjid/'.$row->id_masjid) ?>" class="btn btn-sm btn-default" data-toggle="tooltip" title="Ubah"><i class="fa fa-pencil"></i></a>
                                            <a href="<?= base_url('admin/hapusmasjid/'.$row->id_masjid) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')" data-toggle="tooltip" title="Hapus"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Tipologi</th>
                                        <th>Tahun Berdiri</th>
                                        <th>Kecamatan</th>
                                        <th>Alamat</th>
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

<?php $this->load->view('admin/footer'); ?>