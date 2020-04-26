<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Rest_inf extends CI_Controller
{
	public function information()
	{
		$this->load->model('Auth_model', 'auth');
		$data=$this->auth->get_restaurant_data($this->session->userdata('email'));
		$this->load->view('restaurant_information', array('data'=>$data));

	}

}







?>