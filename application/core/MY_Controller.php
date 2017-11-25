<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct($securePage=false,$redirect=true)
	{
		parent::__construct();
		
		error_reporting(-1);
		ini_set('display_errors', 'On');

		$this->output->cache(0);

		date_default_timezone_set('Asia/Jakarta');

		if($securePage==true) {
			if($this->session->userdata('is_logged_in')==false) {
				if ($redirect)
					redirect('login');
			}
		} else {
			if($this->session->userdata('is_logged_in')==true) {
				redirect('dashboard');
			}	
		}

		$url = $this->uri->segment(1);
		if($url==false) {
			redirect('login');
		}

	}

}
