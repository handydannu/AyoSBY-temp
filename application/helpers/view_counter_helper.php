<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*** Sample for Reference ***/

/**
 * View Counter Function
 * 
 * @return bool
 */
function view_counter()
{
	/* Super Object */
	$CI =& get_instance();

	/* Set Timezone */
	if( ! ini_get('date.timezone') )
	{
		date_default_timezone_set('Asia/Jakarta');
	}
	
	$post_type	= $CI->uri->segment(1); // [read|sell]
	$post_id	= $CI->uri->segment(2);
	$ip_address	= $CI->input->ip_address();
	$datetime	= date('Y-m-d H:i:s');
	
	/* Load Model */
	$CI->load->model('public/view_model');
	$CI->view_model->initialize($post_type, $post_id, $ip_address, $datetime);
	
	if( ! $CI->view_model->inspect_view() )
	{
		return $CI->view_model->count_view(); // view counter working and restrict from inside
	}
	
	return FALSE;
}

/* End of file view_counter_helper.php */
/* Location: ./application/helpers/view_counter_helper.php */