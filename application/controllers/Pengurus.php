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
	}

	public function index()
	{
		$data['menu'] = 'masjid';
		$this->load->view('pengurus/view_masjid_detail', $data);
	}

	public function profildmi()
	{
		$data['menu'] = 'profildmi';
		$this->load->view('admin/view_profildmi', $data);
	}

	public function masjid()
	{
		$data['menu'] = 'masjid';
		$this->load->view('admin/view_masjid', $data);
	}

	public function detailMasjid()
	{
		$data['menu'] = 'masjid';
		$this->load->view('admin/view_masjid_detail', $data);
	}

	public function berita()
	{
		$data['menu'] = 'berita';
		$this->load->view('admin/view_berita', $data);
	}

	public function detailberita()
	{
		$data['menu'] = 'berita';
		$this->load->view('admin/view_berita_detail', $data);
	}

	public function pengguna()
	{
		$data['menu'] = 'pengguna';
		$this->load->view('admin/view_pengguna', $data);
	}

}
