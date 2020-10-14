<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*** [!] Legacy API Mobile ***/
class Api_mob extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model', 'mapi');
	}

	// Get Headline Article JSON
	// 1st Param : 0 for Home
	function getHeadline()
	{
		$id_category = $this->input->post('cat_id');
		if($id_category == '') {
			$id_category = 0;
		}

		$limit = $this->input->post('limit');
		if($limit == '') {
			$limit = 10;
		}
		
		$response = $this->mapi->getHeadline($id_category, $limit);

		header('Content-Type: application/json');
		echo json_encode($response);
	}
	
	// Get Editor's Choice Article JSON
	function getEditorsChoice()
	{
		$limit = $this->input->post('limit');
		$response = $this->mapi->getEditorsChoice($limit);

		echo json_encode($response);
	}
	
	// Get Trending Article JSON
	function getTrending()
	{
		$limit = $this->input->post('limit');		
		$response = $this->mapi->getTrending($limit);

		echo json_encode($response);
	}
	
	// Get Must Read Article JSON
	// 1st Param : 0 for Home
	function getMustRead()
	{
		$id_category = $this->input->post('cat_id');
		$limit = $this->input->post('limit');		
		$response = $this->mapi->getMustRead($id_category,$limit);

		echo json_encode($response);
	}
	
	/**
	 * Get Recent Article JSON
	 *
	 * 1st param: id category (set to '0' for home page)
	 * 2st param: limit how many article do you want to get in 1 page
	 * 3rd param: page
	 */
	function getRecentArticle()
	{
		$id_category = $this->input->post('cat_id');
		$limit = $this->input->post('limit');
		$page = $this->input->post('page');
		$response = $this->mapi->getRecentArticle($id_category,$limit,$page);

		echo json_encode($response);
	}
	
	/**
	 * Get Popular Article JSON
	 *
	 * 1st param: time interval (1=24hours; 2=3days; 3=1months)
	 * 2st param: limit how many article do you want to get in 1 page
	*/
	function getPopular()
	{
		$interval = $this->input->post('interval');
		if($interval == '') {
			$interval = 1;
		}

		$limit = $this->input->post('limit');
		if($limit == '') {
			$limit = 30;
		}

		$response = $this->mapi->getPopular($interval,$limit);

		header('Content-Type: application/json');
		echo json_encode($response);
	}
	
	
	/**
	 * Get Article JSON
	 * 
	 * param : article/ post id 
	 */ 
	function getArticle()
	{
		$id = $this->input->post('id');
		$datetime = date('Y-m-d H:i:s');
		$response = $this->mapi->getArticle($id,$datetime);

		echo json_encode($response);
	}
	
	/**
	 * Get Related Article JSON
	 *
	 * param : article/ post id 
	 */ 
	function getRelatedArticle()
	{
		$id = $this->input->post('id');
		$keyword = $this->input->post('keyword');
		$response = $this->mapi->getRelatedArticle($id,$keyword);

		echo json_encode($response);
	}
	
	
	/**
	 * Get Recent Photo JSON
	 *
	 * 1st param : limit how many article do you want to get in 1 page
	 * 2nd param : page
	 */
	function getRecentPhoto()
	{
		$limit = $this->input->post('limit');
		$page = $this->input->post('page');
		$response = $this->mapi->getRecentPhoto($limit,$page);

		echo json_encode($response);
	}
	
	
	/**
	 * Get Detail Photo JSON
	 *
	 * param : post_id
	 */
	function getPhoto()
	{
		$id = $this->input->post('id');
		$response = $this->mapi->getPhoto($id);

		echo json_encode($response);
	}
	
	/**
	 * Get Recent Video JSON
	 * 
	 * 1st param : limit how many article do you want to get in 1 page
	 * 2nd param : page
	 */
	function getRecentVideo()
	{
		$limit = $this->input->post('limit');
		$page = $this->input->post('page');
		$response = $this->mapi->getRecentVideo($limit,$page);

		echo json_encode($response);
	}
	
	/**
	 * Get Detail Video JSON
	 *
	 * param : video_id
	 */
	function getVideo()
	{
		$id = $this->input->post('id');
		$response = $this->mapi->getVideo($id);

		echo json_encode($response);
	}
	
	// Get Searched Article JSON
	// param : keyword
	function getSearch()
	{
		$search = $this->input->post('search');
		$response = $this->mapi->getSearch($search);

		echo json_encode($response);
	}
	
	// Get Kanal JSON
	// return kanal name and id
	function getKanal()
	{
		$response = $this->mapi->getKanal();

		echo json_encode($response);
	}
	
	// Get index of one day JSON
	// param : date format dd/mm/yyyy
	function getIndex()
	{
		$id_category = $this->input->post('cat_id');
		$date = $this->input->post('date');
		$response = $this->mapi->getIndex($id_category,$date);

		echo json_encode($response);
	}
	
	// Get company pages
	// param : about_us, management_editorial, privacy_policy, advertise, media_partner, terms_conditions
	function getPages()
	{
		$pages = $this->input->post('pages');
		$response = $this->mapi->getPages($pages);

		echo json_encode($response);
	}
	
}

		
		
