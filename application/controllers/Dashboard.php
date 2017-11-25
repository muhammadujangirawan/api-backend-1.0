<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    var $template = 'backend/dashboard';

	public function __construct()
	{
		parent::__construct(true);
		// $this->load->model('model_dashboard');
	}

	public function index()
	{
		$data['title'] = "Dashboard";
		// $data['content'] = "dashboard";
		$this->load->view($this->template,$data);
	}
}
