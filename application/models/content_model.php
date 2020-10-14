<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function get_recent_by_category($category_id, $limit = 10, $offset = 0, $date = 0, $content = 0)
	{
		$sql_post_type = ''; // all post type!

		if($category_id > 0) {
			// Need to retrieve with sub-categories
			if($category_id == 1) { // News
				$sql_where = " AND (`PC`.`category_id`= 11
								OR `PC`.`category_id` = 12 
								OR `PC`.`category_id` = 13 
								OR `PC`.`category_id` = 14
								OR `PC`.`category_id` = 15)";
			} else if($category_id == 7) { // Semarang Raya
				$sql_where = " AND (`PC`.`category_id`= 16
								OR `PC`.`category_id` = 17
								OR `PC`.`category_id` = 18) ";				
			} else if($category_id == 19) { // Bodetabek
				$sql_where = " AND (`PC`.`category_id`= 2
								OR `PC`.`category_id` = 3
								OR `PC`.`category_id` = 4)";
		
		} else if($category_id == 5) { // Persija
				$sql_where = " AND (`PC`.`category_id`= 5) ";

		} else if($category_id == 5) { // Komunitas
				$sql_where = " AND (`PC`.`category_id` = 20
								OR `PC`.`category_id` = 21
								OR `PC`.`category_id` = 22
								OR `PC`.`category_id` = 23
								OR `PC`.`category_id` = 24) ";
			} else if($category_id == 991) { // Foto
				$sql_post_type 	.= " AND (`P`.`post_type` = '{$this->config->item('post_type')['photo']}') ";
				$sql_where 		= ''; 
			} else if($category_id == 992) { // Video
				$r = $this->get_recent_video($this->config->item('page_limit'), 0, 0, $date);
				if(isset($r['data'])) {
					return $r['data'];
				} else {
					return false; // null
				}			
			} else {
				$sql_where = " AND `PC`.`category_id` = {$category_id} ";
			}
		} else {
			$sql_where = "AND (`PC`.`category_id` != 89)"; 
		}


		// Retrieve Full Content of Article (RSS Purpose -- at this moment)
		$post_content = '';
		if($content > 0) {
			$post_content = ", `P`.`post_content` ";
		}

		// Index Query
		$sql_where_date = '';
		if($date > 0) {
			$sql_where_date = " AND `P`.`post_date` LIKE '{$date}%' "; // $date format: YYYY-MM-DD
		}

		$sql_limit = "LIMIT {$offset}, {$limit}";

		$sql = "SELECT `P`.`post_id`, `P`.`post_date`, `P`.`post_date_created`, `P`.`post_title`, `P`.`post_subtitle`, `P`.`post_summary`, `P`.`post_image_thumb`, `P`.`post_image_content`, `P`.`post_image_caption`, `P`.`post_name` AS `slug`, `P`.`post_type`, `PC`.`category_id`, `C`.`category_name`, `C`.`category_link`, `U`.`nama` AS `author`
			{$post_content}
				FROM posts P
					LEFT JOIN `posts_category` `PC` ON `PC`.`post_id` = `P`.`post_id`
					LEFT JOIN `category` `C` ON `C`.`category_id` = `PC`.`category_id`
					LEFT JOIN `user` `U` ON `U`.`uid`=`P`.`post_author`
				WHERE `P`.`post_status`='publishing' 
					{$sql_post_type}
					{$sql_where}
					{$sql_where_date}
			   	GROUP BY `P`.`post_id`
			   	ORDER BY `P`.`post_date` DESC
			   		{$sql_limit}
			";

		$query = $this->db->query($sql);
		$data  = $query->result_array();
		$query->free_result();

		/* Add Video Type */
		if($category_id == 0) {
			$tmp['recent_all'] 			= $data;
			$tmp['limit'] 				= ($date > 0) ? $this->config->item('page_limit') : ($limit / 2);
			$tmp['video_reformat'] 		= $this->get_recent_video($tmp['limit'], 0, 0, $date);  // set limit for recent
			$tmp['recent_all'] 			= array_merge($tmp['recent_all'], $tmp['video_reformat']['data']); // merge all types
			usort($tmp['recent_all'], "sort_array_by_datetime"); // sort by post date created, no need to reassign variable
			$tmp['recent_all'] 			= array_slice($tmp['recent_all'], 0, $limit);
			$data 						= $tmp['recent_all'];
			unset($tmp);
		}

		return $data;
	}

	private function get_recent_video($limit, $offset, $exception_id = 0, $date = 0)
	{
		// Index Query
		$sql_where_date = '';
		if($date > 0) {
			$sql_where_date = " AND `date` LIKE '{$date}%' "; // $date format: YYYY-MM-DD
		}

		// Author field should be changed! 992 is reserved category_id for Video
		$sql = "SELECT `video_id` AS `post_id`, 
						`date` AS `post_date`, 
						`date` AS `post_date_created`, 
						`title` AS `post_title`, 
						'' AS `post_subtitle`,
						`summary` AS `post_summary`, 
						`video` AS `post_image_thumb`,
						`video` AS `post_image_content`,
						`title` AS `post_image_caption`,
						`name` AS `slug`,
						'video' AS `post_type`,
						'992' AS `category_id`,
						'Video' AS `category_name`,
						'video' AS `category_link`,
						`source` AS `author`
				FROM `video`
				WHERE `status` = 'publishing'
					AND `video_id` <> {$exception_id}
					{$sql_where_date}
				ORDER BY `video_id` DESC
					LIMIT {$offset}, {$limit}";
		
		/*$this->db->select('*');
		$this->db->from('video');
		$this->db->where('status', 'publishing');
		$this->db->where('video_id <>', $exception_id); // I think if error not occured, this is efficient code without if-else for checking is the exception_id more than zero
		$this->db->order_by('video_id', 'desc');
		$this->db->limit($limit, $offset);*/

		$query = $this->db->query($sql);
		// $query = $this->db->get();
		$r['data'] = $query->result_array();
		$query->free_result();

		$sql_count = "SELECT count(`video_id`) AS `count_video` FROM `video` WHERE `status` = 'publishing' {$sql_where_date}";
		$query = $this->db->query($sql_count);
		$r['total_row'] = $query->row_array();
		$query->free_result();

		return $r;
	}

}

/* End of file content_model.php */
/* Location: ./application/models/content_model.php */