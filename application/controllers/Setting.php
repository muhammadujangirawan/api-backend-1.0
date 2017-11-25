<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends MY_Controller {

    var $template = 'backend/dashboard';

	public function __construct()
	{
		parent::__construct(true);
		// $this->load->model('model_dashboard');
	}

	public function user()
	{
		$data['title'] = "Dashboard";
		$data['content'] = "backend/user";
		$this->load->view($this->template,$data);
	}
}
