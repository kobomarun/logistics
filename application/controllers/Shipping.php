<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shipping extends CI_Controller {

	public function add()
	{
		$data['pageName'] = "Add Shipment";
		$data['state'] = $this->db->get('states')->result();
		$data['view'] = $this->db->get_where('clients',array('type'=>'customer'))->result();
		$data['status'] = $this->db->get('payment_status')->result();
		$data['method'] = $this->db->get('payment_methods')->result();
		$data['type'] = $this->db->get('shipment_types')->result();
		$data['pricing'] = $this->db->get('pricing')->result();
		$this->load->view('template/header');
		$this->load->view('template/nav',$data);
		$this->load->view('add-shipping');
		$this->load->view('template/footer');
	}

	public function processShipping() {
		$trackingNumber = 'frx'.rand(1000001111,2);
		if( $this->input->post('pay_method')=="TTF") {
			$extra = 50;
			$gtotal = $this->input->post('amount') - $this->input->post('price')- 50;
			$paid = "Not Paid";
		}
		else  if( $this->input->post('pay_method')=="POS") {
			$extra = $this->input->post('amount') * 0.75/100;
			$gtotal = $this->input->post('amount') - 	$extra - $this->input->post('price');
			$paid = "Not Paid";
		} else {
			$gtotal = $this->input->post('amount');
			$extra = 0;
			$paid = "Paid";

		}

		$data = array(
			's_name'=>$this->input->post('sname'),
			's_address'=>$this->input->post('saddress'),
			's_city'=>$this->input->post('scity'),
			's_state'=>$this->input->post('sstate'),
			's_email'=>$this->input->post('semail'),
			's_phone'=>$this->input->post('sphone'),
			'r_name'=>$this->input->post('rname'),
			'r_address'=>$this->input->post('raddress'),
			'r_city'=>$this->input->post('rcity'),
			'r_state'=>$this->input->post('rstate'),
			'r_email'=>$this->input->post('remail'),
			'r_phone'=>$this->input->post('rphone'),
      'tracking_no'=>$trackingNumber,
			'status'=>$this->input->post('status'),
			'price'=>$this->input->post('price'),
			'weight'=>$this->input->post('weight'),
			'declare'=>$this->input->post('declare'),
			'description'=>$this->input->post('description'),
			'collection_date'=>date("Y-m-d H:i:s"),
			'pay_method'=> $this->input->post('pay_method'),
			'delivery_date'=>$this->input->post('dates'),
			'shipment_type'=>$this->input->post('shipment_type'),
			'mode'=>'office',
			'customerid'=>$this->input->post('customer'),
			'amount'=>$this->input->post('amount'),
			'remitted'=>$gtotal,
			'pay_status'=>$paid,
			'size'=> $this->input->post('size'),
			'extra_charges'=>$extra,
			'prepared_by'=>$this->session->userdata('id')
		);
 $data2 = array(
	 'tracking_no' =>$trackingNumber,
	 'status'=>$this->input->post('status'),
	 'date'=>date("Y-d H:i:s")
 );
 $this->db->insert('tracking',$data2);

		$insert = $this->db->insert('shipment',$data);

		if($insert) {
			$this->session->set_flashdata('success','Shipment Successfully Added');
			redirect('shipping');
		}
	}

	public function edited() {
		$id = $this->input->post('id');
		if( $this->input->post('pay_method')=="POS") {
			$extra = 50;
			$gtotal = $this->input->post('amount') - $this->input->post('price')- 50;
		}
		else  if( $this->input->post('pay_method')=="TTF") {
			$extra = $this->input->post('amount') * 0.75/100;
			$gtotal = $this->input->post('amount') - 	$extra - $this->input->post('price');
		} else {
			$gtotal = $this->input->post('amount');
			$extra = 0;
		}

		$data = array(
			's_name'=>$this->input->post('sname'),
			's_address'=>$this->input->post('saddress'),
			's_city'=>$this->input->post('scity'),
			's_state'=>$this->input->post('sstate'),
			's_email'=>$this->input->post('semail'),
			's_phone'=>$this->input->post('sphone'),
			'r_name'=>$this->input->post('rname'),
			'r_address'=>$this->input->post('raddress'),
			'r_city'=>$this->input->post('rcity'),
			'r_state'=>$this->input->post('rstate'),
			'r_email'=>$this->input->post('remail'),
			'r_phone'=>$this->input->post('rphone'),
			'status'=>$this->input->post('status'),
			'price'=>$this->input->post('price'),
			'weight'=>$this->input->post('weight'),
			'declare'=>$this->input->post('declare'),
			'description'=>$this->input->post('description'),
			'delivery_date'=>$this->input->post('dates'),
			'shipment_type'=>$this->input->post('shipment_type'),
			'customerid'=>$this->input->post('customer'),
			'amount'=>$this->input->post('amount'),
			'remitted'=>$gtotal,
			'pay_method'=>$this->input->post('pay_method'),
			'size'=> $this->input->post('size'),
			'extra_charges'=>$extra,
			'prepared_by'=>$this->session->userdata('id')

		);
		$data2 = array(
	 	 'tracking_no' =>$id,
	 	 'status'=>$this->input->post('status'),
	 	 'date'=>date("Y-m-d H:i:s")
	  );
	  $this->db->insert('tracking',$data2);

		$this->db->where('tracking_no', $id);
		$update = $this->db->update('shipment',$data);
		if($update) {
			$this->session->set_flashdata('success','Shipment Successfully Edited');
			redirect('shipping');
		}
	}

	public function index(){
		$data['pageName'] = "View All Shipping";
		//$this->db->order_by('id', 'asc');
		$data['view'] = $this->db->get('shipment')->result();
		$this->load->view('template/header');
		$this->load->view('template/nav',$data);
		$this->load->view('view-shipping',$data);
		$this->load->view('template/footer');
	}

	public function customerOrders($id){
		$cid = $this->uri->segment(3);
		$data['pageName'] = "View All Shipping";
		$this->db->order_by('collection_date','desc');
		$data['view'] = $this->db->get_where('shipment',array('customerid'=>$cid))->result();
		$this->load->view('template/header');
		$this->load->view('template/nav',$data);
		$this->load->view('view-customer-order',$data);
		$this->load->view('template/footer');
	}


	public function editShipment($id) {
		$data['pageName'] = "Edit Shipment";

		$id = $this->uri->segment(3);

		$data['view'] = $this->db->get_where('shipment', array('tracking_no'=>$id))->row_array();
		$this->load->view('template/header');
		$this->load->view('template/nav',$data);
		$this->load->view('edit-shipping',$data);
		$this->load->view('template/footer');
	}

	public function invoice($id) {
		$data['pageName'] = "Invoice";

		$id = $this->uri->segment(3);
		$data['view'] = $this->db->get_where('shipment', array('tracking_no'=>$id))->row_array();
		 $this->load->view('template/header');
		// $this->load->view('template/nav',$data);
		$this->load->view('invoice',$data);
		 $this->load->view('template/footer');
	}

	public function pay_customer($id) {
		$id = $this->uri->segment(3);
		$data = array('pay_status'=>'Paid');
		$this->db->where('tracking_no',$id);
		$update = $this->db->update('shipment',$data);
		if($update) {
			$this->session->set_flashdata('success','Payment Made to Customer');
			redirect('shipping');
		}
	}

	function getPrice() {
		$weight = $this->input->post('weight');
		$area = $this->input->post('area');

		$query = $this->db->get_where('pricing',array('area'=>$area, 'weight'=>$weight))->row_array();
		echo $query['pricing'];
	}

	function activateMultiplePayment() {
		$check = $this->input->post('check');
		foreach($check as $row) {
			$data = array('pay_status'=>'Paid');
			$this->db->where('tracking_no',$row);
			$update = $this->db->update('shipment',$data);

		}
		if($update) {
			$this->session->set_flashdata('success','Payment Made to Customer');
			redirect('shipping/customerorders/1');
		}
		//print_r($check);
	}
}
