<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ustadz extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('UstadzModel');
		$this->load->library('session');

		if ($this->session->userdata('level') != 'ustadz' OR $this->session->userdata('dmi-bengkulu') == FALSE) {
			redirect(base_url("auth"));
		}
	}

	public function index()
	{
		$data['menu'] = 'berita';
		$id_user = $this->session->userdata('id_user');
		$data['berita'] = $this->UstadzModel->getAllBerita($id_user);
		$this->load->view('ustadz/view_berita', $data);
	}

	public function detailBerita($id=NULL)
	{
		$data['menu'] = 'berita';
		$data['berita'] = $this->UstadzModel->getWhere('tb_khutbah', array('id'=>$id))->row();
		$this->load->view('ustadz/view_berita_detail', $data);
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
	    	$insert = $this->UstadzModel->insert('tb_khutbah', $data);
	    	if($insert){
	    		$this->session->set_flashdata('success', 'Berhasil tambah berita');
	    	}else{
	    		if($uploadsucces) unlink('./assets/berita/'.$data['foto']);
	    		$this->session->set_flashdata('error', 'Gagal tambah berita');
	    	}
	    	redirect(base_url('ustadz'));

	    }else{
			$where['id'] = $id;
			$beritaBeforeUpdate = $this->UstadzModel->getWhere('tb_khutbah', $where)->row();
			$fotolama='./assets/berita/'.$beritaBeforeUpdate->foto;
			$update = $this->UstadzModel->update('tb_khutbah', $data, $where);
			if($update){
				if($uploadsucces) unlink($fotolama);
				$this->session->set_flashdata('success', 'Berhasil mengubah berita');
			}else{
				if($uploadsucces) unlink('./assets/berita/'.$data['foto']);
				$this->session->set_flashdata('success', 'Berhasil mengubah berita');
			}
	    	redirect(base_url('ustadz/detailBerita/'.$id));

	    }
	}

	public function hapusBerita($id){
		$where['id'] = $id;
		$beritaBeforeUpdate = $this->UstadzModel->getWhere('tb_khutbah', $where)->row();
		$fotolama='./assets/berita/'.$beritaBeforeUpdate->foto;
		$delete = $this->UstadzModel->delete('tb_khutbah', $where);
		if($delete){
			unlink($fotolama);
			$this->session->set_flashdata('success', 'Berhasil menghapus');
		}else{
			$this->session->set_flashdata('error', 'Gagal menghapus');
		}
		redirect(base_url('ustadz'));
	}

	public function ubahPassword(){
		$data['password'] = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
		$where['id_user'] = $this->input->post('id_user');
		$update = $this->UstadzModel->update('tb_user', $data, $where);
		if($update){
			$this->session->set_flashdata('success', 'Berhasil mengubah password');
		}else{
			$this->session->set_flashdata('error', 'Gagal mengubah password');
		}
		redirect(base_url('ustadz'));
	}
}