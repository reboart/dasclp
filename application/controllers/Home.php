<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {


		$data['title']= 'IPNU Cilacap';
			
		$this->load->view('template/header_home',$data);
		$this->load->view('template/nav_home',$data);
		$this->load->view('home/index',$data);
		$this->load->view('home/about',$data);
		$this->load->view('home/bbb',$data);
		$this->load->view('home/events',$data);
		$this->load->view('home/magazine',$data);
		$this->load->view('home/ktmereka',$data);
		$this->load->view('template/footer_home',$data);
	}
}