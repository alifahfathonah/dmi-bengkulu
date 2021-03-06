<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengurusModel extends CI_Model {

	// Basic CRUD

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
}