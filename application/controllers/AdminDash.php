<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDash extends CI_Controller {

	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('isLoggedIn')){
			$this->session->set_flashdata('error', 'Your session has expired. Please login again');
			redirect('login');
		}
	}

	public function index()
	{
		$data['pageName'] = "Dashboard";

		$this->load->view('template/header');
		$this->load->view('template/nav',$data);
		$this->load->view('admin-dash');
		$this->load->view('template/footer');
	}
}
