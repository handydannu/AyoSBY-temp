<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
// header("Content-type: application/json");
/*** [!] Legacy API Model for Mobile ***/
class Api_model_new extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // Get Headline article JSON
    // 1st param : 0 for home
    // $this->db->join('category as c', 'c.category_id=pc.category_id');
    public function getHeadline($id_category, $limit = 10, $stat)
    {
        // _d($limit); exit;
        if ($id_category != 0) {
            switch ($id_category) {
                case "1":
                    $sql_where = " AND (`PC`.`category_id`= 11
								OR `PC`.`category_id` = 12
								OR `PC`.`category_id` = 13
								OR `PC`.`category_id` = 14
                                OR `PC`.`category_id` = 15)";
                    break;
                case "7":
                    $sql_where = " AND (`PC`.`category_id`= 16
								OR `PC`.`category_id` = 17
								OR `PC`.`category_id` = 18
								OR `PC`.`category_id` = 7) ";
                    break;
                case "19":
                    $sql_where = " AND (`PC`.`category_id`= 2
								OR `PC`.`category_id` = 3
								OR `PC`.`category_id` = 4
								OR `PC`.`category_id` = 20)";
                    break;
                case "5":
                    $sql_where = " AND (`PC`.`category_id`= 5) ";
                    break;
                default:
                    $sql_where = " AND PC.category_id =" . $id_category . " ";
                    break;
            }
        } else {
            $sql_where = '';
        }

        $sql = "SELECT P.post_id, P.post_date, P.post_date_created, P.post_date_created, P.post_title, P.post_image_content, C.category_name,
					U.nama AS author
				FROM posts P
					LEFT JOIN posts_category PC ON PC.post_id=P.post_id
					INNER JOIN category C ON C.category_id=PC.category_id
					LEFT JOIN user U ON U.uid=P.post_author
					WHERE P.post_status='publishing' AND P.post_type='article' AND P.post_feature=1
				 	" . $sql_where . "
				 	GROUP BY P.post_id
				 	ORDER BY P.post_date DESC
				 
				 	LIMIT 0, {$limit}
			 	";

        $query = $this->db->query($sql)->result();
        if ($stat == 1) {
            if ($query != null) {
                return $response = array('status' => 'success', 'kode' => 200, 'data' => $query);
            } else {
                return $response = array('status' => 'failed', 'kode' => 502, 'data' => null);
            }
        } else {
            return $query;
        }

        $query->free_result();
    }

    // Get Editor's choice article JSON
    public function getEditorsChoice($limit = 10)
    {
        $this->db->select('p.post_id');
        $this->db->select('p.post_date');
        $this->db->select('p.post_title');
        $this->db->select('p.post_image_content');
        $this->db->select('u.nama as author');
        $this->db->where('p.post_status', 'publishing');
        $this->db->where('p.post_type', 'article');
        $this->db->where('p.post_feature', '2');
        $this->db->from('posts as p');
        $this->db->join('user as u', 'u.uid=p.post_author');
        $this->db->group_by('p.post_id');
        $this->db->order_by('p.post_date', 'desc');
        $this->db->limit($limit, 0);
        $query = $this->db->get()->result();
        if ($query != null) {
            return $response = array('status' => 'success', 'kode' => 200, 'data' => $query);
        } else {
            return $response = array('status' => 'failed', 'kode' => 502, 'data' => null);
        }
        $query->free_result();
    }

    //Get  Trending article JSON
    public function getTrending($limit = 10)
    {
        $this->db->select('p.post_id');
        $this->db->select('p.post_date');
        $this->db->select('p.post_title');
        $this->db->select('p.post_image_content');
        $this->db->select('u.nama as author');
        $this->db->where('p.post_status', 'publishing');
        $this->db->where('p.post_type', 'article');
        $this->db->where('p.post_feature', '3');
        $this->db->from('posts as p');
        $this->db->join('user as u', 'u.uid=p.post_author');
        $this->db->group_by('p.post_id');
        $this->db->order_by('p.post_date', 'desc');
        $this->db->limit($limit, 0);
        $query = $this->db->get()->result();
        if ($query != null) {
            return $response = array('status' => 'success', 'kode' => 200, 'data' => $query);
        } else {
            return $response = array('status' => 'failed', 'kode' => 502, 'data' => null);
        }
        $query->free_result();
    }

    // Get Must Read article JSON
    // 1st param : 0 for home
    public function getMustRead($id_category, $limit = 10)
    {
        $this->db->select('p.post_id');
        $this->db->select('p.post_date');
        $this->db->select('p.post_date_created');
        $this->db->select('p.post_title');
        $this->db->select('p.post_name as slug');
        $this->db->select('c.category_name');
        $this->db->select('p.post_image_content');
        $this->db->select('u.nama as author');
        $this->db->where('p.post_status', 'publishing');
        $this->db->where('p.post_type', 'article');
        // $this->db->where('p.post_feature','4');
        if ($id_category != 0) {
            switch ($id_category) {
                case "1":
                    $sql_where = " AND (`PC`.`category_id`= 11
								OR `PC`.`category_id` = 12
								OR `PC`.`category_id` = 13
								OR `PC`.`category_id` = 14
                                OR `PC`.`category_id` = 15)";
                    break;
                case "7":
                    $sql_where = " AND (`PC`.`category_id`= 16
								OR `PC`.`category_id` = 17
								OR `PC`.`category_id` = 18
								OR `PC`.`category_id` = 7) ";
                    break;
                case "19":
                    $sql_where = " AND (`PC`.`category_id`= 2
								OR `PC`.`category_id` = 3
								OR `PC`.`category_id` = 4
								OR `PC`.`category_id` = 20)";
                    break;
                case "5":
                    $sql_where = " AND (`PC`.`category_id`= 5) ";
                    break;
                default:
                    $this->db->where('pc.category_id', $id_category);
                    break;
            }
        }
        $this->db->from('posts as p');
        $this->db->join('posts_category as pc', 'pc.post_id = p.post_id');
        $this->db->join('category as c', 'c.category_id=pc.category_id');
        $this->db->join('user as u', 'u.uid=p.post_author');
        $this->db->group_by('p.post_id');
        $this->db->order_by('p.post_date', 'desc');
        $this->db->limit($limit, 0);
        $query = $this->db->get()->result();
        if ($query != null) {
            return $response = array('status' => 'success', 'kode' => 200, 'data' => $query);
        } else {
            return $response = array('status' => 'failed', 'kode' => 502, 'data' => null);
        }
        $query->free_result();
    }

    // Get recent article JSON
    /*
		1st param: id category (set to '0' for home page)
		2st param: limit how many article do you want to get in 1 page
		3rd param: page
	*/
    public function getRecentArticle($id_category, $limit = 20, $page = 1, $stat)
    {
        $page = $page * $limit;
        $this->db->select('p.post_id');
        $this->db->select('p.post_date');
        $this->db->select('p.post_date_created');
        $this->db->select('p.post_title');
        $this->db->select('p.post_name as slug');
        $this->db->select('c.category_name');
        $this->db->select('p.post_image_content');
        $this->db->select('u.nama as author');
        $this->db->where('p.post_status', 'publishing');
        $this->db->where('p.post_type', 'article');
        // $this->db->where('p.post_feature','4');

        if ($id_category != 0) {
            switch ($id_category) {
                case 1:
                    $this->db->or_where('pc.category_id', 11);
                    $this->db->or_where('pc.category_id', 12);
                    $this->db->or_where('pc.category_id', 13);
                    $this->db->or_where('pc.category_id', 14);
                    $this->db->or_where('pc.category_id', 15);
                    break;
                case 7:
                    $this->db->where('pc.category_id', 16);
                    $this->db->or_where('pc.category_id', 17);
                    $this->db->or_where('pc.category_id', 18);
                    $this->db->or_where('pc.category_id', 7);
                    break;
                case 19:
                    $this->db->where('pc.category_id', 3);
                    $this->db->or_where('pc.category_id', 4);
                    $this->db->or_where('pc.category_id', 2);
                    $this->db->or_where('pc.category_id', 20);
                    break;
                case 5:
                    $this->db->where('pc.category_id', 5);
                    break;
                default:
                    $this->db->where('pc.category_id', $id_category);
                    break;
            }
        }
        $this->db->from('posts as p');
        $this->db->join('posts_category as pc', 'pc.post_id = p.post_id', 'left');
        $this->db->join('category as c', 'c.category_id=pc.category_id', 'left');
        $this->db->join('user as u', 'u.uid=p.post_author', 'left');
        $this->db->group_by('p.post_id');
        $this->db->order_by('p.post_date', 'desc');
        $this->db->limit($limit, $page);
        $query = $this->db->get()->result();
        $topads = '';
        $bottomads = '';
        $toplink = '';
        $bottomlink = '';
        if ($stat == 1) {
            if ($query != null) {
                return $response = array('status' => 'success', 'kode' => 200, 'data' => $query, 'top' => $topads, 'toplink' => $toplink, 'bottom' => $bottomads, 'bottomlink' => $bottomlink);
            } else {
                return $response = array('status' => 'failed', 'kode' => 502, 'data' => null);
            }
        } else {
            return $query;
        }

        // $query->free_result();
    }

    // Get popular article JSON
    /*
		1st param: time interval (1=24hours; 2=3days; 3=1months)
		2st param: limit how many article do you want to get in 1 page
	*/
    public function getPopular($interval, $limit = 30, $stat)
    {
        $_sql_where = array();
        switch ($interval) {
            case 1:
                $_sql_where[] = " P.post_date > DATE_SUB( NOW( ) , INTERVAL 24 HOUR ) "; // set for 1x24 from now
                break;
            case 2:
                $_sql_where[] = " P.post_date > DATE_SUB( NOW( ), INTERVAL 3 DAY )"; // set for 3x24 from now
                break;
            case 3:
                $start = date("Y-m") . '-01 00:00:00';
                $end   = date("Y-m") . '-31 00:00:00';

                $_sql_where = array();
                $_sql_where[] = " P.post_date BETWEEN '$start' AND '$end' ";

                $sql_where = '';
                break;
            default:
                $_sql_where[] = " P.post_date > DATE_SUB( NOW( ), INTERVAL 3 DAY )"; // set for 3x24 from now
                break;
        }
        $sql_where = '';
        if (count($_sql_where) > 0) $sql_where = " AND " . implode(' AND ', $_sql_where);
        $sql = "SELECT P.post_id, P.post_date, P.post_date_created, P.post_title, P.post_name as slug, P.post_image_content, C.category_name, PH.post_hits as hits_counter, 
					U.nama as author
				FROM posts as P
					LEFT JOIN posts_category PC ON PC.post_id=P.post_id
					INNER JOIN category C ON C.category_id=PC.category_id
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
        $topads = '';
        $bottomads = '';
        $toplink = '';
        $bottomlink = '';

        if ($stat == 1) {
            if ($query != null) {
                return $response = array('status' => 'success', 'kode' => 200, 'data' => $query, 'top' => $topads, 'toplink' => $toplink, 'bottom' => $bottomads, 'bottomlink' => $bottomlink);
            } else {
                return $response = array('status' => 'failed', 'kode' => 502, 'data' => null);
            }
        } else {
            return $query;
        }

        $query->free_result();
    }

    // Get related articles JSON by post_id from same category
    /*
		param: post_id
	*/
    public function getRelatedArticle($id, $keyword)
    {
        /*$sql = "SELECT `P`.`post_id`, `P`.`post_date`, `P`.`post_date_created`, `P`.`post_title`, `P`.`post_subtitle`, `P`.`post_summary`, `P`.`post_image_thumb`, `P`.`post_image_content`, `P`.`post_image_caption`, `P`.`post_name` AS `slug`, `P`.`post_type`, `PC`.`category_id`, `C`.`category_name`, `C`.`category_link`, `U`.`nama` AS `author`
			 FROM `posts` `P`
			 LEFT JOIN `posts_category` `PC` ON `PC`.`post_id` = `P`.`post_id`
			 LEFT JOIN `category` `C` ON `C`.`category_id` = `PC`.`category_id`
			 LEFT JOIN `user` `U` ON `U`.`uid`=`P`.`post_editor`
			 WHERE `P`.`post_status`='publishing' AND `P`.`post_type` = 'article' AND `P`.`post_feature` = 1
			 	AND `P`.`post_id` <> {$id}
			 GROUP BY `P`.`post_id`
			 ORDER BY `P`.`post_date` DESC
			 LIMIT 0, 30
			 ";*/
        $data = $this->db->query('SELECT p.post_id, p.post_date, p.post_date_created, p.post_title, p.post_image_content, p.post_name as slug, c.category_name, u.nama as author
					FROM posts as p
					LEFT JOIN posts_category as pc ON pc.post_id=p.post_id
					INNER JOIN category c ON c.category_id=pc.category_id
					LEFT JOIN user as u ON u.uid=p.post_author
					WHERE MATCH(p.post_keyword) AGAINST("' . $keyword . '" IN BOOLEAN MODE) AND p.post_id !="' . $id . '" AND p.post_status = "publishing" AND p.post_type="article"
					ORDER BY p.post_date DESC
					LIMIT 5')->result();
        // $data = $this->db->query($sql)->result();
        if ($data != null) {
            return $response = array('status' => 'success', 'kode' => 200, 'data' => $data);
        } else {
            return $response = array('status' => 'failed', 'kode' => 502, 'data' => null);
        }
        $query->free_result();
    }

    //Get article JSON by post_id
    /*
		param: post_id
	*/
    public function getArticle($id, $datetime)
    {
        $this->db->select('p.post_id');
        $this->db->select('p.post_date');
        $this->db->select('p.post_date_created');
        $this->db->select('p.post_title');
        $this->db->select('p.post_content');
        $this->db->select('p.post_image_content');
        $this->db->select('p.post_image_caption');
        $this->db->select('p.post_name as slug');
        $this->db->select('p.post_status');
        $this->db->select('p.post_type');
        $this->db->select('p.post_keyword');
        $this->db->select('u.nama as reporter');
        $this->db->select('us.nama as editor');
        $this->db->select('pc.category_id');
        $this->db->select('c.category_name');
        $this->db->select('p.post_source');
        $this->db->where('p.post_id', $id);
        $this->db->from('posts as p');
        $this->db->join('posts_category as pc', 'pc.post_id = p.post_id');
        $this->db->join('category as c', 'c.category_id=pc.category_id');
        $this->db->join('user as u', 'u.uid=p.post_author');
        $this->db->join('user as us', 'us.uid=p.post_author', 'left');
        $query = $this->db->get()->result_array();


        $topads = '';
        $bottomads = '';
        $toplink = '';
        $bottomlink = '';

        // $post_thumb = $query[0]["thumb"];
        $post_id = $query[0]["post_id"];
        $post_date = $query[0]["post_date"];
        $post_date_created = $query[0]["post_date_created"];
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
        $category_name = $query[0]["category_name"];
        $post_source = $query[0]["post_source"];

        $post_content = str_replace("&lt;", "<", $post_content);
        $post_content = str_replace("&gt;", ">", $post_content);
        $post_content = str_replace("&quot;", "\"", $post_content);
        $post_content = str_replace("&amp;nbsp;", "<br>", $post_content);

        $data = array(
            'post_id' => $post_id,
            'post_date' => $post_date,
            'post_date_created' => $post_date_created,
            'post_title' => $post_title,
            'post_content' => $post_content,
            'post_image_content' => $post_image_content,
            'post_image_caption' => $post_image_caption,
            'slug' => $slug,
            'post_status' => $post_status,
            'post_type' => $post_type,
            'post_keyword' => $post_keyword,
            'author' => $editor,
            'reporter' => $reporter,
            'category_id' => $category_id,
            'category_name' => $category_name,
            'post_source' => $post_source
        );

        $result[] = $data;

        if ($query != null) {
            $data_hits = $this->insertHits($id, $query[0]['category_id'], $datetime);
            $related = $this->getRelatedArticle($id, $query[0]['post_keyword']);
            $newsCategory = $this->getMustRead($query[0]['category_id'], 10);
            return $response = array('status' => 'success', 'kode' => 200, 'result' => $result, 'top' => $topads, 'toplink' => $toplink, 'bottom' => $bottomads, 'bottomlink' => $bottomlink, 'hits_status' => $data_hits, 'related' => $related, 'newsCategory' => $newsCategory);
        } else {
            return $response = array('status' => 'failed', 'kode' => 502, 'data' => null);
        }
        // $query->free_result();
    }

    // Insert news hits
    public function insertHits($news_id, $category, $timestamp)
    {
        $data = $this->db->query('INSERT INTO posts_hits (post_id, category, post_hits, post_last_viewed) 
									VALUES ("' . $news_id . '", "' . $category . '", "1", "' . $timestamp . '") ON DUPLICATE KEY UPDATE post_hits=post_hits+1, post_last_viewed="' . $timestamp . '"');
        if ($data != null) {
            return $response = array('status' => 'success', 'kode' => 200, 'hits' => $data);
        } else {
            return $response = array('status' => 'failed', 'kode' => 502, 'hits' => null);
        }
        $data->free_result();
    }

    //Get recent photo JSON
    /*
		1st param: limit how many photos do you want to get in 1 page
		2nd param: page
	*/
    public function getRecentPhoto($limit = 10, $page, $stat)
    {
        $this->db->select('post_id');
        $this->db->select('post_date');
        $this->db->select('post_date_created');
        $this->db->select('post_title');
        $this->db->select('post_image_content');
        $this->db->from('posts');
        $this->db->where('post_type', $this->config->item('post_type')['photo']);
        $this->db->where('post_status', 'publishing');
        $this->db->order_by('post_id', 'desc');
        if ($page == 0) {
            $this->db->limit($limit);
        } else {
            $page = ($page * $limit);
            $this->db->limit($limit, $page);
        }
        $query = $this->db->get()->result();
        $topads = '';
        $bottomads = '';
        $toplink = '';
        $bottomlink = '';

        if ($stat == 1) {
            if ($query != null) {
                return $response = array('status' => 'success', 'kode' => 200, 'data' => $query, 'top' => $topads, 'toplink' => $toplink, 'bottom' => $bottomads, 'bottomlink' => $bottomlink);
            } else {
                return $response = array('status' => 'failed', 'kode' => 502, 'data' => null);
            }
        } else {
            return $query;
        }

        $query->free_result();
    }

    // Get detail photo JSON
    /*
		param: post_id
	*/
    public function getPhoto($id)
    {
        $this->db->select('p.post_id');
        $this->db->select('p.post_date');
        $this->db->select('p.post_date_created');
        $this->db->select('p.post_title');
        $this->db->select('p.post_content');
        $this->db->select('p.post_image_content as thumb');
        $this->db->select('ph.photo_id');
        $this->db->select('ph.image_thumb');
        $this->db->select('ph.image');
        $this->db->select('p.post_image_caption');
        $this->db->select('p.post_name as slug');
        $this->db->select('u.nama as editor');
        $this->db->select('p.post_source');
        $this->db->from('posts as p');
        $this->db->join('user as u', 'u.uid=p.post_author');
        $this->db->join('photo as ph', 'ph.post_id=p.post_id');
        $this->db->where('p.post_id', $id);
        $query = $this->db->get()->result_array();
        $topads = '';
        $bottomads = '';
        $toplink = '';
        $bottomlink = '';

        $post_image_content = array();
        for ($i = 0; $i < count($query); $i++) {
            $arr = array('photo_id' => $query[$i]["photo_id"], 'photo_content' => $query[$i]["image"]);
            array_push($post_image_content, $arr);
        }
        $post_thumb = $query[0]["thumb"];
        $post_id = $query[0]["post_id"];
        $post_date = $query[0]["post_date"];
        $post_date_created = $query[0]["post_date_created"];
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

        $data = array('post_id' => $post_id, 'post_date' => $post_date, 'post_date_created' => $post_date_created, 'post_title' => $post_title, 'post_content' => $post_content, 'thumb' => $post_thumb, 'post_image_content' => $post_image_content, 'post_image_caption' => $post_image_caption, 'slug' => $slug, 'editor' => $editor, 'post_source' => $post_source);

        $result[] = $data;

        if ($query != null) {
            return $response = array('status' => 'success', 'kode' => 200, 'data' => $result, 'top' => $topads, 'toplink' => $toplink, 'bottom' => $bottomads, 'bottomlink' => $bottomlink);
        } else {
            return $response = array('status' => 'failed', 'kode' => 502, 'data' => null);
        }
        $query->free_result();
    }

    //Get recent video JSON
    /*
		1st param: limit how many video do you want to get in 1 page
		2nd param: page
	*/
    public function getRecentVideo($limit = 10, $page, $stat)
    {
        $this->db->select('v.video_id');
        $this->db->select('v.date');
        $this->db->select('v.title');
        $this->db->select('v.name as slug');
        $this->db->select('v.youtube');
        $this->db->select('v.source');
        $this->db->select('v.video');
        $this->db->select('u.nama as editor');
        $this->db->where('status', 'publishing');
        $this->db->from('video as v');
        $this->db->join('user as u', 'u.uid=v.uid');
        $this->db->order_by('video_id', 'desc');
        if ($page == 0) {
            $this->db->limit($limit);
        } else {
            $page = ($page * $limit);
            $this->db->limit($limit, $page);
        }
        $query = $this->db->get()->result();
        $topads = '';
        $bottomads = '';
        $toplink = '';
        $bottomlink = '';

        if ($stat == 1) {
            if ($query != null) {
                return $response = array('status' => 'success', 'kode' => 200, 'data' => $query, 'top' => $topads, 'toplink' => $toplink, 'bottom' => $bottomads, 'bottomlink' => $bottomlink);
            } else {
                return $response = array('status' => 'failed', 'kode' => 502, 'data' => null);
            }
        } else {
            return $query;
        }

        $query->free_result();
    }

    // Get detail video JSON
    /*
		param: video_id
	*/
    public function getVideo($id)
    {
        $this->db->where('video_id', $id);
        $query = $this->db->get('video')->result();
        $topads = '';
        $bottomads = '';
        $toplink = '';
        $bottomlink = '';
        if ($query != null) {
            return $response = array('status' => 'success', 'kode' => 200, 'data' => $query, 'top' => $topads, 'toplink' => $toplink, 'bottom' => $bottomads, 'bottomlink' => $bottomlink);
        } else {
            return $response = array('status' => 'failed', 'kode' => 502, 'data' => null);
        }
        $query->free_result();
    }

    // Search function with keyword
    public function getSearch($keyword)
    {
        $this->db->select('p.post_id');
        $this->db->select('p.post_date');
        $this->db->select('p.post_date_created');
        $this->db->select('p.post_title');
        $this->db->select('u.nama as author');
        $this->db->select('c.category_name');
        $this->db->select('p.post_image_content');
        $this->db->select('p.post_name as slug');
        $this->db->where('p.post_status', 'publishing');
        $this->db->where('p.post_type', 'article');
        $this->db->like('p.post_title', $keyword);
        $this->db->from('posts as p');
        $this->db->join('user as u', 'u.uid=p.post_author');
        $this->db->join('posts_category as pc', 'pc.post_id = p.post_id');
        $this->db->join('category as c', 'c.category_id=pc.category_id');
        $this->db->order_by('post_date', 'desc');
        $this->db->limit(100);

        $query = $this->db->get()->result();
        $topads = '';
        $bottomads = '';
        $toplink = '';
        $bottomlink = '';
        if ($query != null) {
            return $response = array('status' => 'success', 'kode' => 200, 'data' => $query, 'top' => $topads, 'toplink' => $toplink, 'bottom' => $bottomads, 'bottomlink' => $bottomlink);
        } else {
            return $response = array('status' => 'failed', 'kode' => 502, 'data' => null);
        }
        $query->free_result();
    }

    // Get Index For One day
    function getIndex($category_id, $date)
    {
        /*
			id category (set to '0' for home page)
		*/

        $d = explode('/', $date);
        $date     = $d[2] . '-' . $d[1] . '-' . $d[0] . ' 00:00:00';
        $dateplus = date('Y-m-d H:i:s', strtotime($date . '- 1 day'));
        $date     = $d[2] . '-' . $d['1'] . '-' . $d[0] . ' 23:59:59';

        $this->db->select('p.post_id');
        $this->db->select('p.post_date');
        $this->db->select('p.post_date_created');
        $this->db->select('p.post_title');
        $this->db->select('p.post_name as slug');
        $this->db->select('c.category_name');
        $this->db->select('p.post_image_content');
        $this->db->select('u.nama as author');
        $this->db->where('p.post_status', 'publishing');
        $this->db->where('p.post_type', 'article');
        $this->db->where('p.post_date BETWEEN "' . $dateplus . '" and "' . $date . '"');
        if ($category_id != 0) {
            switch ($category_id) {
                case 1:
                    $this->db->or_where('pc.category_id', 11);
                    $this->db->or_where('pc.category_id', 12);
                    $this->db->or_where('pc.category_id', 13);
                    $this->db->or_where('pc.category_id', 14);
                    $this->db->or_where('pc.category_id', 15);
                    break;
                case 7:
                    $this->db->where('pc.category_id', 16);
                    $this->db->or_where('pc.category_id', 17);
                    $this->db->or_where('pc.category_id', 18);
                    $this->db->or_where('pc.category_id', 7);
                    break;
                case 19:
                    $this->db->where('pc.category_id', 3);
                    $this->db->or_where('pc.category_id', 4);
                    $this->db->or_where('pc.category_id', 2);
                    $this->db->or_where('pc.category_id', 20);
                    break;
                case 5:
                    $this->db->where('pc.category_id', 5);
                    break;
                default:
                    $this->db->where('pc.category_id', $category_id);
                    break;
            }
        }
        $this->db->from('posts as p');
        $this->db->join('user as u', 'u.uid=p.post_author');
        $this->db->join('posts_category as pc', 'pc.post_id = p.post_id');
        $this->db->join('category as c', 'c.category_id=pc.category_id');
        $this->db->order_by('p.post_date', 'desc');
        $query = $this->db->get()->result();
        $topads = '';
        $bottomads = '';
        $toplink = '';
        $bottomlink = '';
        if ($query != null) {
            return $response = array('status' => 'success', 'kode' => 200, 'data' => $query, 'top' => $topads, 'toplink' => $toplink, 'bottom' => $bottomads, 'bottomlink' => $bottomlink);
        } else {
            return $response = array('status' => 'failed', 'kode' => 502, 'data' => null);
        }
        $query->free_result();
    }

    //Get Kanal List
    function getKanal()
    {
        $this->db->select('category_id');
        $this->db->select('category_name');
        $this->db->where('parent_id', '0');
        $this->db->where_not_in('category_id', '86');
        $this->db->where_not_in('category_id', '91');
        $this->db->where_not_in('category_id', '93');

        $query = $this->db->get('category')->result_array();

        // $result[0] = array("category_id" => "0", "category_name" => "Terbaru", "icon" => 'https://www.ayojakarta.com/assets/icon/newspaper-solid.png');
        // for ($i = 0; $i < sizeof($query); $i++) {
        //     $icon = '';
        //     if ($query[$i]['category_id'] == "1") {
        //         $icon = 'https://www.ayojakarta.com/assets/icon/city-solid.png';
        //     } else if ($query[$i]['category_id'] == "2") {
        //         $icon = 'https://www.ayojakarta.com/assets/icon/building-solid.png';
        //     } else if ($query[$i]['category_id'] == "3") {
        //         $icon = 'https://www.ayojakarta.com/assets/icon/street-view-solid.png';
        //     } else if ($query[$i]['category_id'] == "4") {
        //         $icon = 'https://www.ayojakarta.com/assets/icon/globe-asia-solid.png';
        //     } else if ($query[$i]['category_id'] == "5") {
        //         $icon = 'https://www.ayojakarta.com/assets/icon/walking-solid.png';
        //     } else if ($query[$i]['category_id'] == "6") {
        //         $icon = 'https://www.ayojakarta.com/assets/icon/futbol-solid.png';
        //     } else if ($query[$i]['category_id'] == "7") {
        //         $icon = 'https://www.ayojakarta.com/assets/icon/biking-solid.png';
        //     } else if ($query[$i]['category_id'] == "8") {
        //         $icon = 'https://www.ayojakarta.com/assets/icon/black-tie-brands.png';
        //     } else if ($query[$i]['category_id'] == "9") {
        //         $icon = 'https://www.ayojakarta.com/assets/icon/users-solid.png';
        //     }

        //     $result[$i + 1] = array("category_id" => $query[$i]['category_id'], "category_name" => $query[$i]['category_name'], "icon" => $icon);
        // }

        $result[0] = array("category_id" => "0", "category_name" => "Terbaru");
        for ($i = 0; $i < sizeof($query); $i++) {
            $result[$i + 1] = array("category_id" => $query[$i]['category_id'], "category_name" => $query[$i]['category_name']);
        }

        if ($query != null) {
            return $response = array('status' => 'success', 'kode' => 200, 'category' => $result);
        } else {
            return $response = array('status' => 'failed', 'kode' => 502, 'category' => null);
        }

        $query->free_result();
    }

    //Get Company Pages
    //
    function getPages()
    {
        $about_us = '<p>Mengakses berita melalui internet sudah menjadi gaya hidup. Seiring dengan arus tersebut kami mencoba hadir untuk melengkapi pilihan dan kebutuhan pembaca, berharap membuat hidup anda makin berwarna.</p><p><b>Mengapa ayobandung?</b></p><p>Tak dipungkiri lokalitas dan kecintaan pada tempat berpijak atau berasal sejatinya ada di setiap diri manusia. Karena itu segenap peristiwa, kabar atau kehebohan akan selalu menarik bagi mereka yang terlibat di dalamnya. Mencoba memenuhi kebutuhan dan kerinduan akan kabar dan cerita-cerita tempat bernaung inilah AyoBandung.com hadir menawarkan konten situs berita yang lebih banyak bercerita tentang Bandung.</p><p>Sejalan dengan semangat untuk memberi yang terbaik bagi Bandung tercinta tentu kami tak cuma menawarkan berita.</p><p>Kami juga memberikan ruang yang sangat luas bagi masyarakat dan komunitas untuk turut memberikan informasi melalui kanal AyoNetizen.</p><p>Jadi, mimpi besar kami semoga AyoBandung.com tak hanya menjadi tempat mencari berita, tetapi juga rumah besar bagi interaksi dan informasi komunitas kota Bandung.</p><p>Semoga.</p><div style="font-size:120%;font-weight:bold;margin-top:30px;">Visi</div><img style="width: 100%; height:2px;" src="https://www.ayobandung.com/assets/img/element/line-orange.png" /><p><b><h4>Menjadi perusahaan multimedia nomor satu di Bandung</h4></b></p><div style="font-size:120%;font-weight:bold;margin-top:30px;">Misi</div><img style="width: 100%; height:2px;" src="https://www.ayobandung.com/assets/img/element/line-orange.png" /><p style="margin-top:15px;"><span style="margin-right:10px; color:white; font-size:100%; font-weight:bold; background-color:#f59221; font-style:italic;">01.</span>Mendekatkan diri dengan masyarakat di Bandung Raya</p><p><span style="margin-right:10px; color:white; font-size:100%; font-weight:bold; background-color:#f59221; font-style:italic;">02.</span>Menyajikan berita seputar Bandung Raya</p><p><span style="margin-right:10px; color:white; font-size:100%; font-weight:bold; background-color:#f59221; font-style:italic;">03.</span>Wadah sekaligus rumah bagi masyarakat di Bandung Raya dalam berbagai informasi</p><p><span style="margin-right:10px; color:white; font-size:100%; font-weight:bold; background-color:#f59221; font-style:italic;">04.</span>Menyajikan informasi yang inspiratif, komunikatif dan semangat positif</p>';

        $advertise = '<p style="font-size:14pt;" ><b>Untuk pemasangan iklan hubungi kami :</b></p><p>Kusnadi/ Ellisa Nursanti</p><p>ayobandung.com</p><p>Jl. Terusan Halimun No. 50, Kota Bandung, Jawa Barat, 40263</p><p>Email : <a style="color:#231F20;" href="mailto:marketing@ayobandung.com" title="marketing@ayobandung.com">marketing@ayobandung.com</a></p><p>Telepon: (022) 7351 7371</p><p>WhatsApp: 0811 217 4543</p><p>LINE: <a href="https://line.me/R/ti/p/%40ayobandung.com" style="color:#231F20;">@ayobandung.com</a> (gunakan @)</p><p>atau scan QR Code akun Line dibawah ini</p><p><img style="width:150px;height:150px;" src="https://www.ayobandung.com/assets/img/page-advertise/socmed_line_qr.jpg" alt="socmed line ayobandung.com" /></p><p></p>';

        $media_partner = '<p style="font-size:14pt;" ><b>Proposal dapat dikirim ke :</b></p><p>ayobandung.com</p><p>Jl. Terusan Halimun No. 50, Kota Bandung, Jawa Barat, 40263</p><p>Email : <a style="color:#231F20;" href="mailto:sosmed@ayobandung.com" title="sosmed@ayobandung.com">sosmed@ayobandung.com</a></p><p>WhatsApp: 0811 2069 272</p><p>LINE: <a href="https://line.me/R/ti/p/%40ayobandung.com" style="color:#231F20;">@ayobandung.com</a> (gunakan @)</p><p>atau scan QR Code akun Line dibawah ini</p><p><img style="width:150px;height:150px;" src="https://www.ayobandung.com/assets/img/page-advertise/socmed_line_qr.jpg" alt="socmed line ayobandung.com" /></p><p></p>';

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
                <p>Media siber wajib menghormati hak cipta sebagaimana diatur dalam peraturan perundang-undangan yang berlaku.</p>
            <li>Pencantuman Pedoman</li>
                <p>Media siber wajib mencantumkan Pedoman Pemberitaan Media Siber ini di medianya secara terang dan jelas. </p>
            <li>Sengketa</li>
                <p>Penilaian akhir atas sengketa mengenai pelaksanaan Pedoman Pemberitaan Media Siber ini diselesaikan oleh Dewan Pers.</p>
        </ol>';

        $management_editorial = '<div style="font-weight:bold; font-size:20pt;">Management:</div>
			 
		<p><strong>Chief Executive Officer</strong> : Hilman Hidayat</p>
		<p><strong>Chief Creative Officer</strong> : Ruddy Sukarno</p>
		<p><strong>Chief Finance Officer</strong> : Endang Junaedi</p>
		<p><strong>Chief Business Officer</strong> : Roberto A. M. Purba</p>
		<p>&nbsp;</p>
		<div style="font-weight:bold; font-size:20pt;">Editorial:</div>
		<p><strong>Direktur Pemberitaan</strong> : Rahim Asyik</p>
		<p><strong>Pemimpin Redaksi</strong> : Adi Ginanjar</p>
		<p><strong>Kepala Perwakilan Semarang</strong> : Arri Widiarto</p>
		<p><strong>Editor</strong> : Andres Fatubun, Andri Ridwan Fauzi, Rizma Riyandi, Fira Nursyabani</p>
		<p><strong>Editor Bahasa</strong> : M. Naufal Hafizh</p>
		<p><strong>Reporter</strong> : Ananda M. Firdaus, E. Reni Nuraisyah, Faqih R. Syafei, Hengky Sulaksono, Husnul Khatimah, Mildan Abdalloh, Dadi Haryadi, Nur Khansa Ranawati, Anya Delanita.</p>
		<p><strong>Reporter Cirebon</strong> : Erika Lia</p>
		<p><strong>Reporter Purwakarta</strong> : Dede Nurhasanudin</p>
		<p><strong>Reporter Tasik</strong> : Irpan Wahab</p>
		<p><strong>Reporter Tegal</strong> : Dwi Ariadi, Lilis Nawati</p>
		<p><strong>Reporter Semarang</strong> : Afri Rismoko</p>
		<p><strong>Fotografer</strong> : Irfan Al-faritzi, M. Kavin Fazza</p>
		<p><strong>Video Editor</strong> : Muhammad Irfan Syah</p>
        <p>&nbsp;</p>
 			
        <div style="font-weight:bold; font-size:20pt;">IT, Social Media and Creative:</div>           
            
		<p><b>IT and Developer</b> : Muhammad Riza Alifi, Ahmad Kusumadijaya, Rizal Muhammad H.</p>
        <p><strong>IT and Developer</strong> : Ahmad Kusumadijaya, Rizal Muhammad H, Anggun Fergina.</p>
        <p><strong>Social Media Officer</strong> : Amelia Agustina, Astri Mayangsari, Yurizka Milantari, Levi Rachmalia, Arditya Pramono, Hengky Sulaksono, Anggun Nindita, Reva Nur Azizah, Zeiny Sofiani</p>
        <p><strong>Social Media Admin Semarang</strong> : Madania Shalsabila</p>
        <p><strong>Designer</strong> : Satrio Iman N., Attia Dwi Pinasti, M. Irfan Abiyyudistira, Devani Septanissa, Arrazzaq Zia</p>
        <p><strong>Designer Semarang</strong> : Eko Sugianto</p>    
        <p>&nbsp;</p>
        <div style="font-weight:bold; font-size:20pt;">Marketing & Sales:</div>
		<p><strong>GM Marketing Executive</strong> : Dadan Muhanda</p>
		<p><strong>Marketing Executive</strong> : Elisa Nursanti, Windy Novita Wulandari, Renna Dian Alinisa, Lilla Selvideliana</p>
		<p><strong>Admin</strong> : Cruzita Rizaldi</p>
		<p><strong>Tax &amp; Finance</strong> : Astri Dwi Setyorini, Ulfah Gita Fitriany</p>
	    <p>&nbsp;</p>
		<p>&nbsp;</p>
               
           	<div style="font-weight:bold; font-size:18pt;">Publisher:</div>
        	<b>PT Ayo Media Network </b><br>
		    Jl. Terusan Halimun No. 50, Kota Bandung, Jawa Barat, 40263<br>
	    	Telp: (022) 73517371</p>
		    <b>SK Kemenkumham RI No. AHU-0010280.AH.01.01.TAHUN 2017 </b><br>';

        $terms_conditions = '<p>Pengguna yang mengunjungi/mengakses/memanfaatkan fitur layanan ayobandung.com dianggap telah membaca, memahami dan menyetujui syarat-syarat dan ketentuan layanan yang berlaku di situs ini.</p>

	        <p>Ayobandung.com berhak untuk menambah atau mengurangi peraturan dan/atau menambah syarat-syarat dan ketentuan yang berlaku setiap saat tanpa pemberitahuan terlebih dahulu dan pengguna terikat oleh setiap perubahan tersebut.</p>

	        <p>Pengguna yang memanfaatkan fitur ayobandung.com wajib untuk mematuhi Ketentuan Layanan dan aturan perundang undangan yang berlaku. Pengelola berhak untuk memuat atau tidak memuat, mengedit dan atau menghapus data atau informasi yang disampaikan  pengguna.</p>

	        <p>Komentar adalah tanggapan pribadi dan sepenuhnya tanggungjawab pengguna atau diluar tanggungjawab ayobandung.com. Pengelola berhak untuk memuat atau tidak memuat atau mengubah kata-kata yang berbau pelecehan, intimidasi, atau kata-kata yang  menyerang/tidak sesuai dengan norma-norma suku, agama, ras, dan antar golongan.</p>';

        $about_us_img = 'https://www.ayobandung.com/assets/img/mobile/aboutus.jpg';
        $advertise_img = 'https://www.ayobandung.com/assets/img/mobile/advertise.jpg';
        $media_partner_img = 'https://www.ayobandung.com/assets/img/mobile/mediapartner.jpg';
        $privacy_policy_img = 'https://www.ayobandung.com/assets/img/mobile/privacy.jpg';
        $management_editorial_img = 'https://www.ayobandung.com/assets/img/mobile/managementeditor.jpg';
        $terms_conditions_img = 'https://www.ayobandung.com/assets/img/mobile/terms.jpg';

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
        } else {
            return $response = array('status' => 'failed', 'kode' => 502, 'data' => null);
        }
        // $data->free_result();
    }

    function get_version_app($device)
    {
        $this->db->where('device', $device);
        $query = $this->db->get('version')->result();
        if ($query != null) {
            return $response = array('status' => 'success', 'kode' => 200, 'data' => $query);
        } else {
            return $response = array('status' => 'failed', 'kode' => 502, 'data' => null);
        }
        // $query->free_result();
    }
}
