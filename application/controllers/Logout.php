<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct(true);
	}

	public function index()
	{
        $this->session->sess_destroy();
		redirect('login','refresh');
	}
}

