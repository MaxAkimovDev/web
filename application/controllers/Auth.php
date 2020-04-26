<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Auth extends CI_Controller
{
	
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect ("auth/login");
	}
	public function login()
	{
		$this->form_validation->set_rules("email", "Email", "trim|required|valid_email", array('valid_email' => 'This email has already registered'));
		$this->form_validation->set_rules("password", "Password", "trim|required");
		if ($this->form_validation->run() == true) {

			$this->load->model('auth_model', 'auth');
			$status = $this->auth->validate();
				if ($status == ERR_INVALID_EMAIL) 
				{
			$this->session->set_flashdata("error","<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
     Email is not valid<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
     <span aria-hidden=\"true\">&times;</span></button></div>");
  		 		} 
  		 		elseif ($status == ERR_INVALID_PASSWORD) 
  		 		{
    			$this->session->set_flashdata("error","<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
     Password is not valid<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
     <span aria-hidden=\"true\">&times;</span></button></div>");
				} 
	   			else 
	   			{
	    			$user_role = $this->auth->user_role();
				    $this->session->set_userdata("role_id", $user_role);
				    $this->session->set_userdata($this->auth->get_data());
				    $this->session->set_userdata("logged_in", true);

     					if($user_role==1) 
     						{
						      redirect("customer/home");
						    }
						else
						{
							redirect('restaurant/home');
						}
     /*elseif ($user_role==2) {
     	redirect("restaurant/home");
     }
	else($user_role==3)
     {
     	redirect("admin/home");
		}*/
				}
  		}
  		$this->load->view('login');
  	}

  	public function registration_restaurant()
  	{
  			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[restaurant.email]',
		   array('is_unique' => 'This email has already registered'));
		  $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]');
		  $this->form_validation->set_rules('confirm-password', 'Confirm password', 'required|matches[password]|min_length[3]');
		  $this->form_validation->set_rules('name', 'Name', 'required');
		  $this->form_validation->set_rules('country', 'Country field', 'required');
		  $this->form_validation->set_rules('city', 'City field', 'required');
		  $this->form_validation->set_rules('street', 'Street field', 'required');
		  $this->form_validation->set_rules('building', 'Building field', 'required');
		  $this->form_validation->set_rules('phone', 'Phone field', 'required');

		  if ($this->form_validation->run() == TRUE) {

		   $this->load->model('Auth_model', 'registration_restaurant');
		   $data=$this->registration_restaurant->registration_restaurant();

			$this->session->set_flashdata("error","<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">Registration is successful. Please login.<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
			     <span aria-hidden=\"true\">&times;</span></button></div>");
			redirect("auth/login", "refresh");
			}
		   else

		   {
		   	$this->session->set_flashdata("registration_error","<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
     <span aria-hidden=\"true\">&times;</span></button></div>");
		   }

		   $this->load->view('registration_restaurant');
  }
  	public function registration_user()
  	{
  		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]',
		   array('is_unique' => 'This email has already registered'));
		  $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]');
		  $this->form_validation->set_rules('confirm-password', 'Confirm password', 'required|matches[password]|min_length[3]');
		  $this->form_validation->set_rules('name', 'Name', 'required');

		  if ($this->form_validation->run() == TRUE) {

		   $this->load->model('Auth_model', 'registration_user');
		   $data=$this->registration_user->registration_user();


		   $this->session->set_flashdata("error","<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">Registration is successful. Please login.<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
			     <span aria-hidden=\"true\">&times;</span></button></div>");
			redirect("auth/login", "refresh");
			}
		   else

		   {
		   	$this->session->set_flashdata("registration_error","<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
     <span aria-hidden=\"true\">&times;</span></button>Registration failed</div>");
		   }

		   $this->load->view('registration_user');
  	}

  	}




