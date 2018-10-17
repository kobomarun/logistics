<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index() {
		$data['pageName'] = "View All Customers ";
		$data['view'] = $this->db->get_where('clients',array('type'=>'customer'))->result();
		$this->load->view('template/header');
		$this->load->view('template/nav',$data);
		$this->load->view('view-customer');
		$this->load->view('template/footer');

	}

	public function add() {
		$data['pageName'] = "Add Customers ";
    $data['state'] = $this->db->get('states')->result();
		$this->load->view('template/header');
		$this->load->view('template/nav',$data);
		$this->load->view('add-customer');
		$this->load->view('template/footer');

	}

	public function customerProcess() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('semail', 'Email', 'required|is_unique[clients.email]');
		$this->form_validation->set_rules('sname', 'Name ', 'required|trim');

		if($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata("error", "Email Already Existed. Please use another email address.");
			redirect("users/add");
		} else {
		$data = array(
			'name'=>$this->input->post('sname'),
			'address'=>$this->input->post('saddress'),
			'city'=>$this->input->post('scity'),
			'state'=>$this->input->post('sstate'),
			'email'=>$this->input->post('semail'),
			'phone'=>$this->input->post('sphone'),
			'pwd'=>md5($this->input->post('pwd')),
			'status'=>1,
			'type'=>'customer'
		);

		$insert = $this->db->insert('clients',$data);
		if($insert) {
			$this->session->set_flashdata('success','Customer Successfully Added');
			redirect('users');
		}
	}
}

public function loadCustomers() {
	$id = $this->input->post('id');
	$data = $this->db->get_where('clients',array('id'=>$id))->row_array();
	echo json_encode($data);
}

}
