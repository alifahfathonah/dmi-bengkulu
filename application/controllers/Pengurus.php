<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengurus extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PengurusModel');
		$this->load->library('session');

		if ($this->session->userdata('level') != 'pengurus' OR $this->session->userdata('dmi-bengkulu') == FALSE) {
			redirect(base_url("auth"));
		}

		if (!$this->session->has_userdata('id_masjid')){
			$where['id_user_pengurus'] = $this->session->userdata('id_user');
			$id_masjid = $this->PengurusModel->getWhere('tb_pengurus_masjid', $where)->row()->id_masjid;
			$this->session->set_userdata('id_masjid', $id_masjid);
		}
	}

	public function index()
	{
		$id_masjid = $this->session->userdata('id_masjid');
		$data['menu'] = 'masjid';
		$where['id_masjid'] = $id_masjid;
		$data['masjid'] = $this->PengurusModel->getWhere('tb_masjid', $where)->row();
		$data['galeri'] = $this->PengurusModel->getWhere('tb_galeri_masjid', $where);
		$data['kegiatan'] = $this->PengurusModel->getWhere('tb_kegiatan_masjid', $where);
		$data['keuangan'] = $this->PengurusModel->getWhere('tb_keuangan_masjid', $where);
		$this->load->view('pengurus/view_masjid_detail', $data);
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

		$where['id_masjid'] = $id_masjid;
		$masjidBeforeUpdate = $this->PengurusModel->getWhere('tb_masjid', $where)->row();
		$fotolama='./assets/masjid/'.$masjidBeforeUpdate->foto;
		$update = $this->PengurusModel->update('tb_masjid', $data, $where);
		if($update){
			if($uploadsucces) unlink($fotolama);
			$this->session->set_flashdata('success', 'Berhasil mengubah masjid');
		}else{
			if($uploadsucces) unlink('./assets/masjid/'.$data['foto']);
			$this->session->set_flashdata('success', 'Berhasil mengubah masjid');
		}
    	redirect(base_url('pengurus'));

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
	        $insert=$this->PengurusModel->insert('tb_galeri_masjid', $data);
			if($insert){
				$this->session->set_flashdata('success', 'Berhasil menambah galeri masjid');
			}else{
				unlink('./assets/masjid/galeri/'.$data['foto']);
				$this->session->set_flashdata('error', 'Gagal menambah galeri masjid');
			}
	    }else{
	    	$this->session->set_flashdata('error', 'Gagal menambah galeri. Pastikan kuran file maksimal foto 2MB dan berekstensi .jpg atau .png');
	    }
		redirect(base_url('pengurus'));
	}

	public function hapusGaleriMasjid($id){
		$where['id'] = $id;
		$galeriBeforeUpdate = $this->PengurusModel->getWhere('tb_galeri_masjid', $where)->row();
		$fotolama='./assets/masjid/galeri/'.$galeriBeforeUpdate->foto;
		$delete = $this->PengurusModel->delete('tb_galeri_masjid', $where);
		if($delete){
			unlink($fotolama);
			$this->session->set_flashdata('success', 'Berhasil menghapus');
		}else{
			$this->session->set_flashdata('error', 'Gagal menghapus');
		}
		redirect(base_url('pengurus'));
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

		$insert=$this->PengurusModel->insert('tb_kegiatan_masjid', $data);
		if($insert){
			$this->session->set_flashdata('success', 'Berhasil menambah kegiatan masjid');
		}else{
			if($uploadsucces) unlink('./assets/masjid/kegiatan/'.$data['foto']);
			$this->session->set_flashdata('error', 'Gagal menambah kegiatan masjid');
		}
		redirect(base_url('pengurus'));
	}

	public function hapusKegiatanMasjid($id){
		$where['id'] = $id;
		$galeriBeforeUpdate = $this->PengurusModel->getWhere('tb_kegiatan_masjid', $where)->row();
		$fotolama='./assets/masjid/kegiatan/'.$galeriBeforeUpdate->foto;
		$delete = $this->PengurusModel->delete('tb_kegiatan_masjid', $where);
		if($delete){
			unlink($fotolama);
			$this->session->set_flashdata('success', 'Berhasil menghapus');
		}else{
			$this->session->set_flashdata('error', 'Gagal menghapus');
		}
		redirect(base_url('pengurus'));
	}

	public function simpanKeuanganMasjid(){
		$id_masjid = $this->input->post('id_masjid');
		$data['id_masjid'] = $id_masjid;
		$data['jenis'] = $this->input->post('jenis');
		$data['tanggal'] = date('Y-m-d', strtotime($this->input->post('tanggal')));
		$data['jumlah_uang'] = $this->input->post('jumlah_uang');
		$data['keterangan'] = $this->input->post('keterangan');
		$data['id_user_pengurus'] = $this->session->userdata('id_user');

		$insert=$this->PengurusModel->insert('tb_keuangan_masjid', $data);
		if($insert){
			$this->session->set_flashdata('success', 'Berhasil menambah keuangan masjid');
		}else{
			$this->session->set_flashdata('error', 'Gagal menambah keuangan masjid');
		}
		redirect(base_url('pengurus'));
	}

	public function hapusKeuanganMasjid($id){
		$where['id'] = $id;
		$delete = $this->PengurusModel->delete('tb_keuangan_masjid', $where);
		if($delete){
			$this->session->set_flashdata('success', 'Berhasil menghapus');
		}else{
			$this->session->set_flashdata('error', 'Gagal menghapus');
		}
		redirect(base_url('pengurus'));
	}

	public function ubahPassword(){
		$data['password'] = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
		$where['id_user'] = $this->input->post('id_user');
		$update = $this->PengurusModel->update('tb_user', $data, $where);
		if($update){
			$this->session->set_flashdata('success', 'Berhasil mengubah password');
		}else{
			$this->session->set_flashdata('error', 'Gagal mengubah password');
		}
		redirect(base_url('pengurus'));
	}
}
