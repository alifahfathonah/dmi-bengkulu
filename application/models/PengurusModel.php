<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengurusModel extends CI_Model {

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
}