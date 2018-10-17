<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracking extends CI_Controller {

	public function index()
	{
		$data['pageName'] = "Track your Consignment";
		$search = $this->input->post('track');
		$data['track'] = $this->db->get_where('tracking',array('tracking_no'=>$search))->result();
		$this->load->view('template/header');
		$this->load->view('template/nav',$data);
		$this->load->view('tracking');
		$this->load->view('template/footer');
	}

	public function customerTracking()
	{
		$data['pageName'] = "Track your Consignment";
		$search = $this->input->post('track');
		$data['track'] = $this->db->get_where('tracking',array('tracking_no'=>$search))->result();
		$this->load->view('template/header');
		$this->load->view('template/customer-nav',$data);
		$this->load->view('tracking');
		$this->load->view('template/footer');
	}

	public function Trackitems() {
		$data['pageName'] = "Track Your Items";
		$this->load->view('template/header');
		$this->load->view('template/customer-nav',$data);
		$this->load->view('tracking-form');
		$this->load->view('template/footer');
	}
}
