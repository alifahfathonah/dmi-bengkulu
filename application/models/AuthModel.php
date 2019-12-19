<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model {

	public function createNewUser($data) {
		return $this->db->insert('tb_user',$data);
	}
	public function delete($table,$where) {
		return $this->db->delete($table,$where);
	}
	public function checkUser($email){
		$this->db->where('email', $email);
		return $this->db->get('tb_user');
	}
}