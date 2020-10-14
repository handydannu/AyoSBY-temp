<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*** [!] Legacy API Model for Mobile ***/
class Api_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
  
	// Get Headline article JSON
	// 1st param : 0 for home
	public function getHeadline($id_category, $limit=10){
		// _d($limit); exit;
		if ($id_category != 0) { 
			switch($id_category) {
				case "59":
					$sql_where = " AND (PC.category_id = 59 OR PC.category_id = 64 OR PC.category_id = 65 OR PC.category_id = 66 OR PC.category_id = 68) ";
					break;
				case "60":
					$sql_where = " AND (PC.category_id = 60 OR PC.category_id = 70 OR PC.category_id = 71) ";
					break;
				case "61":
					$sql_where = " AND (PC.category_id = 61 OR PC.category_id = 75 OR PC.category_id = 76 OR PC.category_id = 77 OR PC.category_id = 78 OR PC.category_id = 79) ";
					break;
				case "62":
					$sql_where = " AND (PC.category_id = 62 OR PC.category_id = 72 OR PC.category_id = 73 OR PC.category_id = 74) ";
					break;
				default:
					$sql_where = " AND PC.category_id =".$id_category." ";
					break;
			}
		} else { $sql_where = ''; }

		$sql = "SELECT P.post_id, P.post_date, P.post_date_created, P.post_title, P.post_image_thumb,
					U.nama AS author
				FROM posts P
					LEFT JOIN posts_category PC ON PC.post_id=P.post_id
					LEFT JOIN user U ON U.uid=P.post_author
					WHERE P.post_status='publishing' AND P.post_type='article' AND P.post_feature=1
				   	".$sql_where."
				   	GROUP BY P.post_id
				   	ORDER BY P.post_date DESC
				   
				   	LIMIT 0, {$limit}
			   	";
		
		$query = $this->db->query($sql)->result();
		$topads = 'http://ayobandung.com/assets/img/mobile/ads/mob_bjb728.jpg';
  		$bottomads = 'http://ayobandung.com/assets/img/mobile/ads/mob_bjb728.jpg';
  		$toplink = 'http://www.bankbjb.co.id/';
  		$bottomlink = 'http://www.bankbjb.co.id/';
		if ($query != null) {
			return $response = array('status' => 'success', 'kode' => 200, 'data' => $query, 'top' => $topads, 'toplink' => $toplink, 'bottom' => $bottomads, 'bottomlink' => $bottomlink);
		} else {
			return $response = array('status' => 'failed', 'kode' => 502, 'data' => 'empty');
		}

		$query->free_result();
	}
	
	// Get Editor's choice article JSON
	public function getEditorsChoice($limit=10){
		$this->db->select('p.post_id');
		$this->db->select('p.post_date');
		$this->db->select('p.post_title');
		$this->db->select('p.post_image_thumb');
		$this->db->select('u.nama as author');
		$this->db->where('p.post_status','publishing');
		$this->db->where('p.post_type','article');
		$this->db->where('p.post_feature','2');
		$this->db->from('posts as p');
		$this->db->join('user as u', 'u.uid=p.post_author');
		$this->db->group_by('p.post_id');
		$this->db->order_by('p.post_date','desc');
		$this->db->limit($limit,0);
		$query = $this->db->get()->result();
		if ($query != null) {
			return $response = array('status' => 'success', 'kode' =>200, 'data' => $query);
		}else{
			return $response = array('status' => 'failed', 'kode' => 502, 'data' => 'empty');
		}
		$query->free_result();
	}
	
	//Get  Trending article JSON
	public function getTrending($limit=10){
		$this->db->select('p.post_id');
		$this->db->select('p.post_date');
		$this->db->select('p.post_title');
		$this->db->select('p.post_image_thumb');
		$this->db->select('u.nama as author');
		$this->db->where('p.post_status','publishing');
		$this->db->where('p.post_type','article');
		$this->db->where('p.post_feature','3');
		$this->db->from('posts as p');
		$this->db->join('user as u', 'u.uid=p.post_author');
		$this->db->group_by('p.post_id');
		$this->db->order_by('p.post_date','desc');
		$this->db->limit($limit,0);
		$query = $this->db->get()->result();
		if ($query != null) {
			return $response = array('status' => 'success', 'kode' => 200, 'data' => $query);
		}else{
			return $response = array('status' => 'failed', 'kode' => 502, 'data' => 'empty');
		}
		$query->free_result();
	}
	
	// Get Must Read article JSON
	// 1st param : 0 for home
	public function getMustRead($id_category,$limit=10){
		$this->db->select('p.post_id');
		$this->db->select('p.post_date');
		$this->db->select('p.post_title');
		$this->db->select('p.post_image_thumb');
		$this->db->select('u.nama as author');
		$this->db->where('p.post_status','publishing');
		$this->db->where('p.post_type','article');
		$this->db->where('p.post_feature','4');
		if ($id_category!=0) { 
			switch($id_category){
				case "59":
					$this->db->where('pc.category_id','59');
					$this->db->or_where('pc.category_id','64');
					$this->db->or_where('pc.category_id','65');
					$this->db->or_where('pc.category_id','66');
					$this->db->or_where('pc.category_id','68');
				break;
				case "60":
					$this->db->where('pc.category_id','60');
					$this->db->or_where('pc.category_id','70');
					$this->db->or_where('pc.category_id','71');
				break;
				case "61":
					$this->db->where('pc.category_id','61');
					$this->db->or_where('pc.category_id','75');
					$this->db->or_where('pc.category_id','76');
					$this->db->or_where('pc.category_id','77');
					$this->db->or_where('pc.category_id','78');
					$this->db->or_where('pc.category_id','79');
				break;
				case "62":
					$this->db->where('pc.category_id','62');
					$this->db->or_where('pc.category_id','72');
					$this->db->or_where('pc.category_id','73');
					$this->db->or_where('pc.category_id','74');
				break;
				default:
					$this->db->where('pc.category_id',$id_category);
				break;
			}
		}
		$this->db->from('posts as p');
		$this->db->join('posts_category as pc', 'pc.post_id = p.post_id');
		$this->db->join('user as u', 'u.uid=p.post_author');
		$this->db->group_by('p.post_id');
		$this->db->order_by('p.post_date','desc');
		$this->db->limit($limit,0);
		$query = $this->db->get()->result();
		if ($query != null) {
			return $response = array('status' => 'success', 'kode' => 200, 'data' => $query);
		}else{
			return $response = array('status' => 'failed', 'kode' => 502, 'data' => 'empty');
		}
		$query->free_result();
	}
	
	// Get recent article JSON
	/*
		1st param: id category (set to '0' for home page)
		2st param: limit how many article do you want to get in 1 page
		3rd param: page
	*/
	public function getRecentArticle($id_category,$limit=20,$page=1){
		$page = $page * $limit;
		$this->db->select('p.post_id');
		$this->db->select('p.post_date');
		$this->db->select('p.post_title');
		$this->db->select('p.post_image_thumb');
		$this->db->select('u.nama as author');
		$this->db->where('p.post_status','publishing');
		$this->db->where('p.post_type','article');
		$this->db->where('p.post_feature','4');
		if ($id_category!=0) { 
			switch($id_category){
				case "59":
					$this->db->where('pc.category_id','59');
					$this->db->or_where('pc.category_id','64');
					$this->db->or_where('pc.category_id','65');
					$this->db->or_where('pc.category_id','66');
					$this->db->or_where('pc.category_id','68');
					$this->db->or_where('pc.category_id','80');
				break;
				case "60":
					$this->db->where('pc.category_id','60');
					$this->db->or_where('pc.category_id','70');
					$this->db->or_where('pc.category_id','71');
				break;
				case "61":
					$this->db->where('pc.category_id','61');
					$this->db->or_where('pc.category_id','75');
					$this->db->or_where('pc.category_id','76');
					$this->db->or_where('pc.category_id','77');
					$this->db->or_where('pc.category_id','78');
					$this->db->or_where('pc.category_id','79');
				break;
				case "62":
					$this->db->where('pc.category_id','62');
					$this->db->or_where('pc.category_id','72');
					$this->db->or_where('pc.category_id','73');
					$this->db->or_where('pc.category_id','74');
				break;
				default:
					$this->db->where('pc.category_id',$id_category);
				break;
			}
		}
		$this->db->from('posts as p');
		$this->db->join('posts_category as pc', 'pc.post_id = p.post_id');
		$this->db->join('user as u', 'u.uid=p.post_author');
		$this->db->group_by('p.post_id');
		$this->db->order_by('p.post_date','desc');
		$this->db->limit($limit,$page);
		$query = $this->db->get()->result();
		$topads = 'http://ayobandung.com/assets/img/mobile/ads/mob_bjb728.jpg';
  		$bottomads = 'http://ayobandung.com/assets/img/mobile/ads/mob_bjb728.jpg';
  		$toplink = 'http://www.bankbjb.co.id/';
  		$bottomlink = 'http://www.bankbjb.co.id/';
		if ($query != null) {
			return $response = array('status' => 'success', 'kode' => 200, 'data' => $query,'top' => $topads, 'toplink' => $toplink ,'bottom' => $bottomads, 'bottomlink' => $bottomlink);
		}else{
			return $response = array('status' => 'failed', 'kode' => 502, 'data' => 'empty');
		}
		$query->free_result();
	}
	
	// Get popular article JSON
	/*
		1st param: time interval (1=24hours; 2=3days; 3=1months)
		2st param: limit how many article do you want to get in 1 page
	*/
	public function getPopular($interval,$limit=30){
		$_sql_where = array();
		switch($interval){
			case "1":
				$_sql_where[] = " P.post_date > DATE_SUB( NOW( ) , INTERVAL 24 HOUR ) "; // set for 1x24 from now
			break;
			case "2":
				$_sql_where[] = " P.post_date > DATE_SUB( NOW( ), INTERVAL 3 DAY )"; // set for 3x24 from now
			break;
			case "3":
			$start = date("Y-m").'-01 00:00:00';
			$end   = date("Y-m").'-31 00:00:00';

			$_sql_where = array();
			$_sql_where[] = " P.post_date BETWEEN '$start' AND '$end' ";

			$sql_where = '';
			break;
			default:
				$_sql_where[] = " P.post_date > DATE_SUB( NOW( ), INTERVAL 3 DAY )"; // set for 3x24 from now
			break;
		}
		$sql_where = '';
		if(count($_sql_where)>0) $sql_where = " AND ".implode(' AND ',$_sql_where);
		$sql = "SELECT P.post_id, P.post_date, P.post_title, P.post_image_thumb, PH.post_hits as hits_counter, 
					U.nama as author
				FROM posts as P
					LEFT JOIN posts_hits as PH ON PH.post_id=P.post_id
					LEFT JOIN user as U ON (U.uid = P.post_author)
				WHERE
					post_type = 'article' AND
					post_status = 'publishing'
				$sql_where
				GROUP BY P.post_id
				ORDER BY PH.post_hits DESC LIMIT 0, {$limit}
			";

		$query = $this->db->query($sql)->result();
		$topads = 'http://ayobandung.com/assets/img/mobile/ads/mob_bjb728.jpg';
  		$bottomads = 'http://ayobandung.com/assets/img/mobile/ads/mob_bjb728.jpg';
  		$toplink = 'http://www.bankbjb.co.id/';
  		$bottomlink = 'http://www.bankbjb.co.id/';
		if ($query != null) {
				return $response = array('status' => 'success', 'kode' =>200, 'data' => $query, 'top' => $topads, 'toplink' => $toplink, 'bottom' => $bottomads, 'bottomlink' => $bottomlink);
			}else{
				return $response = array('status' => 'failed', 'kode' => 502, 'data' => 'empty');
			}
		$query->free_result();
	}
	
	// Get related articles JSON by post_id from same category
	/*
		param: post_id
	*/
	public function getRelatedArticle($id,$keyword){
		$data = $this->db->query('SELECT p.post_id, p.post_date, p.post_title, p.post_image_thumb, u.nama as editor
					FROM posts as p
					LEFT JOIN posts_category as pc ON pc.post_id=p.post_id
					LEFT JOIN user as u ON u.uid=p.post_author
			WHERE MATCH(p.post_title,p.post_keyword) AGAINST("'.$keyword.'" IN BOOLEAN MODE) AND p.post_id !="'.$id.'" AND p.post_status = "publishing" AND p.post_type="article"
					ORDER BY p.post_date DESC
					LIMIT 30')->result();
		if ($data != null) {
			return $response = array('status' => 'success', 'kode' => 200, 'data' => $data);
		}else{
			return $response = array('status' => 'failed', 'kode' => 502, 'data' => 'empty');
		}
		$query->free_result();
	}
	
	//Get article JSON by post_id
	/*
		param: post_id
	*/
	public function getArticle($id,$datetime){
		$this->db->select('p.post_id');
		$this->db->select('p.post_date');
		$this->db->select('p.post_title');
		$this->db->select('p.post_content');
		$this->db->select('p.post_image_content');
		$this->db->select('p.post_image_caption');
		$this->db->select('p.post_name as slug');
		$this->db->select('p.post_status');
		$this->db->select('p.post_type');
		$this->db->select('p.post_keyword');
		$this->db->select('u.nama as editor');
		$this->db->select('us.nama as reporter');
		$this->db->select('pc.category_id');
		$this->db->select('p.post_source');
		$this->db->where('p.post_id',$id);
		$this->db->from('posts as p');
		$this->db->join('posts_category as pc', 'pc.post_id = p.post_id');
		$this->db->join('category as c', 'c.category_id=pc.category_id');
		$this->db->join('user as u', 'u.uid=p.post_author');
		$this->db->join('user as us', 'us.uid=p.post_editor','left');
		$query = $this->db->get()->result_array();
		
		$topads = 'http://ayobandung.com/assets/img/mobile/ads/mob_bjb728.jpg';
  		$bottomads = 'http://ayobandung.com/assets/img/mobile/ads/mob_bjb728.jpg';
  		$toplink = 'http://www.bankbjb.co.id/';
  		$bottomlink = 'http://www.bankbjb.co.id/';

  		// $post_thumb = $query[0]["thumb"];
  		$post_id = $query[0]["post_id"];
  		$post_date = $query[0]["post_date"];
  		$post_title = $query[0]["post_title"];
  		$post_content = $query[0]["post_content"];
  		$post_image_content = $query[0]["post_image_content"];
  		$post_image_caption = $query[0]["post_image_caption"];
  		$slug = $query[0]["slug"];
  		$post_status = $query[0]["post_status"];
  		$post_type = $query[0]["post_type"];
  		$post_keyword = $query[0]["post_keyword"];
  		$editor = $query[0]["editor"];
  		$reporter = $query[0]["reporter"];
  		$category_id = $query[0]["category_id"];
  		$post_source = $query[0]["post_source"];

  		$post_content = str_replace("&lt;", "<", $post_content);
  		$post_content = str_replace("&gt;", ">", $post_content);
  		$post_content = str_replace("&quot;", "\"", $post_content);
  		$post_content = str_replace("&amp;nbsp;", "<br>", $post_content);

  		$data = array(
  					'post_id' => $post_id, 
		  			'post_date' => $post_date, 
		  			'post_title' => $post_title, 
		  			'post_content' => $post_content,
		  			'post_image_content' => $post_image_content, 
		  			'post_image_caption' => $post_image_caption, 
		  			'slug' => $slug,
		  			'post_status' => $post_status, 
		  			'post_type' => $post_type,
		  			'post_keyword' => $post_keyword,
		  			'editor' => $editor, 
		  			'reporter' => $reporter,
		  			'category_id' => $category_id,
		  			'post_source' => $post_source
		  		);

  		$result[] = $data;

		if ($query != null) {
			$data_hits = $this->insertHits($id,$query[0]['category_id'],$datetime);
			$related = $this->getRelatedArticle($id,$query[0]['post_keyword']);
			return $response = array('status' => 'success', 'kode' => 200, 'data' => $result,'top' => $topads, 'toplink' => $toplink , 'bottom' => $bottomads, 'bottomlink' => $bottomlink, 'hits_status' => $data_hits, 'related' => $related);
		}else{
			return $response = array('status' => 'failed', 'kode' => 502, 'data' => 'empty');
		}
		$query->free_result();
	}
	
	// Insert news hits
	public function insertHits($news_id,$category,$timestamp){
		$data = $this->db->query('INSERT INTO posts_hits (post_id, category, post_hits, post_last_viewed) 
									VALUES ("'.$news_id.'", "'.$category.'", "1", "'.$timestamp.'") ON DUPLICATE KEY UPDATE post_hits=post_hits+1, post_last_viewed="'.$timestamp.'"');
		if ($data != null) {
			return $response = array('status' => 'success','kode' => 200, 'data' => $data);
		}else{
			return $response = array('status' => 'failed','kode' => 502,'data' => 'empty');
		}
		$data->free_result(); 
	}
	
	//Get recent photo JSON
	/*
		1st param: limit how many photos do you want to get in 1 page
		2nd param: page
	*/
	public function getRecentPhoto($limit=10,$page){
		$this->db->select('post_id');
		$this->db->select('post_date');
		$this->db->select('post_title');
		$this->db->select('post_image_thumb');
		$this->db->from('posts');
		$this->db->where('post_type', $this->config->item('post_type')['photo']);
		$this->db->where('post_status', 'publishing');
		$this->db->order_by('post_id','desc');
		if ($page==0) {
            $this->db->limit($limit);
        }else{
          $page = ($page*$limit);
		  $this->db->limit($limit,$page);
        }
		$query = $this->db->get()->result();
		$topads = 'http://ayobandung.com/assets/img/mobile/ads/mob_bjb728.jpg';
  		$bottomads = 'http://ayobandung.com/assets/img/mobile/ads/mob_bjb728.jpg';
  		$toplink = 'http://www.bankbjb.co.id/';
  		$bottomlink = 'http://www.bankbjb.co.id/';
		if ($query != null) {
			return $response = array('status' => 'success', 'kode' => 200, 'data' => $query,'top' => $topads, 'toplink' => $toplink, 'bottom' => $bottomads, 'bottomlink' => $bottomlink);
		}else{
			return $response = array('status' => 'failed', 'kode' => 502, 'data' => 'empty');
		}
		$query->free_result();
	}
	
	// Get detail photo JSON
	/*
		param: post_id
	*/
	public function getPhoto($id){
		$this->db->select('p.post_id');
		$this->db->select('p.post_date');
		$this->db->select('p.post_title');
		$this->db->select('p.post_content');
		$this->db->select('p.post_image_thumb as thumb');
		$this->db->select('ph.photo_id');
		$this->db->select('ph.image_thumb');
		$this->db->select('p.post_image_caption');
		$this->db->select('p.post_name as slug');
		$this->db->select('u.nama as editor');
		$this->db->select('p.post_source');
		$this->db->from('posts as p');
		$this->db->join('user as u', 'u.uid=p.post_author');
		$this->db->join('photo as ph', 'ph.post_id=p.post_id');
		$this->db->where('p.post_id',$id);
		$query = $this->db->get()->result_array();
		$topads = 'http://ayobandung.com/assets/img/mobile/ads/mob_bjb728.jpg';
  		$bottomads = 'http://ayobandung.com/assets/img/mobile/ads/mob_bjb728.jpg';
  		$toplink = 'http://www.bankbjb.co.id/';
  		$bottomlink = 'http://www.bankbjb.co.id/';

		$post_image_content = array();
  		for ($i = 0; $i < count($query);$i++){
  			$arr = array('photo_id' => $query[$i]["photo_id"], 'photo_content' => $query[$i]["image_thumb"]);
  			array_push($post_image_content,$arr);
  		}
  		$post_thumb = $query[0]["thumb"];
  		$post_id = $query[0]["post_id"];
  		$post_date = $query[0]["post_date"];
  		$post_title = $query[0]["post_title"];
  		$post_content = $query[0]["post_content"];
  		$post_image_caption = $query[0]["post_image_caption"];
  		$slug = $query[0]["slug"];
  		$editor = $query[0]["editor"];
  		$post_source = $query[0]["post_source"];

  		$post_content = str_replace("&lt;", "<", $post_content);
  		$post_content = str_replace("&gt;", ">", $post_content);
  		$post_content = str_replace("&nbsp;", "<br>", $post_content);
  		$post_content = str_replace("&amp;nbsp;", "<br>", $post_content);

  		$data = array('post_id' => $post_id, 'post_date' => $post_date, 'post_title' => $post_title, 'post_content' => $post_content, 'thumb' => $post_thumb, 'post_image_content' => $post_image_content, 'post_image_caption' => $post_image_caption, 'slug' => $slug, 'editor' => $editor, 'post_source' => $post_source);

  		$result[] = $data;

		if ($query != null) {
			return $response = array('status' => 'success', 'kode' => 200, 'data' => $result,'top' => $topads, 'toplink' => $toplink ,'bottom' => $bottomads, 'bottomlink' => $bottomlink);
		}else{
			return $response = array('status' => 'failed', 'kode' => 502,'data' => 'empty');
		}
		$query->free_result();
	}
	
	//Get recent video JSON
	/*
		1st param: limit how many video do you want to get in 1 page
		2nd param: page
	*/
	public function getRecentVideo($limit=10,$page){
	    $this->db->select('v.video_id');
		$this->db->select('v.date');
		$this->db->select('v.title');
		$this->db->select('v.name as slug');
		$this->db->select('v.youtube');
		$this->db->select('v.source');
		$this->db->select('u.nama as editor');
		$this->db->where('status','publishing');
		$this->db->from('video as v');
		$this->db->join('user as u', 'u.uid=v.uid');
		$this->db->order_by('video_id','desc');
		if ($page==0) {
            $this->db->limit($limit);
        }else{
          $page = ($page*$limit);
		  $this->db->limit($limit,$page);
        }
		$query = $this->db->get()->result();
		$topads = 'http://ayobandung.com/assets/img/mobile/ads/mob_bjb728.jpg';
  		$bottomads = 'http://ayobandung.com/assets/img/mobile/ads/mob_bjb728.jpg';
  		$toplink = 'http://www.bankbjb.co.id/';
  		$bottomlink = 'http://www.bankbjb.co.id/';
		if ($query != null) { 
			return $response = array('status' => 'success', 'kode' => 200, 'data' => $query,'top' => $topads, 'toplink' => $toplink ,'bottom' => $bottomads, 'bottomlink' => $bottomlink);
		}else{
			return $response = array('status' => 'failed', 'kode' => 502,'data' => 'empty');
		}
		$query->free_result();
	}
	
	// Get detail video JSON
	/*
		param: video_id
	*/
	public function getVideo($id){
		$this->db->where('video_id',$id);
		$query = $this->db->get('video')->result();
		$topads = 'http://ayobandung.com/assets/img/mobile/ads/mob_bjb728.jpg';
  		$bottomads = 'http://ayobandung.com/assets/img/mobile/ads/mob_bjb728.jpg';
  		$toplink = 'http://www.bankbjb.co.id/';
  		$bottomlink = 'http://www.bankbjb.co.id/';
		if ($query != null) {
			return $response = array('status' => 'success', 'kode' => 200, 'data' => $query,'top' => $topads, 'toplink' => $toplink ,'bottom' => $bottomads, 'bottomlink' => $bottomlink);
		}else{
			return $response = array('status' => 'failed', 'kode' => 502,'data' => 'empty');
		}
		$query->free_result();
	}
	
	// Search function with keyword
	public function getSearch($keyword){
		$this->db->select('p.post_id');
		$this->db->select('p.post_date');
		$this->db->select('p.post_title');
		$this->db->select('u.nama as editor');
		$this->db->select('p.post_image_thumb');
		$this->db->select('p.post_name as slug');
		$this->db->where('p.post_status','publishing');
		$this->db->where('p.post_type','article');
		$this->db->like('p.post_title', $keyword);
		$this->db->from('posts as p');
		$this->db->join('user as u', 'u.uid=p.post_author');
		$this->db->order_by('post_date','desc');
		
		$query = $this->db->get()->result();
		if ($query != null) {
			return $response = array('status' => 'success', 'kode' => 200, 'data' => $query);
		}else{
			return $response = array('status' => 'failed', 'kode' => 502,'data' => 'empty');
		}
		$query->free_result();
	}

	// Get Index For One day
	function getIndex($category_id,$date){
		/*
			id category (set to '0' for home page)
		*/

		$d = explode('/', $date);
		$date     = $d[2]. '-'.$d['1'].'-'.$d[0].' 00:00:00';
		$dateplus = date('Y-m-d H:i:s', strtotime($date. '+ 1 day'));

		$this->db->select('p.post_id');
		$this->db->select('p.post_date');
		$this->db->select('p.post_title');
		$this->db->select('p.post_image_thumb');
		$this->db->select('u.nama as editor');
		$this->db->where('p.post_status','publishing');
		$this->db->where('p.post_type','article');
		$this->db->where('p.post_date BETWEEN "'. $date. '" and "'. $dateplus.'"');
		if ($category_id!=0) { 
			switch($category_id){
				case "59":
					$this->db->where('pc.category_id','59');
					$this->db->or_where('pc.category_id','64');
					$this->db->or_where('pc.category_id','65');
					$this->db->or_where('pc.category_id','66');
					$this->db->or_where('pc.category_id','68');
				break;
				case "60":
					$this->db->where('pc.category_id','60');
					$this->db->or_where('pc.category_id','70');
					$this->db->or_where('pc.category_id','71');
				break;
				case "61":
					$this->db->where('pc.category_id','61');
					$this->db->or_where('pc.category_id','75');
					$this->db->or_where('pc.category_id','76');
					$this->db->or_where('pc.category_id','77');
					$this->db->or_where('pc.category_id','78');
					$this->db->or_where('pc.category_id','79');
				break;
				case "62":
					$this->db->where('pc.category_id','62');
					$this->db->or_where('pc.category_id','72');
					$this->db->or_where('pc.category_id','73');
					$this->db->or_where('pc.category_id','74');
				break;
				default:
					$this->db->where('pc.category_id',$category_id);
				break;
			}
		}
		$this->db->from('posts as p');
		$this->db->join('user as u', 'u.uid=p.post_author');
		$this->db->join('posts_category as pc', 'pc.post_id = p.post_id');
		$this->db->order_by('p.post_date','desc');
		$query = $this->db->get()->result();
		if ($query != null) {
			return $response = array('status' => 'success', 'kode' => 200, 'data' => $query);
		}else{
			return $response = array('status' => 'failed', 'kode' => 502, 'data' => 'empty');
		}
		$query->free_result();		
	}
	
	//Get Kanal List
	function getKanal(){
		$this->db->select('category_id');
		$this->db->select('category_name');
		$this->db->where('parent_id','0');	
		$query = $this->db->get('category')->result();
		if ($query != null) {
			return $response = array('status' => 'success', 'kode' => 200, 'data' => $query);
		}else{
			return $response = array('status' => 'failed', 'kode' => 502, 'data' => 'empty');
		}
		$query->free_result();
	}
	
	//Get Company Pages
	//
	function getPages(){
	    $about_us = '<p>Mengakses berita melalui internet sudah menjadi gaya hidup yang tak terelakkan. Seiring dengan arus itulah, kami mencoba hadir untuk melengkapi pilihan dan kebutuhan pembaca, berharap membuat hidup anda makin berwarna.</p><p><b>Mengapa ayobandung?</b></p><p>Tak dipungkiri lokalitas dan kecintaan pada tempat berpijak atau berasal sejatinya ada di setiap diri manusia. Karena itu segenap peristiwa, kabar atau kehebohan akan selalu menarik bagi mereka yang terlibat di dalamnya. Mencoba memenuhi kebutuhan dan kerinduan akan kabar dan cerita-cerita tempat bernaung inilah ayobandung.com hadir dengan menawarkan konten situs berita yang bisa anda akses kapanpun dan di manapun.</p><p>Namun sejalan dengan semangat untuk memberikan yang terbaik bagi Bandung tercinta tentu saja kami tak cuma menawarkan berita.</p><p>Kami juga mencoba menawarkan persaudaraan dan kebersamaan, karena kami juga memberikan ruang yang sangat luas untuk informasi kegiatan masyarakat dan komunitas di kota Bandung.</p><p>Jadi, mimpi besar kami semoga ayobandung.com tak hanya menjadi tempat mencari berita, tetapi juga rumah besar bagi interaksi dan informasi komunitas kota Bandung.</p><p>Semoga.</p><div style="font-size:120%;font-weight:bold;margin-top:30px;">Visi</div><img style="width: 100%; height:2px;" src="http://ayobandung.com/assets/img/element/line-orange.png" /><p><b><h4>Menjadi perusahaan multimedia nomor satu di Bandung</h4></b></p><div style="font-size:120%;font-weight:bold;margin-top:30px;">Misi</div><img style="width: 100%; height:2px;" src="http://ayobandung.com/assets/img/element/line-orange.png" /><p style="margin-top:15px;"><span style="margin-right:10px; color:white; font-size:100%; font-weight:bold; background-color:#f59221; font-style:italic;">01.</span>Mendekatkan diri dengan masyarakat di Bandung Raya</p><p><span style="margin-right:10px; color:white; font-size:100%; font-weight:bold; background-color:#f59221; font-style:italic;">02.</span>Menyajikan berita seputar Bandung Raya</p><p><span style="margin-right:10px; color:white; font-size:100%; font-weight:bold; background-color:#f59221; font-style:italic;">03.</span>Wadah sekaligus rumah bagi masyarakat di Bandung Raya dalam berbagai informasi</p><p><span style="margin-right:10px; color:white; font-size:100%; font-weight:bold; background-color:#f59221; font-style:italic;">04.</span>Menyajikan informasi yang inspiratif, komunikatif dan semangat positif</p>';
	    
        $advertise ='<p style="font-size:14pt;" ><b>Untuk pemasangan iklan hubungi kami :</b></p><p>Marcella</p><p>ayobandung.com</p><p>Jl. Sekar Tongeret No 14 Bandung 40264</p><p>Email : <a style="color:#231F20;" href="mailto:marketing@ayobandung.com" title="marketing@ayobandung.com">marketing@ayobandung.com</a></p><p><img style="width:20px;height:20px;" src="http://ayobandung.com/assets/img/element/icon-phone.png" /> 022-7311708</p><p><img style="width:20px;height:20px;" src="http://ayobandung.com/assets/img/element/icon-wa.png" /> 0811 217 4543</p><p><img style="width:20px;height:20px;" src="http://ayobandung.com/assets/img/element/icon-line.png" /><a href="https://line.me/R/ti/p/%40ayobandung.com" style="color:#231F20;">@ayobandung.com</a> (gunakan @)</p><p>atau scan QR Code akun Line dibawah ini</p><p><img style="width:150px;height:150px;" src="http://ayobandung.com/assets/img/logo/socmed_line_qr.jpg" alt="socmed line ayobandung.com" /></p><p></p><p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8164839.994345167!2d108.503063!3d-2.251476!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5ed3a2a2e0006a5f!2sAyo+Media+Corp+(Ayo+Bandung)!5e0!3m2!1sen!2sid!4v1488273209618" width=100% height="450" frameborder="0" style="border:0" allowfullscreen></iframe></p>';
        
	    $media_partner = '<p style="font-size:14pt;" ><b>Proposal dapat dikirim ke :</b></p><p>ayobandung.com</p><p>Jl. Sekar Tongeret No 14 Bandung 40264</p><p>Email : <a style="color:#231F20;" href="mailto:sosmed@ayobandung.com" title="sosmed@ayobandung.com">sosmed@ayobandung.com</a></p><p><img style="width:20px;height:20px;" src="http://ayobandung.com/assets/img/element/icon-wa.png" /> 0811 2069 272</p><p><img style="width:20px;height:20px;" src="http://ayobandung.com/assets/img/element/icon-line.png" /><a href="https://line.me/R/ti/p/%40ayobandung.com" style="color:#231F20;">@ayobandung.com</a> (gunakan @)</p><p>atau scan QR Code akun Line dibawah ini</p><p><img style="width:150px;height:150px;" src="http://ayobandung.com//assets/img/logo/socmed_line_qr.jpg" alt="socmed line ayobandung.com" /></p><p></p><p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8164839.994345167!2d108.503063!3d-2.251476!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5ed3a2a2e0006a5f!2sAyo+Media+Corp+(Ayo+Bandung)!5e0!3m2!1sen!2sid!4v1488273209618" width=100% height="450" frameborder="0" style="border:0" allowfullscreen></iframe></p>';
	    
	    $privacy_policy = '<p><b><h3>Pedoman Pemberitaan Media Siber</h3></b></p>

        <p>Kemerdekaan berpendapat, kemerdekaan berekspresi, dan kemerdekaan pers adalah hak asasi manusia yang dilindungi Pancasila, Undang-Undang Dasar 1945, dan Deklarasi Universal Hak Asasi Manusia PBB. Keberadaan media siber di Indonesia juga merupakan bagian dari kemerdekaan berpendapat, kemerdekaan berekspresi, dan kemerdekaan pers.</p>
        
        <p>Media siber memiliki karakter khusus sehingga memerlukan pedoman agar pengelolaannya dapat dilaksanakan secara profesional, memenuhi fungsi, hak, dan kewajibannya sesuai Undang-Undang Nomor 40 Tahun 1999 tentang Pers dan Kode Etik Jurnalistik. Untuk itu Dewan Pers bersama organisasi pers, pengelola media siber, dan masyarakat menyusun Pedoman Pemberitaan Media Siber sebagai berikut:</p>

        <ol>
            <li>Ruang Lingkup</li>
                <ol>
                    <li>Media Siber adalah segala bentuk media yang menggunakan wahana internet dan melaksanakan kegiatan jurnalistik, serta memenuhi persyaratan Undang-Undang Pers dan Standar Perusahaan Pers yang ditetapkan Dewan Pers.</li>
                    <li>Isi Buatan Pengguna (User Generated Content) adalah segala isi yang dibuat dan atau dipublikasikan oleh pengguna media siber, antara lain, artikel, gambar, komentar, suara, video dan berbagai bentuk unggahan yang melekat pada media siber, seperti blog, forum, komentar pembaca atau pemirsa, dan bentuk lain.</li>
                </ol>
            <li>Verifikasi dan keberimbangan berita</li>
                <ol>
                    <li>Pada prinsipnya setiap berita harus melalui verifikasi.</li>
                    <li>Berita yang dapat merugikan pihak lain memerlukan verifikasi pada berita yang sama untuk memenuhi prinsip akurasi dan keberimbangan.</li>
                    <li>Ketentuan dalam butir (a) di atas dikecualikan, dengan syarat:</li>
                    <ol>
                        <li>Berita benar-benar mengandung kepentingan publik yang bersifat mendesak;</li>
                        <li>Sumber berita yang pertama adalah sumber yang jelas disebutkan identitasnya, kredibel dan kompeten;</li>
                        <li>Subyek berita yang harus dikonfirmasi tidak diketahui keberadaannya dan atau tidak dapat diwawancarai;</li>
                        <li>Media memberikan penjelasan kepada pembaca bahwa berita tersebut masih memerlukan verifikasi lebih lanjut yang diupayakan dalam waktu secepatnya. Penjelasan dimuat pada bagian akhir dari berita yang sama, di dalam kurung dan menggunakan huruf miring.</li>
                    </ol>
                    <li>Setelah memuat berita sesuai dengan butir (c), media wajib meneruskan upaya verifikasi, dan setelah verifikasi didapatkan, hasil verifikasi dicantumkan pada berita pemutakhiran (update) dengan tautan pada berita yang belum terverifikasi.</li>                    
                </ol>
            <li>Isi Buatan Pengguna (User Generated Content)</li>
                <ol>
                    <li>Media siber wajib mencantumkan syarat dan ketentuan mengenai Isi Buatan Pengguna yang tidak bertentangan dengan Undang-Undang No. 40 tahun 1999 tentang Pers dan Kode Etik Jurnalistik, yang ditempatkan secara terang dan jelas.</li>
                    <li>Media siber mewajibkan setiap pengguna untuk melakukan registrasi keanggotaan dan melakukan proses log-in terlebih dahulu untuk dapat mempublikasikan semua bentuk Isi Buatan Pengguna. Ketentuan mengenai log-in akan diatur lebih lanjut.</li>
                    <li>Dalam registrasi tersebut, media siber mewajibkan pengguna memberi persetujuan tertulis bahwa Isi Buatan Pengguna yang dipublikasikan:</li>
                    <ol>
                        <li>Tidak memuat isi bohong, fitnah, sadis dan cabul;</li>
                        <li>Tidak memuat isi yang mengandung prasangka dan kebencian terkait dengan suku, agama, ras, dan antargolongan (SARA), serta menganjurkan tindakan kekerasan;</li>
                        <li>Tidak memuat isi diskriminatif atas dasar perbedaan jenis kelamin dan bahasa, serta tidak merendahkan martabat orang lemah, miskin, sakit, cacat jiwa, atau cacat jasmani.</li>
                    </ol>
                    <li>Media siber memiliki kewenangan mutlak untuk mengedit atau menghapus Isi Buatan Pengguna yang bertentangan dengan butir (c).</li>
                    <li>Media siber wajib menyediakan mekanisme pengaduan Isi Buatan Pengguna yang dinilai melanggar ketentuan pada butir (c). Mekanisme tersebut harus disediakan di tempat yang dengan mudah dapat diakses pengguna.</li>
                    <li>Media siber wajib menyunting, menghapus, dan melakukan tindakan koreksi setiap Isi Buatan Pengguna yang dilaporkan dan melanggar ketentuan butir (c), sesegera mungkin secara proporsional selambat-lambatnya 2 x 24 jam setelah pengaduan diterima.</li>
                    <li>Media siber yang telah memenuhi ketentuan pada butir (a), (b), (c), dan (f) tidak dibebani tanggung jawab atas masalah yang ditimbulkan akibat pemuatan isi yang melanggar ketentuan pada butir (c).</li>
                    <li>Media siber bertanggung jawab atas Isi Buatan Pengguna yang dilaporkan bila tidak mengambil tindakan koreksi setelah batas waktu sebagaimana tersebut pada butir (f).</li>
                </ol>
            <li>Ralat, Koreksi, dan Hak Jawab</li>
                <ol>
                    <li>Ralat, koreksi, dan hak jawab mengacu pada Undang-Undang Pers, Kode Etik Jurnalistik, dan Pedoman Hak Jawab yang ditetapkan Dewan Pers.</li>
                    <li>Ralat, koreksi dan atau hak jawab wajib ditautkan pada berita yang diralat, dikoreksi atau yang diberi hak jawab.</li>
                    <li>Di setiap berita ralat, koreksi, dan hak jawab wajib dicantumkan waktu pemuatan ralat, koreksi, dan atau hak jawab tersebut.</li>
                    <li>Bila suatu berita media siber tertentu disebarluaskan media siber lain, maka:</li>
                    <ol>
                        <li>Tanggung jawab media siber pembuat berita terbatas pada berita yang dipublikasikan di media siber tersebut atau media siber yang berada di bawah otoritas teknisnya;</li>
                        <li>Koreksi berita yang dilakukan oleh sebuah media siber, juga harus dilakukan oleh media siber lain yang mengutip berita dari media siber yang dikoreksi itu;</li>
                        <li>Media yang menyebarluaskan berita dari sebuah media siber dan tidak melakukan koreksi atas berita sesuai yang dilakukan oleh media siber pemilik dan atau pembuat berita tersebut, bertanggung jawab penuh atas semua akibat hukum dari berita yang tidak dikoreksinya itu.</li>
                    </ol>
                    <li>Sesuai dengan Undang-Undang Pers, media siber yang tidak melayani hak jawab dapat dijatuhi sanksi hukum pidana denda paling banyak Rp500.000.000 (Lima ratus juta rupiah).</li>
                </ol>
            <li>Pencabutan Berita</li>
                <ol>
                    <li>Berita yang sudah dipublikasikan tidak dapat dicabut karena alasan penyensoran dari pihak luar redaksi, kecuali terkait masalah SARA, kesusilaan, masa depan anak, pengalaman traumatik korban atau berdasarkan pertimbangan khusus lain yang ditetapkan Dewan Pers.</li>
                    <li>Media siber lain wajib mengikuti pencabutan kutipan berita dari media asal yang telah dicabut.</li>
                    <li>Pencabutan berita wajib disertai dengan alasan pencabutan dan diumumkan kepada publik.</li>
                </ol>
            <li>Iklan</li>
                <ol>
                    <li>Media siber wajib membedakan dengan tegas antara produk berita dan iklan.</li>
                    <li>Setiap berita/artikel/isi yang merupakan iklan dan atau isi berbayar wajib mencantumkan keterangan ”advertorial”, ”iklan”, ”ads”, ”sponsored”, atau kata lain yang menjelaskan bahwa berita/artikel/isi tersebut adalah iklan.</li>
                </ol>
            <li>Hak Cipta</li>
                <p>Media siber wajib menghormati hak cipta sebagaimana diatur dalam peraturan perundang-undangan yang berlaku. </p>
            <li>Pencantuman Pedoman</li>
                <p>Media siber wajib mencantumkan Pedoman Pemberitaan Media Siber ini di medianya secara terang dan jelas. </p>
            <li>Sengketa</li>
                <p>Penilaian akhir atas sengketa mengenai pelaksanaan Pedoman Pemberitaan Media Siber ini diselesaikan oleh Dewan Pers.</p>
        </ol>';
        
	    $management_editorial ='<div style="font-weight:bold; font-size:20pt;">Management:</div>
                      
            <p><b>Pemimpin Umum</b> : Hardiyansyah</p>	     
            <p><b>Direktur</b> : Ruddy Sukarno</p>
            <p><b>Direktur</b> : Endang Junaedi</p>
	       	<p><b>Direktur</b> : Roberto AM Purba</p>
            <p><b>GM Pengembangan & Produksi</b> : Dadan Muhanda</p>
			<p>&nbsp;</p>
			<div style="font-weight:bold; font-size:20pt;">Editorial:</div>
            <p><b>Penanggung Jawab Redaksi</b> : Roberto AM Purba</p>
            <p><b>Pemimpin Redaksi</b> : Adi Ginanjar</p>

            <p><b>Editor</b> : Andres Fatubun, Asri Wuni Wulandari, Andri Ridwan Fauzi</p>
            <p><b>Reporter</b> : Ananda M. Firdaus, Anggun Nindita, Arditya Pramono, Arfian Jammul, E. Reni Nuraisyah, Fajar Sukma, Faqih R. Syafei, Hengky Sulaksono, Husnul Khatimah, Mildan Abdalloh, Ngesti Sekar Dewi</p>
            <p><b>Fotografer</b> : Ramdhani, Irfan Al Faritzi</p>
            <p>&nbsp;</p>
 			
            <div style="font-weight:bold; font-size:20pt;">Pengembangan Produk Digital:</div>           
            
			<p><b>Developer</b> : Julia Edisa Kumala, Rizal Muhammad H, Ahmad Kusumadijaya</p>
            <p><b>Social Media Officer</b> : Erma U. Hasanah, Rafiqoh Fitriani, Amelia Agustina, Astri Mayangsari</p>
			<p><b>Designer</b> : Satrio Iman N, Fathin Arif Y</p>
            <p>&nbsp;</p>
            <div style="font-weight:bold; font-size:20pt;">Pemasaran dan Penjualan:</div>
            <p><b>Marketing Executive</b> : Kusnadi, Ellisa Nursanti</p>
			<p><b>Admin</b> : Astri Dwi S., Marcella Alexandria</p>
			<p><b>Tax & Finance</b> : Liza Septiani</p>
	       	<p>&nbsp;</p>
		   	<p>&nbsp;</p>
               
           	<div style="font-weight:bold; font-size:18pt;">Publisher:</div>
        	<b>PT Ayo Media Network </b><br>
		    Jl. Sekar Tongeret No. 14, Kota Bandung, Jabar<br>
	    	Telp: 022-7311708</p>
		    <b>SK Kemenkumham RI No. AHU-0010280.AH.01.01.TAHUN 2017 </b><br>';
			    
	 	$terms_conditions = '<p>Pengguna yang mengunjungi/mengakses/memanfaatkan fitur layanan ayobandung.com dianggap telah membaca, memahami dan menyetujui syarat-syarat dan ketentuan layanan yang berlaku di situs ini.</p>

	        <p>Ayobandung.com berhak untuk menambah atau mengurangi peraturan dan/atau menambah syarat-syarat dan ketentuan yang berlaku setiap saat tanpa pemberitahuan terlebih dahulu dan pengguna terikat oleh setiap perubahan tersebut.</p>

	        <p>Pengguna yang memanfaatkan fitur ayobandung.com wajib untuk mematuhi Ketentuan Layanan dan aturan perundang undangan yang berlaku. Pengelola berhak untuk memuat atau tidak memuat, mengedit dan atau menghapus data atau informasi yang disampaikan  pengguna.</p>

	        <p>Komentar adalah tanggapan pribadi dan sepenuhnya tanggungjawab pengguna atau diluar tanggungjawab ayobandung.com. Pengelola berhak untuk memuat atau tidak memuat atau mengubah kata-kata yang berbau pelecehan, intimidasi, atau kata-kata yang  menyerang/tidak sesuai dengan norma-norma suku, agama, ras, dan antar golongan.</p>';
	
	    $about_us_img = 'http://ayobandung.com/assets/img/mobile/aboutus.jpg';
	    $advertise_img = 'http://ayobandung.com/assets/img/mobile/advertise.jpg';
	    $media_partner_img = 'http://ayobandung.com/assets/img/mobile/mediapartner.jpg';
	    $privacy_policy_img = 'http://ayobandung.com/assets/img/mobile/privacy.jpg';
	    $management_editorial_img = 'http://ayobandung.com/assets/img/mobile/managementeditor.jpg';
	    $terms_conditions_img = 'http://ayobandung.com/assets/img/mobile/terms.jpg';
	    
		$data = array(
		            array('title' => 'About Us', 'content' => $about_us, 'img' => $about_us_img),
		            array('title' => 'Advertise', 'content' => $advertise, 'img' => $advertise_img),
		            array('title' => 'Media Partner', 'content' => $media_partner, 'img' => $media_partner_img), 
		            array('title' => 'Privacy Policy', 'content' => $privacy_policy, 'img' => $privacy_policy_img),
		            array('title' => 'Management & Editorial', 'content' => $management_editorial, 'img' => $management_editorial_img),
		            array('title' => 'Terms and Conditions', 'content' => $terms_conditions, 'img' => $terms_conditions_img)
	            );
		if ($data != null) {
			return $response = array('status' => 'success', 'kode' => 200, 'data' => $data);
		}else{
			return $response = array('status' => 'failed', 'kode' => 502,'data' => 'empty');
		}
		$data->free_result();
	}
}

