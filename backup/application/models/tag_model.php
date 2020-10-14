<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tag_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function get_by_id($tag_id)
	{
		$this->db->select('tag_id, tag, slug'); // this select defined according to current needs
		$this->db->from('tag');
		$this->db->where('tag_id', $tag_id);
		// $this->db->where('status', 1); // status: active

		$query = $this->db->get();
		$data = $query->result_array(); // remove 1 level array of output
		$query->free_result();

		if(!$data) {
			return false;
		}

		return $data[0];
	}

	public function get_by_name($tag_name) // it means link/ $tag_link
	{
		$this->db->select('tag_id, tag, slug'); // this select defined according to current needs
		$this->db->from('tag');
		$this->db->where('slug', $tag_name);
		// $this->db->limit(1, 0) // anticipate not getting more than 1 result, but in return value already anticipated
		// $this->db->where('status', 1); // status: active

		$query = $this->db->get();
		$data = $query->result_array();
		$query->free_result();

		if(!$data) {
			return false;
		}

		return $data[0]; // remove 1 level array of output
	}

}

/* End of file tag_model.php */
/* Location: ./application/models/tag_model.php */