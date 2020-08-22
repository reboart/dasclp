<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

public function __construct(){
		
		parent ::__construct();
		is_logged_in();

		//load model
		

	}

	public function index()
	{
		$data['title']='Menu Management';
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$data['usermenu'] = $this->db->get('rb_user_menu')->result_array();
		$this->form_validation->set_rules('usermenu','Menu','required');

		if ($this->form_validation->run() == false) {
			$this->load->view('template/admin_header',$data);
			$this->load->view('template/admin_sidebar',$data);
			$this->load->view('template/admin_top_nav',$data);
			$this->load->view('menu/index',$data);
			$this->load->view('template/admin_footer',$data);
		
		}else {

			$data = [

				'menu_id' => htmlspecialchars($this->input->post('menuid',true)),
				'title' => htmlspecialchars($this->input->post('usermenu',true)),
				'url'	=> htmlspecialchars($this->input->post('url',true)),
				'icon'	=> htmlspecialchars($this->input->post('icon',true)),
				'is_active'	=> 1,

			];
			$this->db->insert('rb_user_menu',$data);
			$this->session->set_flashdata('massage','<div class="alert alert-success" role="alert">New Menu Added!</div>');
				redirect('menu');

			

		}
	}

	public function edit($id)
	{
		
		
		$this->load->model('menu_model');
		$id = $this->uri->segment(3);
		
		$data = array(

			'title' 	=> 'Edit Data Menu',
			'menu_edit' => $this->menu_model->edit($id),
			'user' => $this->menu_model->user(),
			

		);

		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('template/admin_header',$data);
		$this->load->view('template/admin_sidebar',$data);
		$this->load->view('template/admin_top_nav',$data);
		$this->load->view('admin/menu/edit',$data);
		$this->load->view('template/admin_footer',$data);
		
	}

	public function update()
	{
		$this->load->model('menu_model');
		$id = $this->input->post('id');
		$data = array(
        'menu_id' => $this->input->post('menuid'),
		'title' => $this->input->post('usermenu'),
		'url'	=> $this->input->post('url'),
		'icon'	=> $this->input->post('icon'),
		'in_active'	=> 1
);
		$where = array(
			'id' => $id
		);


$this->menu_model->update($where, $data, 'rb_user_menu');

$this->session->set_flashdata('massage', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
			                                    </div>');

		//redirect
		redirect('admin/menu');
	}

	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('rb_user_menu');

		$this->session->set_flashdata('massage','<div class="alert alert-success" role="alert">Delete Menu Success!</div>');
				redirect('menu');
	}
}