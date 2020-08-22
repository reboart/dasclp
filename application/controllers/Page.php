<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {


	public function index()
	{
		$data['title']= 'IPNU Cilacap';

		$this->load->view('template/header_home',$data);
		$this->load->view('template/nav_home',$data);
		$this->load->view('home/page',$data);
		$this->load->view('template/footer_home',$data);
	}
}