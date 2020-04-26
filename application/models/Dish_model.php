<?php 


class Dish_model extends CI_Model
{
	
	public function add_dish($id, $name)
	{
		$image =$this->upload->data();

  //insert data from add_product input
	  $data = array(
	   'name' => $this->input->post('name'),
	   'description' => $this->input->post('description'),
	   'price' => $this->input->post('price'),
	   'weight' => $this->input->post('weight'),
	   'rest_name' => $name,
	   'rest_id' => $id,
	   'photo' => $image['file_name']
	  );
	  	$this->db->insert('list', $data);
	}
	public function get_dish_list()
	{
		$this->db->select('*');
 		$this->db->from('list');
 		$query = $this->db->get();
 		return $query->result();

	}
}

