<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Customer extends CI_Controller
{
	public function home()
	{
		if(!$this->session->userdata('logged_in') && $this->session->userdata('role_id')!='1')
		{
			redirect ('auth/login');
		}
		
		$data=$this->session->userdata();
		print_r($data);
		die();
		$this->load->view('customer_home');

	}
}







?>