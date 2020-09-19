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
										<h2>Manajemen Pengguna</h2>
                                        <p>Selamat datang di <span class="bread-ntd">Website Dewan Masjid Indonesia</span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
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
                            <a href="#" class="pull-right btn btn-lg btn-success notika-btn-success" data-toggle="modal" data-target="#myModalone">Tambah Data</a>
                            <h2>Daftar Pengguna Sistem</h2>
                            <p>*Akun terdiri dari Admin dan Pengurus Masjid</p>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Foto</th>
                                        <th>Level</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; foreach($user->result() as $row){ ?>
                                    <tr>
                                        <td><?= $row->nama ?></td>
                                        <td><?= $row->email ?></td>
                                        <td><?php if(!empty($row->foto)){ ?>
                                            <img style="height: 100px" src="<?= base_url('assets/user/'.$row->foto) ?>">
                                            <?php }else{ echo "-"; } ?></td>
                                        <td><?= $row->level ?></td>
                                        <td><?php if($row->level!="admin"){ ?><span data-toggle="modal" data-target="#myModalfour<?= $i ?>">
                                            <a href="#" class="btn btn-sm btn-default" data-toggle="tooltip" title="Tambah Masjid"><i class="fa fa-plus"></i></a>
                                            </span><?php } ?>
                                            <span data-toggle="modal" data-target="#myModaltwo<?= $i ?>">
                                            <a href="#" class="btn btn-sm btn-default" data-toggle="tooltip" title="Ubah"><i class="fa fa-pencil"></i></a>
                                            </span>
                                            <span data-toggle="modal" data-target="#myModalthree<?= $i ?>">
                                            <a href="#" class="btn btn-sm btn-default" data-toggle="tooltip" title="Ubah Password"><i class="fa fa-cog"></i></a>
                                            </span>
                                            <a href="<?= base_url('admin/hapuspengguna/'.$row->id_user) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')" data-toggle="tooltip" title="Hapus"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php $i++; } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Foto</th>
                                        <th>Level</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        <div class="modal fade" id="myModalone" role="dialog">
                            <div class="modal-dialog modals-default">
                                <div class="modal-content">
                                    <form action="<?= base_url('admin/simpanpengguna') ?>" method="post" enctype="multipart/form-data">  
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-example-wrap mg-t-30">
                                                <div class="cmp-tb-hd cmp-int-hd">
                                                    <h2>Tambah Pengguna</h2>
                                                </div>
                                                <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Nama</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <input type="hidden" name="id_user" value="">
                                                                    <input name="nama" type="text" class="form-control input-sm" placeholder="Ketik Nama">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Email</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <input name="email" type="text" class="form-control input-sm" placeholder="Ketik Email">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Password</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <input name="password" type="password" class="form-control input-sm" placeholder="Password">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Level</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="nk-int-st bootstrap-select">
                                                                    <select name="level" class="selectpicker" placeholder="Ketik Tipologi">
                                                                        <option value="pengurus">Pengurus Masjid</option>
                                                                        <option value="ustadz">Ustadz</option>
                                                                        <option value="admin">Admin</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-example-int form-horizental mg-t-15">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Foto</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <input name="foto_pengguna" type="file" class="form-control input-sm" placeholder="Foto">
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

                        <?php $i=0; foreach($user->result() as $row){ ?>
                        <div class="modal fade" id="myModaltwo<?= $i++ ?>" role="dialog">
                            <div class="modal-dialog modals-default">
                                <div class="modal-content">
                                    <form action="<?= base_url('admin/simpanpengguna') ?>" method="post" enctype="multipart/form-data">  
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-example-wrap mg-t-30">
                                                <div class="cmp-tb-hd cmp-int-hd">
                                                    <h2>Ubah Data Pengguna</h2>
                                                </div>
                                                <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Nama</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <input type="hidden" name="id_user" value="<?= $row->id_user ?>">
                                                                    <input name="nama" type="text" class="form-control input-sm" placeholder="Ketik Nama" value="<?= $row->nama ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Email</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <input name="email" type="text" class="form-control input-sm" placeholder="Ketik Email" value="<?= $row->email ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Level</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="nk-int-st bootstrap-select">
                                                                    <select name="level" class="selectpicker" placeholder="Ketik Level">
                                                                        <option <?php if($row->level=="pengurus") echo 'selected' ?> value="pengurus">Pengurus Masjid</option>
                                                                        <option <?php if($row->level=="ustadz") echo 'selected' ?> value="ustadz">Ustadz</option>
                                                                        <option <?php if($row->level=="admin") echo 'selected' ?> value="admin">Admin</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-example-int form-horizental mg-t-15">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Foto</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <input name="foto_pengguna" type="file" class="form-control input-sm" placeholder="Foto">
                                                                </div>
                                                                <img style="height: 100px" src="<?= base_url('assets/user/'.$row->foto) ?>">
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
                        <?php } ?>

                        <?php $i=0; foreach($user->result() as $row){ ?>
                        <div class="modal fade" id="myModalthree<?= $i++ ?>" role="dialog">
                            <div class="modal-dialog modals-default">
                                <div class="modal-content">
                                    <form action="<?= base_url('admin/ubahpassword') ?>" method="post">  
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-example-wrap mg-t-30">
                                                <div class="cmp-tb-hd cmp-int-hd">
                                                    <h2>Ubah Password</h2>
                                                </div>
                                                <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Nama</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <input type="hidden" name="id_user" value="<?= $row->id_user ?>">
                                                                    <input name="nama" type="text" class="form-control input-sm" placeholder="Ketik Nama" readonly="readonly" value="<?= $row->nama ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Password Baru</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <input name="password" type="password" class="form-control input-sm" placeholder="password">
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
                        <?php } ?>

                        <?php $i=0; foreach($user->result() as $row){ 
                            if($row->level!="admin"){ ?>
                        <div class="modal fade" id="myModalfour<?= $i ?>" role="dialog">
                            <div class="modal-dialog modals-default">
                                <div class="modal-content">
                                    <form action="<?= base_url('admin/pengurustambahmasjid') ?>" method="post">  
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-example-wrap mg-t-30">
                                                <div class="cmp-tb-hd cmp-int-hd">
                                                    <h2>Tambah Masjid Pengurus</h2>
                                                </div>
                                                <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Nama</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <input type="hidden" name="id_user" value="<?= $row->id_user ?>">
                                                                    <input name="nama" type="text" class="form-control input-sm" placeholder="Ketik Nama" readonly="readonly" value="<?= $row->nama ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Masjid/Mushola</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="nk-int-st bootstrap-select">
                                                                    <select name="id_masjid" class="selectpicker" data-live-search="true" placeholder="Pilih Masjid">
                                                                        <?php foreach($masjid->result() as $baris){ ?>
                                                                        <option <?php if($row->id_masjid==$baris->id_masjid) echo 'selected' ?> value="<?= $baris->id_masjid ?>"><?= $baris->nama ?></option>
                                                                        <?php } ?>
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
                        <?php } $i++; } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->

<?php $this->load->view('admin/footer'); ?>