<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function get_by_id($category_id)
	{
		$this->db->select('category_id, category_name, category_link'); // this select defined according to current needs
		$this->db->from('category');
		$this->db->where('category.category_id', $category_id);
		$this->db->where('category.status', 1); // status: active

		$query = $this->db->get();
		$data = $query->result_array()[0]; // remove 1 level array of output
		$query->free_result();

		return $data;
	}

	public function get_parent_by_id($category_id)
	{
		$this->db->select('parent_id');
		$this->db->from('category');
		$this->db->where('category.category_id', $category_id);
		
		$query = $this->db->get();
		$data = $query->row();
		$query->free_result();

		// _d($data);

		if(!empty($data)) {
			if($data->parent_id > 0) {
				return $this->get_by_id($data->parent_id);
			}
		}

		return false;
	}

	public function get_by_name($category_name) // it means link/ $category_link
	{
		$this->db->select('category_id, category_name, category_link, parent_id'); // this select defined according to current needs
		$this->db->from('category');
		$this->db->where('category.category_link', $category_name);
		$this->db->where('category.status', 1); // status: active

		$query = $this->db->get();
		$data = $query->result_array();
		$query->free_result();

		if(!$data) {
			return false;
		}

		return $data[0]; // remove 1 level array of output
	}

}

/* End of file category_model.php */
/* Location: ./application/models/category_model.php */