<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common_model extends CI_Model
{

	/**
	 * Get Metadata SEO Function
	 *
	 * @param $post_type
	 * @param $post_id
	 * @return array|boolean
	 * @see Metadata SEO Helper
	 */	
	function get_metadata_seo($post_type, $post_id)
	{
		if( $post_type == 'read' )
		{
			$field	= 'post_id';
			$table 	= 'posts';
			$data 	= array('post_title', 'post_summary');
		}
		else if( $post_type == 'view' )
		{
			$field	= 'post_id';
			$table 	= 'posts';
			$data 	= array('post_title', 'post_summary');
		} 
		else if( $post_type == 'watch' )
		{
			$field	= 'video_id';
			$table 	= 'video';
			$data 	= array('title', 'summary');
		}
		else
		{
			return false; 
		}

		$query = $this->db->select($data)->get_where($table, array($field => $post_id));
		$data = $query->row();
		$query->free_result();

		return $data;
		// return $query->row();
	}

	/**
	 * Set Hit Function
	 *
	 * The $category type: '{category_id}', 'foto', 'video'
	 *
	 * @param $data (array contains $post_id, $category, $post_hits, $post_last_viewed)
	 * @return boolean
	 * @see Read, View, Watch Controller on Index Function
	 */	
	public function set_hit($data)
	{
		$sql = "INSERT INTO `posts_hits` (`post_id`, `category`, `post_hits`, `post_last_viewed`)
				VALUES ('{$data['post_id']}', '{$data['category']}', '{$data['post_hits']}', '{$data['post_last_viewed']}')
				ON DUPLICATE KEY UPDATE `post_hits`=`post_hits`+1, `post_last_viewed`='{$data['post_last_viewed']}'
				";

		return $this->db->query($sql);
	}

}

/* End of file common_model.php */
/* Location: ./application/models/common_model.php */