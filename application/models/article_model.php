<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Article_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_headline_by_category($category_id, $limit = 10)
    {
        if ($category_id > 0) {
            $sql_where = " AND `PC`.`category_id` = {$category_id} ";
        } else {
            $sql_where = '';
        }

        $sql = "SELECT `P`.`post_id`, `P`.`post_date`, `P`.`post_date_created`, `P`.`post_title`, `P`.`post_subtitle`, `P`.`post_summary`, `P`.`post_image_thumb`, `P`.`post_image_content`, `P`.`post_image_caption`, `P`.`post_name` AS `slug`, `P`.`post_type`, `PC`.`category_id`, `C`.`category_name`, `C`.`category_link`, `U`.`nama` AS `author`
			   FROM `posts` `P`
			   LEFT JOIN `posts_category` `PC` ON `PC`.`post_id` = `P`.`post_id`
			   LEFT JOIN `category` `C` ON `C`.`category_id` = `PC`.`category_id`
			   LEFT JOIN `user` `U` ON `U`.`uid`=`P`.`post_author`
			   WHERE `P`.`post_status`='publishing' AND `P`.`post_type` = 'article' AND `P`.`post_feature` = 1
			   {$sql_where}
			   GROUP BY `P`.`post_id`
			   ORDER BY `P`.`post_date` DESC
			   LIMIT 0, {$limit}
			   ";

        $query = $this->db->query($sql);
        $data = $query->result_array();
        $query->free_result();

        return $data;
    }

    public function get_recent_by_category($category_id, $limit = 10, $offset = 0, $date = 0, $content = 0)
    {
        if ($category_id > 0) {
            if ($category_id == 1) { // News
                $sql_where = " AND (`PC`.`category_id`= 11
								OR `PC`.`category_id` = 12
								OR `PC`.`category_id` = 13
								OR `PC`.`category_id` = 14
								OR `PC`.`category_id` = 15)";
            // } else if ($category_id == 7) { // Semarang Raya
            //     $sql_where = " AND (`PC`.`category_id`= 16
			// 					OR `PC`.`category_id` = 17
			// 					OR `PC`.`category_id` = 18
            //                     OR `PC`.`category_id` = 7) ";
            } else if ($category_id == 27) { // Semarang Raya
                $sql_where = " AND (`PC`.`category_id`= 16
								OR `PC`.`category_id` = 17
								OR `PC`.`category_id` = 7) ";
            } else if ($category_id == 19) { // Bodetabek
                $sql_where = " AND (`PC`.`category_id`= 2
								OR `PC`.`category_id` = 3
								OR `PC`.`category_id` = 4
								OR `PC`.`category_id` = 20)";

            } else if ($category_id == 5) { // Persija
                $sql_where = " AND (`PC`.`category_id`= 5) ";

                // Need to retrieve with sub-categories
                //     if($category_id == 3) { // Umum
                //         $sql_where = " AND (`PC`.`category_id` = 3
                //                         OR `PC`.`category_id` = 4)";
                //         }
                //         else if($category_id == 1) { // Metropolitan
                //     $this->db->or_where('posts_category.category_id', 11);
                //     $this->db->or_where('posts_category.category_id', 12); // Nasional
                //     $this->db->or_where('posts_category.category_id', 13); // Internasional
                //     $this->db->or_where('posts_category.category_id', 14); // Internasional
                //     $this->db->or_where('posts_category.category_id', 15); // Internasional
                //     // $this->db->or_where('posts_category.category_id', 11); // Internasional
                //     // $this->db->or_where('posts_category.category_id', 12); // Internasional
                //     // $this->db->or_where('posts_category.category_id', 13); // Internasional

                // } else if($category_id == 2) { // Bodetabek
                //         $sql_where = " AND (`PC`.`category_id` = 16
                //                         OR `PC`.`category_id` = 17
                //                         OR `PC`.`category_id` = 18
                //                         OR `PC`.`category_id` = 19)";

                // } else if($category_id == 6) { // Persija
                //         $sql_where = " AND (`PC`.`category_id` = 6
                //                         OR `PC`.`category_id` = 25
                //                         OR `PC`.`category_id` = 7) ";

                // } else if($category_id == 5) { // Komunitas
                //         $sql_where = " AND (`PC`.`category_id` = 20
                //                         OR `PC`.`category_id` = 21
                //                         OR `PC`.`category_id` = 22
                //                         OR `PC`.`category_id` = 23
                //                         OR `PC`.`category_id` = 24) ";
                //             } else if($category_id == 62) { // Persib
                //                 $sql_where = " AND (`PC`.`category_id` = 62
                //                                 OR `PC`.`category_id` = 72
                //                                 OR `PC`.`category_id` = 73
                //                                 OR `PC`.`category_id` = 74) ";
                //             } else if($category_id == 67) { // Olahraga
                //                 $sql_where = " AND (`PC`.`category_id` = 67
                //                                 OR `PC`.`category_id` = 82
                //                                 OR `PC`.`category_id` = 83) ";
                //             }  else if($category_id == 61) { // Wisata
                //                 $sql_where = " AND (`PC`.`category_id` = 61
                //                                 OR `PC`.`category_id` = 75
                //                                 OR `PC`.`category_id` = 76
                //                                 OR `PC`.`category_id` = 77
                //                                 OR `PC`.`category_id` = 78
                //                                 OR `PC`.`category_id` = 79) ";
            } else {
                $sql_where = " AND `PC`.`category_id` = {$category_id} ";
            }
        } else {
            $sql_where = '';
        }

        // Retrieve Full Content of Article
        $post_content = '';
        if ($content > 0) {
            $post_content = ", `P`.`post_content` ";
        }

        // Index Query
        $sql_where_date = '';
        if ($date > 0) {
            $sql_where_date = "AND `P`.`post_date` LIKE '{$date}%' "; // $date format: YYYY-MM-DD
        }
        $sql_limit = "LIMIT {$offset}, {$limit}";

        $sql = "SELECT `P`.`post_id`, `P`.`post_date`, `P`.`post_date_created`, `P`.`post_title`, `P`.`post_subtitle`, `P`.`post_summary`, `P`.`post_image_thumb`, `P`.`post_image_content`, `P`.`post_image_caption`, `P`.`post_name` AS `slug`, `P`.`post_type`, `PC`.`category_id`, `C`.`category_name`, `C`.`category_link`, `U`.`nama` AS `author`,`PH`.`post_hits` as `hits`
			{$post_content}
				FROM posts P
					LEFT JOIN `posts_hits` `PH` ON `PH`.`post_id` = `P`.`post_id`
					LEFT JOIN `posts_category` `PC` ON `PC`.`post_id` = `P`.`post_id`
					LEFT JOIN `category` `C` ON `C`.`category_id` = `PC`.`category_id`
					LEFT JOIN `user` `U` ON `U`.`uid`=`P`.`post_author`
				WHERE `P`.`post_status`='publishing' AND `P`.`post_type` = 'article'
					{$sql_where}
					{$sql_where_date}
			   	GROUP BY `P`.`post_id`
			   	ORDER BY `P`.`post_date` DESC
			   		{$sql_limit}
			";

        $query = $this->db->query($sql);
        $data = $query->result_array();
        $query->free_result();

        return $data;
    }

    public function get_popular_by_category($category_id = 0, $limit = 10)
    {
        $arr_sql_where = array();
        $arr_sql_where[] = " `P`.`post_date` > DATE_SUB(NOW(), INTERVAL 24 HOUR) "; // Set 24 Hours from Now

        $sql_where = '';
        if ($category_id > 0) {
            $sql_where .= " AND `PC`.`category_id` = {$category_id} ";
        }

        if (count($arr_sql_where) > 0) {
            $sql_where .= " AND " . implode(' AND ', $arr_sql_where);
        }

        $sql = "SELECT `P`.`post_id`, `P`.`post_date`, `P`.`post_subtitle`, `P`.`post_date_created`, `P`.`post_title`, `P`.`post_summary`, `P`.`post_image_thumb`, `P`.`post_image_content`, `P`.`post_type`, `P`.`post_feature`, `P`.`post_name` as `slug`, P.`post_author`, `P`.`post_editor`, `PC`.`category_id`, `PH`.`post_hits` as `hits`, `U`.`nama` as `author_name`
				FROM `posts` `P`
					LEFT JOIN `posts_hits` `PH` ON `PH`.`post_id` = `P`.`post_id`
					LEFT JOIN `posts_category` `PC` ON `PC`.`post_id` = `P`.`post_id`
					LEFT JOIN `user` `U` ON (`U`.`uid` = `P`.`post_author`)
				WHERE
					`post_type` = 'article' AND
					`post_status` = 'publishing'
					{$sql_where}
				GROUP BY `P`.`post_id`
				ORDER BY `PH`.`post_hits` DESC
				LIMIT {$limit}
			";

        $query = $this->db->query($sql);
        $data = $query->result_array();
        $query->free_result();

        return $data;
    }

    public function tag_populer()
    {
        $sql = "SELECT tag,slug FROM `tag` ORDER BY `tag`.`count` DESC LIMIT 5";

        $query = $this->db->query($sql);
        $data = $query->result_array();
        $query->free_result();

        return $data;
    }

    public function get_popular_monthly_by_category($category_id = 0, $limit = 10)
    {
        date_default_timezone_set('Asia/Jakarta');

        $start = date("Y-m") . '-01 00:00:00';
        $end = date("Y-m") . '-31 00:00:00';

        $arr_sql_where = array();
        $arr_sql_where[] = " `P`.`post_date` BETWEEN '{$start}' AND '{$end}' "; // Set Between '01' to '31'

        $sql_where = '';
        if ($category_id > 0) {
            $sql_where .= " AND `PC`.`category_id` = {$category_id} ";
        }

        if (count($arr_sql_where) > 0) {
            $sql_where = " AND " . implode(' AND ', $arr_sql_where);
        }

        $sql = "SELECT `P`.`post_id`, `P`.`post_date`, `P`.`post_subtitle`, `P`.`post_date_created`, `P`.`post_title`, `P`.`post_summary`, `P`.`post_image_thumb`, `P`.`post_image_content`, `P`.`post_type`, `P`.`post_name` as `slug`, `P`.`post_feature`, `P`.`post_name`, P.`post_author`, `P`.`post_editor`, `PC`.`category_id`, `PH`.`post_hits` AS `hits`, `U`.`nama` AS `author_name`
				FROM `posts` `P`
					LEFT JOIN `posts_hits` `PH` ON `PH`.`post_id` = `P`.`post_id`
					LEFT JOIN `posts_category` `PC` ON `PC`.`post_id` = `P`.`post_id`
					LEFT JOIN `user` `U` ON (`U`.`uid` = `P`.`post_author`)
				WHERE
					`post_type` = 'article' AND
					`post_status` = 'publishing'
					{$sql_where}
				GROUP BY `P`.`post_id`
				ORDER BY `PH`.`post_hits` DESC
				LIMIT {$limit}
			";

        $query = $this->db->query($sql);
        $data = $query->result_array();
        $query->free_result();

        return $data;
    }

    public function get_recent_by_tag($tag_id, $limit = 10, $offset = 0)
    {
        $sql = "SELECT `P`.`post_id`, `P`.`post_date`, `P`.`post_date_created`, `P`.`post_title`, `P`.`post_subtitle`, `P`.`post_summary`, `P`.`post_image_thumb`, `P`.`post_image_content`, `P`.`post_image_caption`, `P`.`post_name` AS `slug`, `P`.`post_type`, `PT`.`tag_id`, `T`.`tag`, `T`.`slug` AS `tag_slug`, `U`.`nama` AS `author`
				FROM `posts` `P`
					LEFT JOIN `posts_tag` `PT` ON `PT`.`post_id` = `P`.`post_id`
					LEFT JOIN `tag` `T` ON `T`.`tag_id` = `PT`.`tag_id`
					LEFT JOIN `user` `U` ON `U`.`uid`=`P`.`post_author`
				WHERE `P`.`post_status`='publishing' AND `P`.`post_type` = 'article'
					AND `PT`.`tag_id` = {$tag_id}
			   	GROUP BY `P`.`post_id`
			   	ORDER BY `P`.`post_date` DESC
			   	LIMIT {$offset}, {$limit}
			";

        $query = $this->db->query($sql);
        $data = $query->result_array();
        $query->free_result();

        return $data;
    }

    public function get_by_id($post_id)
    {
        $post = 'posts';
        $post_cat = 'posts_category';
        $user = 'user';
        $cat = 'category';
        $post_tag = 'posts_tag';

        $this->db->select($post . '.post_id, post_date, post_date_created, post_title, post_subtitle, post_summary, post_content, post_image_thumb, post_image_content, post_image_caption, post_name, post_status, post_type, post_feature, post_keyword, post_author, post_editor, post_series, post_order, post_hits, post_source,' . $cat . '.category_id, category_name, category_link, ' . $user . '.uid, nama');
        $this->db->from($post);
        $this->db->join($post_cat, $post_cat . '.post_id = ' . $post . '.post_id', 'left');
        $this->db->join($user, $user . '.uid=' . $post . '.post_author', 'left'); // WEIRD INSERT! retrieve editor name but using `post_author`
        $this->db->join($cat, $cat . '.category_id=' . $post_cat . '.category_id', 'left');
        // $this->db->where($post . '.post_id', $post_id);
        // $this->db->where($post . '.post_type', 'article');
        $this->db->where(array($post . '.post_type' => 'article', $post . '.post_id' => $post_id)); // combine 2 'where clause' above

        $query = $this->db->get();
        $r['post'] = $query->row_array();
        $query->free_result();

        if (!$r['post']) { // catch handler to avoid error if not really an article! to make sure page not found.
            return false;
        }

        /* Retrieve Author/ Reporter Name from previous query */
        $this->db->select('nama'); // insert author_id
        $this->db->from('user');
        $this->db->where(array('uid' => $r['post']['post_editor'])); // WEIRD INSERT! retrieve author name but using `post_editor`

        $query = $this->db->get();
        if (isset($query->row_array()['nama'])) {
            $r['post']['post_author_name'] = $query->row_array()['nama'];
        } else {
            $r['post']['post_author_name'] = $r['post']['nama']; // set as editor name by default
        }
        $query->free_result();

        /* Retrieve Tag */
        $this->db->select('tag_id');
        $this->db->from($post_tag);
        // $this->db->join($post_tag, $post . '.post_id = ' . $post_tag . '.post_id', 'left');
        $this->db->where(array($post_tag . '.post_id' => $post_id));

        $tag = $this->db->get();
        $r['tags'] = $tag->result_array();
        $tag->free_result();

        return $r;
    }

    public function get_category_id_by_id($post_id)
    {
        $this->db->select('posts_category.category_id');
        $this->db->from('posts');
        $this->db->join('posts_category', 'posts_category.post_id = posts.post_id', 'left');
        $this->db->where('posts_category.post_id', $post_id);

        $query = $this->db->get();
        $data = $query->row();
        $query->free_result();

        if (!$data) {
            return false;
        }

        return $data;
    }

    public function get_related_by_keyword($keywords, $limit, $exception_post_id)
    {
        $sql = "SELECT `P`.`post_id`, `P`.`post_date`, `P`.`post_date_created`, `P`.`post_title`, `P`.`post_subtitle`, `P`.`post_summary`, `P`.`post_image_thumb`, `P`.`post_image_content`, `P`.`post_image_caption`, `P`.`post_name` AS `slug`, `P`.`post_type`, `PC`.`category_id`, `C`.`category_name`, `C`.`category_link`, `U`.`nama` AS `author`
			   FROM `posts` `P`
			   LEFT JOIN `posts_category` `PC` ON `PC`.`post_id` = `P`.`post_id`
			   LEFT JOIN `category` `C` ON `C`.`category_id` = `PC`.`category_id`
			   LEFT JOIN `user` `U` ON `U`.`uid`=`P`.`post_author`
			   WHERE `P`.`post_status`='publishing' AND `P`.`post_type` = 'article' AND `P`.`post_feature` = 1
			   	AND MATCH(`P`.`post_title`,`P`.`post_summary`) AGAINST('{$this->db->escape_str($keywords)}' IN BOOLEAN MODE)
			   	AND `P`.`post_id` <> {$exception_post_id}
			   GROUP BY `P`.`post_id`
			   ORDER BY `P`.`post_date` DESC
			   LIMIT 0, {$limit}
			   "; // Set to NATURAL LANGUAGE MODE

        $query = $this->db->query($sql);
        $data = $query->result_array();
        $query->free_result();

        return $data;
    }

    public function get_related_by_tags($limit, $exception_post_id, $tags)
    {
        $sql_where = "";
        for ($i = 0; $i < count($tags); $i++) {
            if (count($tags) - 1 == 0) {
                $sql_where = " AND `PT`.`tag_id`= {$tags[$i]['tag_id']}";
            } else {
                if ($i == 0) {
                    $sql_where = " AND (`PT`.`tag_id`= {$tags[$i]['tag_id']}";
                } else {
                    if ($i == count($tags) - 1) {
                        $sql_where = $sql_where . " OR `PT`.`tag_id`= {$tags[$i]['tag_id']})";
                    } else {
                        $sql_where = $sql_where . " OR `PT`.`tag_id`= {$tags[$i]['tag_id']}";
                    }
                }

            }
		}
        $sql = "SELECT `P`.`post_id`, `P`.`post_date`, `P`.`post_date_created`, `P`.`post_title`, `P`.`post_subtitle`, `P`.`post_summary`, `P`.`post_image_thumb`, `P`.`post_image_content`, `P`.`post_image_caption`, `P`.`post_name` AS `slug`, `P`.`post_type`, `PC`.`category_id`, `C`.`category_name`, `C`.`category_link`, `U`.`nama` AS `author`
			   FROM `posts` `P`
			   LEFT JOIN `posts_tag` `PT` ON `PT`.`post_id` = `P`.`post_id`
			   LEFT JOIN `tag` `T` ON `PT`.`tag_id` = `PT`.`tag_id`
			   LEFT JOIN `posts_category` `PC` ON `PC`.`post_id` = `P`.`post_id`
			   LEFT JOIN `category` `C` ON `C`.`category_id` = `PC`.`category_id`
			   LEFT JOIN `user` `U` ON `U`.`uid`=`P`.`post_author`
			   WHERE `P`.`post_status`='publishing' AND `P`.`post_type` = 'article' AND `P`.`post_feature` = 1
			   	{$sql_where}
			   	AND `P`.`post_id` <> {$exception_post_id}
			   GROUP BY `P`.`post_id`
			   ORDER BY `P`.`post_date` DESC
			   LIMIT 0, {$limit}
			   "; // Set to NATURAL LANGUAGE MODE

        $query = $this->db->query($sql);
        $data = $query->result_array();
		$query->free_result();

        return $data;
    }

    public function get_keyword_by_id($post_id)
    {
        $this->db->select('post_keyword');
        $this->db->from('posts');
        $this->db->where('post_id', $post_id);

        $query = $this->db->get();
        $data = $query->row();
        $query->free_result();

        return $data;
    }

    public function get_tag_by_post_id($post_id/*, $post_status = 1*/)
    {
        $this->db->select('tag.tag_id, tag.tag, tag.slug');
        $this->db->from('posts_tag');
        // $this->db->join('posts', 'posts.post_id = posts_tag.post_id', 'left');
        $this->db->join('tag', 'tag.tag_id = posts_tag.tag_id', 'left');
        $this->db->where('posts_tag.post_id', $post_id);

        // $this->db->where('posts.post_type', 'article'); // only for article type of post
        // if($post_status == 1) {
        //     $this->db->where('posts.post_status', 'publishing'); // retrieve only publish article
        // }
        $query = $this->db->get();
        $data = $query->result_array();
        $query->free_result();

        return $data;
    }

    public function count_all_by_category($category_id, $active = 0)
    {
        $this->db->from('posts');
        $this->db->join('posts_category', 'posts_category.post_id = posts.post_id', 'left');
        $this->db->where('posts_category.category_id', $category_id);

        if ($category_id == 8) { // News
            $this->db->or_where('posts_category.category_id', 8);
            $this->db->or_where('posts_category.category_id', 9); // Nasional
            $this->db->or_where('posts_category.category_id', 10); // Internasional
            $this->db->or_where('posts_category.category_id', 11); // Internasional
            $this->db->or_where('posts_category.category_id', 12); // Internasional
            $this->db->or_where('posts_category.category_id', 13); // Internasional
            $this->db->or_where('posts_category.category_id', 14); // Internasional
            $this->db->or_where('posts_category.category_id', 21); // Internasional

//             $this->db->or_where('posts_category.category_id', 68); // Bisnis
            //             $this->db->or_where('posts_category.category_id', 80); // Jabar
            //             $this->db->or_where('posts_category.category_id', 81); // Info Grafis
            //             $this->db->or_where('posts_category.category_id', 84); // Kodim Purbalingga
            //             $this->db->or_where('posts_category.category_id', 85); // Info Ramadan

        } else if ($category_id == 1) { // News
            $this->db->or_where('posts_category.category_id', 1);
            $this->db->or_where('posts_category.category_id', 3); // Nasional
            $this->db->or_where('posts_category.category_id', 4); // Internasional
            $this->db->or_where('posts_category.category_id', 6); // Internasional
            //         } else if($category_id == 60) { // Komunitas
            //             $this->db->or_where('posts_category.category_id', 60);
            //             $this->db->or_where('posts_category.category_id', 70);
            //             $this->db->or_where('posts_category.category_id', 71);
            //         } else if($category_id == 62) { // Persib
            //             $this->db->or_where('posts_category.category_id', 62);
            //             $this->db->or_where('posts_category.category_id', 72);
            //             $this->db->or_where('posts_category.category_id', 73);
            //             $this->db->or_where('posts_category.category_id', 74);
            //         } else if($category_id == 67) { // Olahraga
            //             $this->db->or_where('posts_category.category_id', 67);
            //             $this->db->or_where('posts_category.category_id', 82);
            //             $this->db->or_where('posts_category.category_id', 83);
            //         } else if($category_id == 61) { // Wisata
            //             $this->db->or_where('posts_category.category_id', 61);
            //             $this->db->or_where('posts_category.category_id', 75);
            //             $this->db->or_where('posts_category.category_id', 76);
            //             $this->db->or_where('posts_category.category_id', 77);
            //             $this->db->or_where('posts_category.category_id', 78);
            //             $this->db->or_where('posts_category.category_id', 79);
        }

        $this->db->where('posts.post_type', 'article');
        if ($active == 1) {
            $this->db->where('posts.post_status', 'publishing'); // retrieve only publish article
        }
        $query = $this->db->get();
        $data = $query->num_rows();
        $query->free_result();

        return $data;
    }

    public function count_all_by_tag($tag_id, $active = 0)
    {
        $this->db->from('posts');
        $this->db->join('posts_tag', 'posts_tag.post_id = posts.post_id', 'left');
        $this->db->where('posts_tag.tag_id', $tag_id);

        $this->db->where('posts.post_type', 'article');
        if ($active == 1) {
            $this->db->where('posts.post_status', 'publishing'); // retrieve only publish article
        }
        $query = $this->db->get();
        $data = $query->num_rows();
        $query->free_result();

        return $data;
    }

}

/* End of file article_model.php */
/* Location: ./application/models/article_model.php */
