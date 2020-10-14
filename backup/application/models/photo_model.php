<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photo_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function get_recent($limit, $offset, $exception_id = 0)
	{
		$this->db->select('posts.*, user.nama');
		$this->db->from('posts');
		$this->db->join('user', 'user.uid = posts.post_author', 'left');
		$this->db->where('post_type', $this->config->item('post_type')['photo']);
		$this->db->where('post_status', 'publishing');
		if($exception_id > 0) {
			$this->db->where('post_id <>', $exception_id);
		}
		$this->db->order_by('post_id','desc');
		$this->db->limit($limit, $offset);

		$query = $this->db->get();
		$r['data'] = $query->result_array();
		$query->free_result();

		$sql_count = "SELECT count(`posts`.`post_id`) AS `count_photo` 
					FROM `posts` 
					WHERE `post_type` = '{$this->config->item('post_type')['photo']}' 
					AND `post_status` = 'publishing'";

		$query = $this->db->query($sql_count);
		$r['total_row'] = $query->row_array();
		$query->free_result();

		return $r;
	}

	function get_by_id($photo_id)
	{
		$this->db->select('photo_id, type, title, summary, description, image, image_thumb, date, status, posts.post_id, posts.post_title, source, post_date, post_date_modified, post_subtitle, post_summary, post_content, post_image_thumb, post_image_content, post_image_caption, post_name, post_status, post_type, post_feature, post_keyword, post_author, post_hits, post_source, post_date_created, nama');
		$this->db->from('photo');
		$this->db->join('posts', 'posts.post_id = photo.post_id', 'left');
		$this->db->join('user', 'user.uid = photo.uid', 'left');
		$this->db->where('photo.post_id', $photo_id);
		$this->db->where('posts.post_status', 'publishing');
		$this->db->order_by('photo_id', 'asc');

		$query = $this->db->get();
		$r = $query->result_array();
		$query->free_result();

		return $r;
	}



}

/* End of file photo_model.php */
/* Location: ./application/models/photo_model.php */