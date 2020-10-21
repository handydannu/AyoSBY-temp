<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('Mobile_Detect');
		$this->load->helper('cookie'); // for mobile detect and site view switcher purpose
		// TO DO: Load Model 
		$this->load->model('article_model');
		$this->load->model('photo_model');
		$this->load->model('video_model');
		$this->load->model('content_model');
		$this->load->model('regional_feed_model');
		$this->load->model('covid19');
	}

	public function index()
	{
		// Mobile Detect and Switcher
		$mobile_cookie 	= ($this->input->cookie('site_view')) ? $this->input->cookie('site_view') : '';
		$site_view		= $this->input->get('site_view');

		$mobile_detect = new Mobile_Detect();

		if ($mobile_cookie != '') {
			$c['nav']['site_view_mobile'] = true;
		} else {
			if ($site_view != '') {
				$mobile_cookie = array(
					'name'   => 'site_view',
					'value'  => 'mobile',
					'expire' => 86500,
					'secure' => false
				);
				$this->input->set_cookie($mobile_cookie);
				$c['nav']['site_view_mobile'] = true;
			} else {
				if ($mobile_detect->isMobile() || $mobile_detect->isTablet()) {
					header("location: " . $this->config->item('site_mobile'));
					//exit;
				}
				$c['nav']['site_view_mobile'] = false;
			}
		}

		// Content 
		$c['headline']				= $this->article_model->get_headline_by_category(0, 5); // 0 => ALL
		// $c['recent']				= $this->article_model->get_recent_by_category(0, 12); // article only
		$c['recent']				= $this->content_model->get_recent_by_category(0, 16); // all post type
		$c['popular']				= $this->article_model->get_popular_by_category(0, 10);
		if (empty($c['popular'])) {
			$c['popular'] = $this->article_model->get_popular_monthly_by_category(0, 10);
		}
		$c['tag_populer']			= $this->article_model->tag_populer(0, 5);
		$tmp['photo'] 				= $this->photo_model->get_recent(12, 0); // limit, offset
		$tmp['video'] 				= $this->video_model->get_recent(6, 0); // limit, offset
		$c['photo'] 				= $tmp['photo']['data'];
		$c['video'] 				= $tmp['video']['data'];
		unset($tmp); // need to check
		// exit;

		//$c['daerah']				= $this->article_model->get_recent_by_category(2, 5);
		$c['surabaya_raya']			= $this->article_model->get_recent_by_category(1, 5);
		$c['umkm']					= $this->article_model->get_recent_by_category(127, 6);
		$c['nasional']				= $this->article_model->get_recent_by_category(3, 5);
		$c['internasional']			= $this->article_model->get_recent_by_category(4, 5);
		$c['netizen']			 	= $this->article_model->get_recent_by_category(10, 8);
		$c['umum']					= $this->article_model->get_recent_by_category(19, 5);
		//$c['bodetabek']			 	= $this->article_model->get_recent_by_category(2, 5);
		$c['persebaya']			 	= $this->article_model->get_recent_by_category(5, 6);
		$c['wisata']			 	= $this->article_model->get_recent_by_category(7, 5);
		$c['bisnis']			 	= $this->article_model->get_recent_by_category(8, 5);
		$c['explore']				= $this->article_model->get_recent_by_category(6, 5);
		//$c['wisata']				= $this->article_model->get_recent_by_category(61, 5);
		//$c['netizen']				= $this->article_model->get_recent_by_category(7, 5);

		// Feed from Regional
		// CARE! it is still using '<br>' as separator 
		// $c['feed']['bekasi']			= $this->regional_feed_model->get('bekasi');
		// $c['feed']['bogor']				= $this->regional_feed_model->get('bogor');
		// _d($c['feed']['bogor']);
		// $c['feed']['cirebon']			= $this->regional_feed_model->get('cirebon');
		// $c['feed']['purwakarta']		= $this->regional_feed_model->get('purwakarta');
		// $c['feed']['tasik']				= $this->regional_feed_model->get('tasik');
		// $c['feed']['batang']			= $this->regional_feed_model->get('batang');
		// $c['feed']['semarang']			= $this->regional_feed_model->get('semarang');
		// $c['feed']['surabaya']			= $this->regional_feed_model->get('surabaya');
		// $c['feed']['yogya']				= $this->regional_feed_model->get('yogya');
		// $c['feed']['jakarta']			= $this->regional_feed_model->get('jakarta');
		// $c['feed']['tegal']				= $this->regional_feed_model->get('tegal');
		// $c['feed']['bandung']			= $this->regional_feed_model->get('bandung');
		// $c['feed']['banten']			= $this->regional_feed_model->get('banten');
		// _d($c['feed']);
		// $c['jatim']						= $this->covid19->provinsi();
		// $c['indonesia']					= $this->covid19->info();

		$this->load->view($this->config->item('template_name') . 'main-home', $c);
	}
}
 
/* End of file home.php */
/* Location: ./application/controllers/home.php */
