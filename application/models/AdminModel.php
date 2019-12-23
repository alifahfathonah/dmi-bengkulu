<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

	// Basic CUD

	public function insert($table, $data) {
		return $this->db->insert($table, $data);
	}

	public function insert_batch($table, $data) {
		return $this->db->insert_batch($table, $data);
	}

	public function update($table, $data, $where) {
		return $this->db->update($table, $data, $where);
	}

	public function delete($table, $where) {
		return $this->db->delete($table, $where);
	}

	public function get($table, $select='*'){
		$this->db->select($select);
		return $this->db->get($table);
	}

	public function getWhere($table, $where){
		return $this->db->get_where($table, $where);
	}

	public function getTotalMasjid(){
		return $this->db->select('count(*) as total')->where('tipologi !=', 'Mushola')->get('tb_masjid')->row()->total;
	}

	public function getTotalMushola(){
		return $this->db->select('count(*) as total')->where('tipologi', 'Mushola')->get('tb_masjid')->row()->total;
	}

	public function getTotalKhutbahBerita(){
		return $this->db->select('count(*) as total')->get('tb_khutbah')->row()->total;
	}
	
	public function getBeritaTerbaru($limit){
		$this->db->select('id, judul, tgl_dibuat, SUBSTRING(isi, 1, 250) AS isi, foto');
		$this->db->where('kategori', 'Berita');
		$this->db->order_by('tgl_dibuat', 'DESC');
		$this->db->limit($limit);
		return $this->db->get('tb_khutbah');
	}

	public function getAllBerita(){
		$this->db->select('id, judul, tgl_dibuat, kategori, tb_user.nama as nama_penulis');
		$this->db->from('tb_khutbah');
		$this->db->join('tb_user', 'tb_user.id_user=tb_khutbah.id_user_penulis');
		$this->db->order_by('tgl_dibuat', 'DESC');
		return $this->db->get();
	}

	public function getAllPengguna(){
		$this->db->select('tb_user.*, id_masjid');
		$this->db->from('tb_user');
		$this->db->join('tb_pengurus_masjid', 'tb_user.id_user=tb_pengurus_masjid.id_user_pengurus', 'left');
		$this->db->order_by('level');
		return $this->db->get();
	}
}