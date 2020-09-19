<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('FrontendModel');
		$this->load->library('session');
		
		if(!$this->session->has_userdata('visited')){
			$this->session->set_userdata('visited', TRUE);
			$this->FrontendModel->addWebDikunjungi();
		}
	}

	public function index()
	{
		header("Access-Control-Allow-Origin: *");
		$data['menu'] = 'profil';
		$data['slider'] = $this->FrontendModel->getKhutbahTerbaru(3);
		$data['profil'] = $this->FrontendModel->get('tb_profil_dmi')->row();
		$data['misi'] = $this->FrontendModel->get('tb_profil_misi');
		$data['profil_pengurus'] = $this->FrontendModel->get('tb_profil_pengurus');
		$data['berita'] = $this->FrontendModel->getBeritaTerbaru(3);
		$this->load->view('frontend/view_home', $data);
	}

	public function masjid($tipologi=NULL)
	{
		header("Access-Control-Allow-Origin: *");
		$data['profil'] = $this->FrontendModel->get('tb_profil_dmi')->row();
		$data['menu'] = 'masjid';
		$data['tipologi'] = $tipologi;
		
		$carimasjid = $this->input->get('carimasjid');
		if(!empty($carimasjid)){
			$data['masjid'] = $this->FrontendModel->getLike('tb_masjid', $carimasjid);
		}else{
			if($tipologi==NULL){
				$data['masjid'] = $this->FrontendModel->getWhere('tb_masjid', array('tipologi !='=>'Mushola'));
			}else{
				$data['masjid'] = $this->FrontendModel->getWhere('tb_masjid', array('tipologi'=>$tipologi));
			}
		}
		$this->load->view('frontend/view_masjid', $data);
	}

	public function detailMasjid($id_masjid=NULL)
	{
		header("Access-Control-Allow-Origin: *");
		$data['profil'] = $this->FrontendModel->get('tb_profil_dmi')->row();
		$data['menu'] = 'masjid';
		$where = array('id_masjid'=>$id_masjid);
		$data['masjid'] = $this->FrontendModel->getWhere('tb_masjid', $where)->row();
		$data['galeri'] = $this->FrontendModel->getWhere('tb_galeri_masjid', $where);
		$data['khutbah'] = $this->FrontendModel->getKhutbahByMasjid($id_masjid);
		$data['kegiatan'] = $this->FrontendModel->getKegiatanByMasjid($where);
		$data['keuangan'] = $this->FrontendModel->getKeuanganByMasjid($id_masjid);
		$this->load->view('frontend/view_detail_masjid', $data);
	}

	public function mushola()
	{
		header("Access-Control-Allow-Origin: *");
		$data['profil'] = $this->FrontendModel->get('tb_profil_dmi')->row();
		$data['menu'] = 'masjid';
		$this->load->view('frontend/view_mushola', $data);
	}

	public function detailMushola()
	{
		header("Access-Control-Allow-Origin: *");
		$data['profil'] = $this->FrontendModel->get('tb_profil_dmi')->row();
		$data['menu'] = 'masjid';
		$this->load->view('frontend/view_detail_mushola', $data);
	}

	public function baca($kategori=NULL)
	{
		header("Access-Control-Allow-Origin: *");
		if($kategori=="adha"){
			$kategori = "Khutbah Idul Adha";
		}elseif($kategori=="fitri"){
			$kategori = "Khutbah Idul Fitri";
		}elseif($kategori=="jumat"){
			$kategori = "Khutbah Jumat";
		}
		$data['profil'] = $this->FrontendModel->get('tb_profil_dmi')->row();
		$data['menu'] = 'khutbah';
		$data['kategori'] = $kategori;
		if($kategori==NULL){
			$data['baca'] = $this->FrontendModel->getBaca();
		}else{
			$data['baca'] = $this->FrontendModel->getBacaByKategori($kategori);
		}
		$data['post_terbaru'] = $this->FrontendModel->getBeritaTerbaru(5);
		$data['arsip'] = $this->FrontendModel->getArsip();
		$this->load->view('frontend/view_baca', $data);
	}

	public function bacaFull($id_khutbah=NULL)
	{
		header("Access-Control-Allow-Origin: *");
		$data['profil'] = $this->FrontendModel->get('tb_profil_dmi')->row();
		$data['menu'] = 'khutbah';
		$data['baca'] = $this->FrontendModel->getBacaById($id_khutbah);
		$data['post_terbaru'] = $this->FrontendModel->getBeritaTerbaru(5);
		$data['arsip'] = $this->FrontendModel->getArsip();
		$this->load->view('frontend/view_baca_full', $data);
	}

	public function jadwalSholat(){
		header("Access-Control-Allow-Origin: *");
		$data['profil'] = $this->FrontendModel->get('tb_profil_dmi')->row();
		$data['menu'] = 'jadwal';
		$data['post_terbaru'] = $this->FrontendModel->getBeritaTerbaru(5);
		$data['arsip'] = $this->FrontendModel->getArsip();
		$this->load->view('frontend/view_jadwal_sholat', $data);
	}

	public function jadwalKegiatan(){
		header("Access-Control-Allow-Origin: *");
		$data['profil'] = $this->FrontendModel->get('tb_profil_dmi')->row();
		$data['menu'] = 'jadwal';
		$data['post_terbaru'] = $this->FrontendModel->getBeritaTerbaru(5);
		$data['arsip'] = $this->FrontendModel->getArsip();
		$data['kegiatan'] = $this->FrontendModel->getJadwalKegiatan();
		$this->load->view('frontend/view_jadwal_kegiatan', $data);
	}

}
