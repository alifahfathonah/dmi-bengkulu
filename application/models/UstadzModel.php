<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UstadzModel extends CI_Model {

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

	public function getAllBerita($id_user_penulis){
		$this->db->select('id, judul, tgl_dibuat, kategori, tb_user.nama as nama_penulis');
		$this->db->from('tb_khutbah');
		$this->db->join('tb_user', 'tb_user.id_user=tb_khutbah.id_user_penulis');
		$this->db->where('id_user_penulis', $id_user_penulis);
		$this->db->order_by('tgl_dibuat', 'DESC');
		return $this->db->get();
	}
}