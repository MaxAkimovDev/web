<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Add extends CI_Controller
{
	
	function add_dish()
	{
		if(!$this->session->userdata('logged_in') && !$this->session->userdata('role_id')==2)
		{
			redirect ('auth/login');
		}
		$this->form_validation->set_rules("name", "name", "required");
	    $this->form_validation->set_rules("description", "description", "required");
	    $this->form_validation->set_rules("price", "price", "required");
	    $this->form_validation->set_rules("weight", "weight", "required");
	    
	    // $config['upload_path'] = './uploads/';
	    // $config['allowed_types']  = 'gif|jpg|png|jpeg';
	    // $config['max_size']  = 2048;
	    // $file_name="image".time();
	    // $config['file_name']=$file_name;
	    // $this->upload->initialize($config);
		// $field_name = "image";
		$config['upload_path'] = $this->config->item('upload_path');
		$config['allowed_types']  = 'gif|jpg|png|jpeg';
		$config['max_size']  = 4048;
		$file_name="image".time();
		$config['file_name']=$file_name;
		$config['encrypt_name'] = TRUE;
		$this->upload->initialize($config);
		$field_name = "file";
		if($this->form_validation->run()==TRUE)
		{
			if (!$this->upload->do_upload($field_name)) {
				$file_error = $this->upload->display_errors();
				$this->session->set_flashdata("error","<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">'$file_error'<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
			     <span aria-hidden=\"true\">&times;</span></button></div>");
			} else {
				
				$this->load->model('Dish_model', 'add_dish');
				$this->add_dish->add_dish($this->session->userdata('logged_in'), $this->session->userdata('name'));
				redirect ('list_dish/dish_list');
			}
			
		}
		$this->load->view('add_dish');

	}
}
