<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author alifiharafi@gmail.com
 *
 */
class User_agent extends CI_Controller {

	function __construct()
    {
        parent::__construct();

		$this->load->library('user_agent');
    }

	public function index()
	{
		$data['user_agent'] = $this->agent->agent_string();
		
		if ($this->agent->is_referral())
		{
		    $data['user_agent_referral'] = $this->agent->referrer();
		}
		else
		{
			$data['user_agent_referral'] = '';
		}

		$this->load->view('user_agent', $data);
	}

	public function browser()
	{
		$data['user_agent'] = $this->agent->browser();
		
		$this->load->view('user_agent', $data);
	}

	public function version()
	{
		$data['user_agent'] = $this->agent->version();
		
		$this->load->view('user_agent', $data);
	}

	public function mobile()
	{
		$data['user_agent'] = $this->agent->mobile();
		
		$this->load->view('user_agent', $data);
	}

	public function robot()
	{
		$data['user_agent'] = $this->agent->robot();
		
		$this->load->view('user_agent', $data);
	}

	public function platform()
	{
		$data['user_agent'] = $this->agent->platform();
		
		$this->load->view('user_agent', $data);
	}

	public function referrer()
	{
		if ($this->agent->is_referral())
		{
		    $data['user_agent'] = $this->agent->referrer();
		}
		else
		{
			$data['user_agent'] = "You're not reffered from another site.";
		}

		$this->load->view('user_agent', $data);
	}

	public function agent_string()
	{
		$data['user_agent'] = $this->agent->agent_string();

		$this->load->view('user_agent', $data);
	}

	public function accept_lang()
	{
		$data['user_agent'] = $this->agent->accept_lang();
		
		$this->load->view('user_agent', $data);
	}

	public function accept_charset()
	{
		$data['user_agent'] = $this->agent->accept_charset();
		
		$this->load->view('user_agent', $data);
	}

}

/* End of file user_agent.php */
/* Location: ./application/controllers/user_agent.php */