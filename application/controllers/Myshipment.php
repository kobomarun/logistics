<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myshipment extends CI_Controller {

	public function index()
	{
		$data['pageName'] = "My Shipments";
		$cid = 	$this->session->userdata('id');
		$this->db->order_by('collection_date','desc');
		$data['view'] = $this->db->get_where('shipment',array('customerid'=>$cid))->result();
		$this->load->view('template/header');
		$this->load->view('template/customer-nav',$data);
		$this->load->view('myshipment');
		$this->load->view('template/footer');
	}

	public function invoice() {
		$data['pageName'] = "All Invoices";
		$cid = $this->session->userdata('id');;
		$this->db->order_by('collection_date','desc');
		$data['view'] = $this->db->get_where('shipment',array('customerid'=>$cid))->result();
		$this->load->view('template/header');
		$this->load->view('template/customer-nav',$data);
		$this->load->view('customer-invoice');
		$this->load->view('template/footer');
	}

	public function Paid() {
		$data['pageName'] = "All Paid Shipments";
		$cid = $this->session->userdata('id');;
		$this->db->order_by('collection_date','desc');
		$data['view'] = $this->db->get_where('shipment',array('customerid'=>$cid,'pay_status'=>'Paid'))->result();
		$this->load->view('template/header');
		$this->load->view('template/customer-nav',$data);
		$this->load->view('myshipment');
		$this->load->view('template/footer');
	}

	public function Pending() {
		$data['pageName'] = "All Pending Payment";
		$cid = $this->session->userdata('id');;
		$this->db->order_by('collection_date','desc');
		$data['view'] = $this->db->get_where('shipment',array('customerid'=>$cid,'pay_status'=>'Not Paid'))->result();
		$this->load->view('template/header');
		$this->load->view('template/customer-nav',$data);
		$this->load->view('myshipment');
		$this->load->view('template/footer');
	}

	public function Delivered() {
		$data['pageName'] = "All Delivered Shipments";
		$cid = $this->session->userdata('id');;
		$this->db->order_by('collection_date','desc');
		$data['view'] = $this->db->get_where('shipment',array('customerid'=>$cid,'status'=>'delivered'))->result();
		$this->load->view('template/header');
		$this->load->view('template/customer-nav',$data);
		$this->load->view('myshipment');
		$this->load->view('template/footer');
	}

	public function Transit() {
		$data['pageName'] = "All In-Transit Shipments";
		$cid = $this->session->userdata('id');
		$this->db->order_by('collection_date','desc');
		$data['view'] = $this->db->get_where('shipment',array('customerid'=>$cid,'status'=>'transit'))->result();
		$this->load->view('template/header');
		$this->load->view('template/customer-nav',$data);
		$this->load->view('myshipment');
		$this->load->view('template/footer');
	}

	public function Tracking() {
		$data['pageName'] = "Track Your Items";
		$this->load->view('template/header');
		$this->load->view('template/customer-nav',$data);
		$this->load->view('customer-tracking');
		$this->load->view('template/footer');
	}
}
