<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author alifiharafi[at]gmail[dot]com
 * For now, the index page only contains "article" post/ content type. 
 * So, we couldn't reach "photo" and "video" content for now.
 * Next CMS will be constructed for all content types.
 */
class Index extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->library('Mobile_Detect');		
		$this->load->helper('cookie'); // for mobile detect and site view switcher purpose

        // TO DO: Load Model
        $this->load->model('article_model'); // for now just for article type content
        $this->load->model('content_model'); // for now just for article type content
        // $this->load->model('common_model');
    }

    // We got bug that index function couldn't called inside index controller.
	/*public function index_()
	{
		$this->load->view('welcome_message');
	}*/

	public function form()
	{
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
					header("location: " . $this->config->item('site_mobile') . 'index');
					//exit;
				}
				$c['nav']['site_view_mobile'] = false;  
			}
		}

		// Retrieve User Input
		if( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
			$c['input_date'] 	= $this->input->post('input_date');
			// Reverse and Transform Format from dd/mm/yyyy (Input Form) to yyyy-mm-dd (MySQL)
			$c['q_input_date'] 	= substr($c['input_date'], 6, 4) // year 
                                . '-' . substr($c['input_date'], 3, 2) // month
                                . '-' .  substr($c['input_date'], 0, 2); // date

			$c['category_id'] 	= $this->input->post('category_id');
			// _d($c); exit;
		} else {
			// Set Default to Current Date
			date_default_timezone_set('Asia/Jakarta');
			$c['q_input_date'] 	= date('Y-m-d'); // query input date
			$c['input_date'] 	= date('d/m/Y'); // content input date
			$c['category_id'] 	= 0;
		}

		// Content
		$c['recent']						= $this->article_model->get_recent_by_category(0, 10); // for newsticker
		
		$index_limit 						= $this->config->item('index_limit');
		$c['index']							= $this->content_model->get_recent_by_category(
																					$c['category_id'], 
																					$index_limit, 
																					0, 
																					$c['q_input_date']
																				);
		// _d($c['index']);
		// _d($c['input_date']);
		$c['popular'] 						= $this->article_model->get_popular_by_category(0, 9);
		if(empty($c['popular'])) {
			$c['popular'] 					= $this->article_model->get_popular_monthly_by_category(0, 9); // 0 => ALL + Advertorial
		}


		// Sidebar Content
		$c['piala_dunia']				= $this->article_model->get_recent_by_category(82, 5);

		$this->load->view($this->config->item('template_name') . 'archive-index', $c);
	}

	/* This is an old function that only yield article type */
	public function form_article()
	{
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
					header("location: " . $this->config->item('site_mobile') . 'index');
					//exit;
				}
				$c['nav']['site_view_mobile'] = false;  
			}
		}

		// Retrieve User Input
		if( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
			$c['input_date'] 	= $this->input->post('input_date');
			// Reverse and Transform Format from dd/mm/yyyy (Input Form) to yyyy-mm-dd (MySQL)
			$c['q_input_date'] 	= substr($c['input_date'], 6, 4) // year 
                                . '-' . substr($c['input_date'], 3, 2) // month
                                . '-' .  substr($c['input_date'], 0, 2); // date

			$c['category_id'] 	= $this->input->post('category_id');
			// _d($c); exit;
		} else {
			// Set Default to Current Date
			date_default_timezone_set('Asia/Jakarta');
			$c['q_input_date'] 	= date('Y-m-d'); // query input date
			$c['input_date'] 	= date('d/m/Y'); // content input date
			$c['category_id'] 	= 0;

			if($c['post_type'] == $this->config->item('post_type')['photo']) {
				$c['category_id'] 	= 991;
			} else if($c['post_type'] == $this->config->item('post_type')['video']) {
				$c['category_id'] 	= 992;
			}
		}

		// Content
		$c['recent']						= $this->article_model->get_recent_by_category(0, 10); // for newsticker
		
		$index_limit 						= $this->config->item('index_limit');
		$c['index'] 						= $this->content_model->get_recent_by_category(
																					$c['category_id'], 
																					$index_limit, 
																					0, 
																					$c['q_input_date']
																				);
		
		// _d($c['index']);
		// _d($c['input_date']);
		$c['popular'] 						= $this->article_model->get_popular_by_category(0, 9);
		if(empty($c['popular'])) {
			$c['popular'] 					= $this->article_model->get_popular_monthly_by_category(0, 9); // 0 => ALL + Advertorial
		}


		// Sidebar Content
		$c['piala_dunia']				= $this->article_model->get_recent_by_category(82, 5);

		$this->load->view($this->config->item('template_name') . 'archive-index', $c);
	}
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */