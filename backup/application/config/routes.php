<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] 	= 'home';
$route['404_override'] 			= 'page/error_404'; // default, set to empty

$route['read/(.*)'] 			= 'read/index/$1'; // need to check

// $route['category/(.*)'] 		= 'category/index/$1'; // need to check/ prettify and migrate!
// Old URIs Structure: /category/{id}/{uri}
// New URIs Structure: /{uri}

/*** Define Categories Manually to Direct URI ***/
$cat_uri = array(
				/* Main Category: Semarang Raya */
				'berita-bogor', 
					'berita-bogor', 'explore-bogor', 'bisnis-bogor', 'kampus-bogor', 'ikon-bogor', 'regional', 

				/* Main Category: News */
				'umum',
					'nasional', 'internasional', 'regional',
				/* Main Category: PSIS */
				'psis',
				/* Main Category: olahraga */
				'olahraga',
				/* Main Category: Wisata */
				'wisata',
				'kota-lama', 'kuliner', 'religi',

				/* Main Category: Bisnis */
				'bisnis',

				/* Main Category: Sehat */
				'netizen',

			);

foreach ($cat_uri as $c) {
	$route[$c]					= 'category/index';
	$route[$c . '/(.*)']		= 'category/index/$1';
}
// var_dump($route); exit;
$route['category/(.*)']			= 'category/index/$1'; // migrated

$route['tag/(.*)']            	= 'tag/index/$1';
$route['topic/(.*)']            = 'tag/index/$1'; // temporary purpose
// $route['topic/(.*)']            = 'topic/index/$1';
$route['author/(.*)']           = 'author/index/$1';
// Is $route['season'] being used?
// Is $route['related'] being used? -- Deprecated?

$route['view/(.*)'] 			= 'view/index/$1'; // need to migrate
$route['foto/view/(.*)']		= 'view/index/$1'; // migrated
$route['foto']            		= 'photo/index'; // need to migrate
$route['foto/(.*)']				= 'photo/index/$1'; // paging purpose, need to migrate
// Migrate Photo
//$route['foto/view/(.*)']    	= "foto/view/$1";
//$route['foto']   		    	= "foto/index";
//$route['foto/(.*)']			= "foto/index/$1";

$route['watch/(.*)'] 			= 'watch/index/$1'; // need to migrate
$route['video/view/(.*)']		= 'watch/index/$1'; // migrated
$route['video']            		= 'video/index';
$route['video/(.*)']            = 'video/index/$1'; // paging purpose
// Migrate Video
//$route['video/view/(.*)']		= "video/view/$1";

$route['index']            		= 'index/form';
// $route['index/(.*)']            = 'index/form/$1'; // need to check

$route['about-us']				= "page/about_us";
$route['terms-condition']		= "page/terms_conditions"; // need to migrate
$route['terms-conditions']		= "page/terms_conditions";
$route['privacy']				= "page/privacy_policy"; // need to migrate
$route['privacy-policy']		= "page/privacy_policy";
$route['advertise']				= "page/advertise";
$route['management-editorial']	= "page/management_editorial";
$route['media-partner']			= "page/media_partner";

$route['kuis-piala-dunia']		= "page/kuis_piala_dunia";
$route['ayo-netizen']			= "page/ayo_netizen";

// $route['rss']					= '';

/*** [!] API Legacy ***/
$route["api"]["get"]    		= "api/get";

/* End of file routes.php */
/* Location: ./application/config/routes.php */
