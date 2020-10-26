<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

	private $c = array();

	function __construct()
    {
        parent::__construct();
        // $this->load->library('Mobile_Detect');		
		// $this->load->helper('cookie'); // for mobile detect and site view switcher purpose
        // TO DO: Load Model
        $this->load->model('article_model');
        $this->load->model('common_model');

	    // Newsticker Content
		$c['recent']					= $this->article_model->get_recent_by_category(0, 10); // 0 => ALL
		// Set Default Navigation for Mobile Site View
		$c['nav']['site_view_mobile'] 	= false;
		// Sidebar Content
		//$c['popular'] 					= $this->article_model->get_popular_monthly_by_category(0, 10); // 0 => ALL + Advertorial
		$c['popular']				= $this->article_model->get_popular_by_category(0, 10);
		if(empty($c['popular'])) {
			$c['popular'] = $this->article_model->get_popular_monthly_by_category(0, 10);
		}
		$c['piala_dunia']	= $this->article_model->get_recent_by_category(82, 5);		
		$c['wisata']		= $this->article_model->get_recent_by_category(7, 5);
		$c['netizen']		= $this->article_model->get_recent_by_category(10, 8);
		$this->c = $c;
    }
	public function index()
	{
		// securing the default page
		show_404();
	}
	public function jadwal_imsak()
	{
		$this->load->view($this->config->item('template_name') . 'page/jadwal-imsak', $this->c);
	}
	public function pencarian()
	{
		$this->load->view($this->config->item('template_name') . 'page/view-cari', $this->c);
	}	
	public function about_us()
	{
		$this->load->view($this->config->item('template_name') . 'page/about-us', $this->c);
	}
	public function management_editorial()
	{
		$this->load->view($this->config->item('template_name') . 'page/management-editorial', $this->c);
	}
	public function terms_conditions()
	{
		$this->load->view($this->config->item('template_name') . 'page/terms-conditions', $this->c);
	}

	public function privacy_policy()
	{
		$this->load->view($this->config->item('template_name') . 'page/privacy-policy', $this->c);
	}
	public function advertise()
	{
		$this->load->view($this->config->item('template_name') . 'page/advertise', $this->c);
	}

	public function media_partner()
	{
		$this->load->view($this->config->item('template_name') . 'page/media-partner', $this->c);
	}
	public function kuis_piala_dunia()
	{
		$this->load->view($this->config->item('template_name') . 'page/kuis-piala-dunia', $this->c);
	}

	public function ayo_netizen()
	{
		$this->load->view($this->config->item('template_name') . 'page/ayo-netizen', $this->c);
	}	
	public function debug_()
	{
		echo ENVIRONMENT;
	}
	public function error_404()
	{
		$this->load->view($this->config->item('template_name') . 'page/page-404');
	}
}

/* End of file page.php */
/* Location: ./application/controllers/page.php */