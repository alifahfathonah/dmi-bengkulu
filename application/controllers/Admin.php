<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('AdminModel');
		$this->load->library('session');

		if ($this->session->userdata('level') != 'admin' OR $this->session->userdata('dmi-bengkulu') == FALSE) {
			redirect(base_url("auth"));
		}
	}

	public function index()
	{
		$data['menu'] = 'dashboard';
		$data['profil'] = $this->AdminModel->get('tb_profil_dmi', 'lng, lat, total_web_dikunjungi')->row();
		$data['total_khutbah_berita'] = $this->AdminModel->getTotalKhutbahBerita();
		$data['total_masjid'] = $this->AdminModel->getTotalMasjid();
		$data['total_mushola'] = $this->AdminModel->getTotalMushola();
		$data['masjid'] = $this->AdminModel->get('tb_masjid', 'id_masjid, nama, tipologi, lng, lat');
		$data['post_terbaru'] = $this->AdminModel->getBeritaTerbaru(5);
		$this->load->view('admin/view_dashboard', $data);
	}

	public function profildmi()
	{
		$data['menu'] = 'profildmi';
		$data['profil'] = $this->AdminModel->get('tb_profil_dmi')->row();
		$data['misi'] = $this->AdminModel->get('tb_profil_misi');
		$data['pengurus'] = $this->AdminModel->get('tb_profil_pengurus');
		$this->load->view('admin/view_profildmi', $data);
	}

	public function simpanSejarahGambar(){
		$config['upload_path']   = './assets/profil/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']      = 5000;
        $this->load->library('upload', $config);
	    if ($this->upload->do_upload('sejarah_foto')){
	        $data['sejarah_foto'] = $this->upload->file_name;
			$where['id'] = 0;
			$profilBeforeUpdate = $this->AdminModel->getWhere('tb_profil_dmi', $where)->row();
			$fotolama='./assets/profil/'.$profilBeforeUpdate->sejarah_foto;
			$update=$this->AdminModel->update('tb_profil_dmi', $data, $where);
			if($update){
				unlink($fotolama);
				$this->session->set_flashdata('success', 'Berhasil mengubah gambar');
			}else{
				unlink('./assets/profil/'.$data['sejarah_foto']);
				$this->session->set_flashdata('error', 'Gagal mengubah gambar');
			}
	    }else{
	    	$this->session->set_flashdata('error', 'Gagal mengubah gambar. Pastikan kuran file maksimal foto 5MB dan berekstensi .jpg atau .png');
	    }
		redirect(base_url('admin/profildmi'));
	}

	public function simpanSejarahTeks(){
		$data['sejarah_teks'] = $this->input->post('sejarah_teks');
		$where['id'] = 0;
		$update=$this->AdminModel->update('tb_profil_dmi', $data, $where);
		if($update){
			$this->session->set_flashdata('success', 'Berhasil mengubah teks sejarah');
		}else{
			$this->session->set_flashdata('error', 'Gagal mengubah teks sejarah');
		}
		redirect(base_url('admin/profildmi'));
	}

	public function simpanVisiMotto(){
		$data['visi'] = $this->input->post('visi');
		$data['motto'] = $this->input->post('motto');
		$where['id'] = 0;
		$update=$this->AdminModel->update('tb_profil_dmi', $data, $where);
		if($update){
			$this->session->set_flashdata('success', 'Berhasil mengubah visi dan motto');
		}else{
			$this->session->set_flashdata('error', 'Gagal mengubah visi dan motto');
		}
		redirect(base_url('admin/profildmi#visi'));
	}

	public function simpanMisi(){
		$data['misi'] = $this->input->post('misi');

		$insert=$this->AdminModel->insert('tb_profil_misi', $data);
		if($insert){
			$this->session->set_flashdata('success', 'Berhasil menambah misi');
		}else{
			$this->session->set_flashdata('error', 'Gagal menambah misi');
		}
		redirect(base_url('admin/profildmi#misi'));
	}

	public function hapusMisi($id){
		$where['id'] = $id;
		$delete = $this->AdminModel->delete('tb_profil_misi', $where);
		if($delete){
			$this->session->set_flashdata('success', 'Berhasil menghapus');
		}else{
			$this->session->set_flashdata('error', 'Gagal menghapus');
		}
		redirect(base_url('admin/profildmi#misi'));
	}

	public function simpanPengurus(){
		$data['nama'] = $this->input->post('nama');
		$data['jabatan'] = $this->input->post('jabatan');

		$config['upload_path']   = './assets/profil/team/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']      = 2000;
        $this->load->library('upload', $config);
	    if ($this->upload->do_upload('foto_pengurus')){
	        $data['foto'] = $this->upload->file_name;
	        $insert=$this->AdminModel->insert('tb_profil_pengurus', $data);
			if($insert){
				$this->session->set_flashdata('success', 'Berhasil menambah pengurus');
			}else{
				unlink('./assets/profil/team/'.$data['foto']);
				$this->session->set_flashdata('error', 'Gagal menambah pengurus');
			}
	    }else{
	    	$this->session->set_flashdata('error', 'Gagal menambah pengurus. Pastikan kuran file maksimal foto 2MB dan berekstensi .jpg atau .png');
	    }
		redirect(base_url('admin/profildmi#pengurus'));
	}

	public function hapusPengurus($id){
		$where['id'] = $id;
		$pengurusBeforeUpdate = $this->AdminModel->getWhere('tb_profil_pengurus', $where)->row();
		$fotolama='./assets/profil/team/'.$pengurusBeforeUpdate->foto;
		$delete = $this->AdminModel->delete('tb_profil_pengurus', $where);
		if($delete){
			unlink($fotolama);
			$this->session->set_flashdata('success', 'Berhasil menghapus');
		}else{
			$this->session->set_flashdata('error', 'Gagal menghapus');
		}
		redirect(base_url('admin/profildmi#pengurus'));
	}

	public function simpanKontak(){
		$data['email'] = $this->input->post('email');
		$data['telpon'] = $this->input->post('telpon');
		$data['alamat'] = $this->input->post('alamat');
		$data['lat'] = $this->input->post('lat');
		$data['lng'] = $this->input->post('lng');
		$where['id'] = 0;
		$update=$this->AdminModel->update('tb_profil_dmi', $data, $where);
		if($update){
			$this->session->set_flashdata('success', 'Berhasil mengubah kontak');
		}else{
			$this->session->set_flashdata('error', 'Gagal mengubah kontak');
		}
		redirect(base_url('admin/profildmi#kontak'));
	}

	public function simpanLogo(){
		$config['upload_path']   = './assets/profil/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']      = 2000;
        $this->load->library('upload', $config);
	    if ($this->upload->do_upload('logo')){
	        $data['logo'] = $this->upload->file_name;
			$where['id'] = 0;
			$profilBeforeUpdate = $this->AdminModel->getWhere('tb_profil_dmi', $where)->row();
			$fotolama='./assets/profil/'.$profilBeforeUpdate->logo;
			$update=$this->AdminModel->update('tb_profil_dmi', $data, $where);;
			if($update){
				unlink($fotolama);
				$this->session->set_flashdata('success', 'Berhasil mengubah gambar');
			}else{
				unlink('./assets/profil/'.$data['logo']);
				$this->session->set_flashdata('error', 'Gagal mengubah gambar');
			}
	    }else{
	    	$this->session->set_flashdata('error', 'Gagal mengubah gambar. Pastikan kuran file maksimal foto 2MB dan berekstensi .jpg atau .png');
	    }
		redirect(base_url('admin/profildmi#kontak'));
	}

	public function masjid()
	{
		$data['menu'] = 'masjid';
		$data['masjid'] = $this->AdminModel->get('tb_masjid');
		$this->load->view('admin/view_masjid', $data);
	}

	public function detailMasjid($id_masjid=NULL)
	{
		$data['menu'] = 'masjid';
		$where['id_masjid'] = $id_masjid;
		$data['masjid'] = $this->AdminModel->getWhere('tb_masjid', $where)->row();
		$data['galeri'] = $this->AdminModel->getWhere('tb_galeri_masjid', $where);
		$data['kegiatan'] = $this->AdminModel->getWhere('tb_kegiatan_masjid', $where);
		$data['keuangan'] = $this->AdminModel->getWhere('tb_keuangan_masjid', $where);
		$this->load->view('admin/view_masjid_detail', $data);
	}

	public function simpanMasjid(){
		$id_masjid = $this->input->post('id_masjid');
		$data['nama'] = $this->input->post('nama');
		$data['tipologi'] = $this->input->post('tipologi');
		$data['tahun_berdiri'] = $this->input->post('tahun_berdiri');
		$data['kecamatan'] = $this->input->post('kecamatan');
		$data['alamat'] = $this->input->post('alamat');
		$data['luas_tanah'] = $this->input->post('luas_tanah');
		$data['luas_bangunan'] = $this->input->post('luas_bangunan');
		$data['daya_tampung_jamaah'] = $this->input->post('daya_tampung_jamaah');
		$data['jumlah_pengurus'] = $this->input->post('jumlah_pengurus');
		$data['lat'] = $this->input->post('lat');
		$data['lng'] = $this->input->post('lng');
		$data['fasilitas'] = $this->input->post('fasilitas');
		$data['kegiatan'] = $this->input->post('kegiatan');
		$data['deskripsi'] = $this->input->post('deskripsi');

		$config['upload_path']   = './assets/masjid/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']      = 5000;
        $this->load->library('upload', $config);
	    if ($this->upload->do_upload('foto_sampul')){
	        $data['foto']=$this->upload->file_name;
	        $uploadsucces=true;
	    }else{
	    	$uploadsucces=false;
	    }

	    if(empty($id_masjid)){
	    	$insert = $this->AdminModel->insert('tb_masjid', $data);
	    	if($insert){
	    		$this->session->set_flashdata('success', 'Berhasil tambah masjid');
	    	}else{
	    		$this->session->set_flashdata('error', 'Gagal tambah masjid');
	    	}
	    	redirect(base_url('admin/masjid'));

	    }else{
			$where['id_masjid'] = $id_masjid;
			$masjidBeforeUpdate = $this->AdminModel->getWhere('tb_masjid', $where)->row();
			$fotolama='./assets/masjid/'.$masjidBeforeUpdate->foto;
			$update = $this->AdminModel->update('tb_masjid', $data, $where);
			if($update){
				if($uploadsucces) unlink($fotolama);
				$this->session->set_flashdata('success', 'Berhasil mengubah masjid');
			}else{
				if($uploadsucces) unlink('./assets/masjid/'.$data['foto']);
				$this->session->set_flashdata('success', 'Berhasil mengubah masjid');
			}
	    	redirect(base_url('admin/detailMasjid/'.$id_masjid));
	    }

	}

	public function hapusMasjid($id_masjid){
		$where['id_masjid'] = $id_masjid;
		$masjidBeforeUpdate = $this->AdminModel->getWhere('tb_masjid', $where)->row();
		$fotolama='./assets/masjid/'.$masjidBeforeUpdate->foto;
		$delete = $this->AdminModel->delete('tb_masjid', $where);
		if($delete){
			unlink($fotolama);
			$this->session->set_flashdata('success', 'Berhasil menghapus');
		}else{
			$this->session->set_flashdata('error', 'Gagal menghapus');
		}
		redirect(base_url('admin/masjid'));
	}

	public function simpanGaleriMasjid(){
		$id_masjid = $this->input->post('id_masjid');
		$data['id_masjid'] = $id_masjid;
		$data['keterangan'] = $this->input->post('keterangan');
		$data['tag'] = $this->input->post('tag');

		$config['upload_path']   = './assets/masjid/galeri/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']      = 2000;
        $this->load->library('upload', $config);
	    if ($this->upload->do_upload('foto_galeri')){
	        $data['foto'] = $this->upload->file_name;
	        $insert=$this->AdminModel->insert('tb_galeri_masjid', $data);
			if($insert){
				$this->session->set_flashdata('success', 'Berhasil menambah galeri masjid');
			}else{
				unlink('./assets/masjid/galeri/'.$data['foto']);
				$this->session->set_flashdata('error', 'Gagal menambah galeri masjid');
			}
	    }else{
	    	$this->session->set_flashdata('error', 'Gagal menambah galeri. Pastikan kuran file maksimal foto 2MB dan berekstensi .jpg atau .png');
	    }
		redirect(base_url('admin/detailMasjid/'.$id_masjid));
	}

	public function hapusGaleriMasjid($id_masjid, $id){
		$where['id'] = $id;
		$galeriBeforeUpdate = $this->AdminModel->getWhere('tb_galeri_masjid', $where)->row();
		$fotolama='./assets/masjid/galeri/'.$galeriBeforeUpdate->foto;
		$delete = $this->AdminModel->delete('tb_galeri_masjid', $where);
		if($delete){
			unlink($fotolama);
			$this->session->set_flashdata('success', 'Berhasil menghapus');
		}else{
			$this->session->set_flashdata('error', 'Gagal menghapus');
		}
		redirect(base_url('admin/detailMasjid/'.$id_masjid));
	}

	public function simpanKegiatanMasjid(){
		$id_masjid = $this->input->post('id_masjid');
		$data['id_masjid'] = $id_masjid;
		$data['judul_kegiatan'] = $this->input->post('judul_kegiatan');
		$data['tgl_kegiatan'] = date('Y-m-d', strtotime($this->input->post('tgl_kegiatan')));
		$data['keterangan'] = $this->input->post('keterangan');
		$data['id_user_penulis'] = $this->session->userdata('id_user');

		$config['upload_path']   = './assets/masjid/kegiatan/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']      = 2000;
        $this->load->library('upload', $config);
	    if ($this->upload->do_upload('foto_kegiatan')){
	        $data['foto'] = $this->upload->file_name;
	        $uploadsucces = TRUE;
	    }else{
	    	$uploadsucces = FALSE;
	    	$this->session->set_flashdata('info', 'Gagal upload gambar. Pastikan ukuran file gambar maskimal 5MB dan file berekstensi .png/.jpg');
	    }

		$insert=$this->AdminModel->insert('tb_kegiatan_masjid', $data);
		if($insert){
			$this->session->set_flashdata('success', 'Berhasil menambah kegiatan masjid');
		}else{
			if($uploadsucces) unlink('./assets/masjid/kegiatan/'.$data['foto']);
			$this->session->set_flashdata('error', 'Gagal menambah kegiatan masjid');
		}
		redirect(base_url('admin/detailMasjid/'.$id_masjid));
	}

	public function hapusKegiatanMasjid($id_masjid, $id){
		$where['id'] = $id;
		$galeriBeforeUpdate = $this->AdminModel->getWhere('tb_kegiatan_masjid', $where)->row();
		$fotolama='./assets/masjid/kegiatan/'.$galeriBeforeUpdate->foto;
		$delete = $this->AdminModel->delete('tb_kegiatan_masjid', $where);
		if($delete){
			unlink($fotolama);
			$this->session->set_flashdata('success', 'Berhasil menghapus');
		}else{
			$this->session->set_flashdata('error', 'Gagal menghapus');
		}
		redirect(base_url('admin/detailMasjid/'.$id_masjid));
	}

	public function simpanKeuanganMasjid(){
		$id_masjid = $this->input->post('id_masjid');
		$data['id_masjid'] = $id_masjid;
		$data['jenis'] = $this->input->post('jenis');
		$data['tanggal'] = date('Y-m-d', strtotime($this->input->post('tanggal')));
		$data['jumlah_uang'] = $this->input->post('jumlah_uang');
		$data['keterangan'] = $this->input->post('keterangan');
		$data['id_user_pengurus'] = $this->session->userdata('id_user');

		$insert=$this->AdminModel->insert('tb_keuangan_masjid', $data);
		if($insert){
			$this->session->set_flashdata('success', 'Berhasil menambah keuangan masjid');
		}else{
			$this->session->set_flashdata('error', 'Gagal menambah keuangan masjid');
		}
		redirect(base_url('admin/detailMasjid/'.$id_masjid));
	}

	public function hapusKeuanganMasjid($id_masjid, $id){
		$where['id'] = $id;
		$delete = $this->AdminModel->delete('tb_keuangan_masjid', $where);
		if($delete){
			$this->session->set_flashdata('success', 'Berhasil menghapus');
		}else{
			$this->session->set_flashdata('error', 'Gagal menghapus');
		}
		redirect(base_url('admin/detailMasjid/'.$id_masjid));
	}

	public function berita()
	{
		$data['menu'] = 'berita';
		$data['berita'] = $this->AdminModel->getAllBerita();
		$this->load->view('admin/view_berita', $data);
	}

	public function detailBerita($id=NULL)
	{
		$data['menu'] = 'berita';
		$data['berita'] = $this->AdminModel->getWhere('tb_khutbah', array('id'=>$id))->row();
		$this->load->view('admin/view_berita_detail', $data);
	}

	public function simpanBerita(){
		$id = $this->input->post('id');
		$data['judul'] = $this->input->post('judul');
		$data['kategori'] = $this->input->post('kategori');
		$data['deskripsi_singkat'] = $this->input->post('deskripsi_singkat');
		$data['isi'] = $this->input->post('isi');
		$data['id_user_penulis'] = $this->session->userdata('id_user');

		$config['upload_path']   = './assets/berita/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']      = 5000;
        $this->load->library('upload', $config);
	    if ($this->upload->do_upload('foto')){
	        $data['foto'] = $this->upload->file_name;
	        $uploadsucces = TRUE;
	    }else{
	    	$uploadsucces = FALSE;
	    	$this->session->set_flashdata('info', 'Gagal upload gambar. Pastikan ukuran file gambar maskimal 5MB dan file berekstensi .png/.jpg');
	    }

	    if(empty($id)){
	    	$insert = $this->AdminModel->insert('tb_khutbah', $data);
	    	if($insert){
	    		$this->session->set_flashdata('success', 'Berhasil tambah berita');
	    	}else{
	    		if($uploadsucces) unlink('./assets/berita/'.$data['foto']);
	    		$this->session->set_flashdata('error', 'Gagal tambah berita');
	    	}
	    	redirect(base_url('admin/berita'));

	    }else{
			$where['id'] = $id;
			$beritaBeforeUpdate = $this->AdminModel->getWhere('tb_khutbah', $where)->row();
			$fotolama='./assets/berita/'.$beritaBeforeUpdate->foto;
			$update = $this->AdminModel->update('tb_khutbah', $data, $where);
			if($update){
				if($uploadsucces) unlink($fotolama);
				$this->session->set_flashdata('success', 'Berhasil mengubah berita');
			}else{
				if($uploadsucces) unlink('./assets/berita/'.$data['foto']);
				$this->session->set_flashdata('success', 'Berhasil mengubah berita');
			}
	    	redirect(base_url('admin/detailBerita/'.$id));

	    }
	}

	public function hapusBerita($id){
		$where['id'] = $id;
		$beritaBeforeUpdate = $this->AdminModel->getWhere('tb_khutbah', $where)->row();
		$fotolama='./assets/berita/'.$beritaBeforeUpdate->foto;
		$delete = $this->AdminModel->delete('tb_khutbah', $where);
		if($delete){
			unlink($fotolama);
			$this->session->set_flashdata('success', 'Berhasil menghapus');
		}else{
			$this->session->set_flashdata('error', 'Gagal menghapus');
		}
		redirect(base_url('admin/berita'));
	}

	public function pengguna()
	{
		$data['menu'] = 'pengguna';
		$data['user'] = $this->AdminModel->getAllPengguna();
		$data['masjid'] = $this->AdminModel->get('tb_masjid', 'id_masjid, nama');
		$this->load->view('admin/view_pengguna', $data);
	}

	public function simpanPengguna(){
		$id_user = $this->input->post('id_user');
		$data['nama'] = $this->input->post('nama');
		$data['email'] = $this->input->post('email');
		$data['level'] = $this->input->post('level');

		$config['upload_path']   = './assets/user/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']      = 2000;
        $this->load->library('upload', $config);
	    if ($this->upload->do_upload('foto_pengguna')){
	        $data['foto'] = $this->upload->file_name;
	        $uploadsucces = TRUE;
	    }else{
	    	$uploadsucces = FALSE;
	    	$this->session->set_flashdata('info', 'Gagal upload gambar. Pastikan ukuran file gambar maskimal 2MB dan file berekstensi .png/.jpg');
	    }

	    if(empty($id_user)){
			$data['password'] = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
			$insert=$this->AdminModel->insert('tb_user', $data);
			if($insert){
				$this->session->set_flashdata('success', 'Berhasil menambah pengguna');
			}else{
				if($uploadsucces) unlink('./assets/user/'.$data['foto']);
				$this->session->set_flashdata('error', 'Gagal menambah pengguna');
			}
		}else{
			$where['id_user'] = $id_user;
			$userBeforeUpdate = $this->AdminModel->getWhere('tb_user', $where)->row();
			$fotolama='./assets/user/'.$userBeforeUpdate->foto;
			$update = $this->AdminModel->update('tb_user', $data, $where);
			if($update){
				if($uploadsucces) unlink($fotolama);
				$this->session->set_flashdata('success', 'Berhasil mengubah pengguna');
			}else{
				if($uploadsucces) unlink('./assets/user/'.$data['foto']);
				$this->session->set_flashdata('error', 'Gagal mengubah pengguna');
			}
		}
		redirect(base_url('admin/pengguna'));
	}

	public function ubahPassword(){
		$data['password'] = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
		$where['id_user'] = $this->input->post('id_user');
		$update = $this->AdminModel->update('tb_user', $data, $where);
		if($update){
			$this->session->set_flashdata('success', 'Berhasil mengubah password');
		}else{
			$this->session->set_flashdata('error', 'Gagal mengubah password');
		}
		redirect(base_url('admin/pengguna'));
	}

	public function pengurusTambahMasjid(){
		$data['id_masjid'] = $this->input->post('id_masjid');
		$where['id_user_pengurus'] = $this->input->post('id_user');
		$check = $this->AdminModel->getWhere('tb_pengurus_masjid', $where);
		if($check->num_rows()==0){
			$data['id_user_pengurus'] = $this->input->post('id_user');
			$insert = $this->AdminModel->insert('tb_pengurus_masjid', $data);
			if($insert){
				$this->session->set_flashdata('success', 'Berhasil mengubah pengguna');
			}else{
				$this->session->set_flashdata('error', 'Gagal mengubah pengguna');
			}
		}else{
			$update = $this->AdminModel->update('tb_pengurus_masjid', $data, $where);
			if($update){
				$this->session->set_flashdata('success', 'Berhasil mengubah pengguna');
			}else{
				$this->session->set_flashdata('error', 'Gagal mengubah pengguna');
			}
		}
		redirect(base_url('admin/pengguna'));
	}

	public function hapusPengguna($id_user){
		$where['id_user'] = $id_user;
		$userBeforeUpdate = $this->AdminModel->getWhere('tb_user', $where)->row();
		$fotolama='./assets/user/'.$userBeforeUpdate->foto;
		$delete = $this->AdminModel->delete('tb_user', $where);
		if($delete){
			unlink($fotolama);
			$this->session->set_flashdata('success', 'Berhasil menghapus pengguna');
		}else{
			$this->session->set_flashdata('error', 'Gagal menghapus pengguna');
		}
		redirect(base_url('admin/pengguna'));
	}
}
