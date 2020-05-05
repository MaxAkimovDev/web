<?php 
		

class Auth_model extends CI_Model
{
	private $_data=array();
	public function validate()
	{
		$email =$this->input->post('email');
		$password = md5($this->input->post('password'));
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email', $email);
		$query = $this->db->get();
		$row =$query->result();
		if($query->num_rows()==0) 
		{
			$this->db->select('*');
			$this->db->from('restaurant');
			$this->db->where('email', $email);
			$query = $this->db->get();			
			$row=$query->result();
		}
		
			if ($row[0]->password == $password) 
			{
					unset($row['password']);
					$this->_data = array(
						'email' => $row[0]->email,
						'name'=> $row[0]->name,
						'role_id'=> $row[0]->user_role
					);
					return ERR_NONE;
			}
			else{
			return ERR_INVALID_PASSWORD;
			} 		
			
			return  ERR_INVALID_EMAIL;
		
	}


	public function get_data()
	{
		return $this->_data;
	}


	public function user_role() {
  		if($this->_data['role_id']=='1') {
   			return 1;
  		}
  		elseif ($this->_data['role_id']=='2') {
  			return 2;
  		}
  	return 3;
 }
 	public function registration_restaurant()
 	{
 		// $status=$this->input->post('status');
		 //  $this->db->select('id');
		 //  $this->db->from('user_role');
		 //  $this->db->where('user_role', $status);
		 //  $query = $this->db->get();
		 //  $status_id=$query->row();
 		$data = array (
	   'email' => $this->input->post('email'),
	   'password' =>md5($this->input->post('password')),
	   'name' =>$this->input->post('name'),
	   'country' =>$this->input->post('country'),
	   'city' =>$this->input->post('city'),
	   'street' =>$this->input->post('street'),
	   'building' =>$this->input->post('building'),
	   'phone' =>$this->input->post('phone'),
	   'user_role'=>2
	   
  		);
  		$this->db->insert('restaurant', $data);
 		return $data;
 	}
 	public function registration_user()
 	{
 		// $status=$this->input->post('status');
		 //  $this->db->select('id');
		 //  $this->db->from('user_role');
		 //  $this->db->where('user_role', $status);
		 //  $query = $this->db->get();
		 //  $status_id=$query->row();
 		$data = array (
	   'email' => $this->input->post('email'),
	   'password' => md5($this->input->post('password')),
	   'name' => $this->input->post('name'),
	   'user_role'=> 1
	   
  		);
  		$this->db->insert('user', $data);
 		return $data;
 	}
 	public function get_restaurant_data($email)
 	{
 		$this->db->select('*');
 		$this->db->from('restaurant');
 		$this->db->where('email',$email);
 		$query = $this->db->get();
 		return $query->result();
 		
 	}
 	public function get_customer_data($email)
 	{
 		$this->db->select('*');
 		$this->db->from('user');
 		$this->db->where('email',$email);
 		$query = $this->db->get();
 		return $query->result();
 		
	 }
	 public function email_is_available($email)
	 {
		$this->db->select('*');
 		$this->db->from('user');
 		$this->db->where('email',$email);
 		$query = $this->db->get();
		 if ($query->num_rows()>0)
		 {
			 return true;
		 }
		 else
		 {
			return false;
		 }
	 }
	 public function email_is_available_rest($email)
	 {
		$this->db->select('*');
		$this->db->from('restaurant');
		$this->db->where('email',$email);
		$query = $this->db->get();
		if ($query->num_rows()>0)
		 {
			 return true;
		 }
		 else
		 {
			return false;
		 }
	 }




}
 