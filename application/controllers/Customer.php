<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Customer extends CI_Controller
{
	public function home()
	{
		$role_id=$this->session->userdata('role_id');

		if(!$this->session->userdata('logged_in') || $role_id !='1')
		{
			redirect ('auth/login');
		}
		$this->load->view('customer_home');

	}
}







?>