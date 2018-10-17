<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
			//$data['pageName'] = "Login";
			$this->load->view('login');

	}

	public function authentication() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username','trim|required|max_length[20]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if($this->form_validation->run() == false)
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('login');
		}
		else
		{
			//gets input
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			//verify user
			$query = $this->db->get_where('allusers',array('username'=>$username, 'password'=>$password));
			if($query->num_rows() == 1) {
				$row = $query->row_array();
					$userSessionData = array(
						'id' => $row['id'],
						'name' => $row['name'],
						'username' => $row['username'],
						'email'=>$row['email'],
						'type' => $row['type'],
						'office'=>$row['office_id'],
						'isLoggedIn' => true
					);

					$this->session->set_userdata($userSessionData);

					redirect('admindash');

		} else {
			$this->session->set_flashdata('error', 'Invalid username or password');
			redirect('login');
			}
		}
	}


}
