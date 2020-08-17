<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		is_logged_in();

	}

	public function index()
	{
		$data['title']='Dashboard';
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('template/topbar',$data);
		$this->load->view('admin/index',$data);
		$this->load->view('template/footer');


	}
	public function all_user()
	{
		$data['title']='All User';
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$data['alluser'] = $this->db->get('user')->result_array();
		
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('template/topbar',$data);
		$this->load->view('admin/all-user',$data);
		$this->load->view('template/footer');


	}

	public function add_user()
	{

		$this->form_validation->set_rules('name','Name','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]',[
			'is_unique' => 'This Email Already Registered'
		]);

		$this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]',[
			'matches' => 'password dont matches',
			'min_length' => 'password too short',
		]);

		$this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');

		if ($this->form_validation->run()==false) {
		
			$data['title']= 'IPNU Cilacap Registration';
			$this->load->view('template/auth_header',$data);
			$this->load->view('auth/registration');
			$this->load->view('template/auth_footer');
		} else{
			$data = [
				'name' 			=> htmlspecialchars($this->input->post('name',true)),
				'email' 		=> htmlspecialchars($this->input->post('email',true)),
				'image' 		=>'default.jpg',
				'password' 		=> password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' 		=> 2,
				'is_active' 	=> 1,
				'date_created' 	=> time(),


			];

			$this->db->insert('user',$data);
			$this->session->set_flashdata('massage','<div class="alert alert-success" role="alert">Congratulation! Please Login</div>');
			redirect('admin/all_user');

		}
	}
	

	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('user');
		

		$this->session->set_flashdata('massage','<div class="alert alert-success" role="alert">Delete User Success!</div>');
			redirect('admin/all_user');
	}

	// Menu Management

	public function menu()
	{
		$data['title']='Menu Management';
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

		$data['usermenu'] = $this->db->get('user_menu')->result_array();


		$this->form_validation->set_rules('usermenu','Menu','required');

		if ($this->form_validation->run() == false) {
			$this->load->view('template/header',$data);
			$this->load->view('template/sidebar',$data);
			$this->load->view('template/topbar',$data);
			$this->load->view('admin/menu/index',$data);
			$this->load->view('template/footer');
		}else {

			$data = [

				'title' => htmlspecialchars($this->input->post('usermenu',true)),
				'url'	=> htmlspecialchars($this->input->post('url',true)),
				'icon'	=> htmlspecialchars($this->input->post('icon',true)),
				'in_active'	=> 1,

			];
			$this->db->insert('user_menu',$data);
			$this->session->set_flashdata('massage','<div class="alert alert-success" role="alert">New Menu Added!</div>');
				redirect('admin/menu');

			

		}



	}

	public function editmenu($id){
		$data['useredit'] = $this->db->get_where('user_menu');
		$data = [

				'title' => htmlspecialchars($this->input->post('usermenu',true)),
				'url'	=> htmlspecialchars($this->input->post('url',true)),
				'icon'	=> htmlspecialchars($this->input->post('icon',true)),
				'in_active'	=> 1,

			];

		$this->db->where('id',$id); 
		$this->db->update('user_menu',$data); 
	}
	// Delete Menu

	public function deletemenu($id){

			$this->db->where('id',$id);
			$this->db->delete('user_menu');
			

			$this->session->set_flashdata('massage','<div class="alert alert-success" role="alert">Delete Menu Success!</div>');
				redirect('admin/menu');
	}


}