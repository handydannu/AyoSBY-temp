<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Global Helper Function
 *
 */

/**
 * UCRHypen Function
 * Upper Case Words & Remove Hypen
 *
 * @author alifiharafi[at]gmail[dot]com
 * @param $words
 * @return string
 */
function ucrhypen($words)
{
	return ucwords(str_replace("-", " ", $words));
}

/**
 * HTML Entities UTF-8 Function (Decode & Encode)
 *
 * @author alifiharafi[at]gmail[dot]com
 * @param $input
 * @return string
 */
function he8($input, $do = '')
{
	if($do == 'decode'){
		return html_entity_decode($input, ENT_QUOTES, "UTF-8");
	}

	return htmlentities($input, ENT_QUOTES, "UTF-8");

}

/**
 * RSS Character Escape
 *
 * @author alifiharafi[at]gmail[dot]com
 * @param $input
 * @return String
 * @see Controller RSS
 */
function rss_char_escape($input)
{
	$str = str_replace("&ldquo;", "&quot;",
	    str_replace("&rdquo;", "&quot;",
	    	$input
	    )
	);

	return $str;

}

/**
 * Limit Words
 *
 * @author VisioN (https://stackoverflow.com/a/965269/9796214)
 * @param $text
 * @param $limit
 * @return String
 */
function limit_words($text, $limit)
{
  	if (str_word_count($text, 0) > $limit) {
    	$words = str_word_count($text, 2);
    	$pos = array_keys($words);
    	$text = substr($text, 0, $pos[$limit]) . '&hellip;';
  	}

  	return $text;
}

/**
 * News Filter Function [SAMPLE]
 *
 * @author alifiharafi[at]gmail[dot]com (http://stackoverflow.com/questions/11974008/alternative-to-mb-convert-encoding-with-html-entities-charset)
 * @param $str
 * @param $he8
 * @return string
 */
function news_filter($str, $he8 = TRUE)
{
	if($he8 === TRUE)
	{
		$str = mb_convert_encoding($str, "HTML-ENTITIES", "UTF-8"); // convert to UTF-8
	}

	$tags 	= "<p><strong><em><b><i><u><span><ol><ul><li><a><br><sub><sup><font><table><tr><th><td>"; // list of allowed tags

	return strip_tags($str, $tags);
}

/**
 * Get Limit Number [SAMPLE]
 *
 * Get Maximum Limit of Number for Polling Chart
 * @author alifiharafi[at]gmail[dot]com
 * @param $num
 * @return Integer
 * @see single-news.php Views
 */
function get_limit_number($num)
{
	$len = strlen($num);
	$val = preg_replace('/^(.*?)(.{' . ($len - 1) . '})$/', '$1.$2', $num);
	$val = str_pad(ceil($val), $len, '0', STR_PAD_RIGHT);

	if(intval($val) < $num)
	{
		$val = str_pad($val, ($len + 1), '0', STR_PAD_RIGHT);
	}

	return intval($val);
}

/**
 * ID (Indonesian) Time Function
 *
 * @author alifiharafi[at]gmail[dot]com
 * @param $time
 * @return string
 */
function id_time($time = '', $long_format = false)
{
	date_default_timezone_set('Asia/Jakarta');
	// MySQL Format : YYYY-MM-DD HH:MM:SS

	$time = str_replace('-', '', $time);
	$time = str_replace(':', '', $time);
	$time = str_replace(' ', '', $time);

	$get_D = date("w", // Format "D, j M Y - H:i:s"
			mktime(
					substr($time, 8, 2),
					substr($time, 10, 2),
					substr($time, 12, 2),
					substr($time, 4, 2), // month
					substr($time, 6, 2), // date
					substr($time, 0, 4) // year
			)
	);

	$get_d 	= substr($time, 6, 2);
	$get_m 	= substr($time, 4, 2);
	$get_y	= substr($time, 0, 4);

	$get_H	= substr($time, 8, 2);
	$get_i	= substr($time, 10, 2);
	$get_s	= substr($time, 12, 2); // removed

	$m = array('', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
	$D = array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');

	if($long_format == true) {
		return $D[$get_D].", ".$get_d." ".$m[ltrim($get_m, "0")]." ".$get_y." ".$get_H.":".$get_i;
	}

	return $D[$get_D].", ".$get_d." ".$m[ltrim($get_m, "0")]." ".$get_y;
}

function waktu_lalu($timestamp)
{
	date_default_timezone_set('Asia/Jakarta');
    $selisih = time() - strtotime($timestamp) ;

    $detik = $selisih ;
    $menit = round($selisih / 60 );
    $jam = round($selisih / 3600 );
    $hari = round($selisih / 86400 );
    $minggu = round($selisih / 604800 );
    $bulan = round($selisih / 2419200 );
    $tahun = round($selisih / 29030400 );

    if ($detik <= 60) {
        $waktu = $detik.' detik yang';
    } else if ($menit <= 60) {
        $waktu = $menit.' menit yang';
    } else if ($jam <= 24) {
        $waktu = $jam.' jam yang';
    } else if ($hari <= 7) {
        $waktu = $hari.' hari yang lalu';
    } else if ($minggu <= 4) {
        $waktu = $minggu.' minggu yang';
    } else if ($bulan <= 12) {
        $waktu = $bulan.' bulan yang';
    } else {
        $waktu = $tahun.' tahun yang';
    }
    
    return $waktu;
}
/**
 * Content Time Function
 *
 * @author alifiharafi[at]gmail[dot]com
 * @param $time
 * @return string
 */
function content_time($date)
{
	$date = preg_match("/(\d{4})-(\d{2})-(\d{2})/", $date, $t);

	if (!$date) {
		return false;
	}

	$data['year']	= $t[1];
	$data['month']	= $t[2];
	$data['day']	= $t[3];

	return $data;
}

/**
 * RSS Feed Time Function
 *
 * @author alifiharafi[at]gmail[dot]com
 * @param $time
 * @return string
 */
function rss_time($time = '')
{
	date_default_timezone_set('Asia/Jakarta');
	// MySQL Format : YYYY-MM-DD HH:MM:SS

	$time = str_replace('-', '', $time);
	$time = str_replace(':', '', $time);
	$time = str_replace(' ', '', $time);

	$get_D = date("w", // Format "D, j M Y - H:i:s"
			mktime(
					substr($time, 8, 2),
					substr($time, 10, 2),
					substr($time, 12, 2),
					substr($time, 4, 2), // month
					substr($time, 6, 2), // date
					substr($time, 0, 4) // year
			)
	);

	$get_d 	= substr($time, 6, 2);
	$get_m 	= substr($time, 4, 2);
	$get_y	= substr($time, 0, 4);

	$m = array('', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Agu', 'Sep', 'Oct', 'Nov', 'Dec');
	$D = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');

	// Mon, 18 Mar 2013 13:27:15 +0000
	return $D[$get_D] . ", " . $get_d . " " . $m[ltrim($get_m, "0")] . " " . $get_y . " " . date("H:i:s") . " +0700";
}

/**
 * Sort Array by DateTime Function
 *
 * We need to define field: `post_date_created`
 * Operator '<' for DESC
 * Operator '>' for ASC
 *
 * @author KARASZI István (https://stackoverflow.com/a/6401744, https://stackoverflow.com/a/40462935)
 * @param $a
 * @param $b
 * @return Timestamp
 */
function sort_array_by_datetime($a, $b)
{
	date_default_timezone_set('Asia/Jakarta');
    return strtotime($a["post_date_created"]) < strtotime($b["post_date_created"]); // Default operator: '-'
}

/**
 * Rupiah Format Function [SAMPLE]
 *
 * @author alifiharafi[at]gmail[dot]com
 * @param $number
 * @return string
 */
function rupiah_format($number)
{
	if($number > 0)
	{
		return "Rp. ".number_format($number, 0, ',', '.');
	}
	return "CALL";
}

/**
 * Salted sha1 Function
 *
 * @author alifiharafi[at]gmail[dot]com
 * @param $str
 * @return string
 */
function salted_sha1($str){
	$salt = '2ab08af6cb9a8a60225c5bcc7905168d08fb7b03'; //developer's email
	return sha1($str.$salt);
}

/**
 * Is Really Integer Function
 *
 * [!] Limited functionality : Maximum 10 Character!
 * @author alifiharafi[at]gmail[dot]com
 * @param $v
 * @return bool
 */
function is_really_int($v) {
	$i = intval($v);
	if ($i == $v)
	{
		return true;
	}
	return false;
}

/**
 * Media URL Function [SAMPLE]
 *
 * @author alifiharafi[at]gmail[dot]com
 * @param $post_type (carlists/news)
 * @param $image_name
 * @return string
 */
function media_url($post_type, $image_name)
{
	$media_path = "media/image/".$post_type."/".$image_name;
	return site_url($media_path);
}

/**
 * Title SEO Function
 *
 * @author hvishnu999[at]gmail[dot]com (http://php.net/manual/en/function.preg-replace.php)
 * @param $post_title
 * @return string
 */
function title_seo($post_title)
{
	$str = preg_replace('/\%/', ' persen', he8($post_title, 'decode'));
	$str = preg_replace('/\$/', ' dollar ', $str);
	$str = preg_replace('/\&/', ' dan ', $str);
	$str = preg_replace('/\s[\s]+/', '-', $str);    // Strip off multiple spaces
	$str = preg_replace('/[\s\W]+/', '-', $str);    // Strip off spaces and non-alpha-numeric
	$str = preg_replace('/^[\-]+/', '', $str); // Strip off the starting hyphens
	$str = preg_replace('/[\-]+$/', '', $str); // Strip off the ending hyphens
	$str = strtolower($str);

	return $str;
}

/**
 * Hypern Word Function
 *
 * @author alifiharafi[at]gmail[dot]com
 * @param $string
 * @param $words
 * @return string
 */
function hypen_word($string = '', $words)
{
	return $string.str_replace(' ', '-', strtolower($words));
}


/**
 * Site Meta Dynamic Function
 *
 * @author alifiharafi[at]gmail[dot]com
 * @return string
 */
function site_meta_dynamic()
{
	$CI =& get_instance();

	$path_base 	= $CI->config->item('base_url') . 'assets/img/';
	$path_url 	= $path_base . 'ayojakarta-logo.png?w=400';
	$logo_desc 	= '';
	$site_desc 	= $CI->config->item('page_meta')['title'];

	switch($CI->uri->segment(1)) {
		// case 'news' :
// 			case 'nasional' :
// 			case 'internasional' :
// 			case 'bandung' :
// 			case 'bisnis' :
// 			case 'jabar' :
// 			case 'info-grafis' :
// 			case 'ramadan' :
// 			case 'kodim-0702-purbalingga' :
// 			case 'kodim-0704-banjarnegara' :
// 				$path_url 	= $path_base . 'logo/ayo-news.png';
// 				$logo_desc 	= 'Ayo News - ';
// 				$site_desc 	= $CI->config->item('page_meta')['site_name'];
// 			break;
// 		case 'komunitas' :
// 			case 'event' :
// 			case 'profil' :
// 				$path_url 	= $path_base . 'logo/ayo-komunitas.png';
// 				$logo_desc 	= 'Ayo Komunitas - ';
// 				$site_desc 	= $CI->config->item('page_meta')['site_name'];
// 			break;
// 		case 'persib' :
// 			case 'maung-bandung' :
// 			case 'pernak-pernik' :
// 			case 'bobotoh' :
// 				$path_url 	= $path_base . 'logo/ayo-persib.png';
// 				$logo_desc 	= 'Ayo Persib - ';
// 				$site_desc 	= $CI->config->item('page_meta')['site_name'];
// 			break;
// 		case 'unik' :
// 				$path_url 	= $path_base . 'logo/ayo-unik.png';
// 				$logo_desc 	= 'Ayo Unik - ';
// 				$site_desc 	= $CI->config->item('page_meta')['site_name'];
// 			break;
// 		case 'olahraga' :
// 			case 'piala-dunia-2018' :
// 			case 'olahraga' :
// 				$path_url 	= $path_base . 'logo/ayo-olahraga.png';
// 				$logo_desc 	= 'Ayo Olahraga - ';
// 				$site_desc 	= $CI->config->item('page_meta')['site_name'];
// 			break;
// 		case 'sehat' :
// 				$path_url 	= $path_base . 'logo/ayo-sehat.png';
// 				$logo_desc 	= 'Ayo Sehat - ';
// 				$site_desc 	= $CI->config->item('page_meta')['site_name'];
// 			break;
// 		case 'wisata' :
// 			case 'kuliner' :
// 			case 'destinasi' :
// 			case 'belanja' :
// 			case 'fashion' :
// 			case 'hotel' :
// 				$path_url 	= $path_base . 'logo/ayo-wisata.png';
// 				$logo_desc 	= 'Ayo Wisata - ';
// 				$site_desc 	= $CI->config->item('page_meta')['site_name'];
// 			break;
// 		case 'foto' :
// 				$path_url 	= $path_base . 'logo/ayo-foto.png';
// 				$logo_desc 	= 'Ayo Foto - ';
// 				$site_desc 	= $CI->config->item('page_meta')['site_name'];
// 			break;
// 		case 'video' :
// 				$path_url 	= $path_base . 'logo/ayo-video.png';
// 				$logo_desc 	= 'Ayo Video - ';
// 				$site_desc 	= $CI->config->item('page_meta')['site_name'];
// 			break;

		case 'index' :
		default:
			break;
	}

	return array(
				'logo' => '<img src="' . $path_url . '" alt="Logo - ' . $logo_desc . 'AyoBandung.com" class="img-responsive" />',
				'desc' => $site_desc
			);
}

/**
 * Metadata SEO Function
 *
 * @author alifiharafi[at]gmail[dot]com
 * @return String
 * @see Get Metadata SEO on Common Model
 */
function metadata_seo()
{
	/* Super Object */
	$CI =& get_instance();
	$CI->load->model('common_model');
	$CI->load->model('article_model'); // [!] bad practice of reuse model, used too on meta_ogp and read controllers

	$title 		= ''; // initialize, let it empty
	$desc 		= $CI->config->item('page_meta')['site_name'] . ' ';
	$keyword 	= $CI->config->item('page_meta')['keyword']; // default set, such as home for page
	$canonical 	= ''; // initialize, let it empty

	switch( $CI->uri->segment(1) )
	{
		case '' : // Default set as 'Home'
			$title 		= $CI->config->item('page_meta')['title'] . ' - '
						. $CI->config->item('page_meta')['site_name'];
			$desc		.= $CI->config->item('page_meta')['desc'];
			$canonical 	= set_tag_canonical(site_url());
			break;

		case 'read' :
		case 'view' :
			$post_type 	= $CI->uri->segment(1);
			$post_id	= $CI->uri->segment(5);
			$keyword 	= '';
			$canonical 	= ''; // TO DO

			$q_keyword 	= $CI->article_model->get_keyword_by_id($post_id); // posts table contains: article and photo type
			if($q_keyword->post_keyword != '' || $q_keyword->post_keyword !== false) {
				$keyword = $q_keyword->post_keyword;
			}
			unset($q_keyword);

			$data = $CI->common_model->get_metadata_seo($post_type, $post_id);

			if( $data !== false )
			{
				$title 	= $data->post_title;
				$desc 	.= limit_words(strip_tags($data->post_summary), 20);
			}
			else
			{
				$title 	= '';
				$desc 	= '';
			}
			break;

		case 'watch' :
			$keyword 	= $CI->video_model->get_keyword_by_id($CI->uri->segment(5)); // contains video_id. posts table doesn't contains: video
			$canonical 	= ''; // TO DO

			if($keyword->keyword != '' || $keyword->keyword !== false) {
				$keyword = $keyword->keyword;
			}

			$data = $CI->common_model->get_metadata_seo($CI->uri->segment(1), $CI->uri->segment(5)); // contains post_type, video_id
			if( $data !== false )
			{
				$title 	= $data->title;
				$desc 	.= limit_words(strip_tags($data->summary), 20);
			}
			else
			{
				$title 	= '';
				$desc 	= '';
			}
			break;

		/*** Categories -- Temp: Keyword set to default ***/
		/* News */
		case 'berita-bogor' :
			case 'berita-pantura' :
			case 'explore-bogor' :
			case 'bisnis-bogor' :
			case 'kampus-bogor' :
			case 'ikon-bogor' :
			case 'regional' :


		/* Komunitas */
		case 'umum' :
		case 'regional' :
			case 'nasional' :
			case 'internasional' :
		/* Persib */
		case 'persib' :
			case 'maung-bandung' :
			case 'pernak-pernik' :
			case 'bobotoh' :
		/* Unik */
		case 'explore' :
		/* Olahraga */
		case 'olahraga' :
			case 'piala-dunia-2018' :
			case 'olahraga' :
		case 'sehat' :
		case 'wisata' :
			case 'kuliner' :
			case 'destinasi' :
			case 'belanja' :
			case 'fashion' :
			case 'hotel' :
		case 'netizen' :

			$title 		= 'Halaman Kategori ' . ucrhypen($CI->uri->segment(1));
			$desc		.= $title;
			// $keyword 	= '';
			$canonical 	= set_tag_canonical(site_url($CI->uri->segment(1)));
			break;

		case 'tag' :
			$title 		= 'Halaman Tag ' . ucrhypen($CI->uri->segment(2));
			$desc		.= $title;
			// $keyword 	= '';
			$canonical 	= set_tag_canonical(site_url('tag/' . $CI->uri->segment(2)));
			break;

		case 'topic' :
			$title 		= 'Halaman Topik ' . ucrhypen($CI->uri->segment(2));
			$desc		.= $title;
			// $keyword 	= '';
			$canonical 	= set_tag_canonical(site_url('topic/' . $CI->uri->segment(2)));
			break;

		case 'author' :
			$title 		= 'Halaman Penulis ' . ucrhypen($CI->uri->segment(2));
			$desc		.= $title;
			// $keyword 	= '';
			$canonical 	= set_tag_canonical(site_url('author/' . $CI->uri->segment(2)));
			break;

		case 'foto' :
			$title 		= 'Halaman Foto';
			$desc		.= $title;
			// $keyword 	= '';
			$canonical 	= set_tag_canonical(site_url($CI->uri->segment(1)));
			break;

		case 'video' :
			$title 		= 'Halaman Video';
			$desc		.= $title;
			// $keyword 	= '';
			$canonical 	= set_tag_canonical(site_url($CI->uri->segment(1)));
			break;

		case 'index' :
			$title 		= 'Halaman Index';
			$desc		.= $title;
			// $keyword 	= '';
			$canonical 	= set_tag_canonical(site_url($CI->uri->segment(1)));
			break;

		/*** Static Page ***/
		case 'about-us' :
			$title 		= 'Halaman About Us';
			$desc 		.= $title;
			// $keyword 	= '';
			$canonical 	= set_tag_canonical(site_url($CI->uri->segment(1)));
			break;

		case 'management-editorial' :
			$title 		= 'Halaman Management & Editorial';
			$desc 		.= $title;
			// $keyword 	= '';
			$canonical 	= set_tag_canonical(site_url($CI->uri->segment(1)));
			break;

		case 'terms-conditions' :
			$title 		= 'Halaman Terms & Conditions';
			$desc 		.= $title;
			// $keyword 	= '';
			$canonical 	= set_tag_canonical(site_url($CI->uri->segment(1)));
			break;

		case 'privacy-policy' :
			$title 		= 'Halaman Privacy Policy';
			$desc 		.= $title;
			// $keyword 	= '';
			$canonical 	= set_tag_canonical(site_url($CI->uri->segment(1)));
			break;

		case 'advertise' :
			$title 		= 'Halaman Advertise';
			$desc 		.= $title;
			// $keyword 	= '';
			$canonical 	= set_tag_canonical(site_url($CI->uri->segment(1)));
			break;

		case 'media-partner' :
			$title 		= 'Halaman Media Partner';
			$desc 		.= $title;
			// $keyword 	= '';
			$canonical 	= set_tag_canonical(site_url($CI->uri->segment(1)));
			break;

		case 'kuis-piala-dunia' :
			$title 		= 'Halaman Kuis Tebak Juara Piala Dunia 2018';
			$desc 		.= $title;
			// $keyword 	= '';
			$canonical 	= set_tag_canonical(site_url($CI->uri->segment(1)));
			break;

		case 'ayo-netizen' :
			$title 		= 'Halaman Ayo Menulis';
			$desc 		.= $title;
			// $keyword 	= '';
			$canonical 	= set_tag_canonical(site_url($CI->uri->segment(1)));
			break;


		default :
			$title 		= 'Default Title';
			$desc		.= $CI->config->item('page_meta')['desc'];
			// $keyword 	= '';
			break;
	}

	/* The reason why extended title removed because Alexa recommends character for Title less than 65 */
	// $title .= ' - ' . $CI->config->item('page_meta')['site_name']; // - AyoBandung.com

	return array(
					'title' 	=> $title,
					'desc' 		=> $desc,
					'keyword'	=> $keyword,
					'canonical'	=> $canonical
				); // maybe need limit_words() on desc
}

/**
 * Meta OGP Function
 *
 * @author alifiharafi[at]gmail[dot]com
 * @return string
 * @see Set OGP Meta
 */
function meta_ogp()
{
	/* Super Object */
	$CI =& get_instance();

	// error_reporting(E_ALL ^ E_NOTICE);

	switch( $CI->uri->segment(1) )
	{
		case 'read' :
		case 'view' :
		case 'watch' :
			if($CI->uri->segment(1) == 'read') {
				$CI->load->model('article_model');
				$data = $CI->article_model->get_by_id( $CI->uri->segment(5) ); // TO DO: optimize meta query with field selection
			} else if($CI->uri->segment(1) == 'view') {
		    	$CI->load->model('photo_model');
		    	// TO DO: optimize meta query with field selection
		    	// Query Photo by ID
		    	// Array structure contains multiple dimensions, just take one (index [0]) of dimension.
				$tmp_data = $CI->photo_model->get_by_id( $CI->uri->segment(5) )[0];
		    	// Uniform the array structure with additional dimension of array named 'post'.
				$data['post'] = $tmp_data;
				unset($tmp_data);
		    	// _d($tmp_data); exit;
			} else if($CI->uri->segment(1) == 'watch') {
				$CI->load->model('video_model');
		    	// TO DO: optimize meta query with field selection
		    	// Query Video by ID
				// Array structure contains multiple dimensions, just take one (index [0]) of dimension.
				$tmp_data = $CI->video_model->get_by_id( $CI->uri->segment(5) )[0];
				// _d($tmp_data); exit;
				// Change field of dimension name: date -> post_date_created
				$tmp_data['post_date_created'] = $tmp_data['date'];
				unset($tmp_data['date']);
				// Change field of dimension name : title -> post_title
				$tmp_data['post_title'] = $tmp_data['title'];
				unset($tmp_data['title']);
				// Change field of dimension name : summary -> post_summary
				$tmp_data['post_summary'] = $tmp_data['summary'];
				unset($tmp_data['summary']);
		    	// Uniform the array structure with additional dimension of array named 'post'.
				$data['post'] = $tmp_data;
				unset($tmp_data);
				// _d($data);
			} else { // Just break it! escape to safe condition.
				break;
			}
			// _d($data);

		    $dc = content_time($data['post']['post_date_created']);
		    // $url = site_url('read') . '/' . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $data['post']['post_id'] . '/' . /*$data['post']['category_id'] . '/' .*/ $data['post']['slug'];
		    if($CI->uri->segment(1) == 'watch') { // watch (video)
		    	$url_img = 'http://i.ytimg.com/vi/' . $data['post']['video'] . '/hqdefault.jpg';
		    } else { // read & view
		    	$url_img = $CI->config->item('images_articles_uri') . $dc['year'] . '/' . $dc['month'] . '/' . $dc['day'] . '/' . $data['post']['post_id'] . '/' . $data['post']['post_image_content'];
		    }

			$meta = array(
						'title' => $data['post']['post_title'] . ' - ' . $CI->config->item('page_meta')['site_name'],
						'type' 	=> 'article',
						// 'url' 	=> $url,
						'url'	=> current_url(),
						'image' => $url_img,
						'desc' 	=> limit_words(
										preg_replace(
											'/&#?[a-z0-9]{2,8};/i', // i dunno exactly the purpose of this, taken form NewBO Engine
											'',
											strip_tags($data['post']['post_summary'])
										),
									25)
					);
			break;

		default : // fail condition will do nothing
			$data = '';
			$meta = '';
			break;
	}

	if($data != '' && $meta != '')
	{
		/** S: The OGP Facebook */
		echo '

		<meta property="og:title" content="'.$meta['title'].'" />
		<meta property="og:type" content="'.$meta['type'].'" />
		<meta property="og:url" content="'.$meta['url'].'" />
		<meta property="og:image" content="'.$meta['image'].'" />
        <meta property="og:site_name" content="'.$CI->config->item('page_meta')['site_name'].'" />
		<meta property="og:description" content="'.$meta['desc'].'" />

		';	/** E: The OGP Facebook */
	}
}

/**
 * cURL File Get Contents
 *
 * @author Nahuel Ianni (https://stackoverflow.com/a/965269/9796214)
 * @param $url
 * @return String
 */
function curl_file_get_contents($url)
{
	$curl = curl_init();
	$userAgent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)';

	curl_setopt($curl, CURLOPT_URL,$url); //The URL to fetch. This can also be set when initializing a session with curl_init().
	curl_setopt($curl, CURLOPT_RETURNTRANSFER,TRUE); //TRUE to return the transfer as a string of the return value of curl_exec() instead of outputting it out directly.
	curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5); //The number of seconds to wait while trying to connect.

	curl_setopt($curl, CURLOPT_USERAGENT, $userAgent); //The contents of the "User-Agent: " header to be used in a HTTP request.
	curl_setopt($curl, CURLOPT_FAILONERROR, TRUE); //To fail silently if the HTTP code returned is greater than or equal to 400.
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE); //To follow any "Location: " header that the server sends as part of the HTTP header.
	curl_setopt($curl, CURLOPT_AUTOREFERER, TRUE); //To automatically set the Referer: field in requests where it follows a Location: redirect.
	curl_setopt($curl, CURLOPT_TIMEOUT, 240); //The maximum number of seconds to allow cURL functions to execute.

	$contents = curl_exec($curl);
	curl_close($curl);

	return $contents;
}

/**
 * Get Google Analytics Function
 *
 * @author alifiharafi[at]gmail[dot]com
 */
function get_google_analytics()
{
	$CI =& get_instance();
 /**S: Google Analytics -->*/
	echo "
		<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			  ga('create', '" . $CI->config->item('google_ua') . "', 'auto');
			  ga('send', 'pageview');
		</script>

	";/**E: Google Analytics -->*/
}

/**
 * Get StatCounter Function
 *
 * @author alifiharafi[at]gmail[dot]com
 */
function get_statcounter() // for ayobandung.com
{
	$CI =& get_instance();
	/** S: StatCounter */
    echo "
    	<script type=\"text/javascript\">
		    //<![CDATA[
		    var sc_project=10736675;
		    var sc_invisible=1;
		    var sc_security=\"a04669df\";
		    var scJsHost = ((\"https:\" == document.location.protocol) ?
		    \"https://secure.\" : \"http://www.\");
		    document.write(\"<sc\"+\"ript type='text/javascript' src='\" +
		    scJsHost+
		    \"statcounter.com/counter/counter_xhtml.js'></\"+\"script>\");
		    //]]>
		</script>
		<noscript><div class=\"statcounter\"><a title=\"web analytics\" href=\"http://statcounter.com/\" class=\"statcounter\"><img class=\"statcounter\" src=\"http://c.statcounter.com/10736675/0/a04669df/1/\" alt=\"web analytics\" /></a></div></noscript>

	";/** E: StatCounter */
}

/**
 * Get StatCounter Function
 *
 * @author alifiharafi[at]gmail[dot]com
 */
function get_alexa() // for ayobandung.com
{
	$CI =& get_instance();
	/** S: Alexa Certify Javascript*/
	echo "
	    <script type=\"text/javascript\">
	    _atrk_opts = { atrk_acct:\"ob+Um1a4KM+24B\", domain:\"ayobandung.com\", dynamic: true};
	    (function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = \"https://d31qbv1cthcecs.cloudfront.net/atrk.js\"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
	    </script>
	    <noscript><img src=\"https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=ob+Um1a4KM+24B\" style=\"display:none\" height=\"1\" width=\"1\" alt=\"\" /></noscript>

    ";
		/** E: Alexa Certify Javascript*/
}

/**
 * Set Canonical Tag Function
 *
 * @param $url
 * @author alifiharafi[at]gmail[dot]com
 */
function set_tag_canonical($url = '')
{
	$tag = "<link rel=\"canonical\" href=\"{$url}\" />";
	return $tag;
}

/* End of file global_helper.php */
/* Location: ./application/helpers/global_helper.php */
