<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function index() {
		$data['pageName'] = "Dashboard";

		$this->load->view('template/header');
		$this->load->view('template/nav',$data);
		$this->load->view('admin-dash');
		$this->load->view('template/footer');
	}

	public function shippingStatus() {
		$data['pageName'] = "Add Shipping Status";
		$data['view'] = $this->db->get('payment_status')->result();
		if($this->input->post('submit')) {
			$status = $this->input->post('status');
			$data = array(
				'name'=>$status
			);
			$insert = $this->db->insert('payment_status',$data);
			if($insert) {
				$this->session->Set_flashdata('success','Form successfully submited');
				redirect('settings/shippingstatus');
			}
		} else {
			$this->load->view('template/header');
			$this->load->view('template/nav',$data);
			$this->load->view('shipping-status-form');
			$this->load->view('template/footer');
		}
	}

	public function editshippingstatus($id) {
		$data['pageName'] = "Edit Shipping Status";
		$id = $this->uri->segment('3');
		$data['edit'] = $this->db->get_where('payment_status',array('id'=>$id))->row_array();
		if($this->input->post('submit')) {
			$status = $this->input->post('status');
			$data = array(
				'name'=>$status
			);
			$this->db->where('id',$id);
			$update = $this->db->update('payment_status',$data);
			if($update) {
				$this->session->Set_flashdata('success','Status successfully edited');
				redirect('settings/shippingstatus');
			}
		} else {
			$this->load->view('template/header');
			$this->load->view('template/nav',$data);
			$this->load->view('edit-shipping-status-form',$data);
			$this->load->view('template/footer');
		}
	}

	public function shippingPrices() {
		$data['pageName'] = "Shipping Prices";
		$data['view'] = $this->db->get('pricing')->result();
		if($this->input->post('submit')) {
			$price = $this->input->post('price');
			$weight = $this->input->post('weight');
			$area = $this->input->post('area');
			$data1 = array(
				'pricing'=>$this->input->post('main-price'),
				'weight'=>$weight,
				'area'=>'Mainland/VI/Lekki Phase 1'
			);
			$this->db->insert('pricing',$data1);

			$data2 = array(
				'pricing'=>$this->input->post('1-price'),
				'weight'=>$weight,
				'area'=>'Area 1'
			);
			$this->db->insert('pricing',$data2);

			$data3 = array(
				'pricing'=>$this->input->post('2-price'),
				'weight'=>$weight,
				'area'=>'Area 2'
			);
			$insert = $this->db->insert('pricing',$data3);
			if($insert) {
				$this->session->Set_flashdata('success','Form successfully submited');
				redirect('settings/shippingprices');
			}
		} else {
			$this->load->view('template/header');
			$this->load->view('template/nav',$data);
			$this->load->view('shipping-pricing-form');
			$this->load->view('template/footer');
		}
	}

	public function paymentMethod() {
		$data['pageName'] = "Payment Methods";
		$data['view'] = $this->db->get('payment_methods')->result();
		if($this->input->post('submit')) {
			$method= $this->input->post('method');
			$data = array(
				'name'=>$method,
			);
			$insert = $this->db->insert('payment_methods',$data);
			if($insert) {
				$this->session->Set_flashdata('success','Form successfully submited');
				redirect('settings/paymentmethod');
			}
		} else {
			$this->load->view('template/header');
			$this->load->view('template/nav',$data);
			$this->load->view('payment-method-form');
			$this->load->view('template/footer');
		}
	}

	public function shipmentTypes() {
		$data['pageName'] = "Type of Shipments";
		$data['view'] = $this->db->get('shipment_types')->result();
		if($this->input->post('submit')) {
			$type= $this->input->post('type');
			$data = array(
				'name'=>$type,
			);
			$insert = $this->db->insert('shipment_types',$data);
			if($insert) {
				$this->session->Set_flashdata('success','Form successfully submited');
				redirect('settings/shipmenttypes');
			}
		} else {
			$this->load->view('template/header');
			$this->load->view('template/nav',$data);
			$this->load->view('shipment-type-form');
			$this->load->view('template/footer');
		}
	}

}
