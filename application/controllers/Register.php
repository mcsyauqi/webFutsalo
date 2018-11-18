<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$this->load->view('v_register');
	}

	public function new_user() 
	{
	$data = array(
		'username' => $this->input->post('username'),
		'name' => $this->input->post('name'),
		'email' => $this->input->post('email'),
		'password' => $this->input->post('password'),
	);

	$this->m_user->new_user($data);

	redirect (site_url('welcome'));
	}
}

?>