<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Video_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function get_recent($limit, $offset, $exception_id = 0)
	{
		$this->db->select('*');
		$this->db->from('video');
		$this->db->where('status', 'publishing');
		$this->db->where('video_id <>', $exception_id); // I think if error not occured, this is efficient code without if-else for checking is the exception_id more than zero
		$this->db->order_by('video_id', 'desc');
		$this->db->limit($limit, $offset);

		$query = $this->db->get();
		$r['data'] = $query->result_array();
		$query->free_result();

		$sql_count = "SELECT count(`video_id`) AS `count_video` FROM `video` WHERE `status` = 'publishing'";
		$query = $this->db->query($sql_count);
		$r['total_row'] = $query->row_array();
		$query->free_result();

		return $r;
	}

	function get_by_id($video_id)
	{
		$this->db->select('video_id, type, title, name, summary, description, keyword, image, image_thumbnail, video, youtube, status, date, source, nama');
		$this->db->from('video');
		$this->db->join('user', 'user.uid = video.uid', 'left');
		$this->db->where('video.video_id', $video_id);
		$this->db->order_by('video_id', 'asc');

		$query = $this->db->get();
		$r = $query->result_array();
		$query->free_result();

		return $r;
	}

	function get_keyword_by_id($video_id)
	{
		$this->db->select('keyword');
		$this->db->from('video');
		$this->db->where('video_id', $video_id);

		$query = $this->db->get();
		$data = $query->row();
		$query->free_result();

		return $data;
	}

}

/* End of file video_model.php */
/* Location: ./application/models/video_model.php */