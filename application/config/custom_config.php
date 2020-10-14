<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Site Network
$config['site_network']		= 'http://ayomedianetwork.com/'; // need to define
// $config['site_mobile']		= 'http://m.ayosemarangdev.com/'; // need to define
$config['site_mobile']		= 'https://m.ayosurabaya.com/'; // need to define

// Regional Name
$config['reg_name'] 		= 'surabaya'; // need to define
$config['reg_name_upper'] 	= 'Surabaya'; // need to define

// General URL Path
$config['root_url']	= "https://www.ayosurabaya.com/"; // need to check
// $config['root_url']	.= "://".$_SERVER['HTTP_HOST'];
// $config['root_url']	.= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);

// Data Path
$config['root_dir'] = getenv("DOCUMENT_ROOT") . "/";
$config['data_dir']	= $config['root_dir'] . "assets/img/";

// Regional Path
$config['reg_dir']	= $config['data_dir'] . "data-regional/";
$config['reg_dir']	= $config['reg_dir'] . $config['reg_name'] . "/";

// Image Path
$config['images_dir']		= $config['reg_dir'] . "images/";
$config['images_path']      = $config['reg_dir'] . "images"; // without trailing slash
$config['posts_images_dir'] = $config['images_dir'] . "posts/";
$config['tmp_images_dir']   = $config['reg_dir'] . "tmp/";

// XML Path
$config['xml_data']	= $config['reg_dir'] . "xml/";

// Assets Path
$config['assets_uri']			= $config['root_url'] . "assets/";
$config['images_assets_uri']	= $config['root_url'] . "assets/images/";

// Images URI
//$config['images_reg_uri']		= $config['root_url'] . "assets/img/surabaya/images/";
$config['images_reg_uri']		= $config['root_url'] . "images-" . $config['reg_name'] . "/";
$config['images_post_uri']		= $config['images_reg_uri'] . "post/";
$config['images_articles_uri']	= $config['images_post_uri'] . 'articles/';
$config['images_photos_uri']	= $config['images_post_uri'] . 'photos/';
$config['images_videos_uri']	= $config['images_post_uri'] . 'videos/';



// Set Template
$config['template_name'] 	= 'metamorph/'; // with trailing slash
$config['page_limit']		= 20; // maximum number of result from archive query
$config['index_limit']		= 100; // maximum number of result from index query

// Page Meta
$config['page_meta']['site_name'] 			= 'AyoSurabaya.com';
$config['page_meta']['site_author']			= 'Ayo Media Network';
$config['page_meta']['title'] 				= 'Semua Tentang Surabaya';
$config['page_meta']['desc'] 				= 'Berita terkini seputar Surabaya, Jawa Timur';
$config['page_meta']['keyword'] 			= 'surabaya, berita surabaya, seputar surabaya, event surabaya, komunitas surabaya, wisata surabaya, foto surabaya, video surabaya, Persebaya, bonek surabaya, kuliner surabaya, destinasi surabaya, belanja surabaya, bonek, Jawa Timur surabaya, berita Jawa Timur surabaya, seputar Jawa Timur surabaya, ayosurabaya, ayosurabaya.com';
$config['page_meta']['copyright']			= $config['page_meta']['site_author'];

$config['page_meta']['google_ver']			= 'hWiVwsb8q_Qw3uvkpsEprVF8Jb5gySoGureOzx1pWfU';
$config['page_meta']['bing_ver']			= 'E9DCB79216F17FF78422AD488E8309E3';
$config['page_meta']['alexa_ver']			= 'TRZPS1kbNABCD3cU6VdQHbE20P8';
$config['page_meta']['fb_app_id']			= '176650753609026';
$config['page_meta']['fb_page_name']		= '';

$config['social_acc']['facebook']			= 'ayosurabayacom';
$config['social_acc']['twitter']			= 'ayosurabayacom';
$config['social_acc']['instagram']			= 'ayosurabaya_official';

$config['social_url']['facebook']			= 'https://www.facebook.com/' . $config['social_acc']['facebook'] . '/';
$config['social_url']['twitter']			= 'https://twitter.com/' . $config['social_acc']['twitter'];
$config['social_url']['instagram']			= 'https://www.instagram.com/' . $config['social_acc']['instagram'];
$config['social_url']['youtube']			= 'https://www.youtube.com/channel/UCPQMqqU-H6b_6hCEaREqvmw';

$config['feed_url']['rss']					= $config['root_url'] . 'rss';

$config['footer']['about_title']			= '<span class="ayo-orange">Ayo</span>Surabaya.com - <span class="ayo-orange">Ayo</span> Media Network';
$config['footer']['about_content']			= 'Mencoba memenuhi kebutuhan dan kerinduan akan kabar dan cerita-cerita tempat bernaung inilah <strong><span class="ayo-orange">Ayo</span> Media Network</strong> hadir dengan menawarkan konten situs berita bernuansa inspiratif, komunikatif dan semangat positif, yang bisa Anda akses kapanpun dan di manapun. <strong><span class="ayo-orange">Ayo</span> Media Network</strong> tak hanya menjadi tempat mencari berita, tetapi juga rumah besar bagi interaksi dan informasi komunitas Jawa Timur.';
$config['footer']['office_address'] 		= 'Jl. Terusan Halimun No.50, Lkr. Sel., Lengkong, Kota Bandung, Jawa Barat 40264';
$config['footer']['office_phone'] 			= '(024) 3514115';
$config['footer']['office_email'] 			= 'redaksi@ayobandung.com';

// Post Type Name
$config['post_type']['article']				= 'article';
$config['post_type']['photo']				= 'photos';
$config['post_type']['video']				= 'video';



// UA Google Analytics
$config['google_ua'] 			= 'UA-142293214-1';


// Development Settings
$config['settings']['mobile_migrated'] = TRUE; // Set TRUE to redirect New URL to Old Mobile Front-End

/* End of file custom_config.php */
/* Location: ./application/config/custom_config.php */