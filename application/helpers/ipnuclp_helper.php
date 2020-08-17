<?php 

	function is_logged_in(){

		$ci = get_instance();
		if (!$ci->session->userdata('email')) {
			redirect('auth');
		} else {
			$role_id = $ci->session->userdata('role_id');
			$menu = $ci->uri->segment(1);

			$querymenu = $ci->db->get_where('user_role',['role' => $menu])->row_array();
			$menu_id = $querymenu['id'];

			$access = $ci->db->get_where('user_access', ['role_id' => $role_id, 'role' => $menu_id]);

			if ($access->num_rows() < 1) {
				redirect('auth/blocked');
			}
		}
	}

 ?>