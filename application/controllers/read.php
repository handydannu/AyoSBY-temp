<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Read extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->library('Mobile_Detect');		
		$this->load->helper('cookie'); // for mobile detect and site view switcher purpose

        // TO DO: Load Model
        $this->load->model('article_model');
        $this->load->model('category_model'); // for now just for article type content
        $this->load->model('tag_model'); // for now just for article type content
        $this->load->model('common_model');
    }

	public function index()
	{
		/*** Redirect old URLs and check old URL is valid ***/
		// Condition of OLD Structure of URIs
		if(is_numeric($this->uri->segment(2)) && strlen($this->uri->segment(2)) == 8 
			&& is_numeric($this->uri->segment(3)) && strlen($this->uri->segment(3)) > 0 
			&& is_numeric($this->uri->segment(4)) && $this->uri->segment(4) > 0) { 
			// echo 'This is valid old URL!';

			// Restructure the old URIs to the new one.
			$get_old_uri = array(
				'year' 		=> substr($this->uri->segment(2), 0, 4),
				'month' 	=> substr($this->uri->segment(2), 4, 2),
				'day' 		=> substr($this->uri->segment(2), 6, 2),
				'post_id' 	=> $this->uri->segment(4), // we should skip the segment 3th, because we don't need it (the category_id)
				'post_name' => $this->uri->segment(5) // this is not mandatory, sometimes empty/ removed/ skipped
			);

			// Redirect the old URIs to the new one (to the next condition).
			header("HTTP/1.1 301 Moved Permanently"); 
			header("location: " . site_url('read') . '/' . $get_old_uri['year'] . '/' . $get_old_uri['month'] . '/' . $get_old_uri['day'] . '/' . $get_old_uri['post_id'] . '/' . $get_old_uri['post_name']);
			exit;

		// Condition of NEW Structure of URIs
		} else if(is_numeric($this->uri->segment(2)) && strlen($this->uri->segment(2)) == 4 
			&& is_numeric($this->uri->segment(3)) && strlen($this->uri->segment(3)) == 2 
			&& is_numeric($this->uri->segment(4)) && strlen($this->uri->segment(4)) == 2 
			&& is_numeric($this->uri->segment(5)) && $this->uri->segment(5) > 0
			&& is_numeric($this->uri->segment(6)) === false){
			// echo 'This is valid new URL!';

			// Preparing new URIs structure
			$get_uri = array(
				'year' 		=> $this->uri->segment(2),
				'month' 	=> $this->uri->segment(3),
				'day' 		=> $this->uri->segment(4),
				'post_id' 	=> $this->uri->segment(5),
				'post_name' => $this->uri->segment(6)
			);

			// _d($get_uri); exit;
		} else {
			show_404();
		}

		// Mobile Detect and Switcher
		$mobile_cookie 	= ($this->input->cookie('site_view')) ? $this->input->cookie('site_view') : '';
		$site_view		= $this->input->get('site_view');
		
		$mobile_detect = new Mobile_Detect();
		
		if($mobile_cookie != '') {
			$c['nav']['site_view_mobile'] = true; 
		} else {
			if($site_view != '') {
				$mobile_cookie = array(
				    'name'   => 'site_view',
				    'value'  => 'mobile',
				    'expire' => 86500,
				    'secure' => false
				);
				$this->input->set_cookie($mobile_cookie);
				$c['nav']['site_view_mobile'] = true; 
			} else {
				if($mobile_detect->isMobile() || $mobile_detect->isTablet()) {
					// Redirect to the same URIs but different site (to mobile site)
					if($this->config->item('settings')['mobile_migrated'] === TRUE) {
						$tmp['category_id'] = $this->article_model->get_category_id_by_id($get_uri['post_id']);
						if(isset($tmp['category_id'])) {
							$get_uri['category_id'] = $tmp['category_id']->category_id;
							// _d($get_uri); exit;

							// Reserve for Old URI Structure
							header("location: " . $this->config->item('site_mobile') . 'read/' . $get_uri['year'] . $get_uri['month'] . $get_uri['day'] . '/' . $get_uri['category_id'] . '/' . $get_uri['post_id'] . '/' . $get_uri['post_name']);
						} else { 
							// Fail condition redirect to Home Page of Mobile View
							header("location: " . $this->config->item('site_mobile'));
						}
					} else {
						// New URI Structure
						header("location: " . $this->config->item('site_mobile') . 'read/' . $get_uri['year'] . '/' . $get_uri['month'] . '/' . $get_uri['day'] . '/' . $get_uri['post_id'] . '/' . $get_uri['post_name']);
					}
					//exit;
				}
				$c['nav']['site_view_mobile'] = false;  
			}
		}

		// Content
		$c['recent']						= $this->article_model->get_recent_by_category(0, 10); // 0 => ALL
		$c['popular'] 						= $this->article_model->get_popular_by_category(0, 5); // 0 => ALL + Advertorial
		if(empty($c['popular'])) {
			$c['popular'] 					= $this->article_model->get_popular_monthly_by_category(0, 5); // 0 => ALL + Advertorial
		}

		$c['article']						= $this->article_model->get_by_id($get_uri['post_id']);
		// Need to check the post before displayed on a page. If the query couldn't return any data, will be redirected to the page not found. This is needed for security purpose too.
		if(empty($c['article']['post']) && empty($c['article']['tags'])){ // empty array contains 'post' and 'tags' sub-elements
			show_404();
		}
		$c['article']['category_parent_id']	= $this->category_model->get_parent_by_id($c['article']['post']['category_id']);
		// _d($c['article']);
		// _d($c['article']);
		$c['article']['tags']				= $this->article_model->get_tag_by_post_id($get_uri['post_id']);
		// _d("{$c['article']['tags'][$i]['tag_id']}"); exit;
		// _d(count($c['article']['tags'])); exit;

		$c['article']['related'] 			= $this->article_model->get_related_by_keyword( // you can set keyword param, such as tags, categories, keywords, combination of title and summary, and others as well
												$c['article']['post']['post_title'], 
												// $c['article']['post']['post_summary'],
												$limit = 10,
												$exception = $c['article']['post']['post_id'] // avoid current post not getting retrieved
												// $c['article']['tags']
											); 
		// $c['article']['related'] 			= $this->article_model->get_related_by_tags(
		// 										$limit = 10,
		// 										$exception = $c['article']['post']['post_id'],
		// 										$c['article']['tags']
		// 									); 
		// _d($this->article_model->test($limit = 10,$exception = $c['article']['post']['post_id'],$c['article']['tags']));

		// Sidebar Content
		// $c['piala_dunia']				= $this->article_model->get_recent_by_category(82, 5);
$c['netizen']				= $this->article_model->get_recent_by_category(7, 5);
		// Set Visitor Hit
		date_default_timezone_set('Asia/Jakarta');
        $data_hit = array(
                'post_id'          => $c['article']['post']['post_id'],
                'category'         => $c['article']['post']['category_id'],
                'post_hits'        => 1,
                'post_last_viewed' => date("Y-m-d H:i:s")
        );
        $this->common_model->set_hit($data_hit); // temporarily not checked if it is working or not? return value has been prepared

		$this->load->view($this->config->item('template_name') . 'single-article', $c);
	}
}

/* End of file read.php */
/* Location: ./application/controllers/read.php */