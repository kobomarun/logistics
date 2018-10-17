<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDash extends CI_Controller {

	public function index()
	{
		$data['pageName'] = "Dashboard";

		$this->load->view('template/header');
		$this->load->view('template/nav',$data);
		$this->load->view('admin-dash');
		$this->load->view('template/footer');
	}
}
