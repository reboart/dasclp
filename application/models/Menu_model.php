<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_model{

	public function user(){
		$email = $this->session->userdata('email');
		$user = $this->db->where('email'== $email)->get('user');
		if ($user) {
			return $user->row_array();
		}else {
			return false;
		}
	}
	
	public function edit($id)
	{

		$query = $this->db->where('id', $id)->get('user_menu');

		if ($query) {
			return $query->row();
		}else {
			return false;
		}
	}

	public function update($where, $data)
	{
		$this->db->where($where);
		$this->db->update('user_menu', $data);
		
	}

}