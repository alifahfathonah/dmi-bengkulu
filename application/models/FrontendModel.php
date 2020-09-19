<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontendModel extends CI_Model {

	// Basic CRUD

	public function insert($table, $data) {
		return $this->db->insert($table, $data);
	}

	public function update($table, $data, $where) {
		return $this->db->update($table, $data, $where);
	}

	public function delete($table, $where) {
		return $this->db->delete($table, $where);
	}

	public function get($table){
		return $this->db->get($table);
	}

	public function getWhere($table, $where){
		return $this->db->get_where($table, $where);
	}

	public function getLike($table, $like){
		$this->db->like('nama', $like);
		return $this->db->get($table);
	}

	public function addWebDikunjungi(){
		$visited = $this->db->select('total_web_dikunjungi')->get('tb_profil_dmi')->row()->total_web_dikunjungi;
		$data['total_web_dikunjungi'] = $visited+1;
		$where['id'] = 0;
		$this->db->update('tb_profil_dmi', $data, $where);
	}

	public function getKhutbahTerbaru($limit){
		$this->db->select('id, judul, kategori, foto');
		$this->db->where('foto is not null');
		$this->db->order_by('tgl_dibuat', 'DESC');
		$this->db->limit($limit);
		return $this->db->get('tb_khutbah');
	}

	public function getBeritaTerbaru($limit){
		$this->db->select('id, judul, tgl_dibuat, deskripsi_singkat AS isi, foto');
		$this->db->where('kategori', 'Berita');
		$this->db->order_by('tgl_dibuat', 'DESC');
		$this->db->limit($limit);
		return $this->db->get('tb_khutbah');
	}

	public function getKegiatanByMasjid($where){
		$this->db->where($where);
		$this->db->order_by('tgl_kegiatan', 'DESC');
		return $this->db->get('tb_kegiatan_masjid');
	}

	public function getKeuanganByMasjid($id_masjid){
		$query = "SELECT DATE_FORMAT(tanggal, '%M %Y') AS bulan, SUM(CASE WHEN jenis = 'Pemasukan' THEN jumlah_uang ELSE 0 END) AS pemasukan, SUM(CASE WHEN jenis = 'pengeluaran' THEN jumlah_uang ELSE 0 END) AS pengeluaran FROM `tb_keuangan_masjid` WHERE `id_masjid` = '".$id_masjid."' GROUP BY MONTH(tanggal), YEAR(tanggal) ORDER BY `tanggal` DESC";
		return $this->db->query($query);
	}

	public function getBaca(){
		$this->db->select('id, judul, tgl_dibuat, deskripsi_singkat AS isi, foto');
		$this->db->order_by('tgl_dibuat', 'DESC');
		return $this->db->get('tb_khutbah');
	}

	public function getBacaByKategori($kategori){
		$this->db->select('id, judul, tgl_dibuat, deskripsi_singkat AS isi, foto');
		$this->db->where('kategori', $kategori);
		$this->db->order_by('tgl_dibuat', 'DESC');
		return $this->db->get('tb_khutbah');
	}

	public function getArsip(){
		$this->db->select('DATE_FORMAT(tgl_dibuat, "%M %Y") AS bulan');
		$this->db->group_by('MONTH(tgl_dibuat), YEAR(tgl_dibuat)');
		return $this->db->get('tb_khutbah');
	}

	public function getBacaById($id){
		$this->db->select('tb_user.nama as nama_penulis, tb_khutbah.*');
		$this->db->from('tb_khutbah');
		$this->db->join('tb_user', 'tb_user.id_user=tb_khutbah.id_user_penulis');
		$this->db->where('tb_khutbah.id', $id);
		return $this->db->get()->row();
	}

	public function getKhutbahByMasjid($id_masjid){
		$this->db->select('tb_khutbah.id, tb_khutbah.judul, tb_khutbah.tgl_dibuat, tb_khutbah.deskripsi_singkat AS isi, tb_khutbah.foto');
		$this->db->from('tb_khutbah');
		$this->db->join('tb_pengurus_masjid', 'tb_pengurus_masjid.id_user_pengurus=tb_khutbah.id_user_penulis');
		$this->db->where('tb_pengurus_masjid.id_masjid', $id_masjid);
		$this->db->order_by('tgl_dibuat', 'DESC');
		$this->db->limit(3);
		return $this->db->get();
	}

	public function getJadwalKegiatan(){
		$this->db->select('tb_masjid.nama, tb_kegiatan_masjid.*');
		$this->db->from('tb_kegiatan_masjid');
		$this->db->join('tb_masjid', 'tb_kegiatan_masjid.id_masjid=tb_masjid.id_masjid');
		$this->db->where('tgl_kegiatan >= NOW()');
		return $this->db->get();
	}
}