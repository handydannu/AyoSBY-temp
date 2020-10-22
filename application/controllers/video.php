<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Video extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->library('Mobile_Detect');
		$this->load->helper('cookie'); // for mobile detect and site view switcher purpose

        // TO DO: Load Model
        $this->load->model('article_model');
        $this->load->model('video_model');
    }

	public function index()
	{
		// echo 'Video Page';
		/*** Redirect old URLs and check old URL is valid ***/
		// Condition of Structure of URIs
		// Sample: http://ayobandung.com/video, http://ayobandung.com/video/1 (same as old)
		if($this->uri->segment(1) == 'video' 
			|| (is_numeric($this->uri->segment(1)) == 'video' && is_numeric($this->uri->segment(2)))) { 
			// echo 'This is valid URL!';
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
					header("location: " . $this->config->item('site_mobile') . 'video' . '/' . $this->uri->segment(2)); // if segment 2 exist for paging
					//exit;
				}
				$c['nav']['site_view_mobile'] = false;  
			}
		}

		// Content
		$c['recent']					= $this->article_model->get_recent_by_category(0, 10); // 0 => ALL
		$c['popular'] 					= $this->article_model->get_popular_by_category(0, 10); // 0 => ALL + Advertorial
		if(empty($c['popular'])) {
			$c['popular'] 				= $this->article_model->get_popular_monthly_by_category(0, 10); // 0 => ALL + Advertorial
		}

		$page_limit = 10;
		$offset = 0;
		if((int)$this->uri->segment(2) > 0) {
			$offset = ((int)$this->uri->segment(2) * $page_limit) - $page_limit;
		}

		$c['video']						= $this->video_model->get_recent(
											$page_limit,
											$offset // for pagination purpose
										);
		// _d($c['video']); exit;
		if($c['video'] <= 0) {
			show_404();
			exit;
		}

		$tmp['count']					= $c['video']['total_row']['count_video'];
		if($tmp['count'] <= 0) {
			show_404();
			exit;
		}

		$c['video'] 					= $c['video']['data']; 
		// _d($c['video']); exit;

		$c['page']['count'] 			= $tmp['count'];
		$c['page']['links']				= $this->generate_pagination($c['page']['count'], $page_limit);
		unset($tmp);

		// Sidebar Content
		$c['piala_dunia']				= $this->article_model->get_recent_by_category(82, 5);

		$this->load->view($this->config->item('template_name') . 'view-videolist', $c);
		// $this->load->view('welcome_message');
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
		$config['base_url'] = site_url($this->uri->segment(1));
		$config['total_rows'] = $count;
		$config['per_page'] = $per_page;
		$config['uri_segment'] = 2;
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
	    $config['next_tag_close']  = '<span aria-hidden="true"></span></span></li>';
	    // $config['next_tag_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	    $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	    $config['prev_tag_close']  = '</span></li>';
	    $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	    $config['first_tag_close'] = '</span></li>';
	    $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	    $config['last_tag_close']  = '</span></li></i></span>';
		
		$this->pagination->initialize($config);

		return $this->pagination->create_links();
	}

}

/* End of file video.php */
/* Location: ./application/controllers/video.php */