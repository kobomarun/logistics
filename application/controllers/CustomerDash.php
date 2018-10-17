<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerDash extends CI_Controller {

	public function index()
	{
		$data['pageName'] = "Customer Dashboard";
		$this->db->where('pay_status',"Paid");
		$this->db->where('customerid',$this->session->userdata('id'));
		$data['paid'] =$this->db->count_all_results('shipment');

		$this->db->where('status',"Transit");
		$this->db->where('customerid',$this->session->userdata('id'));
		$data['transit'] = $this->db->count_all_results('shipment');

		$this->db->where('status',"Delivered");
		$this->db->where('customerid',$this->session->userdata('id'));
		$data['delivered'] = $this->db->count_all_results('shipment');

		$this->load->view('template/header');
		$this->load->view('template/customer-nav',$data);
		$this->load->view('customer-dash',$data);
		$this->load->view('template/footer');
	}
}
