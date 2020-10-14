<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Rss extends CI_Controller
{

	private $rss_dir = 'rss/'; // with trailing slash

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');

		// Load Article Model
		$this->load->model('article_model');
	}

	public function index()
	{
		$c['meta']['title'] 			= $this->config->item('page_meta')['site_name'];
		$c['meta']['atom_link']			= base_url('rss');
		$c['meta']['link']				= base_url();
		$c['meta']['desc']				= $this->config->item('page_meta')['desc'];
		$c['meta']['lang']				= 'id';
		$c['meta']['copyright']			= date('Y') . ' ' . $this->config->item('page_meta')['site_author'];
		$c['meta']['pub_date']			= rss_time(date('Y-m-d H:i:s'));
		$c['meta']['generator']			= 'AlifiCore RSS 2.0';
		$c['meta']['up_period']			= 'hourly';
		$c['meta']['up_frequency']		= 1;

		$c['meta']['image']['link']		= $c['meta']['link'];
		$c['meta']['image']['title']	= $c['meta']['title'];
		$c['meta']['image']['url']		= base_url('assets/img/logo-bandung-rss.png');
		$c['meta']['image']['width']	= '130';
		$c['meta']['image']['height']	= '22';
		$c['meta']['image']['desc']		= $c['meta']['title'];

		// Query Get Recent Articles
		// Params: $category_id, $limit, $offset, $date, $post_content
		$c['recent'] = $this->article_model->get_recent_by_category(0, 15, 0, 0, 1);

		// _d($this->c['recent']); exit;

		header("Content-Type: text/xml");
		$this->load->view($this->config->item('template_name') . $this->rss_dir . 'rss', $c);
	}

	public function kurio()
	{
		$c['meta']['title'] 			= $this->config->item('page_meta')['site_name'];
		$c['meta']['link']				= base_url();
		$c['meta']['desc']				= $this->config->item('page_meta')['desc'];
		$c['meta']['lang']				= 'id';
		$c['meta']['copyright']			= date('Y') . ' ' . $this->config->item('page_meta')['site_author'];
		$c['meta']['pub_date']			= rss_time(date('Y-m-d H:i:s'));
		$c['meta']['generator']			= 'FeedLite RSS 2.1';

		// Query Get Recent Articles
		// Params: $category_id, $limit, $offset, $date, $post_content
		$c['recent'] = $this->article_model->get_recent_by_category(0, 15, 0, 0, 1);

		// _d($this->c['recent']); exit;

		header("Content-Type: text/xml");
		$this->load->view($this->config->item('template_name') . $this->rss_dir . 'kurio', $c);
	}

	public function mini()
	{
		$c['meta']['title'] 			= $this->config->item('page_meta')['site_name'];
		$c['meta']['link']				= base_url();
		$c['meta']['desc']				= $this->config->item('page_meta')['desc'];
		$c['meta']['copyright']			= date('Y') . ' ' . $this->config->item('page_meta')['site_author'];
		$c['meta']['pub_date']			= rss_time(date('Y-m-d H:i:s'));
		$c['meta']['generator']			= 'FeedLite RSS 2.1';

		// Query Get Recent Articles
		// Params: $category_id, $limit, $offset, $date, $post_content
		$c['recent'] = $this->article_model->get_recent_by_category(0, 15, 0, 0, 1);

		// _d($this->c['recent']); exit;

		header("Content-Type: text/xml");
		$this->load->view($this->config->item('template_name') . $this->rss_dir . 'mini', $c);
	}

	public function minicust() // item: title, media thumbnail
	{
		$c['meta']['title'] 			= $this->config->item('page_meta')['site_name'];
		$c['meta']['link']				= base_url();
		$c['meta']['desc']				= $this->config->item('page_meta')['desc'];
		$c['meta']['copyright']			= date('Y') . ' ' . $this->config->item('page_meta')['site_author'];
		$c['meta']['pub_date']			= rss_time(date('Y-m-d H:i:s'));
		$c['meta']['generator']			= 'FeedLite RSS 2.1';

		// Query Get Recent Articles
		// Params: $category_id, $limit, $offset, $date, $post_content
		$c['recent'] = $this->article_model->get_recent_by_category(0, 15, 0, 0, 1);

		// _d($this->c['recent']); exit;

		header("Content-Type: text/xml");
		$this->load->view($this->config->item('template_name') . $this->rss_dir . 'minicust', $c);
	}

	/* The function has been replaced by rss_time on global helper but working smootly */
	private function toPubDate($dateOnXML)
	{
		$DateNTime	= explode(" ", @$dateOnXML);
		$dateChunk 	= explode("-", @$DateNTime[0]);
		$dateFeed 	= date("D", mktime(0, 0, 0, intval(@$dateChunk[1]), intval(@$dateChunk[2]), intval(@$dateChunk[0]))) . ", " . @$dateChunk[2] . " " . date("M", mktime(0, 0, 0, intval(@$dateChunk[1]), intval(@$dateChunk[2]), intval(@$dateChunk[0]))) . " " . @$dateChunk[0] . " " . $DateNTime[1] . " +0700";

		return $dateFeed;
	}
}

/* End of file rss.php */
/* Location: ./application/controllers/rss.php */
