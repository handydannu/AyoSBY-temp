<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class View extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->library('Mobile_Detect');		
		$this->load->helper('cookie'); // for mobile detect and site view switcher purpose
        // TO DO: Load Model
        $this->load->model('article_model');
        $this->load->model('photo_model');
        $this->load->model('common_model');
    }

	public function index()
	{
		/*** Redirect old URLs and check old URL is valid ***/
		// Condition of OLD Structure of URIs
		// Sample: http://ayobandung.com/foto/view/20180618/34285/pelantikan-pj-gubernur-jabar-m-iriawan
		if($this->uri->segment(1) == 'foto' && $this->uri->segment(2) == 'view'
			&& is_numeric($this->uri->segment(3)) && strlen($this->uri->segment(3)) == 8 
			&& is_numeric($this->uri->segment(4)) && $this->uri->segment(4) > 0) { 
			// echo 'This is valid old URL!'; exit;

			// Restructure the old URIs to the new one.
			$get_old_uri = array(
				'year' 		=> substr($this->uri->segment(3), 0, 4),
				'month' 	=> substr($this->uri->segment(3), 4, 2),
				'day' 		=> substr($this->uri->segment(3), 6, 2),
				'post_id' 	=> $this->uri->segment(4),
				'post_name' => $this->uri->segment(5) // this is not mandatory, sometimes empty/ removed/ skipped
			);
			// Redirect the old URIs to the new one (to the next condition).
			header("HTTP/1.1 301 Moved Permanently"); 
			header("location: " . site_url('view') . '/' . $get_old_uri['year'] . '/' . $get_old_uri['month'] . '/' . $get_old_uri['day'] . '/' . $get_old_uri['post_id'] . '/' . $get_old_uri['post_name']);
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
					$get_uri['foto'] = '';
					if($this->config->item('settings')['mobile_migrated'] === TRUE) {
						$get_uri['foto'] = 'foto/';
					}
					
					header("location: " . $this->config->item('site_mobile') . $get_uri['foto'] . 'view/' . $get_uri['year'] . '/' . $get_uri['month'] . '/' . $get_uri['day'] . '/' . $get_uri['post_id'] . '/' . $get_uri['post_name']);
					//exit;
				}
				$c['nav']['site_view_mobile'] = false;  
			}
		}

		// Content
		$c['recent']						= $this->article_model->get_recent_by_category(0, 10); // 0 => ALL
		$c['popular'] 						= $this->article_model->get_popular_by_category(0, 10); // 0 => ALL + Advertorial
		if(empty($c['popular'])) {
			$c['popular'] 					= $this->article_model->get_popular_monthly_by_category(0, 10); // 0 => ALL + Advertorial
		}

		$c['photo']['slide']				= $this->photo_model->get_by_id($get_uri['post_id']); // need to differentiate for loop
		if(empty($c['photo']['slide'])) {
			show_404();
		}
		// _d($c['photo']); exit;

		// Temporarily related photos using recent photos. Exclude this post_id
		$c['photo']['related']				= $this->photo_model->get_recent(8, 0, $get_uri['post_id']); 
		// _d($c['photo']);
		// _d($c['photo']['related']['data']); exit;
		// _d($c['photo']['related']['total_row']['count_photo']); exit;
		// Sidebar Content
		$c['piala_dunia']					= $this->article_model->get_recent_by_category(82, 5);
		
		$c['wisata']				= $this->article_model->get_recent_by_category(27, 6);
		// Set Visitor Hit
		date_default_timezone_set('Asia/Jakarta');
        $data_hit = array(
                'post_id'          => $get_uri['post_id'],
                'category'         => 'foto',
                'post_hits'        => 1,
                'post_last_viewed' => date("Y-m-d H:i:s")
        );
        $this->common_model->set_hit($data_hit); 
		$this->load->view($this->config->item('template_name') . 'view-photo', $c);
	}
}
/* End of file view.php */
/* Location: ./application/controllers/view.php */