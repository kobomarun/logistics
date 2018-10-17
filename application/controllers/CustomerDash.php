<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerDash extends CI_Controller {

	public function index()
	{
		$data['pageName'] = "Customer Dashboard";
		$this->db->where('pay_status',"Paid");
		$data['paid'] =$this->db->count_all_results('shipment');

		$this->db->where('status',"Transit");
		$data['transit'] = $this->db->count_all_results('shipment');

		$this->db->where('status',"Delivered");
		$data['delivered'] = $this->db->count_all_results('shipment');

		$this->load->view('template/header');
		$this->load->view('template/customer-nav',$data);
		$this->load->view('customer-dash',$data);
		$this->load->view('template/footer');
	}
}
