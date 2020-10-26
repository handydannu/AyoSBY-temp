<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author alifiharafi[at]gmail[dot]com
 * For now, the tag page only contains "article" post/ content type. 
 * So, we couldn't reach "photo" and "video" content for now.
 * Next CMS will be constructed for all content types.
 */
class Tag extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->library('Mobile_Detect');
		$this->load->helper('cookie'); // for mobile detect and site view switcher purpose
        // TO DO: Load Model
        $this->load->model('article_model');
        $this->load->model('tag_model');
    }

	public function index()
	{
		// echo 'Tag Page'; exit;
		/*** Redirect old URLs and check old URL is valid ***/
		// Condition of OLD Structure of URIs
		// Sample: http://ayobandung.com/tag/23/persib, http://ayobandung.com/topic/23/persib
		if(($this->uri->segment(1) == 'tag' || $this->uri->segment(1) == 'topic')
			&& is_numeric($this->uri->segment(2)) && strlen($this->uri->segment(2)) > 0) { 
			// echo 'This is valid old URL!';

			// Restructure the old URIs to the new one.
			$get_old_uri = array(
				'post_id' 	=> $this->uri->segment(2), // we should skip the segment 3th, because we don't need it (the tag_id)
				// 'post_name' => $this->uri->segment(3), // this is not mandatory, sometimes empty/ removed/ skipped
				'page_numb' => $this->uri->segment(4) // this is not mandatory
			);

			$q_tag = $this->tag_model->get_by_id($get_old_uri['post_id']);
			if($q_tag != '') { // if success
				$get_old_uri['post_name'] = $q_tag['slug']; // reassure the post_name from query
			}
			// _d($q_tag); exit;
			unset($q_tag);
			// _d($get_old_uri); exit;

			// Consider redirect with page
			if($get_old_uri['page_numb'] > 1) {
				$set_new_url = site_url('tag' . '/' . $get_old_uri['post_name'] . '/' . $get_old_uri['page_numb']);
			} else {
				$set_new_url = site_url('tag' . '/' . $get_old_uri['post_name']);
			}
			unset($get_old_uri);

			// Redirect the old URIs to the new one (to the next condition).
			header("HTTP/1.1 301 Moved Permanently"); 
			header("location: " . $set_new_url);
			exit;

		// Condition of NEW Structure of URIs
		} else if($this->uri->segment(1) == 'tag' && trim($this->uri->segment(2)) != '') {
			// echo 'This is valid new URL!';
			// _d($this->uri->segment(2)); exit;

			// Preparing new URIs structure
			$get_uri = array(
				'post_name' => $this->uri->segment(2),
				'page_numb' => (int)$this->uri->segment(3)
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
					header("location: " . $this->config->item('site_mobile') . $get_uri['post_name'] . '/' . $get_uri['page_numb']);
					//exit;
				}
				$c['nav']['site_view_mobile'] = false;  
			}
		}

		// Content
		$c['recent']		= $this->article_model->get_recent_by_category(0, 10); // 0 => ALL
		$c['popular'] 		= $this->article_model->get_popular_by_category(0, 10); // 0 => ALL + Advertorial
		if(empty($c['popular'])) {
			$c['popular'] 	= $this->article_model->get_popular_monthly_by_category(0, 10); // 0 => ALL + Advertorial
		}

		// Query of Tag Meta
		// _d($get_uri);
		$c['tmeta'] 					= $this->tag_model->get_by_name($get_uri['post_name']);
		// _d($c['tmeta']); exit;
		if(empty($c['tmeta'])) {
			show_404(); // we didn't get what we want, so just throw it to the page not found
		}

		$page_limit = $this->config->item('page_limit');
		$offset = 0;
		if((int)$this->uri->segment(3) > 0) {
			$offset = ((int)$this->uri->segment(3) * $page_limit) - $page_limit;
		}
		
		$c['tag']						= $this->article_model->get_recent_by_tag($c['tmeta']['tag_id'],
											$page_limit,
											$offset // for pagination purpose
										);
		// _d($c['tag']); exit;
		$c['page']['count'] 			= $this->article_model->count_all_by_tag($c['tmeta']['tag_id'], $active = 1);
		$c['page']['links']				= $this->generate_pagination($c['page']['count'], $page_limit);
		// _d($c['page']); exit;
		// Sidebar Content
		$c['piala_dunia']				= $this->article_model->get_recent_by_category(82, 5);
		$c['wisata']			 	= $this->article_model->get_recent_by_category(7, 5);

		$this->load->view($this->config->item('template_name') . 'view-tag', $c);
	}

	/**
	 * Generate Pagination Function
	 * 
	 * @param $count
	 * @return String
	 */	
	private function generate_pagination($count, $per_page)
	{
		$this->load->library('pagination');

		/* Config */
		$config['base_url'] = site_url('tag/' . $this->uri->segment(2));
		$config['total_rows'] = $count;
		$config['per_page'] = $per_page;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = TRUE;
		$config['num_links'] = 5;
		/* Appearance */
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination">';
	    $config['full_tag_close']   = '</ul></nav></div>';
	    $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	    $config['num_tag_close']    = '</span></li>';
	    $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
	    $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	    $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	    $config['next_tag_close']  	= '<span aria-hidden="true"></span></span></li>';
	    $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	    $config['prev_tag_close']  	= '</span></li>';
	    $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	    $config['first_tag_close'] 	= '</span></li>';
	    $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	    $config['last_tag_close']  	= '</span></li></i></span>';
		
		$this->pagination->initialize($config);

		return $this->pagination->create_links();
	}
	
}
/* End of file tag.php */
/* Location: ./application/controllers/tag.php */