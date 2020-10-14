<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*** Sample for Reference ***/

/**
 * Image Thumb Function
 * http://jrtashjian.com/2009/02/image-thumbnail-creation-caching-with-codeigniter/
 * 
 * @param $post_type (carlists/news)
 * @param image_path
 * @param $width
 * @param $height
 * @param $class
 * @param $maintain_ratio
 * @param $tag
 * @return string
 */
function image_thumb($post_type, $image_name, $width, $height, $class = '', $tag = TRUE)
{
	/* Super Object */
	$CI =& get_instance();

	// Join path
	$image_path = 'http://localhost/surabaya/ayosurabaya-desktop/media/image/' . $post_type . '/' . $image_name;

	// // Split path
	$path = pathinfo($image_path);
 
 	// Thumbnail path
	$image_thumb = $path['dirname'] . '/thumbs/' . $width . '_' . $height . '_' . $path['basename'];

    if( ! file_exists($image_thumb))
    {
        $CI->load->library('image_lib');

        // Config
        $config['image_library']    = 'gd2';
        $config['source_image']     = $image_path;
        $config['new_image']        = $image_thumb;
        $config['maintain_ratio']   = TRUE;
        $config['width']            = $width;
        $config['height']           = $height;
        // $config['x_axis']           = $width;
        // $config['y_axis']           = $height;

        $CI->image_lib->initialize($config);
        $CI->image_lib->resize();
        $CI->image_lib->clear();
    }

    if( $tag == FALSE )
    {
        return site_url($image_thumb);
    }

    return '<img src="' . site_url($image_thumb) . '" class="' . $class . '" style="width: '. $width .'px; height: '. $height .'px;" />';
}

/**
 * Watermark Function
 * http://ellislab.com/codeigniter/user-guide/libraries/image_lib.html
 * 
 * @param $image_name
 * @return bool
 */
function watermark($image_name)
{
    /* Super Object */
    $CI =& get_instance();

    if( $image_name )
    {
        $config['source_image']     = FCPATH . 'media/image/carlists/' . $image_name['file_name'];
        $config['wm_type']          = 'overlay';
        $config['wm_overlay_path']  = FCPATH . 'media/brand/' . 'logo-watermark.png';
        $config['wm_opacity']       = '10';
        $config['wm_vrt_alignment'] = 'bottom';
        $config['wm_hor_alignment'] = 'right';
        $config['wm_hor_offset']    = '20';
        $config['wm_vrt_offset']    = '20';

        $CI->image_lib->initialize($config);
        
        if( $CI->image_lib->watermark() )
        {
            return TRUE;
        }
    }

    return FALSE;
}

/* End of file image_helper.php */
/* Location: ./application/helpers/image_helper.php */