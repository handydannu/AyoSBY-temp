<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*** [!] Legacy API ***/
class Api extends CI_Controller {
	
	/**
    * @route http://url/api/get
    * @verb GET
    */
    public function get()
    {
		$sql = "SELECT P.post_id, P.post_date, P.post_date_created, P.post_title, P.post_subtitle, P.post_summary, 
				P.post_image_thumb, P.post_image_content, P.post_image_caption, P.post_name as slug, P.post_type, 
				PC.category_id, C.category_name, C.category_link
				   FROM posts P
				   LEFT JOIN posts_category PC ON PC.post_id=P.post_id
				   LEFT JOIN category C ON C.category_id=PC.category_id
				   WHERE P.post_status='publishing' 
				   		AND (P.post_type='{$this->config->item('post_type')['article']}' OR P.post_type='{$this->config->item('post_type')['photo']}')
				   GROUP BY P.post_id
				   ORDER BY P.post_date DESC
				   LIMIT 1
			   ";

		$query = $this->db->query($sql);
		$row  = $query->row();

		echo $row->post_id. '<br>';
		echo $row->post_date. '<br>';
		echo $row->post_date_created. '<br>';
		echo $row->post_title. '<br>';
		echo $row->post_image_thumb. '<br>';
		echo $row->post_image_content. '<br>';
		echo $row->post_image_caption. '<br>';
		echo $row->category_id. '<br>';
		echo $row->category_name. '<br>';
		echo $row->category_link. '<br>';
		echo $row->post_type;

		$query->free_result();
    }

    /**
    * @route http://proyect/users
    * @verb POST

    public function store()
    {
        echo "Add";
    }

    /**
    * @route http://proyect/users
    * @verb PUT
    
    public function update()
    {
        echo "Update";
    }

    /**
    * @route http://proyect/users
    * @verb DELETE
    
    public function delete()
    {
        echo "Delete";
    }
	*/
	
}