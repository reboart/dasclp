<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		is_logged_in();
	
	}

	public function index()
	{
		$data['title']='Dasboard | IPNU CILACAP';
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar_user',$data);
		$this->load->view('template/topbar',$data);
		$this->load->view('user/index',$data);
		$this->load->view('template/footer');


	}

	public function database(){

		$data['title']='Dasboard | Database';
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar_user',$data);
		$this->load->view('template/topbar',$data);
		$this->load->view('database/index',$data);
		$this->load->view('template/footer');

	}
	public function enter(){

		$data['title']='Dasboard | Input Database';
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar_user',$data);
		$this->load->view('template/topbar',$data);
		$this->load->view('database/enter',$data);
		$this->load->view('template/footer');

	}
	public function article(){

		$data['title']='Dasboard | Article';
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar_user',$data);
		$this->load->view('template/topbar',$data);
		$this->load->view('article/index',$data);
		$this->load->view('template/footer');

	}

	public function new_article(){

		$data['title']='Dasboard | New Article';
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar_user',$data);
		$this->load->view('template/topbar',$data);
		$this->load->view('article/new',$data);
		$this->load->view('template/footer');

	}
}