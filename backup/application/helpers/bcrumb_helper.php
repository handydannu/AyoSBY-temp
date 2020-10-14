<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*** Sample for Reference ***/

/**
 * Breadcrumb Function for BisnisOtomotif.com
 *
 * @author alifiharafi[at]gmail[dot]com
 * @return string
 */
function breadcrumb()
{
	/* Super Object */
	$CI =& get_instance();

	$home 		= "<a href='".site_url()."' title='Home'>Home</a> &raquo; ";
	$news 		= "<a href='".site_url()."latest/news' title='Berita Terbaru'>Berita</a>";
	$cl_used 	= "<a href='".site_url()."latest/carlists/used' title='Mobil Bekas'>Berita</a>";
	$cl_new 	= "<a href='".site_url()."latest/carlists/new' title='Mobil Baru'>Berita</a>";

	switch($CI->uri->segment(1))
	{
		case 'read' :
			$bcrumb = $CI->common_model->get_breadcrumb('news');
			$cat = "<a href='".site_url()."category/".hypen_word('', $bcrumb['result'][0]['cat_name'])."' title='".$bcrumb['result'][0]['cat_name']."'>".$bcrumb['result'][0]['cat_name']."</a>";
			$str = $home.$news." &raquo; ".$cat." &raquo; <span class='here'>".word_limiter($bcrumb['result'][0]['title'], 7)."</span>";
			break;

		case 'category' :
			$cat = $CI->uri->segment(2);
			$str = $home.$news.' &raquo; <span class="here">'.ucrhypen(urldecode($cat)).'</span>';
			break;

		case 'tag' :
			$cat = $CI->uri->segment(2);
			$str = $home.$news.' &raquo; <span class="here">'.ucrhypen(urldecode($cat)).'</span>';
			break;

		case 'latest' :
			if( $CI->uri->segment(2) == 'news' )
			{
				$str = $home . "Berita";
			}
			else // $CI->uri->segment(2) == 'carlists'
			{
				$str = '<span class="here">';
				$str .= $home.'Mobil ';
				$str .= ($CI->uri->segment(3) == 'used') ? 'Bekas' : 'Baru';
				$str .= '</span>';
			}
			break;

		case 'popular' :
			if($CI->uri->segment(2) == 'news')
			{
				$str = $home.'<span class="here">Berita Populer</span>';
			}
			else
			{
				$cdt = ($CI->uri->segment(3) == 'used') ? 'Bekas' : 'Baru';
				$str = $home.'<span class="here">Mobil '.$cdt.' Populer</span>';
			}
			break;

		case 'search' :
			$str = 'Pencarian Berita &raquo; <span class="here">'.word_limiter(urldecode($CI->uri->segment(2)), 7).'</span>';
			break;

		case 'sell' :
			$bcrumb = $CI->common_model->get_breadcrumb('carlists');
			$cdt = ($bcrumb['result'][0]['condition'] == 'used') ? 'Bekas' : 'Baru';
			$str = "<a href='".site_url()."latest/carlists/".hypen_word('', $bcrumb['result'][0]['condition'])."' ";
			$str .= "title='Mobil ".$cdt."'>Mobil ";
			$str .= $cdt."</a>";
			$str = $home.$str.' &raquo; <span class="here">'.word_limiter($bcrumb['result'][0]['title'], 7).'</span>';
			break;

		case 'city';
			$str = $home.'Pencarian Mobil &raquo; <span class="here">'.ucrhypen($CI->uri->segment(2)).'</span>';
			break;

		case 'brand';
			$str = $home.'Pencarian Mobil &raquo; <span class="here">'.ucrhypen($CI->uri->segment(2)).'<span>';
			break;

		case 'classified' :
			// $dfn : condition > city > brand > keyword
			$str 				= $home.'Pencarian Mobil &raquo; ';
			$url_all_results 	= site_url('classified/all/all/all/all/all/all/all/all/none');

			$cdt[0] = ($CI->uri->segment(2) == 'all') ? $url_all_results : site_url("latest/carlists/".hypen_word('', $CI->uri->segment(2)));
			$cdt[1] = ($CI->uri->segment(2) == 'all') ? 'Semua Kondisi' : (($CI->uri->segment(2) == 'used') ? 'Mobil Bekas' : 'Mobil Baru');
			$str .= "<a href='".$cdt[0]."' title='".$cdt[1]."'>".$cdt[1]."</a>";
			$str .= " &raquo; ";
			
			$cty[0] = ($CI->uri->segment(3) == 'all') ? $url_all_results : site_url()."city/".hypen_word('', $CI->uri->segment(3));
			$cty[1] = ($CI->uri->segment(3) == 'all') ? 'Semua Kota' : $CI->uri->segment(3);
			$str .= "<a href='".$cty[0]."' title='".ucfirst($cty[1])."'>".$cty[1]."</a>";
			$str .= " &raquo; ";

			$bnd[0] = ($CI->uri->segment(4) == 'all') ? $url_all_results : site_url()."brand/".hypen_word('', $CI->uri->segment(4));
			$bnd[1] = ($CI->uri->segment(4) == 'all') ? 'Semua Merk' : $CI->uri->segment(4);
			$str .= "<a href='".$bnd[0]."' title='".ucfirst($bnd[1])."'>".$bnd[1]."</a>";

			$kwd = ($CI->uri->segment(10) != 'none') ? "<br />Kata Kunci : <span class='here' style='text-transform: none;'>".word_limiter(urldecode($CI->uri->segment(10)), 7).'</a>' : '';
			$str .= $kwd;
			break;

		case 'leasing' :
			$str = $home."<a href='".site_url()."leasing' title='Leasing'>Leasing</a>";
			if($CI->uri->segment(3))
			{
				$str .= ' &raquo; <span class="here">'.ucrhypen($CI->uri->segment(3)).'</span>';
			}
			break;

		default :
			$str = '';
			break;
	}

	return $str;
}