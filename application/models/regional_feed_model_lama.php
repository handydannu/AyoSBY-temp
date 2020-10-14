<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Regional_feed_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function getRegional($base_url)
	{
		$input = file_get_contents('http://'.$base_url.'/api/get');
		list($id,$date,$date_created,$title,$image_thumb,$image_content,$image_caption,$catid,$catname,$catlink,$type) = explode("<br>",$input);
		$arr['post_id']=trim($id);
		$arr['post_date']=trim($date);
		$arr['post_date_created']=trim($date_created);
		$arr['post_title']=trim($title);
		$arr['post_image_thumb']=trim($image_thumb);
		$arr['post_image_content']=trim($image_content);
		$arr['post_image_caption']=trim($image_caption);
		$arr['cat_id']=trim($catid);
		$arr['cat_name']=trim($catname);
		$arr['cat_link']=trim($catlink);
		$arr['post_type']=trim($type);
		return $arr;
	} 
	function get($reg_name)
	{
		if($reg_name == 'bandung') {
			$src_url = 'http://ayobandung-desktop-2.0';
			$base_url = 'http://ayobandung.com';
		} else if($reg_name == 'bekasi') {
			$src_url = 'http://ayobekasi-desktop';
			$base_url = 'http://ayobekasi.net';
		} else if($reg_name == 'bogor') {
			$src_url = 'http://ayobogor-desktop';
			$base_url = 'http://ayobogor.com';
		} else if($reg_name == 'cirebon') {
			$src_url = 'http://ayocirebon-desktop';
			$base_url = 'http://ayocirebon.com';
		} else if($reg_name == 'tasik') {
			$src_url = 'http://ayotasik-desktop';
			$base_url = 'http://ayotasik.com';
		} else if($reg_name == 'purwakarta') {
			$src_url = 'http://ayopurwakarta-desktop';
			$base_url = 'http://ayopurwakarta.com';
		} else {
			return false;
		}

		$uri = '/api/get';

		$curl = curl_file_get_contents($src_url . $uri);

		if(! $curl || strlen(trim($curl)) == 0) { // check cURL taken from https://stackoverflow.com/a/25387206/9796214
			return false;
		}

		// OMG! This is not JSON or XML format to do data exchange, just follow the structure for now!
		list($id, $date, $date_created, $title, $image_thumb, $image_content, $image_caption, $catid, $catname, $catlink, $type) = explode("<br>", $curl);

		$arr['post_id'] 			= trim($id);
		$arr['post_date'] 			= trim($date);
		$arr['post_date_created'] 	= trim($date_created);
		$arr['post_title']			= trim($title);
		$arr['post_image_thumb']	= trim($image_thumb);
		$arr['post_image_content']	= trim($image_content);
		$arr['post_image_caption']	= trim($image_caption);
		$arr['cat_id']				= trim($catid);
		$arr['cat_name']			= trim($catname);
		$arr['cat_link']			= trim($catlink);
		$arr['post_type']			= trim($type);
		$arr['base_url']			= $base_url;

		// Temporarily rearrange the content
		$dc = content_time($arr['post_date_created']);

		// Still using old structure of Post URL
		$arr['post_url'] = $base_url . '/' . 'read' . '/' . $dc['year'] . /*'/' .*/ $dc['month'] . /*'/' .*/ $dc['day'] . '/' . $arr['cat_id'] . '/' . $arr['post_id'] . '/' .  title_seo($arr['post_title']);
		$arr['post_img'] = $base_url . '/' . 'images-' . $reg_name . '/post/articles/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $arr['post_id'] . '/' . $arr['post_image_thumb'];

		return $arr;
	}
}

/* End of file regional_feed_model.php */
/* Location: ./application/models/regional_feed_model.php */ 